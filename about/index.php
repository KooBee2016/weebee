<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../common/include/db.php';?>
<?php include '../common/include/analytics.php';?>
<?php include '../common/include/css-js.php';?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" type="text/css" href="../css/css1.css" />-->

<title>KooBeeページ</title>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($) {
  
var nav    = $('#fixedBox'),
    offset = nav.offset();
  
$(window).scroll(function () {
  if($(window).scrollTop() > offset.top) {
    nav.addClass('fixed');
  } else {
    nav.removeClass('fixed');
  }
});
  
});
</script>
-->

<script type="text/javascript" src="../js/jquery.js"></script>

<script type="text/javascript">

$(function(){
     $('.image10').hover(function(){
        $(this).attr('src', $(this).attr('src').replace('_off', '_on'));
          }, function(){
             if (!$(this).hasClass('currentPage')) {
             $(this).attr('src', $(this).attr('src').replace('_on', '_off'));
        }
   });
});



</script>

<link href="../css/colorbox2.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="../js/jquery.colorbox.js" type="text/javascript"></script>
<script src="../js/Rollver.js" type="text/javascript"></script>


<script>
      $(document).ready(function(){
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel:'group1'});
        $(".group2").colorbox({rel:'group2', transition:"fade"});
        $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
        $(".group4").colorbox({rel:'group4', slideshow:true});
        $(".ajax").colorbox();
        $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
        $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
        $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
        $(".inline").colorbox({inline:true, width:"50%"});
        $(".callbacks").colorbox({
          onOpen:function(){ alert('onOpen: colorbox is about to open'); },
          onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
          onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
          onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
          onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
        });

        $('.non-retina').colorbox({rel:'group5', transition:'none'})
        $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
        
        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function(){ 
          $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
          return false;
        });
      });
    </script>
        


<link rel="stylesheet" type="text/css" href="../css/style.css" media="all" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="../js/fb/jquery.fancybox.css" media="all" charset="utf-8" />

<script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="../js/fb/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
$(function() {
  $(".fancybox").fancybox({
    padding:0,
    prevEffect: 'none',
    nextEffect: 'none',
    closeBtn: true,
    loop : false
  });
});
</script>

<link rel="stylesheet" type="text/css" href="../css/koobee.css" />

<script>
$(function() {

  //ページ内スクロール
  $(".btn_sample").click(function () {
    var i = $(".btn_sample").index(this)
    var p = $(".content").eq(i).offset().top;
    $('html,body').animate({ scrollTop: p }, 'fast');
    return false;
  });

  //ページ上部へ戻る
  $(".btn_top").click(function () {
    $('html,body').animate({ scrollTop: 0 }, 'fast');
    return false;
  });

});
</script>


</head>

<body>
<div class="wrapper">
<?php include '../common/include/header.php';?>
  <?php include'../common/include/gn.php' ?>
<div class="koobee" align="center">
<img src="image/koobee/logo.png"/>
</div>

<div class="nav" id="fixedBox" >
<a href="#about">
<img src="image/koobee/about_off.png"  class="naviicon1"/>
</a>
<a href="#work">
<img src="image/koobee/works_off.png" class="naviicon2" />
</a>
<a href="#system">
<img src="image/koobee/system_off.png" class="naviicon2"/>
</a>
<a href="#contact">
<img src="image/koobee/contact_off.png" class="naviicon3"/>
</a>
</div>

<div class="wrapper" style="clear:both;">
<img src="image/koobee/concept.png" style="margin:10px 20px;" id="about"/><br />
<img src="image/koobee/rinen.png" /><br />
<img src="image/koobee/works.png"style="margin:10px 20px;" id="work" /><br />
<img src="image/koobee/sasshi.png"style="margin:10px 20px;" /><br />
<img src="image/koobee/sasshitowa.png" />
</div>



<div class="weebeebox"><br />
<a href="http://weebee1212.com/">
<img src="image/koobee/weebeelogo.png" style="margin:10px 20px;"/><br />
</a>
<img src="image/koobee/weebeetowa.png" />
</div>


<div class="memberbox" >
<img src="image/koobee/member.png"style="margin:10px 20px;" id="system" /><br />

<img src="image/koobee/daihyo.png" class="image10" style="width:200px" />


<a class="fancybox" rel="gallery" href="#pon">
<img src="image/koobee/member/pon_off.jpg" class="image10" style="width:200px;" />
</a>
<br/>





<a class="fancybox" rel="gallery" href="#eigyou">
<img src="image/koobee/busyoeigyou.png" class="image10" style="width:200px" />
</a>

<a class="fancybox" rel="gallery" href="#sumiko">
<img src="image/koobee/member/sumiko_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#masami">
<img src="image/koobee/cmsoon.png" class="image10" style="width:200px;" />
</a>

<!--<a class="fancybox" rel="gallery" href="#tyanyuki">
<img src="image/koobee/cmsoon.png" class="image10" style="width:200px;" />
</a>-->

<a class="fancybox" rel="gallery" href="#toshi">
<img src="image/koobee/member/toshi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#teruma">
<img src="image/koobee/member/teruma_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#poni">
<img src="image/koobee/member/yoriko_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#maju">
<img src="image/koobee/member/maju_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#momoko">
<img src="image/koobee/member/momoko_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#hiroshi">
<img src="image/koobee/member/hiroshi_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#ai">
<img src="image/koobee/member/ai_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#haseken">
<img src="image/koobee/member/haseken_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#kazuyan">
<img src="image/koobee/member/kazuyan_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#yoshio">
<img src="image/koobee/member/hirayoshi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#natiyan">
<img src="image/koobee/member/nachiyan_off.jpg" class="image10" style="width:200px;" />
</a>
<br />

