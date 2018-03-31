<?php
/*
template name: country usa
*/
__( 'country usa', 'tcd-w' );
get_header();

$blog_args = array(
    'post_status' => 'publish',
    'post_type' => 'interview',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'country-kind',
            'field' => 'slug',
            'terms' => 'アメリカ',
            'operator'=>'IN'
        ),
    ),
);
$blog_query = new WP_Query($blog_args);
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
                <section class="pd-experience">
                    <ul class="ep-wrapper">
                        <?php
                        $counter = 1;

                        if (!$blog_query->have_posts()) {
                            ?>
                            <div class="not-li">留学体験記が見つかりませんでした</div>
                            <?php
                        }
                        while ($blog_query->have_posts())
                        {
                            $blog_query->the_post();
                            $country_terms = get_the_terms($post->ID, 'country-kind');
                            $term_terms = get_the_terms($post->ID, 'term');
                            ?>
                            <li class="i-<?php echo sprintf("%02d",$counter); $counter += 1; ?>">
                                <a class="inner-link" href="<?php the_permalink(); ?>">
                                    <div class="image"
                                         style="background-image: url('<?php
                                         if (has_post_thumbnail())
                                         {
                                             the_post_thumbnail_url( 'medium' );
                                         } else {
                                             echo get_template_directory_uri().'/assets/images/no-image-480x320.gif';
                                         }
                                         ?>');">
                                    </div>
                                    <h3 class="title"><?php echo wp_trim_words(get_the_title(), 30, '…'); ?></h3>
                                    <p class="text">
                                        <?php echo wp_trim_words(get_the_excerpt(), 50, '…'); ?>
                                    </p>
                                    <span class="sub-data">
                                    <time><?php the_time('Y.m.d'); ?></time>
                                    <span class="tag"><?php echo $country_terms[0]->name; ?></span>
                                    <span class="tag"><?php echo $term_terms[0]->name; ?></span>
                                </span>
                                </a>
                            </li>
                            <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </ul>
                </section>
                <section class="banner-list-container">
                    <div class="banner-list">
                        <div class="banner-container">
                            <div class="banner-bg-image"
                                 style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/banner-01.jpg')">
                            </div>
                            <a class="banner" href="/life-info/?country=アメリカ">
                                <p>
                                   生活情報
                                </p>
                            </a>
                        </div>
                        <div class="banner-container">
                            <div class="banner-bg-image"
                                style="background-image: none;">
                            </div>
                            <a class="banner">
                                <p>
                                    準備中
                                </p>
                            </a>
                        </div>
                        <div class="banner-container">
                            <div class="banner-bg-image"
                                style="background-image: none;">
                            </div>
                            <a class="banner">
                                <p>
                                    準備中
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

            <section class="image-link">
                <ul>
                    <li class="pc-3c sp-1c i-03">
                        <a href="<?php echo home_url('/purpose/short'); ?>">
                            <div class="wrap">
                                <h1 class="title">短期留学</h1>
                            </div>
                            <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-01.jpg')"></div>
                        </a>
                    </li>
                    <li class="pc-3c sp-2c i-04">
                        <a href="<?php echo home_url('/purpose/long'); ?>">
                            <div class="wrap">
                                <h1 class="title">長期留学</h1>
                            </div>
                            <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-02.jpg')"></div>
                        </a>
                    </li>
                    <li class="pc-3c sp-2c i-05">
                        <a href="<?php echo home_url('/purpose/language'); ?>">
                            <div class="wrap">
                                <h1 class="title">語学留学</h1>
                            </div>
                            <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-03.jpg')"></div>
                        </a>
                    </li>
                </ul>
            </section>


        </div>
    </main>
</main>
<?php get_footer(); ?>
