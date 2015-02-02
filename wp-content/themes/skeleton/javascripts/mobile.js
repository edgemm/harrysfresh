(function($){

    // toggle mobile menu display
    $( ".mobile-menu-toggle" ).click(function(){
        $( "#menu-hff-menu" ).slideToggle();
    });

    // size carousel height for mobile sizes < 640px
    function carouselHeight() {
        if ( $( window ).width() < 640 ) {
            var h = $( ".ca-item" ).find( ".ca-item-main" ).outerHeight();
            
            $( "#ca-container" ).height( h + "px" );
        }
    }


//$(window).load(function(){
//    carouselHeight();
//});
//
//$(window).resize(function(){
//    carouselHeight();
//});

})(jQuery);