<a class="fancybox" rel="gallery" href="#design">
<img src="image/koobee/busyodesign.png" class="image10" style="width:200px" />
</a>

<a class="fancybox" rel="gallery" href="#haramaki">
<img src="image/koobee/member/haramaki_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#wasa">
<img src="image/koobee/member/wasa_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#tomoyo">
<img src="image/koobee/member/tomoyo_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#paka">
<img src="image/koobee/member/paka_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#rei">
<img src="image/koobee/member/rei_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#mai">
<img src="image/koobee/member/mai_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#saso">
<img src="image/koobee/member/saso_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#watti">
<img src="image/koobee/member/watti_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#arao">
<img src="image/koobee/member/arao_off.jpg" class="image10" style="width:200px;" />
</a>
<br />

<a class="fancybox" rel="gallery" href="#pr">
<img src="image/koobee/busyopr.png" class="image10" style="width:200px" />
</a>

<a class="fancybox" rel="gallery" href="#yusuke">
<img src="image/koobee/member/yusuke_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#yoshimu">
<img src="image/koobee/member/yoshimu_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#atsumi">
<img src="image/koobee/member/atsumi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#p">
<img src="image/koobee/member/p_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#numashi">
<img src="image/koobee/member/numashi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#ryota">
<img src="image/koobee/member/ryota_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#misaki">
<img src="image/koobee/member/misaki_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#moriyasu">
<img src="image/koobee/member/moriyasu_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#masashi">
<img src="image/koobee/member/masashi_off.JPG" class="image10" style="width:200px;" />
</a>
<br />

<a class="fancybox" rel="gallery" href="#hensyuu">
<img src="image/koobee/busyohensyu.png" class="image10" style="width:200px" />
</a>

<a class="fancybox" rel="gallery" href="#hatsumi">
<img src="image/koobee/member/hatsumi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#hikaru">
<img src="image/koobee/member/hikaru_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#kae">
<img src="image/koobee/member/kae_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#masuko">
<img src="image/koobee/member/masuko_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#jemi">
<img src="image/koobee/member/jemi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#nomu">
<img src="image/koobee/member/nomu_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#mako">
<img src="image/koobee/member/mako_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#ayu">
<img src="image/koobee/member/ayu_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#kayou">
<img src="image/koobee/member/kayou_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#tii">
<img src="image/koobee/member/tii_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#daiki">
<img src="image/koobee/member/daiki_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#web">
<img src="image/koobee/busyoweb.png" class="image10" style="width:200px" />
</a>


<a class="fancybox" rel="gallery" href="#kutsuno">
<img src="image/koobee/member/kutsuno_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#aimi">
<img src="image/koobee/member/aimi_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#gantz">
<img src="image/koobee/member/gantz_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#koba">
<img src="image/koobee/member/koba_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#amigo">
<img src="image/koobee/cmsoon.png" class="image10" style="width:200px;" />
</a>


<a class="fancybox" rel="gallery" href="#kiichi">
<img src="image/koobee/member/kiichi_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#shunki">
<img src="image/koobee/cmsoon.png" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#mozuku">
<img src="image/koobee/member/mozuku_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#masakon">
<img src="image/koobee/member/masakon_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#tuge">
<img src="image/koobee/member/tsuge_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#ojo">
<img src="image/koobee/member/ojo_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#misato">
<img src="image/koobee/member/misato_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#hana">
<img src="image/koobee/member/hana_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#mina">
<img src="image/koobee/member/mina_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#hitomi">
<img src="image/koobee/member/hitomi_off.JPG" class="image10" style="width:200px;" />
</a>
<br />



<a class="fancybox" rel="gallery" href="#camera">
<img src="image/koobee/busyokamera.png" class="image10" style="width:200px" />
</a>

<a class="fancybox" rel="gallery" href="#tsubasa">
<img src="image/koobee/member/tsubasa_off.jpg" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#takeyuri">
<img src="image/koobee/cmsoon.png" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#ririki">
<img src="image/koobee/member/ririki_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#nami">
<img src="image/koobee/member/nami_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#hiroko">
<img src="image/koobee/member/nishiko_off.JPG" class="image10" style="height:300px;" />
</a>

<a class="fancybox" rel="gallery" href="#reona">
<img src="image/koobee/member/reona_off.JPG" class="image10" style="width:200px;" />
</a>

<a class="fancybox" rel="gallery" href="#kou">
<img src="image/koobee/member/kou_off.JPG" class="image10" style="width:200px;" />
</a>

<br />
<div id="inquiry"></div>
<img src="image/koobee/contact.png"style="margin:40px 10px 20px 10px;" id="contact" /><br />

<div class="mailbox" style="text-align:center;">
        <!--メールフォーム用のHTMLタグはここから-->
            <form id="mailform" method="post" action="mailform/send.cgi" onsubmit="return sendmail(this);">
              <table border="0" cellspacing="0" cellpadding="0" class="mailform">
                <tr>
                  <th>メールアドレス<span>*</span><p>e-mail address</p></th>
                  <td><input type="text" name="email(必須)" size="50" maxlength="50" class="mf" /></td>
                </tr>

                <tr>
                  <th>名前<span>*</span><p>your name</p></th>
                  <td><input type="text" name="お名前(必須)" size="30" /></td>
                </tr>
                          <tr>
                  <th>件名<p>title</p></th>
                  <td><input type="text" name="件名" size="70" /></td>
                </tr>
                <tr>
                  <th>本文<span>*</span><p>inquiry body</p></th>
                  <td><textarea name="ご用件(必須)" rows="10" cols="70"></textarea></td>
                </tr>
                <tr>
                  <th><span>*</span>は必須項目です。</th>
                  <td><input type="submit" value="メールを送信する" /> <input type="reset" name="reset" value="リセット" /></td>
                </tr>
              </table>        
            </form>
      <link rel="stylesheet" href="../../mailform/mailform.css" type="text/css">
      <script type="text/javascript" src="mailform/mailform.js" charset="utf-8"></script>

