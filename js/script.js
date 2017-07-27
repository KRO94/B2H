jQuery(document).ready(function(){

/*-----------------------------MOBILE MENU-----------------------------*/
	var n = 0;
	$('.mobile-menu').click(function(){
			if (n==0) {
				$(this).addClass('color');
				$('.menu').slideDown(600);
				n=1;
			}
			else {
				$(this).removeClass('color');
				$('.menu').slideUp(300);
				n=0;
			}
	});
/*-----------------------------MOBILE MENU-----------------------------*/

/*----------------MODAL WINDOW--------------------------------*/
	$('.modal-close-window').click(function(){
		$('.modal-window').css('display','none');
	});

	$('.modal-window .close-btn').click(function(){
		$('.modal-window').css('display','none');
	});

/*----------------MODAL WINDOW--------------------------------*/



/*-------------------------------SLIDER------------------------------------*/
$('.slider').owlCarousel({
		items: 1,
		loop:true,
		nav:true,
		dots: true,
		autoplay: false,
		autoplaySpeed: 2000
})

// $('.reviews-testimonial').owlCarousel({
// 		items: 1,
// 		loop:true,
// 		nav:true,
// 		dots: false,
// 		autoplay: true,
// 		autoplaySpeed: 3000
// })
/*-------------------------------SLIDER------------------------------------*/

/*-------------------------------VIDEO------------------------------------*/
	$('.block-video img.prev').click(function(){
		var height = $(this).height();
		var width = $(this).width();
		$(this).css('display','none');
		var src = $('.block-video').find('iframe').attr('src');
		$('iframe').attr({'src': src+'?rel=0&autoplay=1','width':width,'height':height}).show();
	});
	$(window).resize(function(){
			if($('img.prev').attr('style') && $(".block-video iframe").attr('width') != "100%") {
				$(".block-video iframe").attr('width', "100%");
			}
	});
/*-------------------------------VIDEO------------------------------------*/
});