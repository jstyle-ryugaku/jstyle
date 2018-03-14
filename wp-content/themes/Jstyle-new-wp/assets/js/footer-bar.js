(function () {
    "use strict";

    var $ = jQuery,
        event_name = (window.ontouchstart === null) ? 'touchstart' : 'click',
        flag_up = false,
        flag_open = false,
        timer = false,

        add_sele = '.fixed-footer', // クラス付与先
        button_sele = '.fixed-footer .button', // ボタンのセレクタ
        open_class = 'ff-open', // 選択画面を開く場合に付与するクラス名
        up_class = 'ff-up',     // 問い合わせボタンを表示する場合に付与するクラス名

        interval = 500;

    /* 詳細表示・非表示 */
    $(button_sele).on(event_name, function () {
        $(add_sele).toggleClass(open_class);
        flag_open = !flag_open;
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