</div>
      <!--ここまでコピー＆ペーストすればまず間違いないです-->

</div>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36914756-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



</body>
</html>


<div id="curie" class="cookies">
<div class="curie2">
<img src="image/koobee/curiemaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/curie.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
クリエイティ部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
KooBeeが提供する製作物のほとんどは私たちクリエイティ部が製作を担当します。活動の中心となるのは、なんと言っても
「神戸大学総合情報誌KooBee」の製作！1ページごとにメンバーが1人つき、そのページのデザインや編集を担当するので、
個人作業が多くなりますが、その分みんなで集まる週1回のミーティングを大切にし、
「みんなでつくろう！」という意識で取り組んでいます。ミーティングの内容としては、
デザインの知識やデザインソフトの技術を勉強したり、製作中のページを発表し合い、
みんなで意見を交換したり。毎年、地域のお店や企業の方々、
そして読者である神大生の期待に応えられるよう、より魅力的な冊子をつくり上げることが目標です。
</span>
</div>
</div>
</div>



<div id="eigyou" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/eigyou-2.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
営業部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">

営業部では、神大生と神戸のお店・企業を繋げるため、広告営業を行っています。
営業先は、カフェや服屋さん・美容院から大きな企業までとても幅広いです！
営業自体は個人で行くこともありますが、営業部みんなで営業練習をしたり、営業方法話し合ったりするので、
はじめは緊張していた子も、今では自信満々で営業しています！
営業部のmtは週一回で、読者と店舗・企業のことを第一に考えながら、掲載店舗選びからアフターケアまで様々な話し合いを行います。
営業部の自慢は、営業やミーティングへの本気と普段の楽しさのバランスが良いことです。冊子発行を支える責任感ある仕事ばかりなので、
辛いことやしんどいこともありますが、大好きな仲間がいるから頑張ることが出来ます(^o^)
</span>
</div>
</div>
</div>




<div id="pr" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/pr-2.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
PR部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
ＰＲ部は、より多くの神大生に冊子「KooBee」を手にとってもらい、運営するウェブサイト「WeeBee」を見てもらうために広報案を日々考え、実践しています。ビラ配りはもちろん、Twitter・Facebookの更新など広報方法は様々です。またKooBeeの団体理念実現のために新入生とサークル・部活をつなげるイベント「イッキ見！」を行うなど活動内容は多岐に渡ります。冊子を渡したい、情報を伝えたい人たちにちゃんとしっかり届くよう、工夫を凝らした広報活動を学校を中心に行っていますので、もし見かけたら少しでいいので耳を傾けていただけたらうれしいです！
</div>
</div>
</div>



<div id="web" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/web-2.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
Web部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
神大生に寄り添った情報を提供するために創設された神戸大学ポータルサイト"WeeBee"の運営を請け負う部署です。神大生に寄り添った情報とは何かを考え、企画立案・取材・デザインを行っています。まだまだ成長の余地があるWebを媒体としたサービスを通じて、WeeBeeが神大生にとって身近な存在になるよう、日々奮闘しています。
</span>
</div>
</div>
</div>

<div id="camera" class="cookies">
<div class="curie2">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/camera.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
カメラ部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
カメラ部はKooBee誌面やWebサイトのWeeBeeで使われるほぼ全ての写真を撮影する部署です。六甲・三宮の飲食店・美容院の写真や神大生のファッションスナップなど、幅広く撮影しています。大学からカメラを始めたメンバーなので、隔週のMTや月一回の撮影会を通して日々、技術アップを目指しています。
少しでも魅力が伝わるような写真を撮り、KooBeeの写真の質を上げることが目標です。
また今後は取材だけでなく、写真をメインとしてなにか神大生に向けて発信できないかを考えて活動していきたいと考えているので、乞うご期待ください！
</span>
</div>
</div>
</div>


<div id="design" class="cookies">
<div class="curie2">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/design.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
デザイン部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
デザイン部は、編集部が考える企画や、営業部がとってくる広告など、KooBeeの冊子のほぼすべてのページを実際にデザインして形にしている部署です。
毎週のミーティングで勉強会や批評会を重ねることで、よりよいものを作ろうと日々奮闘しています。

KooBee冊子のデザイン全体を任されてる責任重大な部署ですが、そのおかげでお互いの意見をぶつけ合えるほど仲が良いです！それぞれいいところは違うけど、批評し合うことで、それぞれの苦手なところを補い合っています。
みんな作ることが好きなので、楽しみながら真剣にまっすぐに取り組める雰囲気があるところも魅力です。
</span>
</div>
</div>
</div>


<div id="hensyuu" class="cookies">
<div class="curie2">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/hensyu.jpg" class="busyophoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
編集部
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
編集部は、KooBeeの活動軸の一つである”神戸大学総合情報誌KooBee”の企画を主に行っています。冊子の骨組みとなるコンセプトを考えることから始まり、その後、企画→取材→文章構成の流れを担います。どのような企画が神大生に求められているのか、どうすれば神大生にとっておもしろいものになるのか、などを熟考するために、週に一回のミーティングで批評会や勉強会を重ねています。「KooBeeが神大生の可能性になりたい」「神大生にKooBeeを読んで何かを始めて欲しい」という思いが詰まった究極の一冊が、ここにあります。
</span>
</div>
</div>
</div>






