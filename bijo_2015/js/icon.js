
function TouchEvent(target, startDraw, extendDraw, endDraw) {
// an object to keep track of the last x/y positions of the mouse/pointer/touch point
// used to reject redundant moves and as a flag to determine if we're in the "down" state
var lastXYById = {};
 
 
// Opera doesn't have Object.keys so we use this wrapper
function NumberOfKeys(theObject) {
	if (Object.keys)
		return Object.keys(theObject).length;
	var n = 0;
	for (var key in theObject)
		++n;
	
	return n;
}
 
// IE10's implementation in the Windows Developer Preview requires doing all of this
// Not all of these methods remain in the Windows Consumer Preview, hence the tests for method existence.
function PreventDefaultManipulationAndMouseEvent(evtObj) {
	if (evtObj.preventDefault)
		evtObj.preventDefault();
	
	if (evtObj.preventManipulation)
		evtObj.preventManipulation();
	
	if (evtObj.preventMouseEvent)
		evtObj.preventMouseEvent();
}
 
// we send target-relative coordinates to the draw functions
// this calculates the delta needed to convert pageX/Y to offsetX/Y because offsetX/Y don't exist in the TouchEvent object or in Firefox's MouseEvent object
function ComputeDocumentToElementDelta(theElement) {
	var elementLeft = 0;
	var elementTop = 0;
	
	for (var offsetElement = theElement; offsetElement != null; offsetElement = offsetElement.offsetParent) {
		// the following is a major hack for versions of IE less than 8 to avoid an apparent problem on the IEBlog with double-counting the offsets
		// this may not be a general solution to IE7's problem with offsetLeft/offsetParent
		if (navigator.userAgent.match(/\bMSIE\b/) && (!document.documentMode || document.documentMode < 8) && offsetElement.currentStyle.position == "relative" && offsetElement.offsetParent && offsetElement.offsetParent.currentStyle.position == "relative" && offsetElement.offsetLeft == offsetElement.offsetParent.offsetLeft) {
			// add only the top
			elementTop += offsetElement.offsetTop;
		}else {
			elementLeft += offsetElement.offsetLeft;
			elementTop += offsetElement.offsetTop;
		}
	}
	
	return { x: elementLeft, y: elementTop };
}

// cache the delta from the document to our event target (reinitialized each mousedown/MSPointerDown/touchstart)
var documentToTargetDelta = ComputeDocumentToElementDelta(target);


// function needed because IE versions before 9 did not define pageX/Y in the MouseEvent object
function EnsurePageXY(eventObj) {
	if (typeof eventObj.pageX == 'undefined') {
		// initialize assuming our source element is our target
		eventObj.pageX = eventObj.offsetX + documentToTargetDelta.x;
		eventObj.pageY = eventObj.offsetY + documentToTargetDelta.y;
		 
		if (eventObj.srcElement.offsetParent == target && document.documentMode && document.documentMode == 8 && eventObj.type == "mousedown") {
			// source element is a child piece of VML, we're in IE8, and we've not called setCapture yet - add the origin of the source element
			eventObj.pageX += eventObj.srcElement.offsetLeft;
			eventObj.pageY += eventObj.srcElement.offsetTop;
		}else if (eventObj.srcElement != target && !document.documentMode || document.documentMode < 8) {
			// source element isn't the target (most likely it's a child piece of VML) and we're in a version of IE before IE8 -
			// the offsetX/Y values are unpredictable so use the clientX/Y values and adjust by the scroll offsets of its parents
			// to get the document-relative coordinates (the same as pageX/Y)
			var sx = -2, sy = -2; // adjust for old IE's 2-pixel border
			for (var scrollElement = eventObj.srcElement; scrollElement != null; scrollElement = scrollElement.parentNode) {
				sx += scrollElement.scrollLeft ? scrollElement.scrollLeft : 0;
				sy += scrollElement.scrollTop ? scrollElement.scrollTop : 0;
			}
			 
			eventObj.pageX = eventObj.clientX + sx;
			eventObj.pageY = eventObj.clientY + sy;
		}
	}
}


// functions to convert document-relative coordinates to target-relative and constrain them to be within the target
function targetRelativeX(px) { return Math.max(0, Math.min(px - documentToTargetDelta.x, target.offsetWidth)); };
function targetRelativeY(py) { return Math.max(0, Math.min(py - documentToTargetDelta.y, target.offsetHeight)); };

// common event handler for the mouse/pointer/touch models and their down/start, move, up/end, and cancel events
function DoEvent(theEvtObj) {
	// optimize rejecting mouse moves when mouse is up
	if (theEvtObj.type == "mousemove" && NumberOfKeys(lastXYById) == 0)
		return;
	
	PreventDefaultManipulationAndMouseEvent(theEvtObj);
	 
	var pointerList = theEvtObj.changedTouches ? theEvtObj.changedTouches : [theEvtObj];
	for (var i = 0; i < pointerList.length; ++i) {
		var pointerObj = pointerList[i];
		var pointerId = (typeof pointerObj.identifier != 'undefined') ? pointerObj.identifier : (typeof pointerObj.pointerId != 'undefined') ? pointerObj.pointerId : 1;
		
		// use the pageX/Y coordinates to compute target-relative coordinates when we have them (in ie < 9, we need to do a little work to put them there)
		EnsurePageXY(pointerObj);
		var pageX = pointerObj.pageX;
		var pageY = pointerObj.pageY;
		
		if (theEvtObj.type.match(/(start|down)$/i)) {
			// clause for processing MSPointerDown, touchstart, and mousedown
			 
			// refresh the document-to-target delta on start in case the target has moved relative to document
			documentToTargetDelta = ComputeDocumentToElementDelta(target);
			 
			// protect against failing to get an up or end on this pointerId
			if (lastXYById[pointerId]) {
				if (endDraw)
					endDraw(target, pointerId);
				delete lastXYById[pointerId];
			}

			if (startDraw)
			startDraw(target, pointerId, pageX, pageY);
			
			// init last page positions for this pointer
			lastXYById[pointerId] = { x: pageX, y: pageY };

			// in the Microsoft pointer model, set the capture for this pointer
			// in the mouse model, set the capture or add a document-level event handlers if this is our first down point
			// nothing is required for the iOS touch model because capture is implied on touchstart
			if (target.msSetPointerCapture)
				target.msSetPointerCapture(pointerId);
			else if (theEvtObj.type == "mousedown" && NumberOfKeys(lastXYById) == 1) {
				if (useSetReleaseCapture)
					target.setCapture(true);
				else {
					document.addEventListener("mousemove", DoEvent, false);
					document.addEventListener("mouseup", DoEvent, false);
				}
			}
		}else if (theEvtObj.type.match(/move$/i)) {
			// clause handles mousemove, MSPointerMove, and touchmove
			 
			if (lastXYById[pointerId] && !(lastXYById[pointerId].x == pageX && lastXYById[pointerId].y == pageY)) {
				// only extend if the pointer is down and it's not the same as the last point
				 
				if (extendDraw)
					extendDraw(target, pointerId, pageX, pageY);
				 
				// update last page positions for this pointer
				lastXYById[pointerId].x = pageX;
				lastXYById[pointerId].y = pageY;
			}
		}else if (lastXYById[pointerId] && theEvtObj.type.match(/(up|end|cancel)$/i)) {
			// clause handles up/end/cancel
			if (endDraw)
				endDraw(target, pointerId);
			// delete last page positions for this pointer
			delete lastXYById[pointerId];
			
			// in the Microsoft pointer model, release the capture for this pointer
			// in the mouse model, release the capture or remove document-level event handlers if there are no down points
			// nothing is required for the iOS touch model because capture is implied on touchstart
			if (target.msReleasePointerCapture)
				target.msReleasePointerCapture(pointerId);
			else if (theEvtObj.type == "mouseup" && NumberOfKeys(lastXYById) == 0) {
				if (useSetReleaseCapture)
					target.releaseCapture();
				else {
					document.removeEventListener("mousemove", DoEvent, false);
					document.removeEventListener("mouseup", DoEvent, false);
				}
			}
		}
	}
}

var useSetReleaseCapture = false;
 
if (window.navigator.msPointerEnabled) {
	// Microsoft pointer model
	target.addEventListener("MSPointerDown", DoEvent, false);
	target.addEventListener("MSPointerMove", DoEvent, false);
	target.addEventListener("MSPointerUp", DoEvent, false);
	target.addEventListener("MSPointerCancel", DoEvent, false);
	 
	// css way to prevent panning in our target area
	if (typeof target.style.msContentZooming != 'undefined')
		target.style.msContentZooming = "none";
	 
	// new in Windows Consumer Preview: css way to prevent all built-in touch actions on our target
	// without this, you cannot touch draw on the element because IE will intercept the touch events
	if (typeof target.style.msTouchAction != 'undefined')
		target.style.msTouchAction = "none";
	 
}else if (target.addEventListener) {
	// iOS touch model
	target.addEventListener("touchstart", DoEvent, false);
	target.addEventListener("touchmove", DoEvent, false);
	target.addEventListener("touchend", DoEvent, false);
	target.addEventListener("touchcancel", DoEvent, false);
	 
	// mouse model
	target.addEventListener("mousedown", DoEvent, false);
	 
	// mouse model with capture
	// rejecting gecko because, unlike ie, firefox does not send events to target when the mouse is outside target
	if (target.setCapture && !window.navigator.userAgent.match(/\bGecko\b/)) {
		useSetReleaseCapture = true;
		 
		target.addEventListener("mousemove", DoEvent, false);
		target.addEventListener("mouseup", DoEvent, false);
		 
	}
}else if (target.attachEvent && target.setCapture) {
	// legacy IE mode - mouse with capture
	useSetReleaseCapture = true;
	target.attachEvent("onmousedown", function () { DoEvent(window.event); window.event.returnValue = false; return false; });
	target.attachEvent("onmousemove", function () { DoEvent(window.event); window.event.returnValue = false; return false; });
	target.attachEvent("onmouseup", function () { DoEvent(window.event); window.event.returnValue = false; return false; });
	 
}else {
}
 
}

