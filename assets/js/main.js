(function($) {
	'use strict';
	/*----------------------------------------*/
	/* 01. Main Slider Activision
/*----------------------------------------*/
	$('.slider-active').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		autoplay: true,
		items: 1,
		navText: [ "<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>" ],
		dots: true,
		autoHeight: false
	});
	/*----------------------------------------*/
	/* 02. Urani's Product Activision
/*----------------------------------------*/
	$('.urani-product_active').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 4
			}
		}
	});
	/*----------------------------------------*/
	/* 03. Urani's Product Activision Two
/*----------------------------------------*/
	$('.urani-product_active-2').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 2
			},
			1200: {
				items: 3
			}
		}
	});
	/*----------------------------------------*/
	/* 04. Urani's Product Activision Three
/*----------------------------------------*/
	$('.urani-product_active-3').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 3
			},
			1200: {
				items: 4
			}
		}
	});
	/*----------------------------------------*/
	/* 05. Urani's Category Product Activision
/*----------------------------------------*/
	$('.urani-category-product_active').owlCarousel({
		loop: false,
		nav: false,
		dots: false,
		autoplay: false,
		margin: 0,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 5,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 4
			}
		}
	});
	/*----------------------------------------*/
	/* 06. Urani's Featured Product Activision
/*----------------------------------------*/
	$('.urani-featured-product_active').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 2,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 2
			},
			1200: {
				items: 2
			}
		}
	});

	/*---------------------------------------------*/
	/* 07. Urani's Featured Product With Six Slide
/*----------------------------------------------*/
	$('.featured-pro-with-six_slide').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 6,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 6
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*---------------------------------------------*/
	/* 08. Urani's Featured Product With Four Slide
/*----------------------------------------------*/
	$('.featured-pro-with-four_slide').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	/*----------------------------------------*/
	/* 09. Urani's List Product Activision
/*----------------------------------------*/
	$('.urani-list-product').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		rows: 3,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*----------------------------------------*/
	/* 10. Urani's Featured Product Activision
/*----------------------------------------*/
	$('.urani-brand_active').owlCarousel({
		loop: true,
		nav: false,
		dots: false,
		mouseDrag: true,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 2,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			},
			1200: {
				items: 5
			}
		}
	});

	/*----------------------------------------*/
	/* 11. Urani's Sticky Menu Activation
/*----------------------------------------*/
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 300) {
			$('.header-sticky').addClass('sticky');
		} else {
			$('.header-sticky').removeClass('sticky');
		}
	});

	/*----------------------------------------*/
	/* 12. Urani's Offcanvas
/*----------------------------------------*/
	/*Variables*/
	var $offcanvasNav = $('.offcanvas-menu'),
		$offcanvasNavWrap = $('.offcanvas-menu-wrapper'),
		$offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu'),
		$menuToggle = $('.menu-btn'),
		$menuClose = $('.btn-close, btn-close-2');

	$menuToggle.on('click', function(e) {
		e.preventDefault();
		$offcanvasNavWrap.toggleClass('open');
	});

	$menuClose.on('click', function(e) {
		e.preventDefault();
		$offcanvasNavWrap.removeClass('open');
	});

	/*Add Toggle Button With Off Canvas Sub Menu*/
	$offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-plus"></i></span>');

	/*Close Off Canvas Sub Menu*/
	$offcanvasNavSubMenu.slideUp();

	/*Category Sub Menu Toggle*/
	$offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
		var $this = $(this);
		if (
			$this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) &&
			($this.attr('href') === '#' || $this.hasClass('menu-expand'))
		) {
			e.preventDefault();
			if ($this.siblings('ul:visible').length) {
				$this.siblings('ul').slideUp('slow');
			} else {
				$this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
				$this.siblings('ul').slideDown('slow');
			}
		}
		if ($this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/)) {
			$this.parent().toggleClass('menu-open');
		} else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
			$this.toggleClass('menu-open');
		}
	});
	/*----------------------------------------*/
	/* 13. Urani's Scroll To Top
/*----------------------------------------*/
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900
	});

	/*----------------------------------------*/
	/* 14. Category Menu
/*----------------------------------------*/
	$('.rx-parent').on('click', function() {
		$('.rx-child').slideToggle();
		$(this).toggleClass('rx-change');
	});
	//    category heading
	$('.category-heading, .category-menu_icon').on('click', function() {
		$('.category-menu-list').slideToggle(900);
	});
	/*-- Category Menu Toggles --*/
	function categorySubMenuToggle() {
		var screenSize = $(window).width();
		if (screenSize <= 991) {
			$('#cate-toggle .right-menu > a').prepend('<i class="expand menu-expand"></i>');
			$('.category-menu .right-menu ul').slideUp();
			// $('.category-menu .menu-item-has-children i').on('click', function(e){
			//     e.preventDefault();
			//     $(this).toggleClass('expand');
			//     $(this).siblings('ul').css('transition', 'none').slideToggle();
			// })
		} else {
			$('.category-menu .right-menu > a i').remove();
			$('.category-menu .right-menu ul').slideDown();
		}
	}
	categorySubMenuToggle();
	$(window).resize(categorySubMenuToggle);
	/*-- Category Sub Menu --*/
	function categoryMenuHide() {
		var screenSize = $(window).width();
		if (screenSize <= 991) {
			$('.category-menu-list').hide();
		} else {
			$('.category-menu-list').show();
		}
	}
	categoryMenuHide();
	// $(window).resize(categoryMenuHide);
	$('.category-menu-hidden').find('.category-menu-list').hide();
	$('.category-menu-list').on('click', 'li a, li a .menu-expand', function(e) {
		var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
		if ($a.parent().hasClass('right-menu')) {
			if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
				if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
				else {
					$(this).parents('li').siblings('li').find('ul:visible').slideUp();
					$a.siblings('ul').slideDown();
				}
			}
		}
		if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
			e.preventDefault();
			return false;
		}
	});

	/*-------------------------------------------------*/
	/* 15. Urani's Circle Countdown Product Activision
/*-------------------------------------------------*/
	$('.urani-circle-countdown_product').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*----------------------------------
	 16. Time Circles active
