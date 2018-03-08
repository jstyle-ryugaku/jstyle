<?php
/*
template name: interview
*/

get_header();
$dp_options = get_desing_plus_option();
$args =  array('order' => 'DESC');

// タグフィルター用ターム配列
$tags = false;
if ($custom_search_vars) {
    if ($dp_options['show_search_results_tag_filter']) {
        if ($dp_options['searcn_post_type'] == 'post') {
            $tags = get_terms('post_tag', array());
        } elseif ($dp_options['searcn_post_type'] == 'introduce') {
            $tags = get_terms($dp_options['introduce_tag_slug'], array());
        }
        if (!$tags || is_wp_error($tags)) $tags = false;
    }
}

// sort
if (isset($_GET['sort'])) {
    $sort = $_GET['sort'];
} else {
    $sort = 'desc';
}

$args['order'] = $sort;

?>

<?php get_template_part('template-parts/page-header'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<div id="header_search">
    <div class="inner">
        <?php get_template_part('template-parts/custom_search_form'); ?>
    </div>
</div>

<div class="archive_header">
    <div class="inner">
        <h2 class="headline rich_font">検索結果</h2>
    </div>
</div>

<div id="main_col" class="clearfix">
    <?php
    if (have_posts() || !empty($_REQUEST['filter_tag'])) {
        // タグ絞り込み検索表示
        if ($tags) {
            ?>
            <form action="?" method="get" class="archive_filter">
                <?php
                foreach (array('post_type', 'page_id', 'cat', 'p', 'sort', 'search_keywords', 'search_keywords_operator', 'search_cat1', 'search_cat2') as $get_key) {
                    if (!empty($_REQUEST[$get_key])) {
                        ?>
                        <input type="hidden" name="<?php echo esc_attr($get_key); ?>"
                               value="<?php echo esc_attr(stripslashes($_REQUEST[$get_key])); ?>">
                        <?php
                    }
                }
                ?>
                <div class="archive_filter_headline rich_font"><?php _e('Refine Search', 'tcd-w'); ?></div>
                <div class="archive_filter01 archive_filter_tag clearfix">
                    <?php
                    foreach ($tags as $tag) {
                        $checked = '';
                        if (!empty($_REQUEST['filter_tag']) && in_array($tag->term_id, $_REQUEST['filter_tag'])) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = '';
                        }
                        echo '<label><input type="checkbox" name="filter_tag[]" value="' . esc_attr($tag->term_id) . '"' . $checked . '><span>' . esc_html($tag->name) . '</span></label>' . "\n";
                    }
                    ?>
                </div>
                <div class="button">
                    <input type="submit" value="<?php _e('Search for', 'tcd-w'); ?>">
                </div>
            </form>
            <?php
        }
    }
    ?>

    <?php if (have_posts()) : ?>
        <dl class="archive_sort clearfix">
            <dt>並べ替え条件</dt>
            <dd>
                <a href="<?php echo esc_attr(add_query_arg('sort', 'desc', $sort_base_url)); ?>"
                    <?php if ($sort == 'desc') echo ' class="active"'; ?>>
                新しい順</a>
            </dd>
            <dd>
                <a href="<?php echo esc_attr(add_query_arg('sort', 'asc', $sort_base_url)); ?>"
                    <?php if ($sort == 'asc') echo ' class="active"'; ?>>
                古い順</a>
            </dd>
            <dd>
                <a href="<?php echo esc_attr(add_query_arg('sort', 'views', $sort_base_url)); ?>"
                    <?php if ($sort == 'views') echo ' class="active"'; ?>>
                閲覧数順</a>
            </dd>
        </dl>

        <?php get_template_part('template-parts/navigation2'); ?>

        <ol id="post_list2">
            <?php
            $posts_list = get_posts($args);
            foreach ( $posts_list as $post ) :
                setup_postdata( $post );
            ?>

                <div>
                    <?php the_date(); ?>
                    <br />
                    <?php the_title(); ?>
                    <?php the_excerpt(); ?>
                </div>
            <br>

            <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </ol>

        <?php get_template_part('navigation2'); ?>
    <?php else: ?>
        <p class="no_post"><?php _e('There is no registered post.', 'tcd-w'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

