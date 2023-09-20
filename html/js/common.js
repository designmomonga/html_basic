// JavaScript Document
$(function(){
	/*********************************************
	*グローバルナビゲーション
	*********************************************/	
	$('.category').mouseover(function(){
		$('.menu-list',this).addClass('fadein');
		//console.log('マウスオーバーしました。');
		$(this).mouseout(function(){
			$('.menu-list',this).removeClass('fadein');
		});
	});
});