(function () {
    "use strict";

    var $ = jQuery,
        // event_name = (window.ontouchstart === null) ? 'touchstart' : 'click',
        event_name = 'click',
        flag_up = false,
        flag_open = false,
        timer = false,

        add_sele = '.fixed-footer', // クラス付与先
        button_sele = '.fixed-footer .button',    // ボタンのセレクタ
        cover_sele = '.fixed-footer .body-cover', // bodyを覆うカバーのセレクタ
        open_class = 'ff-open', // 選択画面を開く場合に付与するクラス名
        up_class = 'ff-up',     // 問い合わせボタンを表示する場合に付与するクラス名

        interval = 500;

    /* 詳細表示・非表示 */
    $(button_sele + ', ' + cover_sele).on(event_name, function (e) {
        e.preventDefault();
        flag_open = !flag_open;
        $('.l-header').css('z-index', flag_open ? 499 : 1000);
        $(add_sele).toggleClass(open_class);
        return false;
    });

    /* ボタンの表示・非表示 */
    $(window).on({
        'load': function () {
            if (!flag_up) {
                $(add_sele).addClass(up_class);
                flag_up = true;
            }
        },
        'scroll': function () {
            if (flag_open) return false;
            if (flag_up) {
                $(add_sele).removeClass(up_class);
                flag_up = false;
            } else {
                clearTimeout(timer);
            }
            timer = setTimeout(function () {
                $(add_sele).addClass(up_class);
                flag_up = true;
            }, interval);
        }
    });
}());
