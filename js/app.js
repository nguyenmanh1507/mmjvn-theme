'use strict';

var app = (function(document, $) {
	var docElem = document.documentElement,
		_userAgentInit = function() {
			docElem.setAttribute('data-useragent', navigator.userAgent);
		},
		_init = function() {

			$(document).foundation();
       
			_userAgentInit();

			// Custom js place here

			FastClick.attach(document.body);

			// search box appear when click
			var searchForm = $('.search-form');
			var fakeSearchBtn = $('.search-form__icon');

			fakeSearchBtn.on('click', function() {
				searchForm.addClass('is-visible');
			});

			// Simple sticky menu
			var menu = $('.site-navigation');
			var menuOffset = menu.offset().top;
			var menuHeight = menu.height();
			var header = $('#site-header');

			$(window).scroll(function() {
				var windowOffset = $(this).scrollTop();

				if(windowOffset >= menuOffset) {
					menu.addClass('sticky-menu');
					header.css('margin-bottom', menuHeight + 20);
				} else {
					menu.removeClass('sticky-menu');
					header.css('margin-bottom', 0);
				}

			});

			// Slider
			$('#carousel').flexslider({
		    animation: 'slide',
		    animationLoop: false,
		    controlNav: false,
		    slideshowSpeed: 10000,
		    itemWidth: 222,
		    itemMargin: 5,
		    asNavFor: '#slider',
				directionNav: false
		  });
		 	
		 	// Carousel
		  $('#slider').flexslider({
		    animation: 'slide',
		    animationLoop: true,
		    nextText: '',
		    prevText: '',
		    slideshowSpeed: 10000,
		    sync: '#carousel'
		  });

		  // Recent news slider
		  var rnSlider = $('#news-recent-slider');
		  rnSlider.owlCarousel({
		  	autoPlay: 10000,
		  	items: 2,
		  	itemsDesktop: [1024, 2],
		  	itemsDesktopSmall : [900, 2],
		  	itemsTablet: [640, 1],
		  	itemsMobile: false
		  });

		  // custom navigation events
		  $('.rnn-prev').click(function() {
		  	rnSlider.trigger('owl.prev');
		  	return false;
		  });

		  $('.rnn-next').click(function() {
		  	rnSlider.trigger('owl.next');
		  	return false;
		  });

		  // Related post Slider
		  var rpSlider = $('#related-post-slider');
		  rpSlider.owlCarousel({
		  	autoPlay: 10000,
		  	items: 3,
		  	itemsDesktop: [1024, 3],
		  	itemsDesktopSmall : [900, 2],
		  	itemsTablet: [640, 1],
		  	itemsMobile: false
		  });

		  // custom navigation events
		  $('.rp-prev').click(function() {
		  	rpSlider.trigger('owl.prev');
		  	return false;
		  });

		  $('.rp-next').click(function() {
		  	rpSlider.trigger('owl.next');
		  	return false;
		  });


		  // Quote slider
		  $('#quote-slider').flexslider({
		  	animation: 'slide',
		  	slideshow: false
		  });

		  // About Us Slider
		  $('.about-us__slider').flexslider({
		  	animation: 'slide',
		  	controlNav: false
		  });

		  // Support placeholder for older browser (IE9, Opera Mini)
		  // check plugin is loaded
		  if($.placeholder) {
		  	$('input, textarea').placeholder();
		  }

		  // Auto select position
		  var userChoosePosition = $('#select-position').data('pos');
		  var allPosition = $('#af-pos').children('option');
		  var posLength = allPosition.length;

		  for(var i = 0; i < posLength; i++) {
		  	var $t = $(allPosition[i]);

		  	// Get value of option and replace 
		  	// " " -> "-", "/" -> "" and lower case it.
		  	// ex: Front End Developer -> front-end-devloper
		  	var position = $(allPosition[i]).val()
		  																	.replace(/\s+/g, '-')
		  																	.replace('/', '')
		  																	.toLowerCase();

				if( position === userChoosePosition ) {
					$t.prop('selected', true);
				} else {
					$t.prop('selected', false);
				}
		  }

		  // Disable apply button in post
		  // when job unavailable
		  var btnState = $('.job-detail__meta').hasClass('is-available');

		  if(!btnState) {

			  $('.button--apply').addClass('not-allow')
			  									 .click(function(e) {
													  	e.preventDefault();
													  })
			  									 .attr('href', '#');
		  }

		};
	return {
		init: _init
	};

})(document, jQuery);

(function() {
	app.init();
})();
