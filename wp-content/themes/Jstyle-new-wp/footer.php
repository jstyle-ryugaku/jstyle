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

<footer class="l-footer" style="background: #eee;">
    <section class="p-widget-area">
        <div class="p-widget-area__inner l-inner u-clearfix">
            <div class="p-footer-widget widget_nav_menu">
                <a href="<?php echo home_url('/'); ?>"><h2 class="p-footer-widget__title">Home</h2>
                    <div>
                        <ul class="menu">
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/'); ?>">トップページ</a></li>
                        </ul>
                    </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <a href="<?php echo home_url('/about'); ?>"><h2 class="p-footer-widget__title">About</h2>
                    <div>
                        <ul class="menu">
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/about'); ?>">Jstyleについて</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/about/new-style'); ?>">Jstyleの留学スタイル</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/about/point'); ?>">Jstyleのここがすごい</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/about/reason'); ?>">Jstyleが選ばれる5つの理由</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/about/flow'); ?>">留学の流れ</a></li>
                        </ul>
                    </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <a href="<?php echo home_url('/country'); ?>"><h2 class="p-footer-widget__title">Country</h2>
                    <div>
                        <ul class="menu">
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/country/usa'); ?>">アメリカ</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/country/ca'); ?>">カナダ</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/country/au'); ?>">オーストラリア</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/country/en'); ?>">イギリス</a></li>
                        </ul>
                    </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <a href="<?php echo home_url('/purpose'); ?>"><h2 class="p-footer-widget__title">Purpose</h2>
                    <div>
                        <ul class="menu">
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/purpose/short'); ?>">短期留学</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/purpose/long'); ?>">長期留学</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/purpose/working-holiday'); ?>">ワーキングホリデー</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/purpose/language'); ?>">語学留学</a></li>
                        </ul>
                    </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <a href="<?php echo home_url('/preparation'); ?>"><h2 class="p-footer-widget__title">Preparation</h2>
                    <div>
                        <ul class="menu">
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/preparation'); ?>">留学の基礎知識</a></li>
                        </ul>
                    </div>
            </div>
            <div class="p-footer-widget widget_nav_menu">
                <a href="<?php echo home_url('/interview-search'); ?>"><h2 class="p-footer-widget__title">Interview</h2>
                    <div>
                        <ul class="menu">
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/interview/?kind=留学体験記'); ?>">留学体験記</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/interview/?kind=就活体験記'); ?>">就活体験記</a></li>
                            <li id="menu-item-1080"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1080">
                                <a href="<?php echo home_url('/interview/?kind=就職後体験記'); ?>">就職後体験記</a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </section>
    <div class="l-inner nav-footer-bar-container">
        <div class="p-company-nav__container">
            <p class="p-address">提携先</p>
            <p class="p-university">慶應義塾大学</p>
            <ul class="p-company-nav">
                <li class="p-company-nav__item">三田キャンパス</li>
                <li class="p-company-nav__item">国際関係会</li>
                <li class="p-company-nav__item">英語會</li>
            </ul>
        </div>

        <!------ social icon ---->

        <ul class="p-social-nav" style="list-style: none;">
            <li class="p-social-nav__item">
                <a href="https://www.facebook.com/jstyle.ryugaku/"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href="https://twitter.com/Jstyle_official"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href="https://www.youtube.com/channel/UCM7mpmWQqgWDMjr4W_fqCbg"><i class="fab fa-youtube"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href="https://www.instagram.com/jstyle.studyabroad/"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="p-social-nav__item">
                <a href="https://line.me/R/ti/p/kHSTuR6fzE"><i class="fab fa-line"></i></a>
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


    <!--
    ==================================================
     固定フッター 改変版 / 作成：堀
    ==================================================
    -->
    <div class="fixed-footer">
        <div class="option">
            <div class="button">
                <div class="line-button">
                    <i class="fab fa-line"></i>
                    <p class="text"><span class="line-text">LINE</span>で<br>留学相談</p>
                </div>
                <div class="close-button">
                    <i class="close-icon"></i>
                </div>
            </div>
            <ul>
                <li class="o-01 o-line">
                    <a href="https://line.me/R/ti/p/kHSTuR6fzE">
                        <i class="fab fa-line"></i>
                        <p class="text bold">LINEで相談する</p>
                    </a>
                </li>
                <span class="sub">
                    <li class="o-02 o-tel">
                        <a href="tel:0358485432">
                            <i class="fas fa-phone"></i>
                            <p class="text only-smartphone">電話で相談する</p>
                            <p class="text only-desktop">03-5848-5432</p>
                        </a>
                    </li>
                    <li class="o-03 o-mail">
                        <a href="/contact">
                            <i class="fas fa-user"></i>
                            <p class="text">面談を予約する</p>
                        </a>
                    </li>
                    <li class="o-04 o-paper">
                        <a href="/brochure-request-form/">
                            <i class="fas fa-file-alt"></i>
                            <p class="text">まずは資料請求</p>
                        </a>
                    </li>
                </span>
            </ul>
        </div>
        <div class="body-cover"></div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/footer-bar.js"></script>
    <!--
    ==================================================
    -->
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
