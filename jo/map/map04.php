<!DOCTYPE HTML>
<html lang="ja">
	<head>
	<?php include '../../../common/include/db.php';?>
	<?php include '../../../common/include/analytics.php';?>
	<?php include '../../../common/include/css-js.php';?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>六甲台第二キャンパス(工学部) | 神大まるわかりMAP | 高校生の君たちへ | 特別コンテンツ | WeeBee</title>
		<link rel="stylesheet" href="../../../common/css/reset.css">
		<link rel="stylesheet" href="../../../common/css/common.css">
		<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
function ChangeTab(tabname) {
   // 全部消す
   document.getElementById('tab1').style.display = 'none';
   document.getElementById('tab2').style.display = 'none';
   document.getElementById('tab3').style.display = 'none';
   document.getElementById('box1').style.display = 'none';
   document.getElementById('box2').style.display = 'none';
   document.getElementById('box3').style.display = 'none';
   // 指定箇所のみ表示
   	if(tabname) {
   document.getElementById(tabname).style.display = 'block';
   }
}
</script>
	</head>
	<body>
		<div class="wrapper">
		<?php include '../../../common/include/header.php';?>
		<?php include'../../../common/include/gn.php' ?>
		<div id="main">
<div class="m_wrapper">

<img src="img/header.png" width="990px" height="110px" alt="">
<img src="img/04_title.png"  width="990px" height="100px" alt="">
<div class="m_relative">
<img src="img/04_top.jpg" width="990px" height="660px" alt="">
<div class="m_04_top">
<h1>工学部キャンパスは全部で6つの学科棟からできあがっています。工学部大学院も併設されているため、他のキャンパスとは少し違っており、膜研究所を始めとした近未来的な建物が多く立ち並んでいるのが特徴です。またリニューアルオープンした食堂ははとても綺麗でオススメです！</h1>
</div>
</div>

<!-- キャンパスあるある -->
<div class="m_aru">
<img src="img/04_aruaru.png" width="400px" height="47px" alt="">
<h1 class="m_aru_word">キャンパスごとのあるある、まとめました。</h1>
<div class="m_aru_word">
<div class="m_aru_left">
<div class="m_aru_faceL">
<img src="img/04_student01.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">工学部1回生<br>久保田倉平さん</h1>
</div>
<img src="img/04_comment01.png" width="336px" height="60px" alt="" class="m_aru_commentL">
</div>
<div class="m_aru_right">
<div class="m_aru_faceR">
<img src="img/04_student02.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">工学部2回生<br>高井美菜子さん</h1>
</div>
<img src="img/04_comment02.png" width="336px" height="60px" alt="" class="m_aru_commentR">
</div>
</div>
</div>

<hr class="m_04_hr1">

