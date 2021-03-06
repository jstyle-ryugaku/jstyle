<?php
// 画像パスを短くするやつ
function imagepassshort($arg)
{
    $content = str_replace('" images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
    return $content;
}

add_action('the_content', 'imagepassshort');

// Translation
load_theme_textdomain('tcd-w', get_template_directory() . '/languages');

function vogue_setup()
{

    // Post thumbnails
    add_theme_support('post-thumbnails');

    // Title tag
    add_theme_support('title-tag');

    // Image sizes
    add_image_size('size1', 480, 320, true); // x2
    add_image_size('size2', 680, 450, true); // x2
    add_image_size('size3', 440, 290, true); // x2
    add_image_size('size4', 200, 200, true); // x2
    add_image_size('size5', 870, 720, true); // x1.2
    add_image_size('size-card', 120, 120, true); // For card link

    // Menu
    register_nav_menus(array(
        'global' => __('Global navigation', 'tcd-w'),
    ));

}

add_action('after_setup_theme', 'vogue_setup');

function vogue_init()
{

    // Emoji
    $options = get_design_plus_option();
    if (0 == $options['use_emoji']) {
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    }

    // News
    $news_labels = array(
        'name' => get_custom_post_label('news')
    );
    $news_args = array(
        'has_archive' => true,
        'labels' => $news_labels,
        'menu_position' => 5,
        'public' => true,
        'supports' => array('editor', 'revisions', 'thumbnail', 'title')
    );
    if ($options['news_slug']) {
        $news_args['rewrite'] = array('slug' => $options['news_slug']);
    }
    register_post_type('news', $news_args);

    // LifeInfo
    $life_info_args = array(
        'has_archive' => true,
        'labels' => array(
            'name' => __('生活情報'),
            'singular_name' => __('生活情報')
        ),
        'menu_position' => 5,
        'public' => true,
        'supports' => array('editor', 'revisions', 'thumbnail', 'title')
    );
    if ($options['life_info_slug']) {
        $life_info_args['rewrite'] = array('slug' => $options['life_info_slug']);
    }
    register_post_type('life-info', $life_info_args);

    register_taxonomy(
        'life-info-tag',
        'life-info',
        array(
            'hierarchical' => false,
            'update_count_callback' => '_update_post_term_count',
            'label' => '生活情報のタグ',
            'singular_label' => '生活情報のタグ',
            'public' => true,
            'show_ui' => true
        )
    );

    // Intervew
    $interview_args = array(
        'has_archive' => true,
        'labels' => array(
            'name' => __('体験記'),
            'singular_name' => __('体験記')
        ),
        'menu_position' => 5,
        'public' => true,
        'supports' => array('editor', 'revisions', 'thumbnail', 'title')
    );
    if ($options['interview_slug']) {
        $interview_args['rewrite'] = array('slug' => $options['interview_slug']);
    }
    register_post_type('interview', $interview_args);

    register_taxonomy(
        'kind',
        'interview',
        array(
            'label' => __('体験記の種類'),
            'rewrite' => array('slug' => 'kind'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'term',
        'interview',
        array(
            'label' => __('留学期間'),
            'rewrite' => array('slug' => 'term'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'country-kind',
        'interview',
        array(
            'label' => __('国'),
            'rewrite' => array('slug' => 'country-kind'),
            'hierarchical' => true,
        )
    );

    register_post_type(
        '目的から探す',
        array(
            'label' => 'Purpose',
            'public' => true,
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'),
            'menu_position' => 5
        )
    );

    register_post_type(
        '国から探す',
        array(
            'label' => 'Country',
            'public' => true,
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'),
            'menu_position' => 5
        )
    );

    register_post_type(
        '留学の準備',
        array(
            'label' => 'Prepare',
            'public' => true,
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'),
            'menu_position' => 5
        )
    );

    register_post_type(
        '留学体験記',
        array(
            'label' => 'Studying_Abroad_Interview',
            'public' => true,
            'hierarchical' => false,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'),
            'menu_position' => 5
        )
    );
}

add_action('init', 'vogue_init');

/**
 * カスタム投稿タイプのラベルを取得する
 *
 * @param  string $slug 取得したいカスタム投稿のスラッグ（news or interview）
 * @return string       テーマオプションで設定されたカスタム投稿のラベルを返す
 *                      渡されたパラメータがnews or interview)でない場合は空の文字列を返す
 */
function get_custom_post_label($slug)
{

    $options = get_design_plus_option();

    if ('news' === $slug || 'interview' === $slug) {

        if ($options[$slug . '_breadcrumb']) {
            return esc_html($options[$slug . '_breadcrumb']);
        } else {
            // テーマオプションに値が設定されていない場合は、元々のラベルを返す
            return __(ucfirst($slug), 'tcd-w');
        }

    } else {
        return '';
    }

}

// プラン一覧では表示設定に関係なく全てのプランを1ページで表示する
function vogue_pre_get_posts($query)
{

    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_post_type_archive('plan')) {
        $query->set('posts_per_page', -1);
    }

}

add_action('pre_get_posts', 'vogue_pre_get_posts');

function vogue_scripts()
{

    global $wp_query;
    $options = get_design_plus_option();

    if (is_front_page() || is_singular('plan')) {

        wp_enqueue_style('vogue-slick', get_template_directory_uri() . '/assets/css/slick.min.css');
        wp_enqueue_style('vogue-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.min.css');
        wp_enqueue_script('vogue-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), version_num(), true);

        if (is_front_page()) {
            wp_enqueue_script('vogue-front-script', get_template_directory_uri() . '/assets/js/front-page.min.js', array('jquery', 'vogue-script'), version_num(), true);
            wp_localize_script('vogue-front-script', 'splash', array('is_splash' => esc_html($options['display_splash'])));
        }

    } elseif (is_search() || is_home() || (is_archive() && !is_post_type_archive('plan'))) {

        if (!wp_is_mobile()) {

            wp_enqueue_script('vogue-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), version_num(), true);
            wp_enqueue_script('vogue-jquery-infinitescroll-min', get_template_directory_uri() . '/assets/js/jquery.infinitescroll.min.js', array('jquery'), version_num(), true);
            wp_enqueue_script('vogue-load', get_template_directory_uri() . '/assets/js/load.min.js', array('jquery'), version_num(), true);
            wp_localize_script('vogue-load', 'infinitescroll', array('max_num_pages' => $wp_query->max_num_pages, 'finished_message' => __('No more post', 'tcd-w'), 'image_path' => get_template_directory_uri() . '/assets/images/ajax-loader.gif'));

        }

    } elseif (is_singular('post')) {
        wp_enqueue_script('comment', get_template_directory_uri() . '/assets/js/comment.js', array('jquery'), version_num(), true);
    }

    wp_enqueue_style('vogue-style', get_stylesheet_uri(), false, version_num());
    wp_enqueue_script('vogue-script', get_template_directory_uri() . '/assets/js/functions.min.js', array('jquery'), version_num(), true);
    wp_localize_script('vogue-script', 'plan', array('listNum' => $options['plan_list_num']));
    wp_enqueue_script('vogue-load', get_template_directory_uri() . '/assets/js/load.min.js', array('jquery'), version_num(), true);
    wp_localize_script('vogue-load', 'load', array('loadTime' => $options['load_time'] * 1000)); // ミリ秒で渡す
    wp_enqueue_script('vogue-customize-modal', get_template_directory_uri() . '/assets/js/customize-modal.js', array('jquery'), version_num(), true);
    wp_enqueue_style('vogue-customize-modal', get_template_directory_uri() . '/assets/css/customize-modal.css', false, version_num());
    wp_enqueue_script('vogue-iziModal', get_template_directory_uri() . '/assets/js/iziModal.min.js', array('jquery'), version_num(), true);
    wp_enqueue_style('vogue-iziModal', get_template_directory_uri() . '/assets/css/iziModal.min.css', false, version_num());

    if (is_mobile() && 'type3' !== $options['footer_bar_display'] && !$options['display_request']) {
        wp_enqueue_style('vogue-footer-bar', get_template_directory_uri() . '/assets/css/footer-bar.css', false, version_num());
        wp_enqueue_script('vogue-footer-bar', get_template_directory_uri() . '/assets/js/footer-bar.min.js', array('jquery'), version_num(), true);
    }

    // 共通CSS
    wp_enqueue_style('vogue-common', get_template_directory_uri() . '/assets/css/common.css', false, version_num());

    if (is_page('interview-search')) {
        wp_enqueue_style('vogue-interview', get_template_directory_uri() . '/assets/css/interview.css', false, version_num());
        wp_enqueue_script('vogue-interview', get_template_directory_uri() . '/assets/js/interview.js', array('jquery'), version_num(), true);
    }

    if (is_page('country')) {
        wp_enqueue_style('vogue-country', get_template_directory_uri() . '/assets/css/country.css', false, version_num());
        wp_enqueue_script('vogue-country', get_template_directory_uri() . '/assets/js/country.js', array('jquery'), version_num(), true);
    }

    if (is_page('usa')) {
        wp_enqueue_style('vogue-image-link-list', get_template_directory_uri() . '/assets/css/modules/image-link-list.css', false, version_num());
        wp_enqueue_style('vogue-country-map', get_template_directory_uri() . '/assets/css/modules/country-map.css', false, version_num());
        wp_enqueue_style('vogue-country-usa', get_template_directory_uri() . '/assets/css/country-page-common.css', false, version_num());
        wp_enqueue_script('vogue-front-script', get_template_directory_uri() . '/assets/js/front-page.min.js', array('jquery', 'vogue-script'), version_num(), true);
        wp_enqueue_style('vogue-slick', get_template_directory_uri() . '/assets/css/slick.min.css');
        wp_enqueue_style('vogue-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.min.css');
        wp_enqueue_script('vogue-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), version_num(), true);
    }

    if (is_page('contact')) {
        wp_enqueue_style('vogue-contact-form', get_template_directory_uri() . '/assets/css/contact-form.css', false);
        wp_enqueue_script('vogue-contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array('jquery'), version_num(), true);
    }

    if (is_page('brochure-request-form')) {
        wp_enqueue_style('vogue-contact-form', get_template_directory_uri() . '/assets/css/contact-form.css', false);
        wp_enqueue_script('vogue-contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array('jquery'), version_num(), true);
        wp_enqueue_script('yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true);
    }

    if (is_page('purpose')) {
        wp_enqueue_style('vogue-purpose', get_template_directory_uri() . '/assets/css/purpose.css', false, version_num());
        wp_enqueue_script('vogue-purpose', get_template_directory_uri() . '/assets/js/purpose.js', array('jquery'), version_num(), true);
    }

    if (is_page('about') || is_front_page()) {
        wp_enqueue_style('vogue-about', get_template_directory_uri() . '/assets/css/about.css', false, version_num());
//        wp_enqueue_script( 'vogue-about', get_template_directory_uri() . '/assets/js/about.js', array( 'jquery' ), version_num(), true );
    }

    if (is_archive('life-info')) {
        wp_enqueue_style('vogue-life-info', get_template_directory_uri() . '/assets/css/life-info.css', false, version_num());
    }

    if (is_page('reason')) {
        wp_enqueue_style('vogue-reason', get_template_directory_uri() . '/assets/css/reason.css', false, version_num());
        wp_enqueue_script('vogue-reason', get_template_directory_uri() . '/assets/js/reason.js', array('jquery'), version_num(), true);
    }

    if (is_page('new-style')) {
        wp_enqueue_style('vogue-new-style', get_template_directory_uri() . '/assets/css/new-style.css', false, version_num());
        wp_enqueue_script('vogue-new-style', get_template_directory_uri() . '/assets/js/new-style.js', array('jquery'), version_num(), true);
    }

    if (is_page('point')) {
        wp_enqueue_style('vogue-point', get_template_directory_uri() . '/assets/css/point.css', false, version_num());
        wp_enqueue_script('vogue-point', get_template_directory_uri() . '/assets/js/point.js', array('jquery'), version_num(), true);
    }

    if (is_page('flow')) {
        wp_enqueue_style('vogue-flow', get_template_directory_uri() . '/assets/css/flow.css', false, version_num());
        wp_enqueue_script('vogue-flow', get_template_directory_uri() . '/assets/js/flow.js', array('jquery'), version_num(), true);
    }

    if (is_page('president')) {
        wp_enqueue_style('vogue-president', get_template_directory_uri() . '/assets/css/president.css', false, version_num());
        wp_enqueue_script('vogue-president', get_template_directory_uri() . '/assets/js/president.js', array('jquery'), version_num(), true);
    }

    if (is_parent_slug() === 'purpose') {
        wp_enqueue_style('vogue-purpose-short', get_template_directory_uri() . '/assets/css/purpose-detail.css', false, version_num());
        wp_enqueue_script('vogue-purpose-short', get_template_directory_uri() . '/assets/js/purpose-detail.js', array('jquery'), version_num(), true);
    }

    if (is_page('privacy-policy')) {
        wp_enqueue_style('vogue-privacy-policy', get_template_directory_uri() . '/assets/css/privacy-policy.css', false, version_num());
    }

    if (is_parent_slug() === 'usa') {
        wp_enqueue_style('vogue-country-usa-california', get_template_directory_uri() . '/assets/css/country-region-common.css', false, version_num());
        wp_enqueue_script('vogue-country-usa-california', get_template_directory_uri() . '/assets/js/country-region-common.js', array('jquery'), version_num(), true);
    }

    if (is_page('preparation')) {
        wp_enqueue_style('vogue-preparation', get_template_directory_uri() . '/assets/css/preparation.css', false, version_num());
        wp_enqueue_script('vogue-preparation', get_template_directory_uri() . '/assets/js/preparation.js', array('jquery'), version_num(), true);
    }
    if(is_page('age')) {
        wp_enqueue_style( 'vogue-age', get_template_directory_uri() . '/assets/css/age.css', false, version_num() );
        wp_enqueue_script( 'vogue-age', get_template_directory_uri() . '/assets/js/age.js', array( 'jquery' ), version_num(), true );
    }
}

add_action('wp_enqueue_scripts', 'vogue_scripts');

function vogue_admin_scripts()
{

    // For media uploading
    wp_enqueue_media(); // media uploader API
    //wp_enqueue_script( 'media-upload' ); // 以前のmedia uploader で使用. wp3.5未満
    wp_enqueue_script('cf-media-field', get_template_directory_uri() . '/admin/js/cf-media-field.js', '', version_num());

    // WordPress Color Picker API
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('wp-color-picker');

    // For Ad widget(tcd ver.)
    wp_enqueue_script('oops-widget-script', get_template_directory_uri() . '/admin/js/widget.min.js', array('jquery'), '', version_num());

    // For theme options
    wp_enqueue_script('jquery.cookieTab', get_template_directory_uri() . '/admin/js/jquery.cookieTab.js', '', version_num());
    wp_enqueue_script('jquery-form'); // submit by AJAX

    // Contents builder
    wp_enqueue_style('oops-cb', get_template_directory_uri() . '/admin/css/cb.min.css', '', version_num());
    wp_enqueue_script('oops-cb', get_template_directory_uri() . '/admin/js/cb.min.js', '', version_num());
    wp_enqueue_style('editor-buttons'); // editor-buttons.css を常時出力

    // Footer bar
    wp_enqueue_style('oops-admin-footer-bar', get_template_directory_uri() . '/admin/css/footer-bar.min.css', '', version_num());
    wp_enqueue_script('oops-admin-footer-bar', get_template_directory_uri() . '/admin/js/footer-bar.min.js', '', version_num());

    wp_enqueue_style('my_admin_css', get_template_directory_uri() . '/admin/css/my_admin.min.css', '', version_num());
    wp_enqueue_script('my_script', get_template_directory_uri() . '/admin/js/my_script.min.js', '', version_num());
    wp_localize_script('my_script', 'ajax_submit', array('success' => __('Settings Saved Successfully', 'tcd-w'), 'error' => __('Can not save data. Please try again.', 'tcd-w')));
    wp_localize_script('my_script', 'translation', array('word_counter' => __('word count:', 'tcd-w')));
    ?>
    <script type="text/javascript">
        var cfmf_text = {
            title: '<?php _e('Please Select Image', 'tcd-w'); ?>',
            button: '<?php _e('Use this Image', 'tcd-w'); ?>'
        };
    </script>
    <?php
}

add_action('admin_enqueue_scripts', 'vogue_admin_scripts');

// Editor style
function vogue_add_editor_styles()
{
    add_editor_style('admin/css/editor-style-02.min.css');
}

add_action('admin_init', 'vogue_add_editor_styles');

// Widget area
function vogue_widgets_init()
{

    // Posts
    register_sidebar(array(
        'before_widget' => '<div class="p-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Single post pages', 'tcd-w'),
        'id' => 'single_widget'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="p-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Single post pages(mobile)', 'tcd-w'),
        'id' => 'single_widget_mobile'
    ));

    // News
    register_sidebar(array(
        'before_widget' => '<div class="p-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Single news pages', 'tcd-w'),
        'id' => 'news_widget'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="p-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Single news pages(mobile)', 'tcd-w'),
        'id' => 'news_widget_mobile'
    ));

    // Pages
    register_sidebar(array(
        'before_widget' => '<div class="p-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Pages', 'tcd-w'),
        'id' => 'page_widget'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="p-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Pages(mobile)', 'tcd-w'),
        'id' => 'page_widget_mobile'
    ));

    // Footer
    register_sidebar(array(
        'before_widget' => '<div class="p-footer-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-footer-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Footer', 'tcd-w'),
        'id' => 'footer_widget'
    ));
    register_sidebar(array(
        'before_widget' => '<div class="p-footer-widget %2$s">' . "\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h2 class="p-footer-widget__title">',
        'after_title' => '</h2>',
        'name' => __('Footer(mobile)', 'tcd-w'),
        'id' => 'footer_widget_mobile'
    ));

}

add_action('widgets_init', 'vogue_widgets_init');

// Excerpt
function custom_excerpt_length($length)
{
    return 75;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

function new_excerpt_more($more)
{
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

// Remove wpautop from the excerpt
remove_filter('the_excerpt', 'wpautop');

// Customize archive title
function vogue_archive_title($title)
{
    global $author, $post;
    if (is_author()) {
        $title = get_the_author_meta('display_name', $author);
    } elseif (is_category() || is_tag()) {
        $title = single_term_title('', false);
    } elseif (is_day()) {
        $title = get_the_time(__('F jS, Y', 'tcd-w'), $post);
    } elseif (is_month()) {
        $title = get_the_time(__('F, Y', 'tcd-w'), $post);
    } elseif (is_year()) {
        $title = get_the_time(__('Y', 'tcd-w'), $post);
    } elseif (is_search()) {
        $title = __('Search result', 'tcd-w');
    }
    return $title;
}

add_filter('get_the_archive_title', 'vogue_archive_title', 10);

// ビジュアルエディタに表(テーブル)の機能を追加
function mce_external_plugins_table($plugins)
{
    $plugins['table'] = '//cdn.tinymce.com/4/plugins/table/plugin.min.js';
    return $plugins;
}

add_filter('mce_external_plugins', 'mce_external_plugins_table');

// tinymceのtableボタンにclass属性プルダウンメニューを追加
function mce_buttons_table($buttons)
{
    $buttons[] = 'table';
    return $buttons;
}

add_filter('mce_buttons', 'mce_buttons_table');

function bootstrap_classes_tinymce($settings)
{
    $styles = array(
        array('title' => __('Default style', 'tcd-w'), 'value' => ''),
        array('title' => __('No border', 'tcd-w'), 'value' => 'table_no_border'),
        array('title' => __('Display only horizontal border', 'tcd-w'), 'value' => 'table_border_horizontal')
    );
    $settings['table_class_list'] = json_encode($styles);
    return $settings;
}

add_filter('tiny_mce_before_init', 'bootstrap_classes_tinymce');

// ビジュアルエディタにページ分割ボタンを追加 -----------------------------------------------
function add_nextpage_buttons($buttons)
{
    array_push($buttons, "wp_page");
    return $buttons;
}

add_filter("mce_buttons", "add_nextpage_buttons");

/**
 * クローン用のリッチエディター化処理をしないようにする
 * クローン後のリッチエディター化はjsで行う
 */
function cb_builder_tiny_mce_before_init($mceInit, $editor_id)
{
    if (strpos($editor_id, 'cb_cloneindex') !== false) {
        $mceInit['wp_skip_init'] = true;
    }
    return $mceInit;
}

add_filter('tiny_mce_before_init', 'cb_builder_tiny_mce_before_init', 10, 2);

/**
 *  Translate Hex to RGB
 */
function hex2rgb($hex)
{

    $hex = str_replace('#', '', $hex);

    if (strlen($hex) == 3) {
        $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
        $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
        $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
    } else {
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
    }
    $rgb = array($r, $g, $b);

    return $rgb;
}

/**
 *  ユーザーエージェントを判定するための関数
 */
function is_mobile()
{

    // タブレットも含める場合は wp_is_mobile()
    $match = 0;
    $ua = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'BlackBerry', // BlackBerry
        'BB10', // BlackBerry10
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser
    );

    $pattern = '/' . implode('|', $ua) . '/i';
    $match = preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);

    if ($match === 1) {
        return TRUE;
    } else {
        return FALSE;
    }
}

/**
 * スクリプトのバージョン管理
 */
function version_num()
{
    if (function_exists('wp_get_theme')) {
        $theme_data = wp_get_theme();
    } else {
        $theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
    }
    $current_version = $theme_data['Version'];
    return $current_version;
}

/**
 * カードリンクパーツ
 */
function get_the_custom_excerpt($content, $length)
{
    $length = ($length ? $length : 70); // デフォルトの長さを指定する
    $content = preg_replace('/<!--more-->.+/is', '', $content); // moreタグ以降削除
    $content = strip_shortcodes($content); // ショートコード削除
    $content = strip_tags($content); // タグの除去
    $content = str_replace('&nbsp;', '', $content); // 特殊文字の削除（今回はスペースのみ）
    $content = mb_substr($content, 0, $length); // 文字列を指定した長さで切り取る
    return $content . '...';
}

/**
 * カードリンクショートコード
 */
function clink_scode($atts)
{
    extract(shortcode_atts(array('url' => '', 'title' => '', 'excerpt' => ''), $atts));
    $id = url_to_postid($url); // URLから投稿IDを取得
    $post = get_post($id); // IDから投稿情報の取得
    $date = mysql2date('Y.m.d', $post->post_date); // 投稿日の取得
    $img_width = 120; // 画像サイズの幅指定
    $img_height = 120; // 画像サイズの高さ指定
    $no_image = get_template_directory_uri() . '/assets/images/no-image-400x400.gif';

    // 抜粋を取得
    if (empty($excerpt)) {
        if ($post->post_excerpt) {
            $excerpt = get_the_custom_excerpt($post->post_excerpt, 145);
        } else {
            $excerpt = get_the_custom_excerpt($post->post_content, 145);
        }
    }
    // タイトルを取得
    if (empty($title)) {
        $title = esc_html(get_the_title($id));
    }
    // アイキャッチ画像を取得
    if (has_post_thumbnail($id)) {
        $img = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'size-card');
        $img_tag = '<img src="' . $img[0] . '" alt="' . $title . '" width="' . $img[1] . '" height="' . $img[2] . '">';
    } else {
        $img_tag = '<img src="' . $no_image . '" alt="" width="' . $img_width . '" height="' . $img_height . '">';
    }
    $clink = '<div class="cardlink"><a href="' . esc_url($url) . '"><div class="cardlink_thumbnail">' . $img_tag . '</div></a><div class="cardlink_content"><span class="cardlink_timestamp">' . esc_html($date) . '</span><div class="cardlink_title"><a href="' . esc_url($url) . '">' . esc_html($title) . '</a></div><div class="cardlink_excerpt">' . esc_html($excerpt) . '</div></div><div class="cardlink_footer"></div></div>';

    return $clink;
}

add_shortcode('clink', 'clink_scode');

/**
 * comment
 */
function custom_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    global $commentcount;
    if (!$commentcount) {
        $commentcount = 0;
    }
    ?>
<li id="comment-<?php comment_ID(); ?>" class="c-comment__list-item comment">
    <div class="c-comment__item-header u-clearfix">
        <div class="c-comment__item-meta u-clearfix">
            <?php
            if (function_exists('get_avatar') && get_option('show_avatars')) {
                echo get_avatar($comment, 35, '', false, array('class' => 'c-comment__item-avatar'));
            }
            if (get_comment_author_url()) {
                echo '<a id="commentauthor-' . get_comment_ID() . '" class="c-comment__item-author" rel="nofollow">' . get_comment_author() . '</a>' . "\n";
            } else {
                echo '<span id="commentauthor-' . get_comment_ID() . '" class="c-comment__item-author">' . get_comment_author() . '</span>' . "\n";
            }
            ?>
            <time class="c-comment__item-date"
                  datetime="<?php comment_time('Y-m-d'); ?>"><?php comment_time(__('F jS, Y', 'tcd-w')); ?></time>
        </div>
        <ul class="c-comment__item-act">
            <?php
            if (1 == get_option('thread_comments')) :
                ?>
                <li><?php comment_reply_link(array_merge($args, array('add_below' => 'comment-content', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => __('REPLY', 'tcd-w') . ''))); ?></li>
            <?php
            else :
                ?>
                <li><a href="javascript:void(0);"
                       onclick="MGJS_CMT.reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'js-comment__textarea');"><?php _e('REPLY', 'tcd-w'); ?></a>
                </li>
            <?php
            endif;
            ?>
            <li><a href="javascript:void(0);"
                   onclick="MGJS_CMT.quote('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment-content-<?php comment_ID() ?>', 'js-comment__textarea');"><?php _e('QUOTE', 'tcd-w'); ?></a>
            </li>
            <?php edit_comment_link(__('EDIT', 'tcd-w'), '<li>', '</li>'); ?>
        </ul>
    </div>
    <div id="comment-content-<?php comment_ID() ?>" class="c-comment__item-body">
        <?php
        if (0 == $comment->comment_approved) {
            echo '<span class="c-comment__item-note">' . __('Your comment is awaiting moderation.', 'tcd-w') . '</span>' . "\n";
        } else {
            comment_text();
        }
        ?>
    </div>
    <?php
}

// Theme options
require get_template_directory() . '/admin/theme-options.php';

// Add custom columns
require get_template_directory() . '/inc/admin_column.php';

// Add quicktags to the visual editor
require get_template_directory() . '/inc/custom_editor.php';

// Hook wp_head
require get_template_directory() . '/inc/head.php';

// Hook wp_footer
require get_template_directory() . '/inc/footer.php';

// OGP
require get_template_directory() . '/inc/ogp.php';

// Page builder
require get_template_directory() . '/pagebuilder/pagebuilder.php';

// Show custom fields in quick edit
require get_template_directory() . '/inc/quick_edit.php';

// Shortcode
require get_template_directory() . '/inc/short_code.php';

// Update notifier
require get_template_directory() . '/inc/update_notifier.php';

/**
 * Add meta boxes
 */
require get_template_directory() . '/inc/class-tcd-meta-box.php';

// Custom CSS
require get_template_directory() . '/inc/custom_css.php';

// Password protected pages
require get_template_directory() . '/inc/password_form.php';

// Page header
require get_template_directory() . '/inc/ph_cf.php';

// Plan list
require get_template_directory() . '/inc/plan_list_cf.php';

// Plan archive
require get_template_directory() . '/inc/plan_archive_cf.php';

// Splash page
require get_template_directory() . '/inc/splash.php';

// Recommend post
require get_template_directory() . '/inc/recommend.php';

// Meta title and description
require get_template_directory() . '/inc/seo.php';

/**
 * Register widgets
 */
require get_template_directory() . '/inc/widget/ad.php';
require get_template_directory() . '/inc/widget/archive_list.php';
require get_template_directory() . '/inc/widget/category_list.php';
require get_template_directory() . '/inc/widget/google_search.php';
require get_template_directory() . '/inc/widget/styled_post_list.php';

/**
 * Interview Page func
 */
// 更新通知 --------------------------------------------------------------------------------
require get_template_directory() . '/functions/init.php';
require get_template_directory() . '/functions/custom_search.php';

// テンプレートファイル差し替え
function custom_post_type_template_include($template)
{
    // カスタム検索用グローバル変数
    global $custom_search_vars;

    global $dp_options;
    if (!$dp_options) $dp_options = get_desing_plus_option();

    $template_name = null;

    if (is_singular($dp_options['news_slug'])) {
        $template_name = 'single-news.php';
    } elseif (is_singular($dp_options['introduce_slug'])) {
        $template_name = 'single-introduce.php';
    } elseif ($custom_search_vars) {
        // カスタム検索の場合はcustom_search.phpで処理されるため何もしない
    } elseif (is_post_type_archive($dp_options['news_slug'])) {
        $template_name = 'archive-news.php';
    } elseif (
        is_post_type_archive($dp_options['introduce_slug']) ||
        (is_tax($dp_options['introduce_category1_slug']) && $dp_options['use_introduce_category1'] && $dp_options['use_introduce_category1_introduce_archive']) ||
        (is_tax($dp_options['introduce_category2_slug']) && $dp_options['use_introduce_category2'] && $dp_options['use_introduce_category2_introduce_archive']) ||
        (is_tax($dp_options['introduce_category3_slug']) && $dp_options['use_introduce_category3'] && $dp_options['use_introduce_category3_introduce_archive'])
    ) {
        $template_name = 'archive-introduce.php';
    } elseif (is_category() || is_tax(array($dp_options['category2_slug'], $dp_options['category3_slug'], $dp_options['introduce_category1_slug'], $dp_options['introduce_category2_slug'], $dp_options['introduce_category3_slug']))) {
        $template_name = 'custom_search_results.php';
    }

    if ($template_name) {
        if (file_exists(STYLESHEETPATH . '/' . $template_name)) {
            return STYLESHEETPATH . '/' . $template_name;
        } elseif (file_exists(TEMPLATEPATH . '/' . $template_name)) {
            return TEMPLATEPATH . '/' . $template_name;
        }
    }

    return $template;
}

add_filter('template_include', 'custom_post_type_template_include');

/** 固定ページの親ページを判別して条件分岐 ex.Aページを親に持つ子ページすべてに同じものを表示させたい **/
function is_parent_slug()
{
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

/** 生活情報のリンクを自動で、「留学の基礎知識」に入れたい */
// 固定カスタムフィールドボックス
function add_preparation_fields()
{
    //add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
    //第4引数のpostをpageに変更すれば固定ページにオリジナルカスタムフィールドが表示されます(custom_post_typeのslugを指定することも可能)。
    //第5引数はnormalの他にsideとadvancedがあります。
    add_meta_box('preparation_setting', '留学の基礎知識のステップ番号', 'insert_preparation_fields', 'life-info', 'normal');
}

add_action('admin_menu', 'add_preparation_fields');


// カスタムフィールドの入力エリア
function insert_preparation_fields()
{
    global $post;
    //下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
    echo 'ステップ： <input type="text" name="step_main" value="' . get_post_meta($post->ID, 'step_main', true) . '" size="2" />';
}


// カスタムフィールドの値を保存
function save_preparation_fields($post_id)
{
    if (!empty($_POST['step_main'])) { //題名が入力されている場合
        update_post_meta($post_id, 'step_main', $_POST['step_main']); //値を保存
    } else { //題名未入力の場合
        delete_post_meta($post_id, 'step_main'); //値を削除
    }
}

add_action('save_post', 'save_preparation_fields');

function get_preparation_tags($step)
{
    global $post;

    $life_info_args = array(
        'post_status' => 'publish',
        'post_type' => 'life-info',
        'posts_per_page'=> -1,
        'orderby' => 'post_date',
        'order' => 'DESC'
    );

    $life_info_query = new WP_Query($life_info_args);
    $step_tags = '';

    if ($life_info_query->have_posts()) {

        while ($life_info_query->have_posts()) {

            $life_info_query->the_post();
            $post_preparation_step = get_post_meta($post->ID, 'step_main', true);

            if ($post_preparation_step === (string)$step) {
                $step_tags .= '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
            }
        }
    }

    if ($step_tags === '') {
        $step_tags = '<p>準備中です。</p>';
    }

    return $step_tags;
}

function get_interview_tags()
{
    $interview_args = array(
        'post_status' => 'publish',
        'post_type' => 'interview',
        'orderby' => 'post_date',
        'order' => 'DESC'
    );

    $interview_query = new WP_Query($interview_args);
    $interview_tags = '';
    $tag_count = 0;

    if ($interview_query->have_posts()) {
        if ($tag_count < 6) {
            while ($interview_query->have_posts()) {
                $interview_query->the_post();
                $interview_tags .= '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
                $tag_count++;
            }
        }
    }

    if ($interview_tags === '') {
        $interview_tags = '<p>準備中です。</p>';
    }

    return $interview_tags;
}