------------------------------------*/
	$('.urani-circle_countdown').TimeCircles({
		animation: 'thick',
		bg_width: 0.6,
		fg_width: 0.025,
		circle_bg_color: '#ededed',
		time: {
			Days: {
				text: 'Days',
				color: '#e2ac3a',
				show: true
			},
			Hours: {
				text: 'Hours',
				color: '#e2ac3a',
				show: true
			},
			Minutes: {
				text: 'Mins',
				color: '#e2ac3a',
				show: true
			},
			Seconds: {
				text: 'Secs',
				color: '#e2ac3a',
				show: true
			}
		}
	});

	/*----------------------------------
	 17. Time Circles Two active
------------------------------------*/
	$('.urani-circle_countdown-2').TimeCircles({
		animation: 'thick',
		bg_width: 0.6,
		fg_width: 0.025,
		circle_bg_color: '#ededed',
		time: {
			Days: {
				text: 'Days',
				color: '#0083c1',
				show: true
			},
			Hours: {
				text: 'Hours',
				color: '#0083c1',
				show: true
			},
			Minutes: {
				text: 'Mins',
				color: '#0083c1',
				show: true
			},
			Seconds: {
				text: 'Secs',
				color: '#0083c1',
				show: true
			}
		}
	});

	/*-------------------------------------------------*/
	/* 18. Urani's Two Row Product Activision
/*-------------------------------------------------*/
	$('.two-row_product').slick({
		infinite: true,
		arrows: true,
		dots: false,
		rows: 2,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*-------------------------------------------------*/
	/* 19. Urani's One Row Product Activision
/*-------------------------------------------------*/
	$('.one-row_product').slick({
		infinite: true,
		arrows: true,
		dots: false,
		rows: 1,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*-------------------------------------------------*/
	/* 20. Urani's One Row Product Activision
/*-------------------------------------------------*/
	$('.one-row_product-2').slick({
		infinite: true,
		arrows: true,
		dots: false,
		rows: 1,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	/*----------------------------------------*/
	/*  21. Nice Select
/*----------------------------------------*/
	$(document).ready(function() {
		$('.nice-select').niceSelect();
	});
	/*----------------------------------------*/
	/* 22. FAQ Accordion
/*----------------------------------------*/
	$('.card-header a').on('click', function() {
		$('.card').removeClass('actives');
		$(this).parents('.card').addClass('actives');
	});
	/*----------------------------------------*/
	/* 23. Toggle Function Active
/*----------------------------------------*/
	// showlogin toggle
	$('#showlogin').on('click', function() {
		$('#checkout-login').slideToggle(900);
	});
	// showlogin toggle
	$('#showcoupon').on('click', function() {
		$('#checkout_coupon').slideToggle(900);
	});
	// showlogin toggle
	$('#cbox').on('click', function() {
		$('#cbox-info').slideToggle(900);
	});

	// showlogin toggle
	$('#ship-box').on('click', function() {
		$('#ship-box-info').slideToggle(1000);
	});

	/*---------------------
	24.	CounterUp
--------------------- */
	$('.count').counterUp({
		delay: 10,
		time: 1000
	});

	/*----------------------------------------*/
	/* 25. Urani's Blog Gallery
/*----------------------------------------*/
	var gallery = $('.Urani-blog_gallery');
	gallery.slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000,
		pauseOnFocus: false,
		pauseOnHover: false,
		fade: true,
		dots: true,
		infinite: true,
		slidesToShow: 1,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false
				}
			}
		]
	});

	/*----------------------------------------*/
	/*  26. Sidebar Categories Menu Activation
/*----------------------------------------*/
	$('.sidebar-categories_menu li.has-sub > a').on('click', function() {
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		} else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	/*----------------------------------------*/
	/* 27. Product Details Zoom
/*----------------------------------------*/
	$('.sp-imagezoom').lightGallery({
		selector: '.sp-singleimage'
	});
	/*----------------------------------------*/
	/* 28. Product Details Image Slider
/*----------------------------------------*/
	/* Product Details Image Slider */
	$('.sp-largeimages').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		fade: true,
		asNavFor: '.sp-thumbs',
		prevArrow: '<button class="slick-prev"><i class="arrow_carrot-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="arrow_carrot-right"></i></button>'
	});
	$('.sp-thumbs:not(.sp-thumbs-vertical)').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.sp-largeimages',
		arrows: false,
		dots: false,
		focusOnSelect: true,
		vertical: false,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 3
				}
			}
		]
	});
	$('.sp-thumbs-vertical').slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		asNavFor: '.sp-largeimages',
		arrows: false,
		dots: false,
		focusOnSelect: true,
		centerMode: false,
		vertical: true,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					vertical: false,
					slidesToShow: 2
				}
			}
		]
	});

	/*----------------------------------------*/
	/*  29. Star Rating Js
/*----------------------------------------*/
	$(function() {
		$('.star-rating').barrating({
			theme: 'fontawesome-stars'
		});
	});

	/*-------------------------------------------------*/
	/* 30. Urani's Circle Countdown Product Activision
/*-------------------------------------------------*/
	$('.urani-circle-countdown_product-2').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*----------------------------------------*/
	/* 31. Urani's List Product Activision
	/*----------------------------------------*/
	$('.urani-list-product-2').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		rows: 5,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*----------------------------------------*/
	/* 32. Urani's List Product Activision
/*----------------------------------------*/
	$('.urani-list-product-3').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		rows: 3,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	/*-------------------------------------------------*/
	/*  33. Urani's Circle Countdown Product Three
/*-------------------------------------------------*/
	$('.urani-circle-countdown_product-3').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*-------------------------------------------------*/
	/*  34. Urani's Circle Countdown Product Three
	/*-------------------------------------------------*/
	$('.urani-circle-countdown_product-4').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	/*-------------------------------------------------*/
	/*  35. Urani's Circle Countdown Product Three
/*-------------------------------------------------*/
	$('.urani-circle-countdown_product-5').slick({
		infinite: true,
		arrows: true,
		dots: false,
		slidesToShow: 2,
		slidesToScroll: 2,
		prevArrow: '<button class="slick-prev"><i class="fa fa-caret-left"></i></button>',
		nextArrow: '<button class="slick-next"><i class="fa fa-caret-right"></i></button>',
		responsive: [
			{
				breakpoint: 1501,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	/*-------------------------------------------------*/
	/*  36. Urani's Sticky Sidebar
/*-------------------------------------------------*/
	$('#sticky-sidebar').theiaStickySidebar({
		// Settings
		additionalMarginTop: 80
	});

	/*----------------------------------------*/
	/*  37. Urani's Single Product Page Activision
/*----------------------------------------*/
	$('.sp-carousel-active').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplay: false,
		margin: 30,
		autoplayTimeout: 5000,
		navText: [ "<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>" ],
		item: 4,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			}
		}
	});

	/*----------------------------------------*/
	/* 38.  Newsletter Popup
/*----------------------------------------*/
	setTimeout(function() {
		$('.popup_wrapper').css({
			opacity: '1',
			visibility: 'visible'
		});
		$('.popup_off').on('click', function() {
			$('.popup_wrapper').fadeOut(500);
		});
	}, 2500);
})(jQuery);
