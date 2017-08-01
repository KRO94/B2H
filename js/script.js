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
		$('.modal-window .form-wrap-one, .modal-window .form-wrap-two').css('display','none');
	});

	$('.modal-window .close-btn').click(function(){
		$('.modal-window').css('display','none');
		$('.modal-window .form-wrap-one, .modal-window .form-wrap-two').css('display','none');
	});

	$('.enrol').click(function(){
		$('.modal-window .form-wrap-one, .modal-window').show();
	})
	$('.questions').click(function(){
		$('.modal-window .form-wrap-two, .modal-window').show();
	})

/*----------------MODAL WINDOW--------------------------------*/

/*-------------------------------SLIDER------------------------------------*/
$('.slider').owlCarousel({
		items: 1,
		loop:true,
		nav:true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 5000
})

/*-------------------------------SLIDER------------------------------------*/

/*-------------------------------VIDEO------------------------------------*/
	$('.block-video img.prev').click(function(){
		var height = $(this).height();
		var width = $(this).width();
		$(this).css('display','none');
		console.log(height);
		console.log(width);
		var src = $('.block-video').find('iframe').attr('src');
		console.log(src);
		$('.block-video iframe').attr({'src': src+'?rel=0&autoplay=1','width':width,'height':height}).show();
	});
	$(window).resize(function(){
			if($('img.prev').attr('style') && $(".block-video iframe").attr('width') != "100%") {
				$(".block-video iframe").attr('width', "100%");
			}
	});
/*-------------------------------VIDEO------------------------------------*/

/*-------------------------------SWITCH------------------------------------*/
	$('.blog-block .leftBlock div .chBlock').click(function(){
		$('.blog-block .leftBlock div .chBlock, .blog-block .posts div').removeClass('active');
		$(this).addClass('active');
		for (var i = 1; i <= $('.blog-block .leftBlock div .chBlock').length; i++) {
			if($('.blog-block .leftBlock div .chBlock:nth-child('+i+')').is('.active')) {
				$('.blog-block .posts .blog_'+i+'').addClass('active');
			}
		}
	});
/*-------------------------------SWITCH------------------------------------*/

/*------------------------------MAP WRAPPER START------------------------------*/
	$('.empty-for-map').click(function(){
		$('.empty-for-map').hide();
		$('.map-block iframe').mouseout(function(){$('.empty-for-map').show();});
	});
/*-------------------------------MAP WRAPPER END-------------------------------*/

/*-------------------------------ADD CLASS START-------------------------------*/
	$('.postBlogBlock img, .single-blog img').addClass('img-responsive');
/*--------------------------------ADD CLASS END--------------------------------*/

/*--------------------------------MASK START--------------------------------*/
	$('input[name=your-tel]').mask('+389999999999');
/*---------------------------------MASK END---------------------------------*/

/*---------------------------------FANCYBOX START---------------------------------*/
	$('fancybox').fancybox();
/*----------------------------------FANCYBOX END----------------------------------*/
});