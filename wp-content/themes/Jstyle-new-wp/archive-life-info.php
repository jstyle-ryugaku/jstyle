<?php
get_header();
$args = array(
    'post_type' => 'life-info',
    'order' => 'desc'
);

// country
$tax_query = array();
if (isset($_GET['country'])) {
    $search_country = $_GET['country'];
    if ($search_country != '') {
        $tax_query[] = array(
            'taxonomy' => 'life-info-tag',
            'field' => 'name',
            'terms' => $search_country,
            'operator'=>'in'
        );
    }
}

if (count($tax_query) > 0) {
    $args['tax_query'] = $tax_query;
}


?>

<?php get_template_part('template-parts/page-header'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="main-content-container">
<h1 class="main-content-title">
    生活情報
    <?php
    if ($search_country == 'アメリカ') {
        echo '- アメリカ';
    }
    ?>
    </h1>

    <p class="main-content-description">
        <?php
        if ($search_country == 'アメリカ') {
            echo 'ここに、導入分が入ります(アメリカ)。これ以降はダミーテキストです。アメリカ合衆国の州のうちでも最大の人口を誇り、多種多様な民族、人種、出身国を持った人々で構成されているカリフォルニア州。北アメリカの西側に位置している。ハリウッド、ビバリーヒルズ、サンタモニカ、ディズニーランドなどなど、観光地としても有名。留学生の受け入れが断トツで多い州です。';
        }
        ?>
    </p>

    <?php if (have_posts()) : ?>
        <ol class="life-info__article-list">
            <?php
            $the_query = new wp_query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="life-info" onclick="location.href='<?php the_permalink() ?>'">
                        <div class="life-info__article">

                            <!--                            <div class="life-info__article-date">-->
                            <!--                                --><?php //the_time('y.m.d'); ?>
                            <!--                            </div>-->

                            <div class="life-info__article-title">
                                <?php the_title(); ?>
                            </div>

                            <div class="life-info__article-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="life-info__article-category-container">
                                <?php
                                $terms = get_the_terms($post->id, 'life-info-tag');
                                ?>

                                <ul>
                                    <?php foreach($terms as $term) : ?>
                                        <li class="life-info__article-tag">
                                            <?php echo $term->name; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( '条件に一致する投稿はありません。' ); ?></p>
            <?php endif; ?>
        </ol>

        <?php get_template_part('navigation2'); ?>
    <?php else: ?>
        <p class="no_post"><?php _e('there is no registered post.', 'tcd-w'); ?></p>
    <?php endif; ?>
</main>


<?php get_footer(); ?>
