<!DOCTYPE HTML>
<html lang="ja">
	<head>
	<?php include '../../../common/include/db.php';?>
	<?php include '../../../common/include/analytics.php';?>
	<?php include '../../../common/include/css-js.php';?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>六甲台第二キャンパス(LANS) | 神大まるわかりMAP | 高校生の君たちへ | 特別コンテンツ | WeeBee</title>
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
<img src="img/05_title.png"  width="990px" height="100px" alt="">
<div class="m_relative">
<img src="img/05_top.jpg" width="990px" height="660px" alt="">
<div class="m_05_top">
<h1>LANSとは、文学部 (Letters)、農学部 (Agriculture)、旧自然科学研究科 (Nature Sciences)、理学部 (Science) の頭文字を並べたものです。のんびりした空気が流れているこのキャンパスではそれぞれすきなことに没頭できます。標高が最も低く、慣れれば阪急六甲から徒歩10分ほどで着きます。
</h1>
</div>
</div>

<!-- キャンパスあるある -->
<div class="m_aru">
<img src="img/05_aruaru.png" width="400px" height="47px" alt="">
<h1 class="m_aru_word">キャンパスごとのあるある、まとめました。</h1>
<div class="m_aru_word">
<div class="m_aru_left">
<div class="m_aru_faceL">
<img src="img/05_student01.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">文学部2回生<br>田村豪さん</h1>
</div>
<img src="img/05_comment01.png" width="336px" height="60px" alt="" class="m_aru_commentL">
</div>
<div class="m_aru_right">
<div class="m_aru_faceR">
<img src="img/05_student02.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">農学部1回生<br>大塚宏太郎さん</h1>
</div>
<img src="img/05_comment02.png" width="336px" height="60px" alt="" class="m_aru_commentR">
</div>
<div class="m_aru_left">
<div class="m_aru_faceL">
<img src="img/05_student03.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">理学部1回生<br>後野有紗さん</h1>
</div>
<img src="img/05_comment03.png" width="336px" height="60px" alt="" class="m_aru_commentL">
</div>
<div class="m_aru_right">
<div class="m_aru_faceR">
<img src="img/05_student04.jpg" width="140px" height="137.5px" alt="" align="middle">
<h1 class="m_aru_name">農学部3回生<br>森下智代さん</h1>
</div>
<img src="img/05_comment04.png" width="336px" height="60px" alt="" class="m_aru_commentR">
</div>
</div>
</div>

<hr class="m_05_hr1">

<!-- キャンパス三景 -->
<div class="m_view">
<img src="img/05_view.png" width="320px" height="47px" alt="">
<h1 class="m_word">KooBeeが厳選した各キャンパス毎のオススメの<br>場所を写真と共に掲載します。</h1>
<div class="m_view_div">
<div class="m_view_tab">
<a href="#tab1" onclick="ChangeTab('tab1'); hyouji1(0); tab(1); return false;"><img id="tab01" src="img/05_bar01.png" width="60px" height="160px" align="left"></a>
<a href="#tab2" onclick="ChangeTab('tab2'); hyouji2(0); tab(2); return false;"><img id="tab02" src="img/bar02.png" width="60px" height="160px" align="left"></a>
<a href="#tab3" onclick="ChangeTab('tab3'); hyouji3(0); tab(3); return false;"><img id="tab03" src="img/bar03.png" width="60px" height="160px" align="left"></a>
</div>
<script type="text/javascript">
function tab(num)
{
 if (num == 1)
 {
  document.getElementById("tab01").src = "img/05_bar01.png";
  document.getElementById("tab02").src = "img/bar02.png";
  document.getElementById("tab03").src = "img/bar03.png";
 }
 if (num == 2)
 {
  document.getElementById("tab01").src = "img/bar01.png";
  document.getElementById("tab02").src = "img/05_bar02.png";
  document.getElementById("tab03").src = "img/bar03.png";
 }
 if (num == 3)
 {
  document.getElementById("tab01").src = "img/bar01.png";
  document.getElementById("tab02").src = "img/bar02.png";
  document.getElementById("tab03").src = "img/05_bar03.png";
 }
}
</script>
<div class="target_img">
<div id="tab1" class="m_relative">
<img src="img/05_photo01.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #50c773 solid;">
<div id="box1" class="m_view_box">
<h1>阪急六甲駅から見える、ガラス張りのキレイな建物。留学生センターがここにあるので、留学生が談笑している姿がよく見られます。瀬戸内海のキレイな景色が見渡せて、天気がいい日にはUSJが見えるという噂も！夜にはとてもキレイな夜景が…！</h1>
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
<img src="img/05_photo02.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #50c773 solid;">
<div id="box2" class="m_view_box">
<h1>人文学図書館の中にあるフリースペース。窓が大きくて明るく過しやすい空間には連結可能な丸テーブルが置いてあり、グループ学習に最適！授業で使われることもあります。普段は自習で使っている人やソファで寛ぐ人が多いです。</h1>
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
<img src="img/05_photo03.jpg" width="776px" height="476px" alt="" align="left" style="border: 2px #50c773 solid;">
<div id="box3" class="m_view_box">
<h1>文学部1回生が必ず1つは受ける入門の授業のほとんどがここで行われます。実はこの教室がLANS内で1番大きい教室。文学部の一学年の学生が全員収まる教室はここだけ。入学式後のガイダンスも行われるので「思い出の教室」になること間違いなし！</h1>
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


<hr class="m_05_hr2">

<!-- 他のキャンパスを探す -->
<div class="m_other">
<img src="img/05_other.png" width="421px" height="49px" alt="">
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
<div class="m_other_04">
<img src="img/04_link.png" width="220px" height="47px" alt="" class="m_other_tab">
</div>
<a href="map04.php"><img src="img/04_top.jpg" width="380px" height="253px" alt=""></a>
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