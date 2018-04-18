(function () {
    "use strict";

    var $ = jQuery;
    $(window).scroll(function () {
        var windowHeight = $(window).height(),
            topWindow = $(window).scrollTop();

        $('.preparation-page-wrapper .pp-section').each(function () {
            var targetPosition = $(this).offset().top;
            if (topWindow > targetPosition - windowHeight + 260) {
                $(this).addClass("pp-fadein");
            }
        });
    });

    $(document).ready(function () {
        var urlHash = location.hash;

        if( !urlHash ) return;
        if( urlHash.indexOf('#s-') == -1 ) return;
        setTimeout(function () {
            var target = $('.preparation-page-wrapper .' + urlHash.slice(1)),
                position = target.offset().top;

            $('body, html').stop().animate({scrollTop:position - 120}, 1000);
        }, 100);
    });
}());