function mergeFirst(){
	var args = Array.prototype.slice.call(arguments);
	var len = args.length,itm;
	for(var i = 1;i < len;i++){
		var arg = args[i];
		for(itm in arg){
			if (arg.hasOwnProperty(itm))
			args[0][itm] = arg[itm];
		}
	}
	return;
}
var VHIcon=function(obj,snappingPos,snappingParam,preParam){

var jVHVibrationEffect= function(target){
	this.content=target;
	this.d=0;
	this.originalPos=target.style.left;
}

jVHVibrationEffect.prototype.gausianXY=function(){
	x=Math.random();
	y=Math.random();
	var obj = new Object();
	obj.x=Math.sqrt(-2*Math.log(x))*Math.cos(2*Math.PI*y);
	obj.y=Math.sqrt(-2*Math.log(x))*Math.sin(2*Math.PI*y);
	return obj;
}

jVHVibrationEffect.prototype.gausian=function(){
	x=Math.random();
	y=Math.random();
	return  Math.sqrt(-2*Math.log(x))*Math.cos(2*Math.PI*y);
}

jVHVibrationEffect.prototype.blurX=function(w){
	x=this.gausianXY().x*w-d;
	this.d+=x;
	this.content.style.left+=x;
}

jVHVibrationEffect.prototype.resetBlur=function(){
	this.content.style.left=this.originalPos;
	this.d=0;
}
	this.param={maxScale:10,weight:1,vibrationWidth:10,snapping:false,snappingID:0,snappingX:0,snappingY:0,snappingRate:0.1,
		moveVibration:false,moveVibrationWidth:0,
		innartiaTime:30,innartiaPow:1,speed:1.0
	};
	this.update=null;
	function getElementPos(theElement) {
		var elementLeft = 0;
		var elementTop = 0;
		for (var offsetElement = theElement; offsetElement != null; offsetElement = offsetElement.offsetParent) {
			if (navigator.userAgent.match(/\bMSIE\b/) && (!document.documentMode || document.documentMode < 8) && offsetElement.currentStyle.position == "relative" && offsetElement.offsetParent && offsetElement.offsetParent.currentStyle.position == "relative" && offsetElement.offsetLeft == offsetElement.offsetParent.offsetLeft) {
				// add only the top
				elementTop += offsetElement.offsetTop;
			}else {
				elementLeft += offsetElement.offsetLeft;
				elementTop += offsetElement.offsetTop;
			}
		}
		return { x: elementLeft, y: elementTop };
	}

	function extendLog(param,x,y){
		//スナッピングズームのための点設定
		var d_sq=0;
		var d_min=0;
		param.snapping=false;
		param.snappingID=0;
		for(var i in snappingPos){
			var p=snappingPos[i];
			d_sq=(x-p.x)*(x-p.x)+(y-p.y)*(y-p.y);
			if(param.snapping && d_min<d_sq){
				continue;
			}
			if(d_sq<p.r*p.r){
				param.snapping=true;
				param.snappingX=p.x;
				param.snappingY=p.y;
				param.snappingID=Number(i)+1;
				d_min=d_sq;
			}
		}
		mergeFirst(param,snappingParam[param.snappingID]);
	}
	(function(target,extendScale,param,update){
		var maxNum=10;
		mergeFirst(param,preParam);
		var oheight =target.offsetHeight;
		var owidth =target.offsetWidth;
		var scale = 1;
		var Vibration=new jVHVibrationEffect(target);
		TouchData=function(){
			this.oldx=0;
			this.oldy=0;
			this.x=0;
			this.y=0;
			this.enable=false;
		};
		var tdata=new Array(maxNum);
		for(var i=0;i<maxNum;i++){
			tdata[i]=new TouchData();
		}
		var me=target;
		var isDown=0;
		function start(target, pointerId, x, y){
			isDown=1;
			var pid=pointerId%maxNum;
			tdata[pid].oldx=x;
			tdata[pid].oldy=y;
			tdata[pid].enable=true;
		}
		var ndx=0;
		var ndy=0;
		var nowPos=getElementPos(target);
		var basePos=getElementPos(target);
		var firstExtend=0;
		
		var singleDx;
		var singleDy;
		var singleBufDx=new Array(4);
		var singleBufDy=new Array(4);
		var singleMoveCount=0;
		function extend(target, pointerId, x, y){
			var pid=pointerId%maxNum;
			tdata[pid].x=x;
			tdata[pid].y=y;
			var buf=new Array();
			for(var i=0;i<maxNum;i++){
				if(tdata[i].enable){
					buf.push(tdata[i]);
				}
			}
			if(buf.length>1){
				(function(d1,d2){
					//scale
					var odx=d1.oldx-d2.oldx;
					var ody=d1.oldy-d2.oldy;
					var od=Math.sqrt(odx*odx+ody*ody);
					var dx=d1.x-d2.x;
					var dy=d1.y-d2.y;
					var d=Math.sqrt(dx*dx+dy*dy);
					dscale=Math.exp(Math.log(d/od)/param.weight);
					if(scale*dscale>param.maxScale){
						dscale=1;
					}
					if(firstExtend>0){
						scale*=dscale
					}else{
						dscale=1;
					}
					//move
					var cvx=(d1.x+d2.x)/2-basePos.x-nowPos.x;
					var cvy=(d1.y+d2.y)/2-basePos.y-nowPos.y;
					var ocvx=(d1.oldx+d2.oldx)/2-basePos.x-nowPos.x;
					var ocvy=(d1.oldy+d2.oldy)/2-basePos.y-nowPos.y;
					var mdx=cvx-ocvx;
					var mdy=cvy-ocvy;
					//center
					var dleft=Math.round(cvx-dscale*cvx);
					var dtop=Math.round(cvy-dscale*cvy);
					//Vibration
					var n=Vibration.gausianXY();
					//var nx=n.x*param.vibrationWidth+ndx*0.6;
					//var ny=n.y*param.vibrationWidth+ndy*0.6;
					var nx=n.x*param.vibrationWidth*scale*0.5+ndx*0.6;
					var ny=n.y*param.vibrationWidth*scale*0.5+ndy*0.6;
					if(firstExtend>0){
						ndx-=nx;
						ndy-=ny;
						nowPos.x+=mdx+dleft+nx;
						nowPos.y+=mdy+dtop+ny;
						
						//元画像上での拡大中心の座標
						figX=((d1.x+d2.x)/2-nowPos.x)/scale;
						figY=((d1.y+d2.y)/2-nowPos.y)/scale;
						//スナッピングズーム
						if(param.snapping&&dscale>1){
							var figDx=param.snappingX-figX;
							var figDy=param.snappingY-figY;
							nowPos.x-=figDx*scale*param.snappingRate;
							nowPos.y-=figDy*scale*param.snappingRate;
						}
						
						target.style.zIndex=10;
						target.style.height=oheight*scale+'px';
						target.style.width=owidth*scale+'px';
						target.style.left=(nowPos.x)+'px';
						target.style.top=(nowPos.y)+'px';
						update((nowPos.x),(nowPos.y));
						//evt
						extendScale(param,figX,figY);
						
					}
					
					firstExtend+=1;
				})(buf[0],buf[1]);
				singleMoveCount=0;
			}else if(buf.length==1){
				if(singleMoveCount==0){
					for(var i=0;i<singleBufDx.length;i++){
						singleBufDx[i]=0;
					}
					for(var i=0;i<singleBufDy.length;i++){
						singleBufDy[i]=0;
					}
				}
				singleMoveCount++;
				singleDx=buf[0].x-buf[0].oldx;
				singleDy=buf[0].y-buf[0].oldy;
				singleBufDx.push(singleDx);singleBufDx.shift();
				singleBufDy.push(singleDy);singleBufDy.shift();
				var sum=0;
				for(var i=0;i<singleBufDx.length;i++){
					sum+=singleBufDx[i];
				}
				singleDx=sum/singleBufDx.length;
				sum=0;
				for(var i=0;i<singleBufDy.length;i++){
					sum+=singleBufDy[i];
				}
				singleDy=sum/singleBufDy.length;
				singleDx*=param.speed;
				singleDy*=param.speed;
				var nx=0;
				var ny=0;
				if(param.moveVibration==true){
					var n=Vibration.gausianXY();
					nx=n.x*param.moveVibrationWidth+ndx*0.6;
					ny=n.y*param.moveVibrationWidth+ndy*0.6;
					ndx-=nx;
					ndy-=ny;
				}
				nowPos.x+=singleDx+nx;
				nowPos.y+=singleDy+ny;
				target.style.zIndex=10;
				target.style.left=(nowPos.x)+'px';
				target.style.top=(nowPos.y)+'px';
				update((nowPos.x),(nowPos.y));
				firstExtend=0;
			}
			
			tdata[pid].oldx=x;
			tdata[pid].oldy=y;
		}
		var coefsX;
		var coefsY;
		var innartiaTime=param.innartiaTime;
		var innartiaPow=param.innartiaPow;
		var frameMs=10;
		function end(target, pointerId){
			isDown=0;
			var pid=pointerId%10;
			tdata[pid].enable=false;
			if(firstExtend==0){//シングルタッチで離した
				if(singleMoveCount>5){
					singleMoveCount=0;
					coefsX=singleDx/Math.pow(innartiaTime,innartiaPow);
					coefsY=singleDy/Math.pow(innartiaTime,innartiaPow);
					if(Math.abs(singleDy)>0.1||Math.abs(singleDx)>0.1){
						setTimeout( function(){innartia(innartiaTime,target, pointerId)},frameMs );
					}
				}
			}
			firstExtend=0;
		}
		function innartia(count,target, pointerId){
			if(isDown==0){
				var tempX=coefsX*Math.pow(count,innartiaPow);
				var tempY=coefsY*Math.pow(count,innartiaPow);
				var nx=0,ny=0;
				if(param.moveVibration){
					var n=Vibration.gausianXY();
					nx=n.x*param.moveVibrationWidth+ndx*0.6;
					ny=n.y*param.moveVibrationWidth+ndy*0.6;
					ndx-=nx;
					ndy-=ny;
				}
				
				nowPos.x+=tempX+nx;
				nowPos.y+=tempY+ny;
				target.style.zIndex=10;
				target.style.left=(nowPos.x)+'px';
				target.style.top=(nowPos.y)+'px';
				update((nowPos.x),(nowPos.y));
				if(count>0.1&&isDown==0){
					setTimeout( function(){innartia(count-1,target, pointerId)},frameMs );
				}
			}
		}
		TouchEvent(target,start,extend,end);	 
	})(obj,extendLog,this.param,
		function(x,y) {
			if(this.update!=null){
				this.update(x,y);
			}
		}
	);
}

VHIcon.prototype.setParam=function(addParam){
	mergeFirst(this.param,addParam);
}
VHIcon.prototype.setUpdate=function(updateFunction){
	this.update=updateFunction;
}

