$(document).ready(function() {
    // revolution slider
    revapi = $("#content-slider").revolution({
        delay: 15000,
        startwidth: 1170,
        startheight: 920,
        hideThumbs: 10,
        fullWidth: "on",
        fullScreen: "off",
        fullScreenOffsetContainer: "",
        navigationVOffset: 320
    });
    // initilize datepicker
    $(".date-picker").datepicker();
});
$(window).load(function() {
    $('.carousel').flexslider({
        animation: "fade",
        animationLoop: true,
        controlNav: false,
        maxItems: 1,
        pausePlay: false,
        mousewheel: true,
        start: function(slider) {
            $('body').removeClass('loading');
        }
    });
});
$(document).ready(function() {
    $("#adults").minimalect({
        theme: "bubble",
        placeholder: "Select"
    });
    $("#kids").minimalect({
        theme: "bubble",
        placeholder: "Select"
    });
});
//Gallery
$(document).ready(function() {
    // initilize fancybox
    $(".item-overlay").fancybox({
        overlayShow: true,
        overlayOpacity: .7,
        overlayColor: "#000000", // background overlay color
        transitionIn: "fade", // transition type 'elastic', 'fade' or 'none'
        transitionOut: "fade",
        easingIn: "easeInCubic", // Easing used for elastic animations
        easingOut: "easeOutCubic",
        cyclic: true
    });
});