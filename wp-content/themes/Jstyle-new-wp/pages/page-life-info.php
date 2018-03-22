<?php
/*
template name: life-info
*/

get_header();
$args = array(
    'post_type' => 'lifeinfo',
    'order' => 'DESC'
);
?>

<?php get_template_part('template-parts/page-header'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>

<main class="life-info">
    <?php if (have_posts()) : ?>

        <?php get_template_part('template-parts/navigation2'); ?>

        <ol id="post_list2">
            <?php
            $the_query = new wp_query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                    <div class="interview__article" onclick="location.href='<?php the_permalink() ?>'">
                        <div class="interview__article-image">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('size1');
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-480x320.gif" alt="">';
                            }
                            ?>
                        </div>

                        <div class="interview__article-info">

                            <div class="interview__article-category-container">
                                <?php
                                $term_terms = get_the_terms($post->id, 'term');
                                $country_terms = get_the_terms($post->id, 'country-kind');
                                ?>
                                <a>
                                    <?php
                                    echo $term_terms[0]->name;
                                    ?>
                                </a>
                                <a>
                                    <?php
                                    echo $country_terms[0]->name;
                                    ?>
                                </a>
                            </div>

                            <div class="interview__article-date">
                                <?php the_time('y.m.d'); ?>
                            </div>

                            <div class="interview__article-title">
                                <?php the_title(); ?>
                            </div>

                            <div class="interview__article-excerpt">
                                <?php the_excerpt(); ?>
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
