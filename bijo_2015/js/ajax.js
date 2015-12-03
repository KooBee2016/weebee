// JavaScript Document


////////////////////////////////////////////////////////////////////////////////
// 初期設定
////////////////////////////////////////////////////////////////////////////////

/*
xmlファイルパス
----------------------------------------------------------------------*/
xmlPath='./csv/data.csv';

/*
出力ブロックclass メイン
----------------------------------------------------------------------*/
outputItem='.itemList';

/*
出力ブロックclass ナビ
----------------------------------------------------------------------*/
outputNavi='.itemNavi';

/*
出力ブロックclass ステイタス
----------------------------------------------------------------------*/
outputStatus='.itemStatus';

/*
件数ゼロ文言
----------------------------------------------------------------------*/
txtZero='<p class="taCenter">該当する項目が見つかりません</p>';

/*
エラー文言
----------------------------------------------------------------------*/
txtError='データ取得に失敗しました';


////////////////////////////////////////////////////////////////////////////////
// ハンドラ
////////////////////////////////////////////////////////////////////////////////

$(loadAjax);
function loadAjax(){
	getAjaxData();
	$('.itemSearch input:checkbox').click(getAjaxData);
	$('.itemSearchReset').click(getAjaxData);
}


////////////////////////////////////////////////////////////////////////////////
// メインプロトコル
////////////////////////////////////////////////////////////////////////////////
/*
jQuery xmlリクエスト
----------------------------------------------------------------------*/
function getAjaxData(){
	$.ajax({
		url:xmlPath,
		error:outputError,
		success:outputSuccess
	});
}

/*
getAjaxData ／ error時処理
----------------------------------------------------------------------*/
function outputError(){
	$(blockOutput).text(txtError);
}

/*
getAjaxData ／ success時処理
----------------------------------------------------------------------*/
function outputSuccess(data){
	console.log('success getting data.');
	console.log(data);
	var arr=makeArr(data);
	var src=makeSrc(arr);
	$(outputItem).hide().html(src);
	loadNavi();
	$(outputItem).fadeIn(300);
	loadComma();
}


////////////////////////////////////////////////////////////////////////////////
// 配列生成
////////////////////////////////////////////////////////////////////////////////

var makeArr=function(data){
	var obj=data.split('\n');
	arr=[];
	var i=0,chk=$('.itemSearch input:checkbox');
	$(obj).each(function(){
		var objElm=this.split(',');
		if(objElm[0]!=''&&objElm[1]!=''&&objElm[2]!=''&&objElm[0].indexOf('/')!=-1){
//絞り込み検索
			if(
				$(chk+':checked').length==0||
				(
					($(chk)[0].checked==false&&$(chk)[1].checked==false&&$(chk)[2].checked==false&&$(chk)[3].checked==false)||
					($(chk)[0].checked==true&&objElm[10]==1)||
					($(chk)[1].checked==true&&objElm[11]==1)||
					($(chk)[2].checked==true&&objElm[12]==1)||
					($(chk)[3].checked==true&&objElm[13]==1)
				)&&(
					($(chk)[4].checked==false&&$(chk)[5].checked==false&&$(chk)[6].checked==false)||
					($(chk)[4].checked==true&&objElm[14]==1)||
					($(chk)[5].checked==true&&objElm[15]==1)||
					($(chk)[6].checked==true&&objElm[16]==1)
				)
			){
				arr[i]=[];
				arr[i]=this.split(',');
				i++;
			}
		}
	});
	return arr;
}

////////////////////////////////////////////////////////////////////////////////
// ソース生成
////////////////////////////////////////////////////////////////////////////////

var makeSrc=function(arr){
	var src='\n<ul>\n';http://172.19.132.55:8001/sample/ajax/ajax0003/sample01/sample.html
	$(arr).each(function(){
		src+='<li class="itemLi">\n<div class="itemLiInner clrF">\n';
		if(this[7]!='') src+='<div class="itemLeft"><a href="'+this[8]+'"><img src="'+this[7]+'" alt="" /></a>\n';
		if(
			this[10]!=''||
			this[11]!=''||
			this[12]!=''||
			this[13]!=''||
			this[14]!=''||
			this[15]!=''||
			this[16]!=''
		){
			src+='<ul class="itemFlag">\n';
			if(this[10]!='') src+='<li><img src="image/job/job-item/sannomiya.png" /></li>\n';
			if(this[11]!='') src+='<li><img src="image/job/job-item/rokko" /></li>\n';
			if(this[12]!='') src+='<li><img src="image/job/job-item/hyogo.png" /></li>\n';
			if(this[13]!='') src+='<li><img src="image/job/job-item/oosaka.png" /></li>\n';
			if(this[14]!='') src+='<li><img src="image/job/job-item/insyoku.png" /></li>\n';
			if(this[15]!='') src+='<li><img src="image/job/job-item/juku.png" /></li>\n';
			if(this[16]!='') src+='<li><img src="image/job/job-item/other.png" /></li>\n';
			src+='</ul></div>\n';
		}
		
		src+='<div class="itemRight">\n';
		src+='<div class="Name"><p><a href="'+this[8]+'">'+this[1]+'</a></p></div>\n';
		src+='<div class="Syokusyu"><p>'+this[3]+'</p></div>\n';
		src+='<div class="Access"><p><img src="image/job/job-item/kyuuyo.png" />'+this[2]+'円</p><div>\n';
		src+='<div class="Access"><p><img src="image/job/job-item/access.png" />'+this[4]+'</p></div>\n';
		src+='<p><a href="'+this[8]+'"><img src="image/job/job-item/syosai.png" /></a></p>\n';
		
		src+='</div>\n</div>\n</li>\n\n';
	});
	src+='</ul>\n';
	return src;
}


