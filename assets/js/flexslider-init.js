(function($) {
    $(window).load(function() {
        $('.flexslider').flexslider({
	        animation: 'slide',
			slideshowSpeed: 4000,
			pauseOnHover: true,
			animationLoop: true,
			directionNav: true,
		    controlsContainer: '.flex-container'
	    });
    });
})(jQuery)