<!-- キャンパス三景 -->
<div class="m_view">
<img src="img/04_view.png" width="320px" height="47px" alt="">
<h1 class="m_word">KooBeeが厳選した各キャンパス毎のオススメの<br>場所を写真と共に掲載します。</h1>
<div class="m_view_div">
<div class="m_view_tab">
<a href="#tab1" onclick="ChangeTab('tab1'); hyouji1(0); tab(1); return false;"><img id="tab01" src="img/04_bar01.png" width="60px" height="160px" align="left"></a>
<a href="#tab2" onclick="ChangeTab('tab2'); hyouji2(0); tab(2); return false;"><img id="tab02" src="img/bar02.png" width="60px" height="160px" align="left"></a>
<a href="#tab3" onclick="ChangeTab('tab3'); hyouji3(0); tab(3); return false;"><img id="tab03" src="img/bar03.png" width="60px" height="160px" align="left"></a>
</div>
<script type="text/javascript">
function tab(num)
{
 if (num == 1)
 {
  document.getElementById("tab01").src = "img/04_bar01.png";
  document.getElementById("tab02").src = "img/bar02.png";
  document.getElementById("tab03").src = "img/bar03.png";
 }
 if (num == 2)
 {
  document.getElementById("tab01").src = "img/bar01.png";
  document.getElementById("tab02").src = "img/04_bar02.png";
  document.getElementById("tab03").src = "img/bar03.png";
 }
 if (num == 3)
 {
  document.getElementById("tab01").src = "img/bar01.png";
  document.getElementById("tab02").src = "img/bar02.png";
  document.getElementById("tab03").src = "img/04_bar03.png";
 }
}
</script>
<div class="target_img">
<div id="tab1" class="m_relative">
<img src="img/04_photo01.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #32c79b solid;">
<div id="box1" class="m_view_box">
<h1>みなさん、工学部のセブンイレブンの横に下り坂があるのを知ってますか？知っていたとしても、その先に行ったことがある人は少ないはず…。なんとその先に絶景が！特に夜景は格別です！</h1>
</div>
<form id="button1" class="m_view_form">
<button type="button" onclick="hyouji1(1)" class="m_view_button">×</button>
</form>
<script>
function hyouji1(num)
{
 if (num == 0)
 {
  document.getElementById("box1").style.display="block";
  document.getElementById("button1").style.display="block";
  }
 else
 {
  document.getElementById("box1").style.display="none";
  document.getElementById("button1").style.display="none";
  }
}
</script>
</div>
<div id="tab2" class="m_relative">
<img src="img/04_photo02.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #32c79b solid;">
<div id="box2" class="m_view_box">
<h1>工学部から国文キャンパスに向かう途中、側面にいびつな形の模様が施されている特徴的な建物が目に入ります。ベンゼン環かな？と思いきや膜を模したものらしいのです。まだ見た事のない人は是非見に行って下さい</h1>
</div>
<form id="button2" class="m_view_form">
<button type="button" onclick="hyouji2(1)" class="m_view_button">×</button>
</form>
<script>
function hyouji2(num)
{
 if (num == 0)
 {
  document.getElementById("box2").style.display="block";
  document.getElementById("button2").style.display="block";
  }
 else
 {
  document.getElementById("box2").style.display="none";
  document.getElementById("button2").style.display="none";
  }
}
</script>
</div>
<div id="tab3" class="m_relative">
<img src="img/04_photo03.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #32c79b solid;">
<div id="box3" class="m_view_box">
<h1>みなさんは工学部の教室ってどんなものを想像しますか？古そうとか、汚そうとか、マイナスのイメージを持ってる人も多いと思います。しかしこの様なキレイな教室もあるんです！間違いなくアタリの教室です！</h1>
</div>
<form id="button3" class="m_view_form">
<button type="button" onclick="hyouji3(1)" class="m_view_button">×</button>
</form>
<script>
function hyouji3(num)
{
 if (num == 0)
 {
  document.getElementById("box3").style.display="block";
  document.getElementById("button3").style.display="block";
  }
 else
 {
  document.getElementById("box3").style.display="none";
  document.getElementById("button3").style.display="none";
  }
}
</script>
</div>
</div>
<script type="text/javascript">
// デフォルトのタブを選択
ChangeTab('tab1');
hyouji1(0);
//
</script>
</div>
</div>


<hr class="m_04_hr2">

<!-- 他のキャンパスを探す -->
<div class="m_other">
<img src="img/04_other.png" width="421px" height="49px" alt="">
<table border="0px" class="m_other_table" cellpadding="40px">
<tr>
<td>
<div class="m_other_01">
<img src="img/01_link.png" width="200px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map01.php"><img src="img/01_top.jpg" width="380px" height="253px" alt=""></a>
</td>
<td>
<div class="m_other_02">
<img src="img/02_link.png" width="200px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map02.php"><img src="img/02_top.jpg" width="380px" height="253px" alt=""></a>
</td>
</tr>
<tr>
<td>
<div class="m_other_03">
<img src="img/03_link.png" width="220px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map03.php"><img src="img/03_top.jpg" width="380px" height="253px" alt=""></a>
</td>
<td>
<div class="m_other_05">
<img src="img/05_link.png" width="220px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map05.php"><img src="img/05_top.jpg" width="380px" height="253px" alt=""></a>
</td>
</tr>
</table>
</div>

<!-- リンク -->
<div style="width: 790px; height: ; padding-top: 122px; margin: 0 auto;">
<div style="height: 100px; width: 790px; padding-bottom: 60px; text-align: center;">
<a href="index.php"><img src="img/link_map.png" width="369px" height="99px" alt=""></a>
</div>
<a href="../index.php"><img src="img/link_top.png" width="369px" height="99px" alt="" align="left"></a>
<a href="../real/index.php"><img src="img/link_see.png" width="369px" height="99px" alt="" align="right"></a>
</div>
</div>
</div>
		<?php include'../../../common/include/futter.php' ?>
		</div>
	</body>
</html>