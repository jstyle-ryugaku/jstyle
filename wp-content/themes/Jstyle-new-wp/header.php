<?php
$options = get_design_plus_option();
$header_fix = is_mobile() ? $options['mobile_header_fix'] : $options['header_fix'];
$args = array(
    'container' => 'nav',
    'menu_class' => 'p-global-nav u-clearfix',
    'menu_id' => 'js-global-nav',
    'link_after' => '<span></span><span>',
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

<!------- ここから下はソースのパクリ ------>


<!-- <header id="js-header" class="l-header l-header--fixed is-active">
	<div class="l-header__inner">
				<h1 class="l-header__logo c-logo c-logo--retina">
								<a href="http://tcdwp.info/tcd051/">
				<img src="http://tcdwp.info/tcd051/wp-content/uploads/2017/09/logo_header.png" alt="WordPressテーマ「VOGUE (tcd051)」">
			</a>
					</h1>		<a href="#" id="js-menu-button" class="p-menu-button c-menu-button"></a>
		<nav class="menu-%e3%82%b0%e3%83%ad%e3%83%bc%e3%83%90%e3%83%ab%e3%83%a1%e3%83%8b%e3%83%a5%e3%83%bc-container"><ul id="js-global-nav" class="p-global-nav u-clearfix"><li id="menu-item-1043" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1025 current_page_item menu-item-1043"><a href="http://tcdwp.info/tcd051/">TOP<span></span><span></a></li>
<li id="menu-item-1056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1056"><a href="http://tcdwp.info/tcd051/concept/">CONCEPT<span></span><span></a>
<ul  class="sub-menu">
	<li id="menu-item-1058" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1058"><a href="http://tcdwp.info/tcd051/2015/02/10/%e3%83%86%e3%83%bc%e3%83%9e%e3%81%ab%e8%a8%ad%e5%ae%9a%e3%81%95%e3%82%8c%e3%81%a6%e3%81%84%e3%82%8b%e6%a7%98%e3%80%85%e3%81%aa%e3%82%b9%e3%82%bf%e3%82%a4%e3%83%ab%e3%82%92%e7%a2%ba%e8%aa%8d%e3%81%99/">通常記事<span></span><span></a></li>
	<li id="menu-item-1059" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1059"><a href="http://tcdwp.info/tcd051/blog/">アーカイブページ<span></span><span></a></li>
	<li id="menu-item-1060" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1060"><a href="http://tcdwp.info/tcd051/news/">お知らせ一覧ページ<span></span><span></a></li>
	<li id="menu-item-1061" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1061"><a href="#">固定ページサンプル<span></span><span></a>
	<ul  class="sub-menu">
		<li id="menu-item-1064" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1064"><a href="http://tcdwp.info/tcd051/concept/">CONCEPT<span></span><span></a></li>
		<li id="menu-item-1198" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1198"><a href="http://tcdwp.info/tcd051/exterior/">EXTERIOR<span></span><span></a></li>
		<li id="menu-item-1197" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1197"><a href="http://tcdwp.info/tcd051/location/">LOCATION<span></span><span></a></li>
		<li id="menu-item-1439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1439"><a href="http://tcdwp.info/tcd051/staff/">STAFF<span></span><span></a></li>
		<li id="menu-item-1077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1077"><a href="http://tcdwp.info/tcd051/page-default/">固定ページ（デフォルト）<span></span><span></a></li>
		<li id="menu-item-1076" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1076"><a href="http://tcdwp.info/tcd051/page-noside/">固定ページ（サイドバー無し）<span></span><span></a></li>
		<li id="menu-item-1075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1075"><a href="http://tcdwp.info/tcd051/page-full/">固定ページ（フル幅）<span></span><span></a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-1057" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1057"><a href="http://tcdwp.info/tcd051/plan/">PLAN<span></span><span></a>
<ul  class="sub-menu">
	<li id="menu-item-1167" class="menu-item menu-item-type-post_type menu-item-object-plan menu-item-1167"><a href="http://tcdwp.info/tcd051/plan/modern/">MODERN<span></span><span></a></li>
	<li id="menu-item-1168" class="menu-item menu-item-type-post_type menu-item-object-plan menu-item-1168"><a href="http://tcdwp.info/tcd051/plan/superior/">SUPERIOR<span></span><span></a></li>
	<li id="menu-item-1112" class="menu-item menu-item-type-post_type menu-item-object-plan menu-item-1112"><a href="http://tcdwp.info/tcd051/plan/infinity/">INFINITY<span></span><span></a></li>
</ul>
</li>
<li id="menu-item-1199" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1199"><a href="http://tcdwp.info/tcd051/exterior/">EXTERIOR<span></span><span></a></li>
<li id="menu-item-1044" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1044"><a href="http://tcdwp.info/tcd051/blog/">BLOG<span></span><span></a>
<ul  class="sub-menu">
	<li id="menu-item-1435" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1435"><a href="http://tcdwp.info/tcd051/category/housing/">家づくり<span></span><span></a></li>
	<li id="menu-item-1438" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1438"><a href="http://tcdwp.info/tcd051/category/lifestyle/">ライフスタイル<span></span><span></a></li>
	<li id="menu-item-1436" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1436"><a href="http://tcdwp.info/tcd051/category/exterior/">エクステリア<span></span><span></a></li>
	<li id="menu-item-1437" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1437"><a href="http://tcdwp.info/tcd051/category/interior/">インテリア<span></span><span></a></li>
</ul>
</li>
<li id="menu-item-1065" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1065"><a target="_blank" href="http://design-plus1.com/tcd-w/tcd051">DOWNLOAD<span></span><span></a></li>
</ul></nav>	</div>
</header> -->

<!------- ここから上はソースコードのパクリ ------>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php seo_description(); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');
    echo '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" type="text/css"/>
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
                <li><a href="#"><span class="menu-button--ja">トップページ</span><span class="menu-button--en">Home</span></a>
                </li>
                <li><a href="#"><span class="menu-button--ja">Jstyleについて</span><span
                                class="menu-button--en">About</span></a></li>
                <li><a href="#"><span class="menu-button--ja">留学する国</span><span
                                class="menu-button--en">Country</span></a></li>
                <li><a href="#"><span class="menu-button--ja">留学の目的</span><span
                                class="menu-button--en">Purpose</span></a></li>
                <li><a href="#"><span class="menu-button--ja">留学の準備</span><span
                                class="menu-button--en">Prepare</span></a></li>
                <li><a href="#"><span class="menu-button--ja">留学体験記</span><span class="menu-button--en">Interview</span></a>
                </li>
            </ul>
        </nav>
        <div class="l-header__tel">
            <div class="p-request__inner">
                <p class="p-request__text">無料相談受け付け中</p>
            </div>
            <div class="tel-btn-container">
                <div class="call footer-btn">
                    <a class="tbtn" href="#">
                        <i class="fas fa-phone"></i>
                        <p class="number">03-5848-5432</p>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
