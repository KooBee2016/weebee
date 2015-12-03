<script type="text/javascript" src="http://www.weebee1212.com/common/js/jquery.min.js" ></script>
  <script type="text/javascript" src="http://www.weebee1212.com/common/js/thickbox.js" ></script>
  <script type="text/javascript">
    function mainmenu(){
$(" #menu ul, #menu-tate ul").css({display: "none"}); // Opera Fix
$(" #menu li,#menu-taNte li").hover(function(){
  $(this).find('ul:first').css({visibility: "visible",display: "none"}).show(400);
},function(){
  $(this).find('ul:first').css({visibility: "hidden"});
});
}

$(document).ready(function(){          
  mainmenu();
});
</script>


<script type="text/javascript">
  jQuery(function($) {

    $("#menu").css("margin-bottom","0px");
    var nav    = $('#menu'),
    offset = nav.offset();
    $(window).scroll(function () {
      if($(window).scrollTop() > offset.top - 1) {
        $("#menu").css("margin-top","0px");
        $(".header").css("margin-bottom", $("#menu").height() + "px");
        nav.addClass('fixed');
      } else {
        nav.removeClass('fixed');
        $("#menu").css("margin-top","-1px");
        $(".header").css("margin-bottom", "0px");

      }

    });
  });
</script>

<!--Aタグで囲まれた文字の色を変えていますよ-->
<style type="text/css">
a:link {
  color:#333333;
  line-height: 1.6;
  font-family: Quicksand, 游ゴシック体, 'Yu Gothic', YuGothic, 'ヒラギノ角ゴシック Pro', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;  
}
        
a:visited{color:#333333;
          line-height: 1.6;
          font-family: Quicksand, 游ゴシック体, 'Yu Gothic', YuGothic, 'ヒラギノ角ゴシック Pro', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;  
} 
        
a:hover{
  color:#333333;
  line-height: 1.6;
  font-family: Quicksand, 游ゴシック体, 'Yu Gothic', YuGothic, 'ヒラギノ角ゴシック Pro', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;  
} 
        
a:active{
  color:#333333;
  line-height: 1.6;
  font-family: Quicksand, 游ゴシック体, 'Yu Gothic', YuGothic, 'ヒラギノ角ゴシック Pro', 'Hiragino Kaku Gothic Pro', メイリオ, Meiryo, Osaka, 'ＭＳ Ｐゴシック', 'MS PGothic', sans-serif;  
} 
 </style>

<link href="http://www.weebee1212.com/common/css/reset.css" rel="stylesheet" type="text/css" />
<link href="http://www.weebee1212.com/common/css/thickbox.css" rel="stylesheet" type="text/css" />
<link href="http://www.weebee1212.com/common/css/common.css" rel="stylesheet" type="text/css" />
<link href="http://www.weebee1212.com/common/css/gn.css" rel="stylesheet" type="text/css" />
<link href="http://www.weebee1212.com/common/css/index.css" rel="stylesheet" type="text/css" />

 