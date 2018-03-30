<?php $options = get_design_plus_option(); ?>

<!------- phpのタグを外したもの ------>
<div id="js-contents-builder">
    <!------- Jstyle5つの理由 ------>
    <div class="about-wrapper">
        <section class="five-reason">
            <h2 class="five-reason__title">
                Jstyleが選ばれる<span class="blue">5</span>つの理由
                <!--<img src="http://jstyleweb.local/wp-content/themes/Jstyle-new-wp/assets/images/about/reason-title.svg">-->
            </h2>
            <ul>
                <li class="r-01">
                    <i class="fas fa-heart"></i>
                    <p class="text">あなたの夢をスタッフ一同が全力で応援</p>
                </li>
                <li class="r-02">
                    <i class="fas fa-adjust"></i>
                    <p class="text">あなただけのオリジナルオーダーメイドプラン</p>
                </li>
                <li class="r-03">
                    <i class="fas fa-life-ring"></i>
                    <p class="text">留学前から留学後までお客様個々人に寄り添った丁寧なアフターケア</p>
                </li>
                <li class="r-04">
                    <i class="fas fa-bullhorn"></i>
                    <p class="text">24時間365日サポート体制で安心・安全</p>
                </li>
                <li class="r-05">
                    <i class="fas fa-graduation-cap"></i>
                    <p class="text">Jstyleのみが持つ海外学校の最新情報をご提供</p>
                </li>
            </ul>
            <a class="button" href="<?php echo home_url('/about/reason');?>">詳細 <span>&gt;</span></a>
        </section>
    </div>
    <!------- Jstyle5つの理由ここまで ------>

    <!------- 検索する三つのフォーム ------>

    <div id="cb_1">
        <div class="p-content02" style="background-color: #004353;">

            <article class="p-content02__item">
                <a href="<?php echo home_url('/country');?>" class="p-hover-effect--type1">
                    <img class="p-content02__item-img p-content02__item-img--vertical"
                         src="<?php bloginfo('template_url'); ?>/assets/images/top/country.png" alt="">
                    <div class="p-content02__item-content p-content02__item-content--t">
                        <h2 class="p-content02__item-title">国で探す</h2>
<!--                        <p class="p-content02__item-sub">Country</p>-->
                    </div>
                </a>
            </article>

            <article class="p-content02__item">
                <a href="<?php echo  home_url('/purpose');?>" class="p-hover-effect--type1">
                    <img class="p-content02__item-img p-content02__item-img--vertical"
                         src="<?php bloginfo('template_url'); ?>/assets/images/top/type_upper.png" alt="">
                    <div class="p-content02__item-content p-content02__item-content--t">
                        <h2 class="p-content02__item-title">目的で探す</h2>
<!--                        <p class="p-content02__item-sub">Purpose</p>-->
                    </div>
                </a>
            </article>

            <article class="p-content02__item">
                <a href='<?php echo home_url('/age');?>' class="p-hover-effect--type1">
                    <img class="p-content02__item-img p-content02__item-img--vertical"
                         src="<?php bloginfo('template_url'); ?>/assets/images/top/age.png" alt="">
                    <div class="p-content02__item-content p-content02__item-content--t">
                        <h2 class="p-content02__item-title">年代で探す</h2>
