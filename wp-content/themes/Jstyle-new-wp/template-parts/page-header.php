<?php
$options = get_design_plus_option();

// キャッチフレーズをh1タグにするかどうか
$is_h1 = false;

if ( is_404() ) {
	$image = wp_get_attachment_url( $options['ph_404_image'], 'full' );
	$bg_color = hex2rgb( $options['ph_404_bg_color'] ); 
	$bg_opacity = $options['ph_404_bg_opacity'];
	$color = $options['ph_404_color'];
	$font_size = $options['ph_404_catchphrase_font_size'];
	$catchphrase = $options['ph_404_catchphrase'];
	$is_h1 = true;
} elseif ( is_post_type_archive( 'news' ) || is_singular( 'news' ) ) {
	$image = wp_get_attachment_url( $options['news_ph_image'], 'full' );
	$bg_color = hex2rgb( $options['news_ph_bg_color'] ); 
	$bg_opacity = $options['news_ph_bg_opacity'];
	$color = $options['news_ph_color'];
	$font_size = $options['news_ph_catchphrase_font_size'];
	$catchphrase = $options['news_ph_catchphrase'];
	$is_h1 = is_post_type_archive( 'news' ) ? true : false;

} elseif ( is_post_type_archive( 'interview' ) || is_singular('interview') ) {

	$image = get_template_directory_uri().'/assets/images/interview/header.jpg';
	$bg_color = hex2rgb( $options['plan_ph_bg_color'] ); 
	$bg_opacity = $options['plan_ph_bg_opacity'];
	$color = $options['plan_ph_color'];
	$font_size = $options['plan_ph_catchphrase_font_size'];
	$catchphrase = 'Interview';
	$sub_catchphrase = '留学体験記';
	$is_h1 = true;

} elseif ( is_post_type_archive( 'life-info' ) || is_singular('life-info')  ) {

	$image = get_template_directory_uri().'/assets/images/life-info/header.jpg';
	$bg_color = hex2rgb( $options['plan_ph_bg_color'] );
	$bg_opacity = $options['plan_ph_bg_opacity'];
	$color = $options['plan_ph_color'];
	$font_size = $options['plan_ph_catchphrase_font_size'];
	$catchphrase = 'Life Info';
	$sub_catchphrase = '生活情報';
	$is_h1 = true;

} elseif ( is_page() || is_singular( 'plan' ) ) {
	$image = wp_get_attachment_url( $post->ph_image, 'full' );
	$bg_color = hex2rgb( $post->ph_bg_color ); 
	$bg_opacity = $post->ph_bg_opacity;
	$color = $post->ph_color;
	$font_size = $post->ph_catch_font_size;
	$catchphrase = $post->ph_catch;
    $sub_catchphrase = $post->ph_sub_catch;
	$is_h1 = is_page() && ! get_page_template_slug( $post->ID ) ? false : true;
} else {
	$image = wp_get_attachment_url( $options['ph_image'], 'full' );
	$bg_color = hex2rgb( $options['ph_bg_color'] ); 
	$bg_opacity = $options['ph_bg_opacity'];
	$color = $options['ph_color'];
	$font_size = $options['ph_catchphrase_font_size'];
	$catchphrase = $options['ph_catchphrase'];
	$is_h1 = is_single() ? false : true;
}
?>
	<header class="p-page-header" style="background-image: url(<?php echo esc_attr( $image ); ?>);">
		<div class="p-page-header__inner l-inner">
			<h1 class="p-page-header__title">
                <span class="p-page-header__title--jp"><?php echo nl2br( esc_html( $sub_catchphrase ) ); ?></span>
                <span class="p-page-header__title--en"><?php echo nl2br( esc_html( $catchphrase ) ); ?></span>
            </h1>
		</div>
	</header>
