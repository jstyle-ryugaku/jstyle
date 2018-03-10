<?php
// 設定項目と無害化用コールバックを登録
function theme_options_init() {
	register_setting( 
		'design_plus_options', 
		'dp_options', 
		'theme_options_validate'
	);
}
add_action( 'admin_init', 'theme_options_init' );

// 外観メニューにサブメニューを登録
function theme_options_add_page() {
	add_theme_page( 
		__( 'TCD Theme Options', 'tcd-w' ), 
		__( 'TCD Theme Options', 'tcd-w' ), 
		'edit_theme_options',
		'theme_options',
		'theme_options_do_page'
	);
}
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * オプション初期値
 * @var array
 */
global $dp_default_options;
$dp_default_options = array(
//basic
    'pickedcolor1' => '#b69e84',
    'pickedcolor2' => '#92785f',
    'content_link_color' => '#b69e84',
    'favicon' => '',
    'font_type' => 'type1',
    'headline_font_type' => 'type3',
    'hover_type' => 'type1',
    'hover1_zoom' => '1.2',
    'hover2_direct' => 'type1',
    'hover2_opacity' => '0.5',
    'hover2_bgcolor' => '#b69e84',
    'hover3_opacity' => '0.5',
    'hover3_bgcolor' => '#b69e84',
    'responsive' => 'yes',
    'use_emoji' => 1,
    'css_code' => '',
    'use_ogp' => 0,
    'fb_admin_id' => '',
    'ogp_image' => '',
    'use_twitter_card' => 0,
    'twitter_account_name' => '',
    'column_float' => 0,
    'use_load_icon' => '',
    'load_time' => '3000',
    'load_icon' => 'type1',
    'header_image_404' => '',
    'header_txt_404' => '',
    'header_sub_txt_404' => '',
    'header_txt_size_404' => 38,
    'header_sub_txt_size_404' => 16,
    'header_txt_size_404_mobile' => 28,
    'header_sub_txt_size_404_mobile' => 14,
    'header_txt_color_404' => '#ffffff',
    'dropshadow_404_h' => 2,
    'dropshadow_404_v' => 2,
    'dropshadow_404_b' => 2,
    'dropshadow_404_c' => '#888888',
//logo
    'logo_font_size' => 36,
    'logo_font_size_fix' => 36,
    'logo_font_size_mobile' => 26,
    'logo_font_size_mobile_fix' => 26,
    'logo_font_size_footer' => 36,
    'logo_font_size_footer_mobile' => 26,
    'header_logo_image' => false,
    'header_logo_image_fix' => false,
    'header_logo_image_mobile' => false,
    'header_logo_image_mobile_fix' => false,
    'footer_logo_image' => false,
    'header_logo_retina' => '',
    'header_logo_retina_fix' => '',
    'header_logo_retina_mobile' => '',
    'header_logo_retina_mobile_fix' => '',
    'footer_logo_retina' => '',
// index header slider
    'header_content_type' => 'type1',
    'slider_image1' => false,
    'slider_image2' => false,
    'slider_image3' => false,
    'slider_image4' => false,
    'slider_image5' => false,
    'slider_image_mobile1' => false,
    'slider_image_mobile2' => false,
    'slider_image_mobile3' => false,
    'slider_image_mobile4' => false,
    'slider_image_mobile5' => false,
    'slider_url1' => '',
    'slider_url2' => '',
    'slider_url3' => '',
    'slider_url4' => '',
    'slider_url5' => '',
    'slider_target1' => '',
    'slider_target2' => '',
    'slider_target3' => '',
    'slider_target4' => '',
    'slider_target5' => '',
    'use_slider_caption1' => '',
    'use_slider_caption2' => '',
    'use_slider_caption3' => '',
    'use_slider_caption4' => '',
    'use_slider_caption5' => '',
    'slider_headline1' => '',
    'slider_headline2' => '',
    'slider_headline3' => '',
    'slider_headline4' => '',
    'slider_headline5' => '',
    'slider_headline_font_size1' => '47',
    'slider_headline_font_size2' => '47',
    'slider_headline_font_size3' => '47',
    'slider_headline_font_size4' => '47',
    'slider_headline_font_size5' => '47',
    'slider_headline_font_size_mobile1' => '24',
    'slider_headline_font_size_mobile2' => '24',
    'slider_headline_font_size_mobile3' => '24',
    'slider_headline_font_size_mobile4' => '24',
    'slider_headline_font_size_mobile5' => '24',
    'slider_headline_color1' => '#ffffff',
    'slider_headline_color2' => '#ffffff',
    'slider_headline_color3' => '#ffffff',
    'slider_headline_color4' => '#ffffff',
    'slider_headline_color5' => '#ffffff',
    'slider_headline_shadow_a1' => 0,
    'slider_headline_shadow_b1' => 0,
    'slider_headline_shadow_c1' => 4,
    'slider_headline_shadow_a2' => 0,
    'slider_headline_shadow_b2' => 0,
    'slider_headline_shadow_c2' => 4,
    'slider_headline_shadow_a3' => 0,
    'slider_headline_shadow_b3' => 0,
    'slider_headline_shadow_c3' => 4,
    'slider_headline_shadow_a4' => 0,
    'slider_headline_shadow_b4' => 0,
    'slider_headline_shadow_c4' => 4,
    'slider_headline_shadow_a5' => 0,
    'slider_headline_shadow_b5' => 0,
    'slider_headline_shadow_c5' => 4,
    'slider_headline_shadow_color1' => '#000000',
    'slider_headline_shadow_color2' => '#000000',
    'slider_headline_shadow_color3' => '#000000',
    'slider_headline_shadow_color4' => '#000000',
    'slider_headline_shadow_color5' => '#000000',
    'slider_caption1' => '',
    'slider_caption2' => '',
    'slider_caption3' => '',
    'slider_caption4' => '',
    'slider_caption5' => '',
    'slider_caption_font_size1' => '14',
    'slider_caption_font_size2' => '14',
    'slider_caption_font_size3' => '14',
    'slider_caption_font_size4' => '14',
    'slider_caption_font_size5' => '14',
    'slider_caption_font_size_mobile1' => '12',
    'slider_caption_font_size_mobile2' => '12',
    'slider_caption_font_size_mobile3' => '12',
    'slider_caption_font_size_mobile4' => '12',
    'slider_caption_font_size_mobile5' => '12',
    'slider_caption_color1' => '#ffffff',
    'slider_caption_color2' => '#ffffff',
    'slider_caption_color3' => '#ffffff',
    'slider_caption_color4' => '#ffffff',
    'slider_caption_color5' => '#ffffff',
    'slider_caption_shadow_a1' => 0,
    'slider_caption_shadow_b1' => 0,
    'slider_caption_shadow_c1' => 4,
    'slider_caption_shadow_a2' => 0,
    'slider_caption_shadow_b2' => 0,
    'slider_caption_shadow_c2' => 4,
    'slider_caption_shadow_a3' => 0,
    'slider_caption_shadow_b3' => 0,
    'slider_caption_shadow_c3' => 4,
    'slider_caption_shadow_a4' => 0,
    'slider_caption_shadow_b4' => 0,
    'slider_caption_shadow_c4' => 4,
    'slider_caption_shadow_a5' => 0,
    'slider_caption_shadow_b5' => 0,
    'slider_caption_shadow_c5' => 4,
    'slider_caption_shadow_color1' => '#000000',
    'slider_caption_shadow_color2' => '#000000',
    'slider_caption_shadow_color3' => '#000000',
    'slider_caption_shadow_color4' => '#000000',
    'slider_caption_shadow_color5' => '#000000',
    'show_slider_button1' => '',
    'show_slider_button2' => '',
    'show_slider_button3' => '',
    'show_slider_button4' => '',
    'show_slider_button5' => '',
    'slider_button1' => '',
    'slider_button2' => '',
    'slider_button3' => '',
    'slider_button4' => '',
    'slider_button5' => '',
    'slider_button_color1' => '#ffffff',
    'slider_button_color2' => '#ffffff',
    'slider_button_color3' => '#ffffff',
    'slider_button_color4' => '#ffffff',
    'slider_button_color5' => '#ffffff',
    'slider_button_bg_color1' => '#b69e84',
    'slider_button_bg_color2' => '#b69e84',
    'slider_button_bg_color3' => '#b69e84',
    'slider_button_bg_color4' => '#b69e84',
    'slider_button_bg_color5' => '#b69e84',
    'slider_button_border_color1' => '#ffffff',
    'slider_button_border_color2' => '#ffffff',
    'slider_button_border_color3' => '#ffffff',
    'slider_button_border_color4' => '#ffffff',
    'slider_button_border_color5' => '#ffffff',
    'slider_button_color_hover1' => '#ffffff',
    'slider_button_color_hover2' => '#ffffff',
    'slider_button_color_hover3' => '#ffffff',
    'slider_button_color_hover4' => '#ffffff',
    'slider_button_color_hover5' => '#ffffff',
    'slider_button_bg_color_hover1' => '#92785f',
    'slider_button_bg_color_hover2' => '#92785f',
    'slider_button_bg_color_hover3' => '#92785f',
    'slider_button_bg_color_hover4' => '#92785f',
    'slider_button_bg_color_hover5' => '#92785f',
    'slider_button_border_color_hover1' => '#ffffff',
    'slider_button_border_color_hover2' => '#ffffff',
    'slider_button_border_color_hover3' => '#ffffff',
    'slider_button_border_color_hover4' => '#ffffff',
    'slider_button_border_color_hover5' => '#ffffff',
    'slider_video' => '',
    'slider_video_image' => '',
    'use_slider_video_caption' => '',
    'slider_video_headline' => '',
    'slider_video_headline_font_size' => '47',
    'slider_video_headline_font_size_mobile' => '24',
    'slider_video_headline_color' => '#ffffff',
    'slider_video_headline_shadow_a' => 0,
    'slider_video_headline_shadow_b' => 0,
    'slider_video_headline_shadow_c' => 4,
    'slider_video_headline_shadow_color' => '#000000',
    'slider_video_caption' => '',
    'slider_video_caption_font_size' => '14',
    'slider_video_caption_font_size_mobile' => '12',
    'slider_video_caption_color' => '#ffffff',
    'slider_video_caption_shadow_a' => 0,
    'slider_video_caption_shadow_b' => 0,
    'slider_video_caption_shadow_c' => 4,
    'slider_video_caption_shadow_color' => '#000000',
    'show_slider_video_button' => '',
    'slider_video_button' => '',
    'slider_video_button_url' => '',
    'slider_video_button_target' => '',
    'slider_video_button_color' => '#ffffff',
    'slider_video_button_bg_color' => '#b69e84',
    'slider_video_button_border_color' => '#ffffff',
    'slider_video_button_color_hover' => '#ffffff',
    'slider_video_button_bg_color_hover' => '#92785f',
    'slider_video_button_border_color_hover' => '#ffffff',
    'slider_youtube_url' => '',
    'slider_youtube_image' => '',
    'use_slider_youtube_caption' => '',
    'slider_youtube_headline' => '',
    'slider_youtube_headline_font_size' => '47',
    'slider_youtube_headline_font_size_mobile' => '24',
    'slider_youtube_headline_color' => '#ffffff',
    'slider_youtube_headline_shadow_a' => 0,
    'slider_youtube_headline_shadow_b' => 0,
    'slider_youtube_headline_shadow_c' => 4,
    'slider_youtube_headline_shadow_color' => '#000000',
    'slider_youtube_caption' => '',
    'slider_youtube_caption_font_size' => '14',
    'slider_youtube_caption_font_size_mobile' => '12',
    'slider_youtube_caption_color' => '#ffffff',
    'slider_youtube_caption_shadow_a' => 0,
    'slider_youtube_caption_shadow_b' => 0,
    'slider_youtube_caption_shadow_c' => 4,
    'slider_youtube_caption_shadow_color' => '#000000',
    'show_slider_youtube_button' => '',
    'slider_youtube_button' => '',
    'slider_youtube_button_url' => '',
    'slider_youtube_button_target' => '',
    'slider_youtube_button_color' => '#ffffff',
    'slider_youtube_button_bg_color' => '#b69e84',
    'slider_youtube_button_border_color' => '#ffffff',
    'slider_youtube_button_color_hover' => '#ffffff',
    'slider_youtube_button_bg_color_hover' => '#92785f',
    'slider_youtube_button_border_color_hover' => '#ffffff',
    'slider_time' => '7000',
// index news
    'show_index_news' => 0,
    'show_index_news_date' => 0,
    'index_news_num' => 5,
    'show_index_news_archive_link' => 0,
    'index_news_archive_link_text' => __('News archive', 'tcd-w'),
    'show_index_news_mobile' => 0,
    'show_index_news_date_mobile' => 0,
    'index_news_num_mobile' => 5,
    'show_index_news_archive_link_mobile' => 0,
    'index_news_archive_link_text_mobile' => __('News archive', 'tcd-w'),
// コンテンツビルダー
    'contents_builder' => array(),
// blog content
    'blog_breadcrumb_label' => __('Blog', 'tcd-w'),
    'category_label' => __('Category', 'tcd-w'),
    'category_color' => '#999999',
    'use_category2' => 0,
    'category2_label' => __('Category', 'tcd-w') . '2',
    'category2_slug' => 'category2',
    'category2_color' => '#000000',
    'use_category3' => 0,
    'category3_label' => __('Category', 'tcd-w') . '3',
    'category3_slug' => 'category3',
    'category3_color' => '#b69e84',
    'blog_archive_headline' => __('Blog', 'tcd-w'),
    'blog_archive_headline_font_size' => '42',
    'blog_archive_headline_font_size_mobile' => '20',
    'blog_archive_desc' => '',
    'blog_archive_desc_font_size' => '14',
    'blog_archive_desc_font_size_mobile' => '14',
// post page
    'title_font_size' => '30',
    'content_font_size' => '14',
    'title_font_size_mobile' => '16',
    'content_font_size_mobile' => '14',
    'show_categories' => '1-2',
    'show_date' => 1,
    'show_tag' => 1,
    'show_comment' => 1,
    'show_author' => 1,
    'show_trackback' => 1,
    'show_related_post' => 1,
    'show_next_post' => 1,
    'show_thumbnail' => 1,
    'related_post_headline' => __('Related posts', 'tcd-w'),
    'related_post_num' => 6,
// share button
    'show_sns_top' => 1,
    'show_sns_btm' => 1,
    'sns_type_top' => 'type2',
    'sns_type_btm' => 'type2',
    'show_twitter_top' => 1,
    'show_fblike_top' => 1,
    'show_fbshare_top' => 1,
    'show_google_top' => 1,
    'show_hatena_top' => 1,
    'show_pocket_top' => 1,
    'show_feedly_top' => 1,
    'show_rss_top' => 1,
    'show_pinterest_top' => 1,
    'show_twitter_btm' => 1,
    'show_fblike_btm' => 1,
    'show_fbshare_btm' => 1,
    'show_google_btm' => 1,
    'show_hatena_btm' => 1,
    'show_pocket_btm' => 1,
    'show_feedly_btm' => 1,
    'show_rss_btm' => 1,
    'show_pinterest_btm' => 1,
    'twitter_info' => '',
// post page banner
    'single_ad_code1' => '',
    'single_ad_image1' => false,
    'single_ad_url1' => '',
    'single_ad_code2' => '',
    'single_ad_image2' => false,
    'single_ad_url2' => '',
    'single_ad_code3' => '',
    'single_ad_image3' => false,
    'single_ad_url3' => '',
    'single_ad_code4' => '',
    'single_ad_image4' => false,
    'single_ad_url4' => '',
    'single_ad_code5' => '',
    'single_ad_image5' => false,
    'single_ad_url5' => '',
    'single_ad_code6' => '',
    'single_ad_image6' => false,
    'single_ad_url6' => '',
    'single_mobile_ad_code1' => '',
    'single_mobile_ad_image1' => false,
    'single_mobile_ad_url1' => '',
    'single_mobile_ad_code2' => '',
    'single_mobile_ad_image2' => false,
    'single_mobile_ad_url2' => '',
// introduce content
    'introduce_label' => __('Introduce' , 'tcd-w'),
    'introduce_breadcrumb_label' => __('Introduce', 'tcd-w'),
    'introduce_slug' => 'introduce',
    'use_introduce_category1' => 0,
    'use_introduce_category1_introduce_archive' => 0,
    'introduce_category1_label' => __('Category', 'tcd-w') . '4',
    'introduce_category1_slug' => 'category4',
    'introduce_category1_color' => '#999999',
    'use_introduce_category2' => 0,
    'use_introduce_category2_introduce_archive' => 0,
    'introduce_category2_label' => __('Category', 'tcd-w') . '5',
    'introduce_category2_slug' => 'category5',
    'introduce_category2_color' => '#000000',
    'use_introduce_category3' => 0,
    'use_introduce_category3_introduce_archive' => 0,
    'introduce_category3_label' => __('Category', 'tcd-w') . '6',
    'introduce_category3_slug' => 'category6',
    'introduce_category3_color' => '#49240d',
    'use_introduce_tag' => 1,
    'introduce_tag_label' => __('Tag', 'tcd-w'),
    'introduce_tag_slug' => 'introduce_tag',
    'introduce_archive_catch' => '',
    'introduce_archive_image' => false,
    'introduce_archive_image_catch_bg' => '#49240d',
    'introduce_archive_image_catch_bg_opacity' => '0.7',
    'introduce_archive_text' => array(),
    'show_breadcrumb_introduce_archive' => 1,
    'use_infinitescroll_introduce' => 1,
    'archive_introduce_num' => 12,
    'show_introduce_categories' => '1-2',
    'show_shoulder_copy_introduce' => 1,
    'show_thumbnail_introduce' => 1,
    'show_date_introduce' => 1,
    'show_tag_introduce' => 1,
    'show_sns_top_introduce' => 1,
    'show_sns_btm_introduce' => 1,
    'show_next_post_introduce' => 1,
    'show_archive_banner_introduce' => 1,
    'show_related_introduce' => 1,
    'related_introduce_headline' => __('Related posts', 'tcd-w'),
    'related_introduce_num' => 9,
// news content
    'news_label' => __('News' , 'tcd-w'),
    'news_breadcrumb_label' => __('News', 'tcd-w'),
    'news_slug' => 'news',
    'news_archive_headline' => __('News' , 'tcd-w'),
    'show_next_post_news' => 1,
    'show_sns_top_news' => 1,
    'show_sns_btm_news' => 1,
    'show_date_news' => 1,
    'show_thumbnail_news' => 1,
    'show_recent_news' => 1,
    'recent_news_headline' => __('Recent news', 'tcd-w'),
    'recent_news_num' => 5,
    'recent_news_link_text' => __('News archive', 'tcd-w'),
// search
    'search_post_type' => 'interview',
    'search_keywords_target' => array('title'),
    'show_search_form_keywords' => 1,
    'search_form_keywords_placeholder' => __('Keyword', 'tcd-w'),

    'show_search_form_category1' => 'country',
    'search_form_category1_placeholder' => __('国を選択', 'tcd-w'),

    'show_search_form_category2' => 'term',
    'search_form_category2_placeholder' => __('期間を選択', 'tcd-w'),

    'show_search_form_category3' => 'category3',
    'search_form_category3_placeholder' => __('Select from %category_label%', 'tcd-w'),
    'show_search_form_keywords_introduce' => 1,
    'search_form_keywords_placeholder_introduce' => __('Keyword', 'tcd-w'),
    'show_search_form_category1_introduce' => 'introduce_category1',
    'search_form_category1_placeholder_introduce' => __('Select from %category_label%', 'tcd-w'),
    'show_search_form_category2_introduce' => 'introduce_category2',
    'search_form_category2_placeholder_introduce' => __('Select from %category_label%', 'tcd-w'),
    'show_search_form_category3_introduce' => 'introduce_category3',
    'search_form_category3_placeholder_introduce' => __('Select from %category_label%', 'tcd-w'),
    'search_form_button_text' => __('Search', 'tcd-w'),
    'search_form_button_bg_color' => '#000000',
    'search_form_button_bg_opacity' => '0',
    'search_form_button_bg_color_hover' => '#92785f',
    'search_form_button_bg_opacity_hover' => '1.0',
    'search_bar_bg_color' => '#222222',
    'index_search_bar_bg_opacity' => '0.6',
    'show_search_bar_subpage' => 1,
    'search_results_headline' => __('Search Results', 'tcd-w'),
    'show_search_results_tag_filter' => 1,
// header
    'header_fix' => 'type1',
    'mobile_header_fix' => 'type1',
    'header_text_color' => '#ffffff',
    'header_bg_color' => '#000000',
    'index_header_bg_opacity' => '0',
    'header_fix_text_color' => '#ffffff',
    'header_fix_bg_color' => '#000000',
    'header_fix_bg_opacity' => '0.8',
// footer
    'footer_bg_color' => '#222222',
    'footer_nav_type1' => 'type1',
    'footer_nav_category1' => 'category',
    'footer_nav_type2' => 'type1',
    'footer_nav_category2' => 'category2',
    'twitter_url' => '',
    'facebook_url' => '',
    'insta_url' => '',
    'show_rss' => 1,
    'footer_widget_type' => 'type2',
    'footer_ad_code' => '',
    'footer_ad_image' => false,
    'footer_ad_url' => '',
    'footer_ad_code_mobile' => '',
    'footer_ad_image_mobile' => false,
    'footer_ad_url_mobile' => '',
    'footer_menu1' => '',
    'footer_menu2' => '',
    'footer_banner_title1' => '',
    'footer_banner_url1' => '',
    'footer_banner_target_blank1' => '',
    'footer_banner_image1' => false,
    'footer_banner_shadow_a1' => 0,
    'footer_banner_shadow_b1' => 0,
    'footer_banner_shadow_c1' => 0,
    'footer_banner_shadow_color1' => '#000000',
    'footer_banner_title2' => '',
    'footer_banner_url2' => '',
    'footer_banner_target_blank2' => '',
    'footer_banner_image2' => false,
    'footer_banner_shadow_a2' => 0,
    'footer_banner_shadow_b2' => 0,
    'footer_banner_shadow_c2' => 0,
    'footer_banner_shadow_color2' => '#000000',
// フッターの固定メニュー
    'footer_bar_display' => 'type3',
    'footer_bar_tp' => 0.8,
    'footer_bar_bg' => '#ffffff',
    'footer_bar_border' => '#dddddd',
    'footer_bar_color' => '#000000',
    'footer_bar_btns' => array(
        array(
            'type' => 'type1',
            'label' => '',
            'url' => '',
            'number' => '',
            'target' => 0,
            'icon' => 'file-text'
        )
    ),
// ページ保護
    'pw_label' => '',
    'pw_align' => 'type1',
    'pw_name1' => '',
    'pw_name2' => '',
    'pw_name3' => '',
    'pw_name4' => '',
    'pw_name5' => '',
    'pw_btn_display1' => '',
    'pw_btn_display2' => '',
    'pw_btn_display3' => '',
    'pw_btn_display4' => '',
    'pw_btn_display5' => '',
    'pw_btn_label1' => '',
    'pw_btn_label2' => '',
    'pw_btn_label3' => '',
    'pw_btn_label4' => '',
    'pw_btn_label5' => '',
    'pw_btn_url1' => '',
    'pw_btn_url2' => '',
    'pw_btn_url3' => '',
    'pw_btn_url4' => '',
    'pw_btn_url5' => '',
    'pw_btn_target1' => 0,
    'pw_btn_target2' => 0,
    'pw_btn_target3' => 0,
    'pw_btn_target4' => 0,
    'pw_btn_target5' => 0,
    'pw_editor1' => '',
    'pw_editor2' => '',
    'pw_editor3' => '',
    'pw_editor4' => '',
    'pw_editor5' => ''
);

