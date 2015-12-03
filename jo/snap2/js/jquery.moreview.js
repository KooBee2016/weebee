$(function() {
  var firstList = 2, //最初に表示するリスト数
      moreList = 2;　//追加するリスト数

  $("#js-list_spring").children('li').slice(0,firstList).css("display", "block").addClass('js-block');
  $("#js-list_summer").children('li').slice(0,firstList).css("display", "block").addClass('js-block');
  $("#js-list_autumn").children('li').slice(0,firstList).css("display", "block").addClass('js-block');
  $("#js-list_winter").children('li').slice(0,firstList).css("display", "block").addClass('js-block');
  //最初に表示するリストを表示する


 $("#js-tab_main").click(function() {　//タブを選択した時にその季節の表示liの数でmore view 出現させるかどうかのif
  var list = $(".js-on").find(".js-block").length;
  var maxList = $(".js-on").children('li').length;
  if (list < maxList) {　//liが最大数に達している場合はmoreviewは出現させない。達していない場合は出現させる
          $('#js-more').css("display","block");
          $('div.snap-other').css("padding-top", "150px");
        } else {
          $('#js-more').css("display","none");
          $('div.snap-other').css("padding-top", "377px");
        };
 });
  
    $("#js-more").click(function(){
        var list = $(".js-on").find(".js-block").length;　//表示されているliの数
        var maxList = $(".js-on").children('li').length;　//その季節全体のliの数
        //#listのリストが現在いくつあるか調べ、listに代入
        list = list + moreList;
        //listにmoreList分だけ追加する
        $('.js-on li').slice(0,list).slideDown().addClass('js-block');
        //list li の一番からlistまでを表示する
        if (list < maxList) {　//liが最大liの数まで達した場合はmoreviewを表示しない
          $('#js-more').css("display","block");
          $('div.snap-other').css("padding-top", "150px");
        } else {
          $('#js-more').css("display","none");
          $('div.snap-other').css("padding-top", "377px");
        };
    });
});