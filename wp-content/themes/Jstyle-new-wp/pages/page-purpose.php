<?php
/*
template name: purpose
*/
__( 'purpose', 'tcd-w' );
get_header();
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <div class="purpose-wrapper">
        <p class="about">
            ここに、留学の目的前書きが入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストここに、留学の目的前書きが入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストここに、留学の目的前書きが入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストここに、留学の目的前書きが入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストここに、留学の目的前書きが入ります。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>

        <div class="images">
            <ul>
                <li class="image i-01">
                    <a href="<?php echo home_url('/purpose/short'); ?>">
                        <div class="wrap">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-short.jpg')"></div>
                    </a>
                </li>
                <li class="image i-02">
                    <a href="<?php echo home_url('/purpose/long'); ?>">
                        <div class="wrap">
                            <h1 class="title">長期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-long.jpg')"></div>
                    </a>
                </li>
                <li class="image i-03">
                    <a href="<?php echo home_url('/purpose/language'); ?>">
                        <div class="wrap">
                            <h1 class="title">語学留学</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-language.jpg')"></div>
                    </a>
                </li>
                <li class="image i-04">
                    <a href="<?php echo home_url('/purpose/working'); ?>">
                        <div class="wrap">
                            <h1 class="title">ワーキングホリデー</h1>
                            <span class="text">テキストテキストテキストテキストテキス</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-holiday.jpg')"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>
