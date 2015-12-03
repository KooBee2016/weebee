(function($) {
	$.fn.jsRollver = $(function() {
		$.hamFunction.opacityRollOver({
			fnClass:'.over',	/*適応させる部分の変更(,区切りで複数指定可)*/
			opacityDef:1.0,		/*デフォルトの透明度指定*/
			fadeTime:200,		/*フェードの時間指定*/
			opacityOn:0.6,		/*マウスオーバー時の透明度の指定*/
			opacityOff:1.0		/*マウスアウト時の最初の透明度の指定*/
		});
	});

	$.hamFunction = {
		opacityRollOver: function(options){
			var c = $.extend(options);
			$(c.fnClass).each(function(){
				$(this).css('opacity',c.opacityDef).hover(
					function(){
        				$(this).fadeTo(c.fadeTime,c.opacityOn);
        			},
    				function(){
        				$(this).fadeTo(c.fadeTime,c.opacityOff);
   					}
   				)
			});
		}
	};
})(jQuery);
