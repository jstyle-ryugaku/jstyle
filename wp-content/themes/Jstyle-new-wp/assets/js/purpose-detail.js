(function () {
    "use strict";

    var $ = jQuery;
    $(window).scroll(function () {
        var windowHeight = $(window).height(),
            topWindow = $(window).scrollTop();

        $('.purpose-detail-wrapper .qa-anime').each(function () {
            var targetPosition = $(this).offset().top;
            if (topWindow > targetPosition - windowHeight + 400) {
                $(this).addClass("fadeInDown");
            }
        });
    });
}());
