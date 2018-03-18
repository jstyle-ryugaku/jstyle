<?php $options = get_design_plus_option();

/* **************************************************
 *  フロントページ トップコンテンツ / 作成：堀,島野
 * **************************************************
 */
?>

<!-- カスタマイズページへのリンクボタン -->
<div class="customize-link">
    <div class="cl-inner">
        <p class="text">
            <i class="far fa-check-square"></i>
            あなただけのオリジナル留学プランをつくれる！みたいな文章
        </p>
        <a class="button js-show-modal" href="javascript:void(0);">
            無料でカスタマイズしてみる
        </a>
    </div>
</div>

<div id="modal-window" class="customize-modal hide">

    <div class="customize-modal__close-btn js-close-modal">
        <i class="fas fa-times"></i>
    </div>

    <div class="flex-item top-page">
        <p class="customize-modal__title">
            <i class="far fa-check-square"></i>
            留学っていくらかかるの？あなただけの留学をカスタマイズしよう！
        </p>
        <div class="step">
            <p class="step__number">01</p>
        </div>
        <div class="select-and-next-container">
            <div class="select-and-next">留学期間で選ぶ</div>
            <div class="select-and-next">留学先で選ぶ</div>
        </div>
    </div>
    <div class="flex-item select-period">
    </div>
    <div class="flex-item select-country">
    </div>
    <div class="flex-item select-type">
    </div>
    <div class="flex-item result">
    </div>
</div>
