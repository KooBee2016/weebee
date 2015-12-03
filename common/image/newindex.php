<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>

<?php

    include 'common/include/db.php';
    include 'common/include/analytics.php';
    include 'common/include/css-js.php';


    $year_now = date('y');
    $month_now = date('n');
    $month_double = date('m');
    $day_now = date('d');

    
    $shindai365 = $dbh->query("SELECT *FROM shindai365 WHERE year='$year_now' AND month='$month_now'");
    $koopon2014 = $dbh->query("SELECT *FROM koopon2014 ORDER BY RAND() LIMIT 1");
    $content_intro = $dbh->query("SELECT *FROM contents_intro WHERE main_sub='main'");
    $feature = $dbh->query("SELECT *FROM contents_intro WHERE main_sub='sub' ORDER BY RAND() LIMIT 1");
?>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>WeeBee&nbsp;神戸大学総合情報サイト</title>
  <meta name="keywords" content="WeeBee,神戸大学,KooBee,シンカレ,団体図鑑,神大,くーびー,うぃーびー" />
  <meta name="description" content="WeeBee (ウィービー)は、神戸大学KooBeeが提供する、神戸大学や神大生の魅力がたくさん詰まったサイトです。神大OBOGや社会人、神大生へのインタビュー、部活・サークル情報など、神大生に役立つおもしろいコンテンツをたくさんお届けします。" />
  <meta name="Author" content="神戸大学総合情報サイトWeeBee" />
  <meta name="robots" content="index,follow" />
  <meta property="og:title" content="神戸大学総合情報サイトWeeBee(うぃーびー) presented by KooBee" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://weebee1212.com/index.php" />
  <link href="common/css/flexslider.css" rel="stylesheet" type="text/css" />
  <link href="common/css/index.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script src="common/js/ssslideshow.js"></script>
<script type="text/javascript">
$(function(){
  $("#slider").ssSlideShow();
});</script>




</head>



<body>

  <div class="wrapper">

<?php include 'common/include/header.php';?>

    <div id="slider">
 
     <a href="http://weebee1212.com/photo_bijo/bijo_hakama2015/index.php">
      <div><img src="common/image/slide/hakama.jpg" height="524" width="1130"/></div>
      </a>
 
      <div><img src="common/image/slide/slide.jpg" height="534" width="1129"/></div>
 
 
      <a href="http://weebee1212.com/snap/content.php?sex=m&snap_no=43">
      <div><img src="common/image/slide/snap_m43.png" height="524" width="1130"/></div>
      </a>
 
      <a href="http://weebee1212.com/shinkare/index.php">
      <div><img src="common/image/slide/shinkare_slide.png" height="524" width="1130"/></div>
      </a>
 
      <a href="http://weebee1212.com/job/index.php">
      <div><img src="common/image/slide/job_slide.png" height="524" width="1130"/></div>
      </a>
 
      <a href="http://weebee1212.com/omotekou/index.php">
      <div><img src="common/image/slide/omotekou_slide.png" height="524" width="1130"/></div>
      </a>
 
    </div>

  　　<!--スライド終わり -->

<div style="position:relative;top:-34px;">
  <?php include 'common/include/gn.php';?>
</div>

<div class="mainbox">

  <div class="newest_post">
  <img src="common/image/newestpost_back.png" height="435" width="1147" alt="" usemap="#newest">
    <map name="newest">
    <area shape="rect" coords="53,120,252,258" href="http://weebee1212.com/shinkare/index.php" />
    <area shape="rect" coords="333,120,533,256" href="http://weebee1212.com/job/index.php" /> 
    <area shape="rect" coords="613,121,812,251" href="http://weebee1212.com/dantai/index.php" />
    <area shape="rect" coords="890,119,1088,254" href="http://weebee1212.com/interview/content.php?id=50" />       
    </map>
    </img>
  </div>



  <div class="contents_pickup">

    <?php
    foreach ($shindai365 as $row) { ?>
    
    <div class="shindai365">

     <div class="circle_365">

        <p class="date"><?php echo $month_now."/".$day_now; ?></p>
        <img src="common/image/365circle.png">
     </div>
     <!-- 365の画像 -->
     <a href="http://weebee1212.com/shindai365/index.php?year=<?php echo$year_now;?>&month=<?php echo $month_now;?>">
     <div class="today_img_365">
     <img src="shindai365/image/<?php echo $year_now.$month_double;?>/<?php echo $day_now;?>.jpg" style="width:300px;">
      </div>
      </a>

    <!-- 365のテーマ -->

    <div class="theme_365"><?php echo $row['thema'];?></div>
  </div>
    <?php }; ?>

  <div class="features">

   <!-- おすすめコンテンツ -->

   <div class="feature_special">
    <?php foreach ($feature as $row):
      echo"
          <p class='feature_name'>".$row['name']."</p>
          <p class='feature_content'>".$row['introduction']."</p>
          <div class='feature_img'>
          <a href='http://weebee1212.com/".$row['genre']."/".$row['english_name']."/index.php'>
          <img src='common/image/contentIntro/".$row['english_name'].".jpg' class='feature_img'>
          </a>
          </div>
          ";
         endforeach;?> 
  </div>

  <!-- 今日のクーポン -->


  <div class="feature_koopon">
    <?php foreach ($koopon2014 as $row):
      echo"
          <p class='koopon_name'>".$row['name']."</p>
          <p class='koopon_content'>".$row['content']."</p>
          <div class='koopon_img'>
          <a href='http://weebee1212.com/koopon2014/koopon-".$row['genre']."".$row['area'].".php'>
          <img src='koopon2014/image/".$row['english_name'].".jpg'>
          </a>
          </div>
          ";
         endforeach;?>
  </div>

</div>

</div>




<!--コンテンツ紹介 -->
<div class="contents_intro_box">

 <div class="content_intro_img">
   <img src="common/image/contentIntro.png" >
 </div>

    <?php 
    foreach ($content_intro as $info):

      echo"
        <div class='content_box'>
        <div class='content_img'>
        <a href='http://weebee1212.com/".$info['english_name']."/index.php'>
        <img src='common/image/contentIntro/".$info['english_name'].".jpg'>
        </a>
        </div>
        <div class='info_".$info['genre']."'>
         <a href='http://weebee1212.com/".$info['english_name']."/index.php'>
          <p　id='content_name' style='font-size:22px; font-weight:500; position:relative; top:5px;'>".$info['name']."</p>
          </a>
          <p id='content_intro'>".$info['introduction']."</p>
        </div>
        </div>
        ";
    endforeach;?>

</div>

</div>


</div>

</div><!--ここまでmain_box-->





<!--ここからfutter-->

<?php include 'common/include/futter.php';?>


</div><!--ここまでwrapper-->



</body>
</html>
