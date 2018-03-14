<?php $options = get_design_plus_option();

/* **************************************************
 *  フロントページ トップコンテンツ / 作成：堀
 * **************************************************
 */
?>
<section class="top-content">

    <!-- トップスライド -->
    <div class="top-slider">
        <div class="ts-slick" id="ts-slick">
            <!--

            注　意
            ここに挿入する画像の縦横比(サイズ)は、PC用、スマホ・タブレット用それぞれで統一してください
            スライドは何枚でも増やせます

            記入例
            <a class="item" href="javascript:void(0);" style="background-image: url('スマホ, タブレット用画像のパス')">
                <img src="PC用画像のパス">
            </a>

            -->
            <!-- 1枚目 -->
            <a class="item" href="javascript:void(0);" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
            <!-- 2枚目 -->
            <a class="item" href="javascript:void(0);" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
            <!-- 3枚目 -->
            <a class="item" href="javascript:void(0);" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
            <!-- 4枚目 -->
            <a class="item" href="javascript:void(0);" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
        </div>
    </div>

    <!-- カスタマイズページへのリンクボタン -->
    <div class="customize-link">
        <div class="cl-inner">
            <p class="text">
                <i class="far fa-check-square"></i>
                あなただけのオリジナル留学プランをつくれる！みたいな文章
            </p>
            <a class="button" href="javascript:void(0);">
                無料でカスタマイズしてみる
            </a>
        </div>
    </div>
</section>