<div id="pon" class="cookies">
<div class="curie">
<img src="image/koobee/daihyomaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/pon_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
福田　茜
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「もっと素敵に、もっとかっこよく」<br />
どうもこんにちは。KooBeeメンバーと映画といい匂いの人が大好きなぽんたろすです。美味しいオムライスに出会えたときに幸せを感じます。

 昨年はデザイン部でリーダーを、今年は代表を務めさせていただきます。かっこよくて素敵な人になれるよう、日々考えて、あらゆることに真摯に取り組んでいきたいです。
 神戸大学生に愛される最高のKooBeeになるよう、全員で頑張りますので、応援よろしくお願いします！

</span>
</div>
</div>
</div>



<div id="sumiko" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/sumiko_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
綾田　澄子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「読者目線・企業目線」<br/>
 食べることと寝ること、誰かと喋ることが好きです。3年間営業部に所属しています。読者のみなさんと企業さんと、両方にメリットのある広告を提供することを心がけています。幸せを感じる瞬間は、新しい服を買うときです。

</span>
</div>
</div>
</div>


<div id="masami" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/cmsoon.png" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
長澤　修
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「営業先との繋がり」<br/>
KooBee営業部として活動し、今年で３年目です。契約を取ったらお終いではなく、契約を取ってから神大生にたくさん足を運んでもらうためにはどんな広報をすればいいかを一番に考えて日々活動しています。1日5食は欠かせません。
</span>
</div>
</div>
</div>


<!--<div id="tyanyuki" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/cmsoon.png" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
木村　友紀
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
<br />

</span>
</div>
</div>
</div>-->

<div id="toshi" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/toshi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
貞利　知晃
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
まだ知らない場所や人との出会いを楽しく感じます。だから旅は大好きです。KooBeeでは２年間営業部で活動しています。協力して頂いてる店舗様と神大生の双方が喜んでもらえるように、よく考え、誠実で素早い行動をしていきます。

</span>
</div>
</div>
</div>

<div id="teruma" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/teruma_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
青山啓太郎
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「出会った人を笑顔に変える」<br/>

KooBeeは今年で2年目で、一回生の時から営業部で活動しています。
KooBeeでの活動で大切にしてることは、その場の雰囲気作り。
というのも人が何かを楽しんで笑顔でいるのを見るのが好きで、自分も楽しいこと　おもしろいことが大好きだから。
 一緒に活動していく仲間、活動を通して出会う人たちとワクワク　楽しみを共感していきたいです。

</span>
</div>
</div>
</div>


<div id="poni" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/yoriko_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
平松依里子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「お店との架け橋に」<br/>

最近の趣味は美味しいインスタントコーヒーを見つけることです。KooBeeではお店と繋がることを大事にして活動しています。お店から感謝されたり仲良くなれた時、KooBee営業部で良かったなと思います。
</span>
</div>
</div>
</div>

<div id="maju" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/maju_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
浅田　真寿
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「スポーツが好きです。」<br/>
KooBeeではPRとして、イベント企画や広報に携わっています。
大切にしていることは時間を無駄にしないこと、チャレンジすること、です。
バイトを終えて原チャで走ってるときが幸せです。
</span>
</div>
</div>
</div>

<div id="momoko" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/momoko_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
神田 桃子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「100km走ります」<br/>
 走ることが好きです。KooBeeには入ったばかりですが、とりあえず笑って頑張りたいです。大切にしていることはrespect！モットーは楽しんで！やりたいことをやりたいときにやりたい派。走った後の白米が最高です。
よろしくお願いします。
</span>
</div>
</div>
</div>

<div id="hiroshi" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/hiroshi_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
藤岡徹
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「笑っておくこと」<br/>
会話をする時はなぜかいつも笑っています。藤岡徹です。ちなみに野球観戦が大好きです。今年KooBee2015営業部として活動を始めました。今は営業に食らいついていくことでいっぱいですが、営業を通してたくさんの方々と触れ合い、楽しんでいこうと思っています！
</span>
</div>
</div>
</div>

<div id="ai" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/ai_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
加藤　愛
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「マイペースに！」<br/>
KooBeeのメンバーにはクリエイティブで好奇心旺盛な人が多いです。そんな人達の中で刺激を受けながら、自分も自分なりに成長していけたらと思っています。
個人的な目標としては、熊ころりを一合飲めるようになることです。
精一杯頑張りますのでよろしくお願いします。
</span>
</div>
</div>
</div>

<div id="haseken" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/haseken_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
長谷川 健
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「今を楽しむ！！」<br/>
 関西のノリのよさ、笑いに対するストイックさ、大好きです。KooBeeでは営業部として、常に相手の立場にたって考えることを大切に活動しています。サッカー雑誌の発売日に幸せを感じます！
</span>
</div>
</div>
</div>

<div id="kazuyan" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/kazuyan_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
赤松　知喜
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「炭酸せんべい食べたい」<br/>
今年から営業部として活動することになりました。まだまだ分からないことも多く不安もありますが、ワクワクした気持ちでいっぱいです。活動していく中で自分に出来ることや役割を見つけられたらなと思っています。好きなお菓子は炭酸せんべいなのですが、こっちに来てからは売ってないのでショックです。
</span>
</div>
</div>
</div>

<div id="yoshio" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/hirayoshi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
平葦 圭
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「輪らいを大事に」<br/>
 誰かと一緒に笑いあっていることが好きです。笑っていると何か良いことがあると信じて生きています。KooBeeでは営業部に配属されて3ヶ月くらいです。KooBeeでは遊ぶときと真面目に営業の勉強をするときのメリハリを大事にしています。営業を通じて色々な人との輪を広げていきたいと思っています。 実家の犬との戯れは至高です。
</span>
</div>
</div>
</div>


