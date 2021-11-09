$(document).ready(function(){
	/*----------------------------
    START - Menubar scroll animation
    ------------------------------ */
	jQuery(window).on('scroll', function() {
		if ($(this).scrollTop() > 40) {
			$('#menu .navbar').addClass("sticky");
		} else {
			$('#menu .navbar').removeClass("sticky");
		}
	});
	
	/*----------------------------
    START - Smooth scroll animation
    ------------------------------ */
	$('.menu-top li a, .navbar-brand').on('click', function () {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		&& location.hostname == this.hostname) {
		  var $target = $(this.hash);
		  $target = $target.length && $target
		  || $('[name=' + this.hash.slice(1) +']');
		  if ($target.length) {
			var targetOffset = $target.offset().top;
			$('html,body')
			.animate({scrollTop: targetOffset}, 2000);
		   return false;
		  }
		}
	});
	
	/*----------------------------
    START - Menu collapse
    ------------------------------ */
	$('.menu-top li a').on('click', function () {
		$('.collapse').removeClass('in');
	});
	
	/*----------------------------
    START - Scroll to Top
    ------------------------------ */
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 600) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	$('.scrollToTop').on('click', function () {
		$('html, body').animate({scrollTop : 0},2000);
		return false;
	});
	
	$('.team-bottom').owlCarousel({
		margin:20,
		responsive:{
			0:{
				items:1,
				slideBy:1
			},
			680:{
				items: 3,
				slideBy:3
			},
			1024:{
				items: 5,
				slideBy:5
			},
			1900:{
				items: 5,
				slideBy:5
			}
		}
	});
	
	$('.client-slider').owlCarousel({
		margin:20,
		autoplay: true,
		autoplayTimeout:4000,
		loop:true,
		responsive:{
			0:{
				items:1,
				slideBy:1
			},
			681:{
				items: 2,
				slideBy:2
			},
			1200:{
				items: 3,
				slideBy:3
			},
			1900:{
				items: 3,
				slideBy:3
			}
		}
	});
	
	$('.screen-bottom').owlCarousel({
		slideBy:5,
		margin:30,
		autoplay: true,
		autoplayTimeout:5000,
		loop:true,
		responsive:{
			0:{
				items:1
			},
			400:{
				items:2
			},
			768:{
				items:3
			},
			991:{
				items:4
			},
			1900:{
				items:4
			}
		}
	});
	$('.home-bg-slide').owlCarousel({
		items:1,
		animateIn: 'fadeIn',
		animateOut: 'zoomOut',
		autoplay: true,
		autoplayTimeout:4000
	});
	
	/*----------------------------
    START - Preloader
    ------------------------------ */
	$(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    });
	
	/*----------------------------
    START - WOW JS animation
    ------------------------------ */
	new WOW().init();

    /*----------------------------
    START - jQuery Tubular activation
    ------------------------------ */
    if ($.fn.YTPlayer) {
        if (!device.tablet() && !device.mobile()) {
            $('#home').addClass(
                'big-background-default-image');
            $(".tubular").YTPlayer();
        } else {
            //jQuery will add the default background to the preferred class 
            $('#home').addClass(
                'big-background-default-image');
        }
    }
});