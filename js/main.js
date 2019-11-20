jQuery(document).ready(function($) {

    $(".mobile_menu_button").click(function() {
        $(".mobile-main-nav").fadeIn();
    });
    $(".close_main-nav").click(function() {
        $(".mobile-main-nav").fadeOut();
    });
    $(".mobile-main-nav ul li a").click(function() {
        $(".mobile-main-nav").fadeOut();
    });
    $('.slider-bout-bev').imagesLoaded( function() {
        $('.home-slider').css("visibility", "visible");
        $('.preloader').fadeOut();
    });
    $('.slider-bout-bev').slick({
        prevArrow: '.controllers-ex-bev .prev',
        nextArrow: '.controllers-ex-bev .next',
        lazyLoad: 'ondemand',
        dots: false,
        infinite: true,
        variableWidth: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        initialSlide: 4,
        speed: 150,
        focusOnSelect: true,
        cssEase: 'ease-in'
    });
    
    if (document.getElementById("textareaofform"))
        document.getElementById("textareaofform").placeholder = "Message"; 

});