<div id="natiyan" class="cookies">
<div class="curie">
<img src="image/koobee/eigyoumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/nachiyan_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
上田 夏実
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「自分らしさ」<br/>
すべての時においてとにかく自分らしくあること、これを大切にしています。自分らしく自分の大好きなものを追いかけるときが一番自分らしいなとおもいます。KooBeeでは営業部の一員として駆け出したばかりで、KooBeeの縁の下の力持ちのほんの一部にでもなれるように自分らしく、笑顔を忘れずがんばります。みなさん、宝塚、みましょう。
</span>
</div>
</div>
</div>


<div id="kutsuno" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/kutsuno_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
沓野　圭太
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「わくわくを大切に」<br/>
わくわくすることが大好きです。知らないどこかへ行ったり、新しいことにチャレンジすることに魅力を感じます。 KooBeeではWebとして3年間活動しています。 Webという媒体を通じ、新たな価値・文化を提供できたらなと思って活動しています。 WeeBeeを神大の文化にしていきたいです。 二度寝の時間は譲れません。
</span>
</div>
</div>
</div>

<div id="aimi" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/aimi_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
福山 愛美
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「いつも笑顔で」<br/>
野球観戦、友だちとどこかに出かけることが大好きです。自分の好きなものを見つけると、とことんハマって抜けられなくなります。KooBeeでは、Web部として２年間活動してきました。いつも笑顔を忘れず、楽しく活動することを大切にしています。たこ焼きを食べている時に幸せを感じます。
</span>
</div>
</div>
</div>

<div id="gantz" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/gantz_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
岡 千鶴
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「どこまで転がるか、それは誰にもわかりません」<br/>
たべることねること、基本のんびりがだいすきです。実家の愛犬とじゃれる時間は最高！KooBeeでは2年間、web部で活動しています。あたりまえの幸せを忘れずに、自分にできることを精一杯、丁寧にしていきたいです。
</span>
</div>
</div>
</div>

<div id="koba" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/koba_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
小林 禎亮
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「ミーハー精神を忘れない」<br/>
 楽しいこと、オシャレなこと、かっこいいもの、人と話すことが大好きです。何でも素敵だなあって思うミーハー精神を忘れず、それをチャレンジ精神に還元し、挑戦していきます。
 常に笑顔を忘れず、人を愛し、人に愛される人間になりたいと思っております。
</span>
</div>
</div>
</div>

<div id="amigo" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/cmsoon.png" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
森下　あみ
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「マイナスもプラス、何事も学びたい」<br/>

web部2年目になりました。まだまだ勉強することの多い分野で、この1年でどれだけ学べるかたのしみでもあります。縁の下の力持ちという言葉が好きで、そうなりたいと感じています。中高の吹奏楽部では低音パート、野球部ではマネージャーをしていました。KooBeeではみんながワクワクに向かって全力疾走するサポートをしたいと思い、まめやかさを大切に活動しています。
</span>
</div>
</div>
</div>

<div id="kiichi" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/kiichi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
森下　喜一
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">

</span>
</div>
</div>
</div>

<div id="shunki" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/cmsoon.png" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
阿部 峻己
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「一番良いと思うものを」<br/>
KooBeeではWeb部、カメラ部に所属しています。Web部では主にデザインをやっておりWeeBeeのスライド、アイコンを作っています。
カメラ部ではWeeBeeに使われる写真の撮影に行っています。
 今自分ができる一番いいものを作ってみんなに提供・発信していくことを一番に心掛けています。
カメラ・HTML・デザインすべてオールマイティにこなせる人材になりたいです！
 誰かのためになにかしているときと予定の無い休日に幸せを感じます！
</span>
</div>
</div>
</div>

<div id="mozuku" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/mozuku_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
日下部邑里
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「いつでもえがおで」<br/>

KooBeeでは昨年はクリエイティブ部、今年はWeb部のデザインチームとして活動しています！
皆がしんどいときにこそ周りを元気づけられるような存在になりたいです＾＾
美味しいものを食べているときと、新しいわくわくに出会ったときが1番しあわせです。
</span>
</div>
</div>
</div>

<div id="masakon" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/masakon_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
近堂　雅祐
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「ロジカルを追究」<br/>
KooBeeではWeb部としてWeeBeeのデザインを行っています。デザインのロジックを効果的に用い、見る人の心にすっと入るクールなデザインを目指していますが、その中にも神大の楽しい雰囲気や躍動感を表現することを大事にしています。ロックを聴いている時間が至福です。
</span>
</div>
</div>
</div>

<div id="tuge" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/tsuge_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
柘 翔太
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 省エネモードで生きています<br/>
趣味はダラダラする事です。
KooBeeでは6月からWeb部として活動しています。
ダラダラするのが好きですけど、しっかりやる時はやる、をモットーに生きています！
 幸せを感じる時は寝てる時とやらなければいけない事をやり切った時です！
</span>
</div>
</div>
</div>

<div id="ojo" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/ojo_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
竹田 みのり
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「いつも明るいね、と言われる人に」<br/>
 人生、明るく楽しんだひとが勝ち！忙しいときや辛いときでも笑顔と元気を忘れず、なにごとも楽しんでいくつもりです。
KooBeeではWeb部1年目です。まだまだ勉強することは沢山ありますが、WeeBeeが素敵な神大ライフを過ごすためのツールとなるよう、こぴっと精進していきたいです。
 好きなことは、踊る、食べる、褒められることです。
</span>
</div>
</div>
</div>

<div id="misato" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/misato_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
福島 美里
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「ゆるく、全力で」<br/>
 自分の出来ると思ったことはやり抜きたいです。負けず嫌いです。洋服と音楽と二度寝を特に愛してます。koobeeではwebとして6月から活動しています。ページを見た人が「素敵」と感じるようなデザインを作りたいです。
