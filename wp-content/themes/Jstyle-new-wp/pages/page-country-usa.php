<?php
/*
template name: country usa
*/
__( 'country usa', 'tcd-w' );
get_header();

$blog_args = array(
    'post_status' => 'publish',
    'post_type' => 'post',
);
$blog_query = new WP_Query($blog_args);
$news_args = array(
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'post_type' => 'news'
);
$news_query = new WP_Query($news_args);
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <main class="main-content-container">
        <h1 class="main-content-title">アメリカ留学</h1>
        <p class="main-content-description">
            国世界の教育と研究をリードするアメリカ。語学学校から、2年制大学、4年制大学、大学院にいたるまで数多くの学校があり、学生のニーズに合わせた教育を提供しています。
            <br>
            世界中から学生が集まるため、留学生に対するサポート体制も整っています。2年制大学から4年制大学に編入ができたりと柔軟な教育システムもアメリカ留学の特徴です。
        </p>

        <div class="content-block">
            <h2 class="bottom-line-heading">Jstyleでアメリカ留学しました！</h2>
            <div id="cb_3" class="p-content03<?php if ($value['cb_blog_and_news_layout']) {
                echo ' p-content03--rev';
            } ?>">
                <section class="p-content03__blog u-clearfix">
                    <?php if ($blog_query->have_posts()) : ?>
                        <div class="p-content03__blog-list">
                            <div class="p-content03__blog-list-inner">
                                <?php
                                while ($blog_query->have_posts()) :
                                    $blog_query->the_post();
                                    ?>
                                    <article class="p-content03__blog-list-item p-article04">
                                        <a class="p-article04__thumbnail p-hover-effect--<?php echo esc_attr($options['hover_type']); ?>"
                                           href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('size1');
                                            } else {
                                                echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image-480x320.gif" alt="">';
                                            }
                                            ?>
                                        </a>
                                        <h3 class="p-article04__title"><a
                                                    href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 25, '...'); ?></a>
                                        </h3>
                                        <p class="p-article04__excerpt"><?php echo is_mobile() ? wp_trim_words(get_the_excerpt(), 40, '...') : wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                                        <?php if ($options['show_date'] || $options['show_category']) : ?>
                                            <p class="p-article04__meta">
                                                <?php if ($options['show_date']) : ?>
                                                    <time class="p-article04__date"
                                                          datetime="<?php the_time('Y-m-d'); ?>">
                                                        <?php the_time('Y.m.d'); ?>
                                                    </time>
                                                <?php endif; ?>

                                                <?php if ($options['show_category']) : ?>
                                                    <span class="p-article04__category">
                                                        <?php the_category(', '); ?>
                                                    </span>
                                                <?php endif; ?>
                                            </p>
                                        <?php endif; ?>
                                    </article>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="p-content03__blog-arrows">
                    </div>
                    <a class="p-content03__blog-archive-link">体験談一覧</a>
                </section>
                <section class="banner-list-container">
                    <div class="banner-list">
                        <div class="banner-container">
                            <div class="banner-bg-image"
                                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/ca/gallery_1.jpg')">
                            </div>
                            <a class="banner">
                                <p>
                                    バナー
                                </p>
                            </a>
                        </div>
                        <div class="banner-container">
                            <div class="banner-bg-image"
                                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/wa/gallery_1.jpg')">
                            </div>
                            <a class="banner">
                                <p>
                                    バナー
                                </p>
                            </a>
                        </div>
                        <div class="banner-container">
                            <div class="banner-bg-image"
                                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/dc/gallery_1.jpg')">
                            </div>
                            <a class="banner">
                                <p>
                                    バナー
                                </p>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="content-block">
            <h2 class="bottom-line-heading">地域から探す</h2>
            <?php get_template_part( 'components/usa-map' ); ?>
        </div>

        <div class="content-block">
            <h2 class="bottom-line-heading">アメリカ留学の種類</h2>

            <ul class="image-link-list__container">
                <li class="image-link-list__listed-link">
                    <a href="javascript:void(0);">
                        <div class="image-link-list__text-container">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-image.jpg')"></div>
                    </a>
                </li>
                <li class="image-link-list__listed-link">
                    <a href="javascript:void(0);">
                        <div class="image-link-list__text-container">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-image.jpg')"></div>
                    </a>
                </li>
                <li class="image-link-list__listed-link">
                    <a href="javascript:void(0);">
                        <div class="image-link-list__text-container">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-image.jpg')"></div>
                    </a>
                </li>
                <li class="image-link-list__listed-link">
                    <a href="javascript:void(0);">
                        <div class="image-link-list__text-container">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-image.jpg')"></div>
                    </a>
                </li>
            </ul>
        </div>
    </main>
</main>
<?php get_footer(); ?>
