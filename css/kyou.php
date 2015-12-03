<head>
	<script type="text/javascript">
	function hirakegoma(idno){
	pc = ('Close' + (idno));
	po = ('Open' + (idno));
	if( document.getElementById(pc).style.display == "none" ) {
	document.getElementById(pc).style.display = "block";
	document.getElementById(po).style.display = "none";
	}
	else {
	document.getElementById(pc).style.display = "none";
	document.getElementById(po).style.display = "block";
	}
	}
	</script>
</head>



<body>
<div id="Open1">
<p>
<a href="#" title="続きを読む" onclick="hirakegoma(1);return false;">続きを読む</a></p>
</div>
<div id="Close1" style="display: none">
<p><a href="#" title="折りたたむ" onclick="hirakegoma(1);return false;">折りたたむ</a></p>
<!-- 記事内容始まり -->
ここに記事の内容を記入します。 
<!-- 記事内容終わり -->
</div>
</body>




		<dt>
            <a href="javascript:void(0)" id="closer_1" onclick="openchild('opener_1', 'closer_1')">
            &nbsp;
            <span onClick="document.all.item('moji1').style.visibility='visible'">
            	<img src="image/shinkare2015/voll.png" height="59px">
            	PVC 練習<br>
            	<p style="clear: both;"><br>
            	<div ID="moji1" style="visibility:hidden;">
            	<img src="image/shinkare2015/syosai.png"  style="height:20px; width:30px; float: right; margin: 0px;">
            </div>
            </span>



        </a>
        </dt>
        <dd id="opener_1" style="display:none;">
            <a href="javascript:void(0)" class="end">
            日時：4月5日（木）13:00～<p>
            集合場所：パイ山
            <a href="http://gogle.com">
            <img src="image/shinkare2015/map.png" height="46" width="260">
            </a>
            
        </dd>

<head>

 <style>
#box{
 display:none;
}
</style>


<script type="text/javascript">
var i=0;
function disp(){
 if(i%2==0)
  document.getElementById("box").style.display="block";
 else
  document.getElementById("box").style.display="none";
 i++;
}
</script>

</head>


<body>
<a href="javascript:void(0);" onclick="javascript:disp();">PVC 練習</a>
<div id="box">
<img src="image/shinkare2015/syosai.png"  style="height:60px;float: right; margin: 39px;">
</div>
</body>