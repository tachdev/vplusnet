(function($) {
	"use strict";

// Video 

  $("body").fitVids();
  
// DM Slides
	$("#slides").superslides({
		play: false,
		animation: "fade",
		pagination: false
	});
	
// DM Menu
	/*jQuery('.header').affix({
		offset: { top: $('.header').offset().top }
	});

	$('.nav li a').bind('click', function(event) {
		var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop : $($anchor.attr('href')).offset().top - 40
			}, 1200, 'easeInOutExpo');
		event.preventDefault();
	});*/
	
// DM Scroll
	/*smoothScroll.init({
		speed: 800,
		easing: 'easeOutQuint',
		offset: 30,
		updateURL: false,
		callbackBefore: function ( toggle, anchor ) {},
		callbackAfter: function ( toggle, anchor ) {}
	});*/
		
// DM Top
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 1) {
			jQuery('.dmtop').css({bottom:"25px"});
		} else {
			jQuery('.dmtop').css({bottom:"-100px"});
		}
	});
	jQuery('.dmtop').click(function(){
		jQuery('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});
// DM Accordion
    var iconOpen = 'fa fa-minus',
        iconClose = 'fa fa-plus';

    $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
        var $target = $(e.target)
          $target.siblings('.accordion-heading')
          .find('em').toggleClass(iconOpen + ' ' + iconClose);
          if(e.type == 'show')
              $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
          if(e.type == 'hide')
              $(this).find('.accordion-toggle').not($target).removeClass('active');
    });

// OWK Carousel
	$("#owl-testimonial, #owl-post-slider, #owl-twitter").owlCarousel({
		items : 1,
		lazyLoad : true,
		navigation : false,
		autoPlay: true
    });
	
//Parallax
	$(window).bind('load', function() {
		parallaxInit();
	});
	
	function parallaxInit() {
		$('#one-parallax').parallax("30%", 0.1);
		$('#two-parallax').parallax("30%", 0.1);
		$('#three-parallax').parallax("30%", 0.1);
		$('#four-parallax').parallax("30%", 0.1);
		$('#five-parallax').parallax("30%", 0.1);
		$('#six-parallax').parallax("30%", 0.1);
	}

// Fun Facts
	function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 1; /* Where 50 is increment */
		
		$this.html(++current);
			if(current > $this.data('count')){
				$this.html($this.data('count'));
			} else {    
				setTimeout(function(){count($this)}, 50);
			}
		}        
		
		$(".stat-count").each(function() {
		  $(this).data('count', parseInt($(this).html(), 10));
		  $(this).html('0');
		  count($(this));
	});

// Skills
	$('.chart').easyPieChart({
		easing: 'easeOutBounce',
		size : 175,
		animate : 2000,
		lineCap : 'square',
		lineWidth : 2,
		barColor : false,
		trackColor : '#f5f5f5',
		scaleColor : false,
		onStep: function(from, to, percent) {
		$(this.el).find('.percent').text(Math.round(percent)+'%');
		}
	});

// prettyPhoto
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'dark_rounded',slideshow:true,overlay_gallery: true,social_tools:false,deeplinking:false});
	
// Google Map
	var locations = [
		['<div class="infobox" style="width:250px;height:100px;"><h3 class="title"><a href="#">VPLUSNET</a></h3><span>496-502 AMARIN PLAZA BIDG. SECTION 2.1 UNIT 4 PLEONCHID RD. LUMPINI PATHUMWAN BANGKOK 10330</p></div></div></div>', 13.7443315, 100.5415774, 1]];
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 16,
			scrollwheel: false,
			navigationControl: true,
			mapTypeControl: false,
			scaleControl: false,
			draggable: true,
			styles: [ { "stylers": [ { "hue": "#fff" }, { "gamma": 3 } ] } ],
			center: new google.maps.LatLng(13.7443315, 100.5415774),
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var infowindow = new google.maps.InfoWindow();
		var marker, i;
		for (i = 0; i < locations.length; i++) {  
			marker = new google.maps.Marker({ 
			position: new google.maps.LatLng(13.7440, 100.5415200), 
			map: map ,
			icon: 'assets/images/logo.png'
			});
		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		})(marker, i));
	}
	  
// Animating
		$(window).scroll(function() {
			$('.animateLeft').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+500) {
					$(this).addClass("slideLeft");
				}
			});

			$('.animateRight').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+500) {
					$(this).addClass("slideRight");
				}
			});

			$('.animateUp').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+500) {
					$(this).addClass("slideUp");
				}
			});

			$('.animateFade').each(function(){
			var imagePos = $(this).offset().top;
			
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+500) {
					$(this).addClass("fadeIn");
				}
			});
	
		});

})(jQuery);