<!--                        <p class="p-content02__item-sub">Age</p>-->
                    </div>
                </a>
            </article>

        </div>
    </div>

    <div id="cb_1">
        <?php get_template_part('template-parts/plan-list'); ?>
    </div>

    <style>
        .p-content01-title:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 40%;
            background-image: url('<?php bloginfo("template_directory");?>/assets/images/jstyle.png');
            width: 60%;
            height: 100%;
            opacity: 0.2;
            background-repeat: no-repeat;
            z-index: -1;
            background-size: 150px;
        }
    </style>
    <!------- 検索する三つのフォーム ------>

    <!------- 留学の基礎知識 ------>
    <!-- 改変前のCSSは残ったままです -->
    <div class="knowledge-wrapper" id="cb_2">
        <div class="kn-inner">
            <div class="title-container">
                <span class="p-title--english">Preparation</span>
                <h2 class="p-title">
                    留学の基礎知識
                </h2>
            </div>
            <ul class="main-container">
                <li class="item i-01">
                    <a href="javascript:void(0);">
                        <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/knowledge-01.jpg')"></div>
                        <div class="title-wrapper">
                            <h3 class="title">ここに基礎知識のタイトル</h3>
                        </div>
                    </a>
                </li>
                <li class="item i-02">
                    <a href="javascript:void(0);">
                        <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/knowledge-02.jpg')"></div>
                        <div class="title-wrapper">
                            <h3 class="title">ここに基礎知識のタイトル</h3>
                        </div>
                    </a>
                </li>
                <li class="item i-03">
                    <a href="javascript:void(0);">
                        <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/knowledge-03.jpg')"></div>
                        <div class="title-wrapper">
                            <h3 class="title">ここに基礎知識のタイトル</h3>
                        </div>
                    </a>
                </li>
                <li class="item i-04">
                    <a href="javascript:void(0);">
                        <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/knowledge-04.jpg')"></div>
                        <div class="title-wrapper">
                            <h3 class="title">ここに基礎知識のタイトル</h3>
                        </div>
                    </a>
                </li>
                <li class="item i-05">
                    <a href="javascript:void(0);">
                        <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/top/knowledge-05.jpg')"></div>
                        <div class="title-wrapper">
                            <h3 class="title">ここに基礎知識のタイトル</h3>
                        </div>
                    </a>
                </li>
            </ul>
            <a class="button" href="<?php echo home_url('/preparation'); ?>">
                <span class="text">MORE <span class="symbol">&gt;</span></span>
            </a>
        </div>
    </div>
    <!------- 留学の基礎知識 ------>

<!------- 留学生の日記とニュース ------>

<?php
$blog_args = array(
    'post_status' => 'publish',
    'post_type' => 'interview',
);
$blog_query = new WP_Query($blog_args);

$news_args = array(
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'post_type' => 'news'
);
$news_query = new WP_Query($news_args);
?>
<div id="cb_3" class="p-content03<?php if ($value['cb_blog_and_news_layout']) {
    echo ' p-content03--rev';
} ?>">
    <section class="p-content03__blog u-clearfix">
        <div class="p-content03__blog-header">
            <div class="title-container">
                <span class="p-title--english p-content03__title--english">Interview</span>
                <h2 class="p-title p-content03__title">
                    留学体験記
                </h2>
            </div>
            <a class="p-content03__blog-archive-link"
               href="<?php echo esc_url(get_post_type_archive_link('interview')); ?>">体験記一覧</a>
        </div>
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
                                <p class="p-article04__meta"><?php if ($options['show_date']) : ?>
                                        <time class="p-article04__date"
                                              datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><?php endif; ?><?php if ($options['show_category']) : ?>
                                        <span class="p-article04__category">
                                            <?php
                                            $term_terms = get_the_terms($post->ID, 'term');
                                            $country_terms = get_the_terms($post->ID, 'country-kind');
                                            ?>
                                            <a href="interview-search/?search_cat1=0&search_cat2=<?php echo $term_terms[0]->term_id; ?>">
                                                <?php
                                                echo $term_terms[0]->name;
                                                ?>
                                            </a>
                                            <a href="interview-search/?search_cat1=<?php echo $country_terms[0]->term_id; ?>&search_cat2=0">
                                                <?php
                                                echo $country_terms[0]->name;
                                                ?>
                                            </a>
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
    </section>
    <section class="p-content03__news"
             style="background: <?php echo esc_attr($value['cb_blog_and_news_news_bg']); ?>">
        <div class="p-content03__news-catch title-container">
            <span class="p-title--english">News</span>
            <h2 class="p-title" style="">
                留学ニュース
            </h2>
        </div>
        <?php if ($news_query->have_posts()) : ?>
            <div class="p-content03__news-list">
                <?php
                while ($news_query->have_posts()) :
                    $news_query->the_post();
                    ?>
                    <article class="p-content03__news-list-item p-article05">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ($options['show_date_news']) : ?>
                                <time class="p-article05__date"
                                      datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <?php endif; ?>
                            <h3 class="p-article05__title"><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
                        </a>
                    </article>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
        <a class="p-content03__news-archive-link"
           href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">ニュース一覧</a>
    </section>
