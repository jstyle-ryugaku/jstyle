<?php
$options = get_design_plus_option();

// ブログ一覧、ニュース一覧では、フッター上にボーダーを付ける
if (is_home() || (is_archive() && !is_post_type_archive('plan'))) {
    $is_footer_border = true;
} else {
    $is_footer_border = false;
}

// フッターの背景色
$footer_bg_upper = is_mobile() ? $options['footer_bg_upper_mobile'] : $options['footer_bg_upper'];
$footer_bg_lower = is_mobile() ? $options['footer_bg_lower_mobile'] : $options['footer_bg_lower'];
?>

<!------- phpタグ抜いたもの ------>

<footer class="l-footer" style="background: #eeeeee;">
    <div id="js-pagetop" class="p-pagetop"><a href="#"></a></div>
    <section class="p-widget-area" style="background: #f6f6f6;">
        <div class="p-widget-area__inner l-inner u-clearfix">
            <div class="p-footer-widget widget_nav_menu">
                <h2 class="p-footer-widget__title">トップページ</h2>
                <div class="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc1-container">
                    <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc1"
                        class="menu">
                        <li id="menu-item-1080"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                            <a href="http://tcdwp.info/tcd051/">ホーム</a></li>
                    </ul>
                </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <h2 class="p-footer-widget__title">CONCEPT</h2>
                <div class="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc2-container">
                    <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc2"
                        class="menu">
                        <li id="menu-item-1443"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1443"><a
                                    href="http://tcdwp.info/tcd051/concept/">コンセプト</a></li>
                        <li id="menu-item-1442"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1442"><a
                                    href="http://tcdwp.info/tcd051/exterior/">エクステリア</a></li>
                        <li id="menu-item-1441"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1441"><a
                                    href="http://tcdwp.info/tcd051/location/">ロケーション</a></li>
                        <li id="menu-item-1440"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1440"><a
                                    href="http://tcdwp.info/tcd051/staff/">スタッフ</a></li>
                    </ul>
                </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <h2 class="p-footer-widget__title">PLAN</h2>
                <div class="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc3-container">
                    <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc3"
                        class="menu">
                        <li id="menu-item-1429"
                            class="menu-item menu-item-type-post_type menu-item-object-plan menu-item-1429"><a
                                    href="http://tcdwp.info/tcd051/plan/modern/">モダン</a></li>
                        <li id="menu-item-1430"
                            class="menu-item menu-item-type-post_type menu-item-object-plan menu-item-1430"><a
                                    href="http://tcdwp.info/tcd051/plan/superior/">スーペリア</a></li>
                        <li id="menu-item-1091"
                            class="menu-item menu-item-type-post_type menu-item-object-plan menu-item-1091"><a
                                    href="http://tcdwp.info/tcd051/plan/infinity/">インフィニティ</a></li>
                    </ul>
                </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <h2 class="p-footer-widget__title">EXTERIOR</h2>
                <div class="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc4-container">
                    <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc4"
                        class="menu">
                        <li id="menu-item-1449"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1449"><a href="#">アプローチ</a>
                        </li>
                        <li id="menu-item-1450"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1450"><a href="#">ウッドデッキ</a>
                        </li>
                        <li id="menu-item-1452"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1452"><a href="#">テラス</a>
                        </li>
                        <li id="menu-item-1451"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1451"><a href="#">カーポート</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <h2 class="p-footer-widget__title">BLOG</h2>
                <div class="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc5-container">
                    <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc5"
                        class="menu">
                        <li id="menu-item-1445"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1445"><a
                                    href="http://tcdwp.info/tcd051/category/housing/">家づくり</a></li>
                        <li id="menu-item-1448"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1448"><a
                                    href="">ライフスタイル</a></li>
                        <li id="menu-item-1446"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1446"><a
                                    href="">エクステリア</a></li>
                        <li id="menu-item-1447"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1447"><a
                                    href="">インテリア</a></li>
                    </ul>
                </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <h2 class="p-footer-widget__title">CONTACT</h2>
                <div class="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc6-container">
                    <ul id="menu-%e3%83%95%e3%83%83%e3%82%bf%e3%83%bc%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc6"
                        class="menu">
                        <li id="menu-item-1094"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1094"><a
                                    target="_blank" href="http://design-plus1.com/tcd-w/tcd051">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="l-inner">
        <div class="l-footer__logo c-logo c-logo--retina">
            <a href="http://tcdwp.info/tcd051/">
                <p></p>
            </a>
        </div>
        <div class="p-company-nav">
            <p class="p-address">提携先</p>
            <ul class="p-social-nav">
                <li class="p-social-nav__item">
                    <img src="" alt="">
                </li>
            </ul>
        </div>

        <!------ social icon ---->

        <ul class="p-social-nav" style="list-style: none;">
            <li class="p-social-nav__item">
                <a href=""><i class="fab fa-facebook"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href="http://twitter.com/designplus1"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href="p-social-nav__item"><i class="fab fa-youtube"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href=""><i class="fab fa-instagram"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href=""><i class="fab fa-line"></i></a>
            </li>
        </ul>
        <!------ social icon ---->

        <!-- font awsome CSS -->
        <style>
            ul.p-social-nav li i {
                font-size: 30px;
                color: #50505a;
            }
        </style>

        <p class="p-copyright">
            <small>Copyright © 2017 Jstyle. All rights reserved.</small>
        </p>
    </div>
    <div id="js-request" class="p-request" style="background: #000000;">
        <div class="p-request__inner">
            <p class="p-request__text" style="color: #ffffff;">相談無料！元留学経験者が親身に相談に乗ります！</p>
            <a class="p-request__btn" href="http://tcdwp.info/tcd051/blog/" style="color: #ffffff;">お問い合わせはこちら</a>
        </div>
        <button id="js-request__close" class="p-request__close"></button>
    </div>