////////////////////////////////////////////////////////////////////////////////
// ナビゲーション
////////////////////////////////////////////////////////////////////////////////

/*
１ページ表示件数
----------------------------------------------------------------------*/
numItem=12;

/*
ナビゲーション メイン
----------------------------------------------------------------------*/
var loadNavi=function(){
	setNavi();
	loadNaviClick();
}
var loadNaviClick=function(){
	$('.iNPrev').click(setNaviPrev);
	$('.iNNext').click(setNaviNext);
	$('.iNItem').click(setNaviItem);
}
var setNaviPrev=function(){
	if($(this).hasClass('off')) return;
	var numCur=0;
	$('.itemNaviUpper .iNItem').each(function(){
		var idx=$('.itemNaviUpper .iNItem').index(this);
		if($(this).hasClass('cur')) numCur=idx;
	});
	setNavi(numCur-1);
	loadNaviClick();
}
var setNaviNext=function(){
	if($(this).hasClass('off')) return;
	var numCur=0;
	$('.itemNaviUpper .iNItem').each(function(){
		var idx=$('.itemNaviUpper .iNItem').index(this);
		if($(this).hasClass('cur')) numCur=idx;
	});
	setNavi(numCur+1);
	loadNaviClick();
}
var setNaviItem=function(){
	if($(this).hasClass('cur')) return;
	var pages=$('.iNItem').size()/2;
	var idx=$('.iNItem').index(this);
	if(idx>=pages) idx=idx-pages;
	setNavi(idx);
	loadNaviClick();
}
var setNavi=function(numCur){
	if(!numCur) numCur=0;
	var numMax=$('.itemLi').size();
	if(numMax==0){
		$(outputNavi).hide();
		$(outputStatus).hide();
		$(outputItem).html(txtZero).fadeIn(300);
		return;
	}
	if(numMax>numItem){
		$('.itemLi').hide();
		$('.itemLi').each(function(){
			var idx=$('.itemLi').index(this);
			if(idx>=numCur*numItem&&idx<(numCur+1)*numItem) $(this).show();
		});
	}
	makeSrcNavi(numCur);
	$('.itemSTotal').text(numMax);
	$('.itemSMin').text(numCur*numItem+1);
	$('.itemSMax').text(Math.min((numCur+1)*numItem,numMax));
	$(outputStatus).hide().fadeIn(300);
}
var makeSrcNavi=function(numCur){
	var numMax=$('.itemLi').size();
	var page=Math.ceil(numMax/numItem);
	var src='\n';
	src+='<ul>\n';
	src+='<li><a href="javascript:void(0);" class="iNPrev';
	if(numCur==0) src+=' off';
	src+='">＜前へ</a></li>\n';
	for(var i=0;i<page;i++){
		src+='<li><a href="javascript:void(0);" class="iNItem';
		if(numCur==i) src+=' cur';
		src+='">'+(i+1)+'</a></li>\n';
	}
	src+='<li><a href="javascript:void(0);" class="iNNext';
	if(numCur==(page-1)) src+=' off';
	src+='">次へ＞</a></li>\n';
	src+='</ul>\n';
	$(outputNavi).hide().html(src).fadeIn(300);
}


////////////////////////////////////////////////////////////////////////////////
// カンマ桁
////////////////////////////////////////////////////////////////////////////////

/*
カンマ桁対象オブジェクト
----------------------------------------------------------------------*/
var targetClass='.numberComma';

/*
カンマ桁
----------------------------------------------------------------------*/
var digitUnit=3;

/*
ページ内カンマ自動制御
----------------------------------------------------------------------*/
function loadComma(){
	$(targetClass).each(function(){
		if($(this).text().indexOf(",")==-1&&!($(this).text().match(/[^0-9]+/))){
			$(this).html(commaDelim($(this).text()));
		}
	});
}

/*
価格数値カンマ制御
----------------------------------------------------------------------*/
function commaDelim(str){
	if(str.length>3){
		var oriStr=str;
		var num=Math.floor(str.length/digitUnit);
		var measure=str.length/3-Math.floor(str.length/digitUnit);
		measure=Math.floor(measure*10);
		measure=measure/digitUnit;
		str="";
		if(measure>0) str=oriStr.slice(0,measure);
		for(var i=0;i<(num);i++){
			if(str!="") str+=",";
			str+=oriStr.slice(measure+i*digitUnit,measure+(i+1)*digitUnit);
		}
	}
	return str;
}


////////////////////////////////////////////////////////////////////////////////
/// 配列 index IE対策
////////////////////////////////////////////////////////////////////////////////

if(!Array.indexOf){
	Array.prototype.indexOf=function(object){
		for(var i=0;i<this.length;i++){
			if(this[i]==object) return i;
		}
		return -1;
	}
}