</div>


<!--    <div id="cb_3" class="p-content03">-->
<!--        <section class="p-content03__blog u-clearfix">-->
<!--            <div class="p-content03__blog-header">-->
<!--                <h2 class="p-content03__blog-catch" style="font-size:40px ">-->
<!--                    留学体験談-->
<!--                </h2>-->
<!--                <a class="p-content03__blog-archive-link" href="">-->
<!--                    体験談一覧-->
<!--                </a>-->
<!--            </div>-->
<!---->
<!--            <div class="p-content03__blog-list">-->
<!--                <div class="p-content03__blog-list-inner slick-initialized slick-slider">-->
<!--                    <div aria-live="polite" class="slick-list draggable">-->
<!--                        <article class="p-content03__blog-list-item p-article04">-->
<!--                            <a class="p-article04__thumbnail p-hover-effect--" href="">-->
<!--                                テキスト-->
<!--                            </a>-->
<!--                            <a href="">-->
<!--                                <img width="480" height="320"-->
<!--                                     src="http://tcdwp.info/tcd051/wp-content/uploads/2017/09/7-480x320.jpg"-->
<!--                                     class="attachment-size1 size-size1 wp-post-image" alt=""/>-->
<!--                            </a>-->
<!--                            <h3 class="p-article04__title"><a href="">テキスト</a></h3>-->
<!--                            <p class="p-article04__excerpt">テキスト</p>-->
<!--                            <p class="p-article04__meta">-->
<!--                                <time class="p-article04__date" datetime="">日付</time>-->
<!--                                <span class="p-article04__category"></span>-->
<!--                            </p>-->
<!--                        </article>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="p-content03__blog-arrows">-->
<!--            </div>-->
<!--        </section>-->
<!---->
<!--        <!------- ここからニュース ------ -->
<!--        <section class="p-content03__news" style="background: rgba(0,0,0,0.6);">-->
<!--            <h2 class="p-content03__news-catch" style="font-size: ">-->
<!--                News-->
<!--            </h2>-->
<!--            <div class="p-content03__news-list">-->
<!--                <article class="p-content03__news-list-item p-article05">-->
<!--                    <a href="">-->
<!--                        <time class="p-article05__date" datetime="">日付</time>-->
<!--                        <h3 class="p-article05__title">テキスト</h3>-->
<!--                    </a>-->
<!--                </article>-->
<!--            </div>-->
<!--            <a class="p-content03__news-archive-link" href="">テキスト</a>-->
<!--        </section>-->
<!--    </div>-->

<!------- 留学生の日記とニュース ------>

<!------- 留学体験インタビュー ------>

<!--    <div id="cb_4" class="p-main-image">-->
<!--        <div class="p-main-image__img"-->
<!--             style="background-image: url(http://jstylenewwp.local/wp-content/themes/Jstyle-new-wp/images/interview.jpg);"></div>-->
<!--        <div class="p-main-image__content" style="background: rgba();  color: ; ">-->
<!--            <h2 class="p-main-image__title">-->
<!--                留学日記などその他のコンテンツ（？）-->
<!--            </h2>-->
<!--            <p class="p-main-image__desc" style="font-size: px;">-->
<!--                私は高校1年生の時に1年間アメリカのオハイオ州に留学していました。帰国後、進路を考えた際に海外進学という選択肢が一番に上がりました。1年間で身についた英語力をもっと上達させたい、将来に役立てたいと思ったのと同時に、アメリカ人の学習に対する姿勢に惹かれことが大きな理由だと思います。...-->
<!--            </p>-->
<!--            <a class="p-main-image__btn p-button" href="" style="color: #fff;">-->
<!--                詳細　>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->

</div>

<!------- 留学体験インタビュー ------>

