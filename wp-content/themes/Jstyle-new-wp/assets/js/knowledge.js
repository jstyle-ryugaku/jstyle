(function () {
    "use strict";

    var $ = jQuery;
    $(window).scroll(function () {
        var windowHeight = $(window).height(),
            topWindow = $(window).scrollTop();

        $('.knowledge-page-wrapper .kp-section').each(function () {
            var targetPosition = $(this).offset().top;
            if (topWindow > targetPosition - windowHeight + 260) {
                $(this).addClass("kp-fadein");
            }
        });
    });
}());