/**
 * Design Plus のオプションを返す
 *
 * @global array $dp_default_options
 * @return array 
 */
function get_design_plus_option() {

	global $dp_default_options;
	$dp_default_options = apply_filters( 'before_getting_design_plus_option', $dp_default_options );

	return shortcode_atts( $dp_default_options, get_option( 'dp_options', array() ) );

}

// テーマオプション画面の作成
function theme_options_do_page() {

	global $dp_upload_error, $tab_labels;
	$options = get_design_plus_option(); 

	$tab_labels = array();
	$tab_labels = apply_filters( 'tcd_tab_labels', $tab_labels );

	if ( ! isset( $_REQUEST['settings-updated'] ) ) {
		$_REQUEST['settings-updated'] = false;
	}
?>
<div class="wrap">
	<h2><?php _e( 'TCD Theme Options', 'tcd-w' ); ?></h2> 
<?php
// 更新時のメッセージ
if ( false !== $_REQUEST['settings-updated'] ) :
?>
	<div class="updated fade">
		<p><strong><?php _e( 'Updated', 'tcd-w' ); ?></strong></p>
	</div>
<?php 
endif; 

	// ファイルアップロード時のメッセージ
	if ( ! empty( $dp_upload_error['message'] ) ):
  	if ( $dp_upload_error['error'] ) :
?>
	<div id="error" class="error">
		<p><?php echo esc_html( $dp_upload_error['message'] ); ?></p>
	</div>
<?php 
		else : 
?>
	<div id="message" class="updated fade">
		<p><?php echo esc_html( $dp_upload_error['message'] ); ?></p>
	</div>
<?php 
		endif; 
	endif;
?>
	<div id="my_theme_option" class="cf">
		<div id="my_theme_left">
   		<ul id="theme_tab" class="cf">
				<?php for ( $i = 0; $i < count( $tab_labels ); $i++ ) : ?>
    		<li><a href="#tab-content<?php echo esc_attr( $i + 1 ); ?>"><?php echo esc_html( $tab_labels[$i] ); ?></a></li>
				<?php endfor; ?>
   		</ul>
  	</div>
  	<div id="my_theme_right">
			<form id="myOptionsForm" method="post" action="options.php" enctype="multipart/form-data">
				<?php settings_fields( 'design_plus_options' ); ?>
				<div id="tab-panel">
					<?php do_action( 'tcd_tab_panel', $options ); ?>
				</div><!-- END #tab-panel -->
			</form>
   		<div id="saved_data"></div>
   		<div id="saving_data" style="display:none;"><p><?php _e( 'Now saving...', 'tcd-w' ); ?></p></div>
		</div><!-- END #my_theme_right -->
	</div><!-- END #my_theme_option -->
</div><!-- END #wrap -->
<?php
}

/**
 * チェック
 */
function theme_options_validate( $input ) {

	$input = apply_filters( 'theme_options_validate', $input );
 	return $input;

}

/**
 * モジュールの読み込み
 */
require get_template_directory() . '/admin/inc/basic.php';
require get_template_directory() . '/admin/inc/logo.php';
require get_template_directory() . '/admin/inc/top.php';
require get_template_directory() . '/admin/inc/blog.php';
require get_template_directory() . '/admin/inc/news.php';
require get_template_directory() . '/admin/inc/plan.php';
require get_template_directory() . '/admin/inc/header.php';
require get_template_directory() . '/admin/inc/footer.php';
require get_template_directory() . '/admin/inc/404.php';
require get_template_directory() . '/admin/inc/password.php';