</span>
</div>
</div>
</div>

<div id="hana" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/hana_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
田中 華子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「明るく笑顔で」<br/>
どんなときも、笑顔で明るくいることを大切にしています。KooBeeもwebでの活動もまだ1年目ですが、様々な人との出会いを大切にして、多くのことを吸収していきたいです。主食よりも間食が好きです。
</span>
</div>
</div>
</div>

<div id="mina" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/mina_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
 高井 美菜子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「いつでも楽しく積極的に」<br/>
 今年からKooBeeに入りました。サイトを見てくださっている方々に必要とされるWebサイト作りをしていきたいです。また、どんな場であっても楽しく積極的に活動したいです。睡眠と手芸が好きで、美味しいものを食べているときが幸せです。
</span>
</div>
</div>
</div>

<div id="hitomi" class="cookies">
<div class="curie">
<img src="image/koobee/webmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/hitomi_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
松木 仁美
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 何事も挑戦！<br/>
わたしのモットーはとにかく自分から行動してみることです。やらずに後悔するくらいなら、やって後悔しようって。だから大学でジャグリングとテニスを始めてがんばって練習しています。あとは、人の笑顔を見るのが大好きです。だかkoobeeのweb部として、人を笑顔にできるweebeeぺージを作りたいです。
</span>
</div>
</div>
</div>

<div id="yusuke" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/yusuke_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
加藤 優介
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「アメリカ仕込みのポジティブ」<br/>
アメリカで数年過ごしたせいか、楽観的に考え、何事も楽しんで生きています。営業、ＰＲ部を経て、今はＰＲ部のリーダーを務めています。「3年生」という枠に収まらないよう気をつけながら、攻撃的に活動しています。風呂は汗をかくためにある！
</span>
</div>
</div>
</div>


<div id="yoshimu" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/yoshimu_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
吉本悠一郎
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「迷ったらやってみる!!」<br/>
スポーツ(特にサッカー)と昼寝が大好きです。KooBeeでは3年連続 PR部で活動しています。経験も活かしつつ、相手の気持ちを考えながらKooBeeの魅力をより神大生に発信していけたらなと思います。
</span>
</div>
</div>
</div>

<div id="atsumi" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/atsumi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
岡村 淳美
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「楽しむ」<br/>
好きなことはダラダラすることです！どんなに忙しくても、ゆっくりする時間は譲れません！KooBeeは3年目です。KooBeeでは冷静に物事を見ることを大事にしています！3回生として、PR部の柱になれたらと思っています！
</span>
</div>
</div>
</div>


<div id="p" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/p_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
徳永　彩可
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「頑丈な体」<br/>
PR部で活動して2年目です。
KooBeeでは思いやりを大切にしたいと思っています。
 食べること、寝ること、乗り物に乗ること、夜歩き、読書、カラオケが好きです。みんなでご飯を食べているときが一番幸せです。
</span>
</div>
</div>
</div>

<div id="numashi" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/numashi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
浅沼里緒奈
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「描いたことを実現していく」<br/>
ひとりでのんびりするのも、しょうもないことから真剣なことまで人と話すのも好きです。 KooBeeでは2年連続でPR部で活動してきました。客観性をもち、みんなで考えた広報や企画をちゃんと実現へ向かわせられるようにと考えながら活動しています。視野を広くもちたいので、たくさんの人と話し、たくさんのチャレンジもしていきたいです。
</span>
</div>
</div>
</div>


<div id="ryota" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/ryota_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
中川 諒太
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「見た目は軽め、心は重め」<br/>
 外部との橋渡しを担うPR部に所属し、KooBeeの魅力をいろんな人に知ってもらえるようにみんなで議論しています。その中で情報の受け手が何を求めているのかを考えだせるように心がけています。
 日々の生活では「何もないのが1番幸せ」をモットーに、家で充実したダラダラを過ごせた日に至高の幸せを感じるタイプの人間です。
なので趣味の読書などで1日が終わると、これ以上ない満足感に浸っています。
</span>
</div>
</div>
</div>

<div id="misaki" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/misaki_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
松本 美咲
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「人との関わりで新鮮な毎日を」<br/>
 読書や人との会話によって、新しいことを学ぶのが日々の楽しみです。KooBeeではPR部として活動しています。KooBeeの活動でも人と積極的に関わっていきたいです。ベットの中で過ごすのが至福の時間です。
</span>
</div>
</div>
</div>

<div id="moriyasu" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/moriyasu_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
守安　亮祐
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「UVER大好きベーシスト」<br/>
趣味はベース弾くこと、音楽聴くこと。一人でのんびりしてる時間が一番好き！色んなことできるから！
KooBeeのFacebookページ良かったら"いいね"してください笑
</span>
</div>
</div>
</div>

<div id="masashi" class="cookies">
<div class="curie">
<img src="image/koobee/prmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/masashi_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
岸本 雅史
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「楽しむ気持ちを大切に」<br/>
どんなことでも楽しむ気持ちで取り組む事をもっとーに〆切を守って丁寧な仕事をすることを心がけて今年からPR部として活動しています。好きなことは音楽を聴くこと、学校の帰りの電車でうたた寝しながら音楽を聴く時間に幸せを感じます。
</span>
</div>
</div>
</div>

<div id="hatsumi" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/hatsumi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
田中 はつみ
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「人にやさしく自分に厳しく、がモットー。」<br/>
誰かのために、何かを、みんなと作り上げることが好きです。
 忙しい毎日が幸せ。一緒に頑張れる仲間がいることが幸せ。頼られることが幸せ。
 人に何かを求めるときはまずは自分を見つめ直し、メンバーの思いを大切に活動しています。
