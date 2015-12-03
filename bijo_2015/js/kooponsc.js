var objPageScrollTimer;                       // タイマーオブジェクト
var intPageScrollTimerInterval = 5;		// 移動時間間隔（ms）
var intPageScrollRate = 5;				// 移動する距離割合（現在位置から目的地までの○○%分移動させる）
var intPageScrollGoalTop;				// 目的のY座標

//ページ内の指定したID属性のタグまでスクロールする
function pageScroll(objID)
{
    // タイマー初期化
    if (objPageScrollTimer) clearInterval(objPageScrollTimer);
    
	if(document.getElementById(objID)){
        
        // 現在のY座標を取得
        var intNowY = document.documentElement.scrollTop || document.body.scrollTop;
        // 目的の要素までのY座標距離を取得
		var objBounds = document.getElementById(objID).getBoundingClientRect();
        
        // 目的の要素のY座標を取得
		intPageScrollGoalTop = intNowY + objBounds.top;
        
		// タイマーセット
		objPageScrollTimer = setInterval(pageScrolling, intPageScrollTimerInterval);
	}
	
    return false;
}



function pageScrolling()
{   
	// 現在のY座標を取得
	var intNowY = document.documentElement.scrollTop || document.body.scrollTop;
		
	// 移動距離を計算
	scrollLength = Math.ceil(Math.abs(intPageScrollGoalTop - intNowY) * (intPageScrollRate/100));
    if(intPageScrollGoalTop - intNowY < 0){
        scrollLength = -scrollLength;
    }
    
	// スクロールの移動
	scrollBy(0, scrollLength);

	// 移動後のY座標を取得
	var intNewY = document.documentElement.scrollTop || document.body.scrollTop;

	// 目的の座標を越えるか移動後の座標変化がない場合はタイマー停止
	if ((scrollLength > 0 && intPageScrollGoalTop <= intNowY) || (scrollLength < 0 && intPageScrollGoalTop >= intNowY) || intNewY == intNowY){
		objPageScrollTimer = clearInterval(objPageScrollTimer);
	}
}