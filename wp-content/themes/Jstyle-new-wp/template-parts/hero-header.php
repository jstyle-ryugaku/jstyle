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
            ・ここに挿入する画像の縦横比(サイズ)は、PC用、スマホ・タブレット用それぞれで統一してください
            ・スライドは何枚でも増やせます
            ・スマホ,タブレット対応する場合は、この要素内の .item クラスが付いたa要素のstyle属性値のコメントアウトを外してください
            　CSSファイルの該当箇所のコメントアウトも外してください

            記入例
            <a class="item" href="javascript:void(0);" style="background-image: url('スマホ, タブレット用画像のパス')">
                <img src="PC用画像のパス">
            </a>

            -->
            <!-- 1枚目 -->
            <a class="item" href="javascript:void(0);" style="/* background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg') */">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
            <!-- 2枚目 -->
            <a class="item" href="javascript:void(0);" style="/* background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg') */">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
            <!-- 3枚目 -->
            <a class="item" href="javascript:void(0);" style="/* background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg') */">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
            <!-- 4枚目 -->
            <a class="item" href="javascript:void(0);" style="/* background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/header_middle.jpg') */">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/header.jpg">
            </a>
        </div>
    </div>

</section>