</span>
</div>
</div>
</div>

<div id="hikaru" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/hikaru_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
田中 光
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「自分がされて嬉しいことを」<br/>
 人を喜ばせることが好き！
 人の考えを知ることが好き！
2年間の営業部を経て、
 最後の年は編集部に全力を注ぐ。
チームに貢献するために最適な役割を担い、全うすることを常に心がけています。自己満足でやってることで、ありがとうって言われたら、最高やなあ。
</span>
</div>
</div>
</div>

<div id="kae" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/kae_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
糸川 佳絵
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「しっかりじっくりとことん」<br/>
2年間PRで活動し、今年から編集のメンバーとしてKooBeeに参加しています。決して器用な方ではありませんが、一つのことに対して、誠実に向き合う姿勢は今までも、これからも大切にしていきたいと思っています。食べること、寝ること、友だちとわいわいすること、一人でまったりすること、どれも欠かせません！<br/>
</span>
</div>
</div>
</div>

<div id="masuko" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/masuko_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
菊池 はるな
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「いつも感謝と感動を。」<br/>
いつもたくさんの人や環境にたくさん刺激を得ています。そのことを当たり前と思わずに感謝することを大切にしています。KooBeeでは編集部とカメラ部に所属し、伝える相手に感動を与えたい、という気持ちで日々活動しています。スピード感を持って生きたいと思う今日この頃です。
</span>
</div>
</div>
</div>

<div id="jemi" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/jemi_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
高塚 美佑
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「史上最高KooBeeを提供したい」<br/>
 編集部リーダーをさせてもらってます、高塚美佑です。静かなあたたかい空間で、ほっと一息つくことが何よりも幸せ。「笑顔・感謝・前向き」をモットーに、史上最高のKooBee冊子を作るべく、活動いたします！
</span>
</div>
</div>
</div>

<div id="nomu" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/nomu_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
野村 昌弘
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「一歩引いて見る」<br/>
KooBeeでは編集部に所属していて6月から活動が始まりました。企画や特集など、冊子の中身を考えていく編集部では、一つの角度から物事を見るだけだと柔軟な発想が生まれません。だから常に一歩引いて、幅広い視野で物事を捉えるように努めています。好きなものことにはお金は惜しみません。
</span>
</div>
</div>
</div>

<div id="mako" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/mako_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
亀岡 真子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「言葉のお届け人まこまこ」<br/>
 好きなことは、言葉に関わることです。KooBeeは1年目で、今は文書の勉強を頑張っています。モットーは、「無駄なく不足なく伝える」ことです。みんなと自分で想いを共有できることが一番幸せです！
</span>
</div>
</div>
</div>

<div id="ayu" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/ayu_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
本田 亜優
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「ビビらずに前へ、」<br/>
 人の笑う顔や、はしゃぐ姿を見ることが大好きです。KooBeeでは編集部として企画の発案や取材などを行っています。冊子作成に直接関わる部署だからこそ、"目配り・気配り・心配り"をモットーに、本気で人に向き合いたいと思っています。
 夜目覚ましをセットしないでいいとき、幸せを感じます。
</span>
</div>
</div>
</div>

<div id="kayou" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/kayou_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
有馬 佳瑶
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「笑顔で前向きに」<br/>
 今年、Koobeeの編集部に入りました｡他の人の意見を尊重しながら、さらに良いものにならないか考え、責任をもって行動することを心掛けるようにしています｡
Koobeeがもっと多くの人に親しまれるものにしていきたいです。
 読書と考え事をするのが好きで、スイーツを食べるのが至福のひとときです。
</span>
</div>
</div>
</div>

<div id="tii" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/tii_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
辻 知奈美
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「笑顔！！」<br/>
 人見知りなのに人と話すことと食べることと寝ることが大好きです！KooBeeでは編集部として活動しています。いつも笑顔でいることを大切にしていきたいと思っています！
</span>
</div>
</div>
</div>

<div id="daiki" class="cookies">
<div class="curie">
<img src="image/koobee/hensyumaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/daiki_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
矢野 大貴
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「好奇心旺盛」<br/>
積極性を大切にして興味があるものには全て挑戦することをモットーに！
KooBeeでは妥協無しで最高のものを作ります！
</span>
</div>
</div>
</div>


<div id="haramaki" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/haramaki_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
大原 万季
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「あなたのおなかを包みます」<br/>
のんびりすることが好きです。デザイン部3年目です。よりよいものをつくろうと試行錯誤しております。時間がたっぷりあるときに、つめたーいカフェオレなんか飲んで、あー何しよっかなて考えてるときが幸せです。
</span>
</div>
</div>
</div>

<div id="wasa" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/wasa_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
宇田 和紗
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「こだわりとアンテナ、伝える存在に」<br/>
KooBeeでは私らしさや「見た人に伝えること」を大切に写真を撮ったり、デザインをしています。
 「センスは知識から」というある人の言葉に魅力を感じ、まだ見ぬ世界や 知識 を得るために 常にアンテナをはることを意識しています。
 何気ない風景、みんなのふとした笑顔を写真にきりとることが大好きです。
</span>
</div>
</div>
</div>

<div id="tomoyo" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/tomoyo_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
谷 知代
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「喜んでもらえるように」<br/>
 好きなことは、絵を描いたり、ひとりでぶらぶらと買い物することです。KooBeeでは2年間誌面デザインを担当しています。まだまだ自信が持てないことが多いけれど、自分が作ったデザインで人が喜んでくれるときはこの上ない幸せです。
</span>
</div>
</div>
</div>

<div id="paka" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/paka_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
玉泉恵里奈
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「やれと言われたら自炊だってします」<br/>

