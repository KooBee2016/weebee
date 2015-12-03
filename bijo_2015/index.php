<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include '../common/include/db.php';?>
<?php include '../common/include/analytics.php';?>
<?php include '../common/include/css-js.php';?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WeeBee</title>

<!--<link href="../css/css1.css" rel="stylesheet" type="text/css" />-->
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

<script type="text/javascript">


$(document).ready(
  function(){
    $(".pic") .hover(function(){
       $(this).fadeTo("1000",0.3); // マウスオーバーで透明度を30%にする
    },function(){
       $(this).fadeTo("4000",1.0); // マウスアウトで透明度を100%に戻す
    });
  });

</script>

<link rel="stylesheet" href="../css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/thickbox.js"></script>


<script type="text/javascript">
function mainmenu(){
$(" #menu ul, #menu-tate ul").css({display: "none"}); // Opera Fix
$(" #menu li,#menu-tate li").hover(function(){
    $(this).find('ul:first').css({visibility: "visible",display: "none"}).show(400);
    },function(){
    $(this).find('ul:first').css({visibility: "hidden"});
    });
}

 $(document).ready(function(){          
  mainmenu();
});
    </script>


<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
<link href="about.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../mailform.css" type="text/css">
<script type="text/javascript" src="../jquery.js"></script>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36914756-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script></head>

<body>

<div class="wrapper">

<?php include '../common/include/header.php';?>
<?php include'../common/include/gn.php'; ?>
<div class="contents" style="padding-top: 60px; padding-bottom: 60px;">
      <img src="image/top.png"  style="text-align:center;"/>

  <div class="mainbox"　style="margin:0px auto;" >
    
  <div class="main-contents">

      <img src="image/stuation.png" />
      
      
      <iframe width="990" height="557" src="https://www.youtube.com/embed/09tzc16EjAM" frameborder="0" allowfullscreen></iframe>
      
      
      <img src="image/sure.png" />
      
      
<iframe width="990" height="557" src="https://www.youtube.com/embed/RjHZnpIlSN0" frameborder="0" allowfullscreen></iframe>
      
      
      
</div><!--メインコンテンツ-->
</div>


      <img src="image/line.png" style="text-align:center;"/>
    </div>


<?php include '../common/include/futter.php'; ?>
</div>





</body>
</html>
