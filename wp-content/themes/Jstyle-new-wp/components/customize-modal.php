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
            <div class="select-and-next js-on-select-period">留学期間で選ぶ</div>
            <div class="select-and-next js-on-select-country">留学先で選ぶ</div>
        </div>
    </div>
    <div class="flex-item select-period hide">
        <div class="step">
            <p class="step__number">02</p>
        </div>
        <p class="customize-modal__title">
            <i class="far fa-check-square"></i>
            <span class="foreword"></span>ご希望の留学期間を入力してください
        </p>
        <div class="select-date">
            <label></label>
            <input class="input-date" type="date" name="date">
            <div class="">から<input class="input-period" type="number">ヶ月間</div>
        </div>
        <div class="prev-and-next-container">
            <div class="btn prev js-on-prev">戻る</div>
            <div class="btn next js-on-next">次へ</div>
        </div>
    </div>
    <div class="flex-item select-country hide">
        <div class="step">
            <p class="step__number">02</p>
        </div>
        <p class="customize-modal__title">
            <i class="far fa-check-square"></i>
            <span class="foreword"></span>国を選んでください
        </p>
        <div class="select-country">
            <input type="radio" name="country" id="america"><label for="america">アメリカ</label>
            <input type="radio" name="country" id="canada"><label for="canada">カナダ</label>
            <input type="radio" name="country" id="australia"><label for="australia">オーストラリア</label>
            <input type="radio" name="country" id="UK"><label for="UK">イギリス</label>
            <input type="text" name="country" id="other" placeholder="その他">
        </div>
        <div class="prev-and-next-container">
            <div class="btn prev js-on-prev">戻る</div>
            <div class="btn next js-on-next">次へ</div>
        </div>
    </div>
    <div class="flex-item select-type hide">
        <div class="step">
            <p class="step__number">02</p>
        </div>
        <p class="customize-modal__title">
            <i class="far fa-check-square"></i>
            <span class="foreword"></span>留学の種類を選んでください
        </p>
        <div class="select-type">
            <input type="radio" name="type" id="working-holiday"><label for="working-holiday">ワーキングホリデー</label>
            <input type="radio" name="type" id="short"><label for="short">短期留学</label>
            <input type="radio" name="type" id="university"><label for="university">大学</label>
            <input type="radio" name="type" id="home-stay"><label for="home-stay">ホームステイ</label>
            <input type="text" name="type" id="other" placeholder="その他">
        </div>
        <div class="prev-and-next-container">
            <div class="btn prev js-on-prev">戻る</div>
            <div class="btn next js-on-next">次へ</div>
        </div>
    </div>
    <div class="flex-item result hide">
        <div>
            <p class="customize-modal__title">
                <i class="far fa-check-square"></i>
                あなたの留学費用は・・・
            </p>
            <div>
                <p><span>約</span>100万円~200万円<span>です</span></span></p>
            </div>
            <p>※値段は、ヒアリング結果によって、大きく上下する場合がございます。あらかじめご了承ください。</p>
        </div>
        <div>
            <p class="customize-modal__title">
                <i class="far fa-check-square"></i>
                もっと詳しい留学費用を知りたい方は
            </p>
            <div class="o-01 o-line">
                <a href="javascript:void(0);">
                    <i class="fab fa-line"></i>
                    <p class="text bold">LINEで相談する</p>
                </a>
            </div>
        </div>
        <div>
            <p class="customize-modal__title">
                <i class="far fa-check-square"></i>
                他の留学プランを知りたい方は、
            </p>
            <div class="js-on-to-top">初めからやりなおす</div>
        </div>
    </div>
</div>