<!-- スライドしてくれるタグ（恐らく使わない） -->

<!-- 		<div id="cb_" class="p-content04" style="background: ">
			<div class="p-content04__content" style="color: ;">
				<h2 class="p-content04__catch" style="font-size: ;"></h2>
				<div class="p-content04__desc" style="font-size: "></div>
				<a class="p-content04__btn p-button" href=""></a>
			</div>
			<div class="p-content04__slider">
				<div class="p-content04__slider-item" style="background-image:url();"></div>
			</div>
		</div>
</div>
 -->
<!------- phpのタグを外したものここまで ------>

<?php
foreach ($options['contents_builder'] as $key => $value) :
    if ('catch_and_desc' === $value['cb_content_select'] && $value['cb_catch_and_desc_display']) :
        ?>
        <section id="cb_<?php echo esc_attr($key); ?>" class="p-content01 l-inner">
            <h2 class="p-content01__catch"
                style="font-size: <?php echo esc_attr($value['cb_catch_and_desc_headline_font_size']); ?>px;"><?php echo nl2br(esc_html($value['cb_catch_and_desc_headline'])); ?></h2>
            <div class="p-content01__desc"
                 style="font-size: <?php echo esc_attr($value['cb_catch_and_desc_desc_font_size']); ?>px;"><?php echo wpautop(esc_html($value['cb_catch_and_desc_desc'])); ?></div>
        </section>
    <?php
    elseif ('plan' === $value['cb_content_select'] && $value['cb_plan_display']) :
        ?>
        <div id="cb_<?php echo esc_attr($key); ?>">
            <?php get_template_part('template-parts/plan-list'); ?>
        </div>
    <?php
    elseif ('main_image' === $value['cb_content_select'] && $value['cb_main_image_display']) :
        $hex_overlay = implode(',', hex2rgb($value['cb_main_image_overlay']));
        ?>
        <div id="cb_<?php echo esc_attr($key); ?>"
             class="p-main-image<?php if ('type1' === $value['cb_main_image_layout']) {
                 echo ' p-main-image--rev';
             } ?>">
            <div class="p-main-image__img<?php if ('type2' === $value['cb_main_image_size']) {
                echo ' p-main-image__img--narrow';
            } ?>"
                 style="background-image: url(<?php echo esc_attr(wp_get_attachment_url($value['cb_main_image_bg_image'])); ?>);"></div>
            <div class="p-main-image__content"
                 style="background: rgba(<?php echo esc_attr($hex_overlay . ', ' . $value['cb_main_image_opacity']); ?>);  color: <?php echo esc_attr($value['cb_main_image_color']); ?>">
                <h2 class="p-main-image__title"
                    style="font-size: <?php echo esc_attr($value['cb_main_image_headline_font_size']); ?>px;"><?php echo nl2br(esc_html($value['cb_main_image_headline'])); ?></h2>
                <p class="p-main-image__desc"
                   style="font-size: <?php echo esc_attr($value['cb_main_image_desc_font_size']); ?>px;"><?php echo nl2br(esc_html($value['cb_main_image_desc'])); ?></p>
                <?php if ($value['cb_main_image_display_btn']) : ?>
                    <a class="p-main-image__btn p-button"
                       href="<?php echo esc_url($value['cb_main_image_btn_url']); ?>"<?php if ($value['cb_main_image_btn_target']) {
                        echo ' target="_blank"';
                    } ?>><?php echo esc_html($value['cb_main_image_btn_label']); ?></a>
                <?php endif; ?>
            </div>
        </div>
    <?php
    elseif ('blog_and_news' === $value['cb_content_select'] && $value['cb_blog_and_news_display']) :
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
        <div id="cb_<?php echo esc_attr($key); ?>" class="p-content03<?php if ($value['cb_blog_and_news_layout']) {
            echo ' p-content03--rev';
        } ?>">
            <section class="p-content03__blog u-clearfix">
                <div class="p-content03__blog-header">
                    <h2 class="p-content03__blog-catch"
                        style="font-size: <?php echo esc_attr($value['cb_blog_and_news_blog_catch_font_size']); ?>px;"><?php echo esc_html($value['cb_blog_and_news_blog_catch']); ?></h2>
                    <a class="p-content03__blog-archive-link"
                       href="<?php echo esc_url(get_post_type_archive_link('post')); ?>"><?php echo esc_html($value['cb_blog_and_news_blog_link_text']); ?></a>
                </div>
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
                                    <p class="p-article04__excerpt"><?php echo is_mobile() ? wp_trim_words(get_the_excerpt(), 25, '...') : wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
                                    <?php if ($options['show_date'] || $options['show_category']) : ?>
                                        <p class="p-article04__meta"><?php if ($options['show_date']) : ?>
                                                <time class="p-article04__date"
                                                      datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><?php endif; ?><?php if ($options['show_category']) : ?>
                                                <span class="p-article04__category"><?php the_category(', '); ?></span><?php endif; ?>
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
            </section>
            <section class="p-content03__news"
                     style="background: <?php echo esc_attr($value['cb_blog_and_news_news_bg']); ?>">
                <h2 class="p-content03__news-catch"
                    style="font-size: <?php echo esc_attr($value['cb_blog_and_news_news_catch_font_size']); ?>px;"><?php echo esc_html($value['cb_blog_and_news_news_catch']); ?></h2>
                <?php if ($news_query->have_posts()) : ?>
                    <div class="p-content03__news-list">
                        <?php
                        while ($news_query->have_posts()) :
                            $news_query->the_post();
                            ?>
                            <article class="p-content03__news-list-item p-article05">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ($options['show_date_news']) : ?>
                                        <time class="p-article05__date"
                                              datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <?php endif; ?>
                                    <h3 class="p-article05__title"><?php echo wp_trim_words(get_the_title(), 30, '...'); ?></h3>
                                </a>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
                <a class="p-content03__news-archive-link"
                   href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">ニュース一覧</a>
            </section>
        </div>
    <?php
    elseif ('gallery_contents' === $value['cb_content_select'] && $value['cb_gallery_contents_display']) :
        ?>
        <div id="cb_<?php echo esc_attr($key); ?>" class="p-content04"
             style="background: <?php echo esc_attr($value['cb_gallery_contents_bg']); ?>">
            <div class="p-content04__content"
                 style="color: <?php echo esc_attr($value['cb_gallery_contents_color']); ?>;">
                <h2 class="p-content04__catch"
                    style="font-size: <?php echo esc_attr($value['cb_gallery_contents_headline_font_size']); ?>px;"><?php echo esc_html($value['cb_gallery_contents_headline']); ?></h2>
                <div class="p-content04__desc"
                     style="font-size: <?php echo esc_attr($value['cb_gallery_contents_desc_font_size']); ?>px;"><?php echo wpautop(esc_html($value['cb_gallery_contents_desc'])); ?></div>
                <?php if ($value['cb_gallery_contents_display_btn']) : ?>
                    <a class="p-content04__btn p-button"
                       href="<?php echo esc_url($value['cb_gallery_contents_btn_url']); ?>"<?php if ($value['cb_gallery_contents_btn_target']) {
                        echo ' target="_blank"';
                    } ?>><?php echo esc_html($value['cb_gallery_contents_btn_label']); ?></a>
                <?php endif; ?>
            </div>
            <div class="p-content04__slider">
                <?php foreach ($value['cb_gallery_contents_items'] as $item) : ?>
                    <div class="p-content04__slider-item"
                         style="background-image:url(<?php echo esc_attr(wp_get_attachment_url($item['image'])); ?>);"></div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php
    elseif ('wysiwyg' === $value['cb_content_select'] && $value['cb_wysiwyg_display']) :
        $cb_wysiwyg_editor = apply_filters('the_content', $value['cb_wysiwyg_editor']);
        if ($cb_wysiwyg_editor) {
            echo '<div id="cb_' . esc_attr($key) . '">' . $cb_wysiwyg_editor . '</div>' . "\n";
        }
    endif;
endforeach;
?>
<!--</div><!-- #js-contents-builder END -->