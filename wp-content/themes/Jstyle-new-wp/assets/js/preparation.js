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
}());
