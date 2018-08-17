(function ($) {

    $(window).on('load', function(){
        setupIsotope();
	});

    $(document).on('ready', function(){
        setupFrontpageSlider();
        setupStellar();
    });

    function setupStellar(){
        $(window).stellar({
            horizontalScrolling: false,
            verticalScrolling: true
        });
    }

    function setupIsotope(){
        var $selector = $('.food-items');
        if($selector.length > 0){
            var options = {
                itemSelector: '.food-item',
                layoutMode: 'masonry'
            };
            $selector.isotope(options);
        }
    }

    function setupFrontpageSlider(){
        var selector = $( 'ul#fp_slider' );
        if(selector.length > 0){
            selector.bxSlider({
                speed: 1000,
                auto: true,
                autoStart: true,
                pause: 5000,
                infiniteLoop: true,
                slideMargin: 0,
                mode: 'fade',
                captions: true,
                adaptiveHeight: true,
                responsive: true,
                controls: false,
                pager: false
            });
        }
    }

})(jQuery);
