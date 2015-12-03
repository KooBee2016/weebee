

$(function() {
  //クリックしたときのファンクションをまとめて指定


  //以下、親ページ
  $('#js-tab_main li').click(function() {

    //.index()を使いクリックされたタブが何番目かを調べ、
    //indexという変数に代入します。
    var index = $('#js-tab_main li').index(this);

    //コンテンツを一度すべて非表示にし、
    $('#js-tab_sub ul').removeClass('js-on').hide();

    //クリックされたタブと同じ順番のコンテンツを表示します。
    $('#js-tab_sub ul').eq(index).addClass('js-on').fadeIn();

    //一度全ての画像をオフにし、
    $("#js-tab_main li").eq(0).children('img').attr('src', 'img/spring.png');
    $("#js-tab_main li").eq(1).children('img').attr('src', 'img/summer.png');
    $("#js-tab_main li").eq(2).children('img').attr('src', 'img/autumn.png');
    $("#js-tab_main li").eq(3).children('img').attr('src', 'img/winter.png');


    //クリックされたタブのみ画像をオンにします。
    if (index == 0) { //spring
      $(this).children('img').attr('src', 'img/spring_on.png')};
    if (index == 1) { //summer
      $(this).children('img').attr('src', 'img/summer_on.png')};
    if (index == 2) { //autumn
      $(this).children('img').attr('src', 'img/autumn_on.png')};
    if (index == 3) { //winter
      $(this).children('img').attr('src', 'img/winter_on.png')};

  });


  //以下、子ページ
  $('.js-tab li').click(function() {

    //.index()を使いクリックされたタブが何番目かを調べ、
    //indexという変数に代入します。
    var index = $('.js-tab li').index(this);

    //コンテンツを一度すべて非表示にし、
    $('.js-content li.js-list').hide();

    //クリックされたタブと同じ順番のコンテンツを表示します。
    $('.js-content li.js-list').eq(index).fadeIn();

    //一度タブについているクラスselectを消し、
    $('.js-tab li').removeClass('js-select');

    //クリックされたタブのみにクラスselectをつけます。
    $(this).addClass('js-select')
  });
});

