<!DOCTYPE HTML>
<html lang="ja">
	<head>
	<?php include '../../../common/include/db.php';?>
	<?php include '../../../common/include/analytics.php';?>
	<?php include '../../../common/include/css-js.php';?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>鶴甲第一キャンパス | 神大まるわかりMAP | 高校生の君たちへ | 特別コンテンツ | WeeBee</title>
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
<img src="img/01_title.png"  width="990px" height="100px" alt="">
<div class="m_relative">
<img src="img/01_top.jpg" width="990px" height="660px" alt="">
<div class="m_01_top">
<h1>最も山奥にあるこのキャンパスは、なんと標高200m越！全学部の1回生が講義を受ける国文キャンパスとの移動は、坂が2つと階段4つ、計300段超を20分で登るという戦いですが、じきに慣れます！人が少なく、アットホームで落ち着いた雰囲気です。</h1>
</div>
</div>

<!-- キャンパスあるある -->
<div class="m_aru">
<img src="img/01_aruaru.png" width="400px" height="47px" alt="">
<h1 class="m_aru_word">キャンパスごとのあるある、まとめました。</h1>
<div class="m_aru_word">
<div class="m_aru_left">
<div class="m_aru_faceL">
<img src="img/01_student01.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">発達科学部1回生<br>岸本和さん</h1>
</div>
<img src="img/01_comment01.png" width="336px" height="60px" alt="" class="m_aru_commentL">
</div>
</div>
</div>

<hr class="m_01_hr1">

<!-- キャンパス三景 -->
<div class="m_view">
<img src="img/01_view.png" width="320px" height="47px" alt="">
<h1 class="m_word">KooBeeが厳選した各キャンパス毎のオススメの<br>場所を写真と共に掲載します。</h1>
<div class="m_view_div">
<div class="m_view_tab">
<a href="#tab1" onclick="ChangeTab('tab1'); hyouji1(0); tab(1); return false;"><img id="tab01" src="img/01_bar01.png" width="60px" height="160px" align="left"></a>
<a href="#tab2" onclick="ChangeTab('tab2'); hyouji2(0); tab(2); return false;"><img id="tab02" src="img/bar02.png" width="60px" height="160px" align="left"></a>
<a href="#tab3" onclick="ChangeTab('tab3'); hyouji3(0); tab(3); return false;"><img id="tab03" src="img/bar03.png" width="60px" height="160px" align="left"></a>
</div>
<script type="text/javascript">
function tab(num)
{
 if (num == 1)
 {
  document.getElementById("tab01").src = "img/01_bar01.png";
  document.getElementById("tab02").src = "img/bar02.png";
  document.getElementById("tab03").src = "img/bar03.png";
 }
 if (num == 2)
 {
  document.getElementById("tab01").src = "img/bar01.png";
  document.getElementById("tab02").src = "img/01_bar02.png";
  document.getElementById("tab03").src = "img/bar03.png";
 }
 if (num == 3)
 {
  document.getElementById("tab01").src = "img/bar01.png";
  document.getElementById("tab02").src = "img/bar02.png";
  document.getElementById("tab03").src = "img/01_bar03.png";
 }
}
</script>
<div class="target_img">
<div id="tab1" class="m_relative">
<img src="img/01_photo01.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #f99564 solid;">
<div id="box1" class="m_view_box">
<h1>標高約200メートルに位置する発達科学部の建物の最上階で、神大の中で一番高い場所。神戸の街を一望でき、100万ドルの夜景を我が物に！ここまで登るのは大変ですが、一度訪れてみる価値は十分あります。</h1>
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
<img src="img/01_photo02.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #f99564 solid;">
<div id="box2" class="m_view_box">
<h1>ピアノが置かれている教室があるのは、人間表現学科のある発達科学部ならでは！いつも楽器の音が響きわたっています。　音色が他の教室まで聞こえてくることもあり、優雅な気分で講義を受けることができます。</h1>
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
<img src="img/01_photo03.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #f99564 solid;">
<div id="box3" class="m_view_box">
<h1>発達科学部の中で最も大きな教室。形成、行動、表現、環境の４つの学科が一堂に会して、ほぼ満席になることも。そんなときは座っている人に「席を詰めてもらえますか？」と頼み込んで席を確保しましょう。</h1>
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


<hr class="m_01_hr2">

<!-- 他のキャンパスを探す -->
<div class="m_other">
<img src="img/01_other.png" width="421px" height="49px" alt="">
<table border="0px" class="m_other_table" cellpadding="40px">
<tr>
<td>
<div class="m_other_02">
<img src="img/02_link.png" width="200px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map02.php"><img src="img/02_top.jpg" width="380px" height="253px" alt=""></a>
</td>
<td>
<div class="m_other_03">
<img src="img/03_link.png" width="200px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map03.php"><img src="img/03_top.jpg" width="380px" height="253px" alt=""></a>
</td>
</tr>
<tr>
<td>
<div class="m_other_04">
<img src="img/04_link.png" width="220px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map04.php"><img src="img/04_top.jpg" width="380px" height="253px" alt=""></a>
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