</footer>

<!------- phpタグ抜いたもの ------>
<!--
<footer class="l-footer<?php if ($is_footer_border) {
    echo ' l-footer--border';
} ?>" style="background: <?php echo esc_attr($footer_bg_lower); ?>;">
	<div id="js-pagetop" class="p-pagetop"><a href="#"></a></div>
	<section class="p-widget-area" style="background: <?php echo esc_attr($footer_bg_upper); ?>;">
		<div class="p-widget-area__inner l-inner u-clearfix">
			<?php
if (is_mobile()) {
    if (is_active_sidebar('footer_widget_mobile')) {
        dynamic_sidebar('footer_widget_mobile');
    }
} else {
    if (is_active_sidebar('footer_widget')) {
        dynamic_sidebar('footer_widget');
    }
}
?>
		</div>
	</section>
	<div class="l-inner">
		<div class="l-footer__logo c-logo<?php if ($options['footer_logo_image_retina']) {
    echo ' c-logo--retina';
} ?>">
			<?php if ('type1' === $options['footer_use_logo_image']) : ?>
			<a href="<?php echo esc_url(home_url('/')); ?>" style="font-size: <?php echo esc_attr($options['footer_logo_font_size']); ?>px;"><?php bloginfo('name'); ?></a>
			<?php else : ?>
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php echo esc_attr(wp_get_attachment_url($options['footer_logo_image'])); ?>" alt="<?php bloginfo('name'); ?>">
			</a>
			<?php endif; ?>
		</div>
		<p class="p-address"><?php echo nl2br(esc_html($options['footer_company_address'])); ?></p>
		<ul class="p-social-nav">
			<?php if ($options['facebook_url']) : ?>
			<li class="p-social-nav__item p-social-nav__item--facebook">
				<a href="<?php echo esc_url($options['facebook_url']); ?>"></a>
			</li>
			<?php endif; ?>
			<?php if ($options['twitter_url']) : ?>
			<li class="p-social-nav__item p-social-nav__item--twitter">
				<a href="<?php echo esc_url($options['twitter_url']); ?>"></a>
			</li>
			<?php endif; ?>
			<?php if ($options['insta_url']) : ?>
			<li class="p-social-nav__item p-social-nav__item--instagram">
				<a href="<?php echo esc_url($options['insta_url']); ?>"></a>
			</li>
			<?php endif; ?>
			<?php if ($options['show_rss']) : ?>
			<li class="p-social-nav__item p-social-nav__item--rss">
				<a href="<?php bloginfo('rss_url'); ?>"></a>
			</li>
			<?php endif; ?>
		</ul>
		<p class="p-copyright"><small>Copyright &copy; <?php bloginfo('name'); ?>. All rights reserved.</small></p>
	</div>
	<?php
if ($options['display_request']) {
    if ((is_front_page() && !$options['hide_request_on_front']) || !is_front_page()) {
        get_template_part('template-parts/footer-request');
    }
} else {
    if (is_mobile() && 'type3' !== $options['footer_bar_display']) {
        get_template_part('template-parts/footer-bar');
    }
}
?>
</footer>
 -->
<?php
// ロード画面を使う場合は </div> を差し込む
// ロード画面を使わず、スプラッシュページを表示する場合は、inc/splash.phpで差し込む
if ($options['use_load_icon']) {
    echo '</div>' . "\n";
}
?>
<?php wp_footer(); ?>
</body>
</html>