最近、宇宙的なものが好きです。去年はクリエイティ部、今年はデザイン部に所属し、低身長を活かしたプレーを心掛けています。モットーは、家の赤い犬の抱き枕を人として接することです。幸せを感じる瞬間は、赤ちゃんがこちらに走ってくるときです。
</span>
</div>
</div>
</div>

<div id="rei" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/rei_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
大西 玲
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 KooBee でしかできないことを！<br/>
 家具がすごい好きで、家具雑誌とか結構読みます。KooBeeは一年目ですが、有言実行をモットーに、KooBeeでしかできないことをしたいです。わらび餅は主食です。
</span>
</div>
</div>
</div>

<div id="mai" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/mai_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
松宮 麻衣
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 　自分らしく！<br/>
 　KooBeeではデザイン部として活動を開始したばかりですが、これから見る人が引き込まれるようなデザインを作れるように成長したいです。キラキラした思い出になるように、自分らしく楽しみながらやっていきたいです！
</span>
</div>
</div>
</div>

<div id="saso" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/saso_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
林 麗音
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 韓ドラがすき！またこの展開か　と思いつつみちゃいます。なにも予定ない日の朝とかもすきで、幸せを感じます！自分のキャッチコピーは「やるときはやる女」！koobeeにデザイン部として入ってまだ4ヶ月ですが、わがモットーであるシンプルイズベストを大事にしつつ、「koobeeはみんなでつくっている！」という意識をもって、これから先も活動していきたいです！
</span>
</div>
</div>
</div>

<div id="watti" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/watti_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
渡会 早紀
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「日々、発見」<br/>
 旅先で、日常の中で、未知と出会うことが好きです。この春からkoobeeのデザイン部で活動しています。koobeeの活動では、チャレンジ精神で能動的に吸収していきたいです。人の温かさに触れたとき幸せを感じます。
</span>
</div>
</div>
</div>

<div id="arao" class="cookies">
<div class="curie">
<img src="image/koobee/designmaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/arao_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
荒川 博規
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
 「常にアンテナを」<br/>
KooBeeではデザイン部として活動しており、誌面の作成に携わっています。いいものを生み出すには、日常生活の中で常にアンテナを張って引き出しを増やしておくことが必要だなぁと思う今日この頃です。海とか川を眺めることが好きです。
</span>
</div>
</div>
</div>

<div id="tsubasa" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/tsubasa_off.jpg" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
塩見 翼
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「魅力を伝える」
ラーメンと写真をこよなく愛す男。
KooBeeではカメラマンと兼任して誌面・Webデザインを担当したほか、
今年は新設したカメラ部のリーダーを務める。
愛媛の離島育ちで田舎独特の人の良さに定評があるが、マイペースなのが短所でもある。
好きな写真家は、ウィリアム・クラインと中川正子
特技はゲートボール。
</span>
</div>
</div>
</div>

<div id="takeyuri" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/cmsoon.png" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
武田侑里子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「あなたの笑顔が生きがいです」
サプライズとかをして誰かに喜んでもらうことが大好きです☻楽しいこと、イベント大好き！
2回生から入って営業部→カメラ部です！やりたい事は全部やるがモットーで、全ての活動を充実させて、色んなことに還元したいと思っています！
</span>
</div>
</div>
</div>

<div id="ririki" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/ririki_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
中林　理力
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
カメラ部中林理力です。カメラうまくなりたいです。趣味はTSUTAYAで歩き回ること。KooBeeはいってまだ数ヶ月ですが、4人のスナップ撮らせてもらいました。カメラを通して人とのつながりを大切にしていきたいです。モットーは謙虚に生きること。なにかしらほめられたときに幸せを感じます。
</span>
</div>
</div>
</div>

<div id="nami" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/nami_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
吉田　奈美
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
今年からKooBeeカメラ部で活動しています。そのものや人の良さを引き出せるような写真を撮っていきたいです。
音楽、映画、旅行など楽しいことが大好きです！いろんなものを見て挑戦して吸収していきたいです。
</span>
</div>
</div>
</div>

<div id="hiroko" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/nishiko_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
大西　紘子
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「何事にも全力で」
手芸や工作などのモノづくりが趣味で、完成したときの達成感を味わうのが好きです。いろんなことに最後まで全力で取り組むことをモットーとしています。失敗もあるけどやる気はいつもあります。KooBeeでは自ら行動できるような人を目標に頑張っていきたいです。
</span>
</div>
</div>
</div>

<div id="reona" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/reona_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
藤井玲緒奈
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「ありがとうを忘れない」</br>
甘いものがとてもとても好き
常になにか甘いものをたべている
声をかければ何か出てくるかも

KooBeeでは新設部署であるカメラ部に所属。一回生はカメラ娘と呼ばれる変態女子と男子2人とで活動中

生粋の大阪育ちであるため大阪弁のお手本だが敬語になるとなぜか標準語でしか喋れなくなることに悩んでいる。
特技は器械体操
</span>
</div>
</div>
</div>

<div id="kou" class="cookies">
<div class="curie">
<img src="image/koobee/cameramaru.png" style="width:100px;"/>
</div>
<div class="leftbox">
<img src="image/koobee/member/kou_off.JPG" class="memberphoto" />
</div>
<div class="rightbox">
<div class="namebox">
<span class="name">
中川　晃
</span><br />
</div>
<div class="introductionbox">
<span class="introduction">
「活かした写真を撮る」  <br/>
撮る、着る、寝ることが好き。
Koobeeでは、カメラマンとして主にスナップの撮影を好んで行っている。
モデルを活かした写真を撮れるように日々勉強中。 
気晴らしは散歩。
</span>
</div>
</div>
</div>
<?php include'../common/include/futter.php' ?>
</div>
</body>
</html>