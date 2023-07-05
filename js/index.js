// JavaScript Document
$(function(){
	/*********************************************
	*スクロールダウンアイコンの表示処理
	*********************************************/
	//初期演出（画面読み込み後の出現のタイミング）
	 $('.scrolldown1').hide();
	 setTimeout(function(){
		 $('.scrolldown1').fadeIn();
	},2500);
	//スクロール距離での表示非表示切り替え
	$(window).scroll(function() {
		var scroll = $(this).scrollTop();
			//console.log(scroll);
			if(scroll > 400){
				$('.scrolldown1').fadeOut();
				$('.header').addClass("scrolled");
			}else{
				$('.scrolldown1').fadeIn();
				$('.header').removeClass("scrolled");
			}
	});
});