jQuery(function () {
    jQuery("#CA-btn").hover(function () {
        jQuery("#CA").addClass('click');
        }, function() {
        jQuery("#CA").removeClass('click');
    });
    jQuery("#US-btn").hover(function () {
        jQuery("#US").addClass('click');
    }, function() {
        jQuery("#US").removeClass('click');
    });
    jQuery("#GB-btn").hover(function () {
        jQuery("#GB").addClass('click');
    }, function() {
        jQuery("#GB").removeClass('click');
    });
    jQuery("#AU-btn").hover(function () {
        jQuery("#AU").addClass('click');
    }, function() {
        jQuery("#AU").removeClass('click');
    });
    jQuery("#NZ-btn").hover(function () {
        jQuery("#NZ").addClass('click');
    }, function() {
        jQuery("#NZ").removeClass('click');
    });
    jQuery(".map-btn").hover(function () {
        jQuery(this).addClass('click')
    },function () {
        jQuery(this).removeClass('click')
    });

    jQuery(".map-btn").click(function() {
        location.href = jQuery(this).attr('data-url');
    });
});

