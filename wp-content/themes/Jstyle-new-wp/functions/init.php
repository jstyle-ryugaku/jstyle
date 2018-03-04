<?php
/**
 * Created by PhpStorm.
 * User: k-shimano
 * Date: 2018/03/03
 * Time: 16:34
 */

// bodyタグにclassを追加 --------------------------------------------------------------------------------
function ml_body_classes($classes) {
    global $dp_options, $header_slider, $custom_search_vars;
    if ( ! $dp_options ) $dp_options = get_desing_plus_option();

    if ($dp_options['header_fix'] == 'type2') {
        $classes[] = 'fix_top';
    }

    if ($dp_options['mobile_header_fix'] == 'type2') {
        $classes[] = 'mobile_fix_top';
    }

    if (is_singular($dp_options['news_slug']) && $dp_options['news_slug'] != 'news') {
        $classes[] = 'single-news';
    }

    if (is_singular($dp_options['introduce_slug']) && $dp_options['introduce_slug'] != 'introduce') {
        $classes[] = 'single-introduce';
    }

    if (is_mobile()) {
        $classes[] = 'mobile_device';
        if ($dp_options['footer_bar_display'] == 'type1' || $dp_options['footer_bar_display'] == 'type2') {
            $classes[] = 'mobile_footer_bar';
        }
    }

    if ($header_slider) {
        $classes[] = 'has_header_content';
    }

    if (is_front_page()) {
        // 設定によりトップページで検索結果が表示される対策
        if ($custom_search_vars) {
            $classes[] = 'home-search_results';
        } else {
            $classes[] = 'home-default';
        }
    } elseif ($custom_search_vars) {
        $classes[] = 'search-results';
    }

    return array_unique($classes);
}
add_filter('body_class','ml_body_classes');

/**
 * Design Plusのオプションを返す
 * @global array $dp_default_options
 * @return array
 */
function get_desing_plus_option(){
    global $dp_default_options;
    return shortcode_atts($dp_default_options, get_option('dp_options', array()));
}

// 記事タイトルの文字数制限 --------------------------------------------------------------------------------
function trim_title($num) {
    $base_title = get_the_title();
    $trim_title = mb_substr($base_title, 0, $num ,"utf-8");
    $count_title = mb_strlen($trim_title,"utf-8");
    if($count_title > $num-1) {
        echo $trim_title . '…';
    } else {
        echo $trim_title;
    }
}

// オリジナルの抜粋記事 --------------------------------------------------------------------------------
function new_excerpt($a, $echo = true) {
    if (has_excerpt()) {
        $base_content = get_the_excerpt();
        $base_content = str_replace(array("\r\n", "\r", "\n"), "", $base_content);
        $trim_content = mb_strimwidth($base_content, 0, $a, '…', 'utf-8');
    } else {
        $base_content = get_the_content();
        $base_content = preg_replace('!<style.*?>.*?</style.*?>!is', '', $base_content);
        $base_content = preg_replace('!<script.*?>.*?</script.*?>!is', '', $base_content);
        $base_content = preg_replace('/\[.+\]/','', $base_content);
        $base_content = str_replace(array("\r\n", "\r", "\n" , "&nbsp;"), "", $base_content);
        $base_content = strip_tags($base_content);
        $trim_content = mb_strimwidth($base_content, 0, $a, '…', 'utf-8');
        $trim_content = str_replace(array("\r\n", "\r", "\n" , "&nbsp;"), "", $trim_content);
        $trim_content = str_replace(']]>', ']]&gt;', $trim_content);
        $trim_content = htmlspecialchars($trim_content);
    }

    if ($echo) {
        echo $trim_content;
    } else {
        return $trim_content;
    }
}