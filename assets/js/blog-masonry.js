// Portfolio
(function($) {
	"use strict";
	var $container = $('.blog-masonry'),
		$items = $container.find('.blog-columns'),
		portfolioLayout = 'masonry';
		
		if( $container.hasClass('portfolio-centered') ) {
			portfolioLayout = 'masonry';
		}
				
		$container.isotope({
			filter: '*',
			animationEngine: 'best-available',
			layoutMode: portfolioLayout,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		},
		masonry: {
		}
		}, refreshWaypoints());
		
		function refreshWaypoints() {
			setTimeout(function() {
			}, 1000);   
		}

		$(window).on('resize', function () { 
	});
})(jQuery);