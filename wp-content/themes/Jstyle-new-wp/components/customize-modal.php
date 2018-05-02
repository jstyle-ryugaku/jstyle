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
            留学っていくらかかるの？ あなただけの留学をカスタマイズしよう！
        </p>
        <a class="button js-show-modal" href="javascript:void(0);" data-iziModal-open=".iziModal">
            無料でカスタマイズしてみる
        </a>
    </div>
</div>

<div id="modal-window" class="modal-container iziModal">
<!--    <div class="modal-close-windows js-close-modal"></div>-->
    <div class="customize-modal modal-content">
        <div class="customize-modal__close-btn js-close-modal" data-izimodal-close="">
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
                <p class="step__number"></p>
            </div>
            <p class="customize-modal__title">
                <i class="far fa-check-square"></i>
                <span class="foreword"></span>ご希望の留学期間を入力してください
            </p>
            <div class="select-date">
                <label></label>
                <input class="input-date" type="date" name="date">
                <div class="">から<input class="input-period" type="number" name="term">ヶ月間</div>
            </div>
            <div class="prev-and-next-container">
                <div class="btn prev js-on-prev">戻る</div>
                <div class="btn next js-on-next">次へ</div>
            </div>
        </div>
        <div class="flex-item select-country hide">
            <div class="step">
                <p class="step__number"></p>
            </div>
            <p class="customize-modal__title">
                <i class="far fa-check-square"></i>
                <span class="foreword"></span>国を選んでください
            </p>
            <div class="select-country-container">
                <input type="radio" name="country" id="america"><label for="america">アメリカ</label>
                <input type="radio" name="country" id="canada"><label for="canada">カナダ</label>
                <input type="radio" name="country" id="australia"><label for="australia">オーストラリア</label>
                <input type="radio" name="country" id="newZealand"><label for="newZealand">ニュージーランド</label>
                <input type="radio" name="country" id="UK"><label for="UK">イギリス</label>
                <input type="text" name="country" id="other" placeholder="その他 入力してください" class="input-country">
            </div>
            <div class="prev-and-next-container">
                <div class="btn prev js-on-prev">戻る</div>
                <div class="btn next js-on-next">次へ</div>
            </div>
        </div>
        <div class="flex-item select-type hide">
            <div class="step">
                <p class="step__number"></p>
            </div>
            <p class="customize-modal__title">
                <i class="far fa-check-square"></i>
                <span class="foreword"></span>留学の種類を選んでください
            </p>
            <div class="select-type-container">
                <input type="radio" name="type" id="workingHoliday"><label for="workingHoliday">ワーキングホリデー</label>
                <input type="radio" name="type" id="language"><label for="language">語学学校</label>
                <input type="radio" name="type" id="university"><label for="university">大学</label>
                <input type="radio" name="type" id="homeStay"><label for="homeStay">ホームステイのみ</label>
                <input type="text" name="type" id="other" placeholder="その他 入力してください" class="input-type">
            </div>
            <div class="prev-and-next-container">
                <div class="btn prev js-on-prev">戻る</div>
                <div class="btn next js-on-next">次へ</div>
            </div>
        </div>
        <div class="flex-item result hide">
            <div class="result__content">
                <p class="customize-modal__title">
                    <i class="far fa-check-square"></i>
                    あなたの留学費用は・・・
                </p>
                <div class="result__text-container">
                    <p class="result__text"><span class="result__small-text">約</span><span
                                class="result__cost--min">100</span>万円 ~<span
                                class="result__cost--max">200</span>万円<span class="result__small-text">です</span></span>
                    </p>
                    <p class="result__caution">※ヒアリングによって値段が多少上下する場合がございます。まずは、LINEでお気軽に相談してみてください。</p>
                </div>
            </div>
            <div class="result__footer">
                <div class="result__line-btn-container">
                    <p class="customize-modal__title">
                        <i class="far fa-check-square"></i>
                        もっと詳しい留学費用を知りたい方は
                    </p>
                    <div class="o-01 o-line">
                        <a href="https://line.me/R/ti/p/kHSTuR6fzE">
                            <i class="fab fa-line"></i>
                            <p class="text bold">LINEで相談する</p>
                        </a>
                    </div>
                </div>
                <div class="result__to-top-btn-container">
                    <p class="customize-modal__title">
                        <i class="far fa-check-square"></i>
                        他の留学プランを知りたい方は、
                    </p>
                    <div class="btn js-on-to-top">初めからやりなおす</div>
                </div>
            </div>
        </div>
    </div>
</div>