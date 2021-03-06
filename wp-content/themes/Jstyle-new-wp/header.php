<?php
$options = get_design_plus_option();
$header_fix = is_mobile() ? $options['mobile_header_fix'] : $options['header_fix'];
$args = array(
    'container' => 'nav',
    'menu_class' => 'p-global-nav u-clearfix',
    'menu_id' => 'js-global-nav',
    'link_after' => '<span></span>',
    'theme_location' => 'global'
);

// スプラッシュページ関連の処理
// cookie から tcd_referrer を取得
$tcd_referrer = isset($_COOKIE['tcd_referrer']) ? $_COOKIE['tcd_referrer'] : '';

// TCD_Splash_Page クラスのオブジェクトを初期化
$tcd_splash_page = new TCD_Splash_Page($tcd_referrer);

// 現在のURLを取得する
$current_url = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// cookie の処理
if ($tcd_referrer) {
    // delete cookie
    setcookie('tcd_referrer', '', time() - 3600);
}
// set cookie
setcookie('tcd_referrer', $current_url, 0, '/');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php seo_description(); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <?php if ($options['use_ogp']) {
        ogp();
    } ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
// スプラッシュページを読み込む
// スプラッシュページ以外でロード画面がONの時は、ロード画面を表示
// フロントページの遷移元がサイト内の場合、スプラッシュページを表示しない
if ($tcd_splash_page->is_splash_page()) {
    get_template_part('template-parts/splash');
    echo '<div id="site_wrap">' . "\n";
} elseif ($options['use_load_icon']) {
?>
<div id="site_loader_overlay">
    <div id="site_loader_animation" class="c-load--<?php echo esc_attr($options['load_icon']); ?>">
        <?php if ('type3' === $options['load_icon']) : ?>
            <i></i><i></i><i></i><i></i>
        <?php endif; ?>
    </div>
</div>
<div id="site_wrap">
    <?php } // endif ?>
    <header id="js-header" class="l-header<?php if ('type2' === $header_fix) {
        echo ' l-header--fixed';
    } ?><?php if (!$options['use_load_icon']) {
        echo ' is-active';
    } ?>">
        <div class="l-header__inner">
            <?php if (is_front_page()) : ?>
            <h1 class="l-header__logo c-logo<?php if ($options['header_logo_image_retina']) {
                echo ' c-logo--retina';
            } ?>">
                <?php else : ?>
                <div class="l-header__logo c-logo<?php if ($options['header_logo_image_retina']) {
                    echo ' c-logo--retina';
                } ?>">
                    <?php endif; ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/top/jstyle_logo.svg"
                             alt="<?php bloginfo('name'); ?>">
                    </a>
                <?php if (is_front_page()) : ?></h1><?php else : ?></div><?php endif; ?>
        <a href="#" id="js-menu-button" class="p-menu-button c-menu-button"></a>
        <nav id="js-global-nav" class="p-global-nav u-clearfix">
            <ul class="l-header__menu">
                <li><a href="<?php echo home_url('/'); ?>">
                        <div class="menu-button--ja">トップページ</div>
                        <div
                                class="menu-button--en">Home
                        </div>
                    </a>
                </li>
                <li class="menu-item-has-children"><a href="<?php echo home_url('/about'); ?>">
                        <div
                                class="menu-button--ja">Jstyleについて
                        </div>
                        <div
                                class="menu-button--en">About
                        </div>
                        <span></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/about/new-style'); ?>">Jstyleの留学スタイル<span></span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/about/point'); ?>">Jstyleのここがすごい<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/about/reason'); ?>">Jstyleの選ばれる5つの理由<span></span></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/about/flow'); ?>">留学の流れ<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/about/president'); ?>">代表挨拶<span></span></a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="<?php echo home_url('/country'); ?>">
                        <div
                                class="menu-button--ja">留学する国
                        </div>
                        <div
                                class="menu-button--en">Country
                        </div>
                        <span></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/country/USA'); ?>">アメリカ<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/country/ca'); ?>">カナダ<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/country/en'); ?>">イギリス<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/country/au'); ?>">オーストラリア<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/country/nz'); ?>">ニュージーランド<span></span></a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="<?php echo home_url('/purpose'); ?>">
                        <div
                                class="menu-button--ja">留学の目的
                        </div>
                        <div
                                class="menu-button--en">Purpose
                        </div>
                        <span></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/purpose/long'); ?>">長期留学<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/purpose/short'); ?>">短期留学<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/purpose/language'); ?>">語学留学<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/purpose/working'); ?>">ワーキングホリデー<span></span></a></li>
                    </ul>
                </li>
                <li><a href="<?php echo home_url('/preparation'); ?>">
                        <div
                                class="menu-button--ja">留学の基礎知識
                        </div>
                        <div
                                class="menu-button--en">Preparation
                        </div>
                    </a>
                    <!--                    <ul class="sub-menu">-->
                    <!--                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a-->
                    <!--                                    href="-->
                    <?php //echo home_url('/'); ?><!--">滞在先の種類</<span></span></a></li>-->
                    <!--                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a-->
                    <!--                                    href="-->
                    <?php //echo home_url('/'); ?><!--">語学能力試験<span></span></a></li>-->
                    <!--                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a-->
                    <!--                                    href="-->
                    <?php //echo home_url('/'); ?><!--">クレジットカード<span></span></a></li>-->
                    <!--                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a-->
                    <!--                                    href="-->
                    <?php //echo home_url('/'); ?><!--">海外保険<span></span></a></li>-->
                    <!--                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a-->
                    <!--                                    href="-->
                    <?php //echo home_url('/'); ?><!--">注意点<span></span></a></li>-->
                    <!--                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a-->
                    <!--                                    href="-->
                    <?php //echo home_url('/'); ?><!--">持ち物リスト<span></span></a></li>-->
                    <!--                    </ul>-->
                </li>
                <li class="menu-item-has-children"><a href="<?php echo home_url('/interview-search'); ?>">
                        <div
                                class="menu-button--ja">留学体験記
                        </div>
                        <div
                                class="menu-button--en">Interview
                        </div>
                        <span></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/interview/?kind=留学体験記'); ?>">留学体験記<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/interview/?kind=就活体験記'); ?>">就活体験記<span></span></a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-plan"><a
                                    href="<?php echo home_url('/interview/?kind=就職後体験記'); ?>">就職後体験記<span></span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="l-header__tel">
            <div class="p-request__inner">
                <p class="p-request__text">無料相談受け付け中</p>
            </div>
            <div class="tel-btn-container">
                <div class="call tel-btn">
                    <a class="tbtn" href="tel:03-5848-5432">
                        <i class="fas fa-phone"></i>
                        <p class="number">03-5848-5432</p>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
