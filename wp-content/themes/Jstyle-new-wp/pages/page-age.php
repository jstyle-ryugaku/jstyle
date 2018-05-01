<?php
/*
template name: age
*/

__('age', 'tcd-w');
get_header();
?>
    <main class="l-main">
        <?php get_template_part('template-parts/page-header'); ?>
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="country-region-wrapper">
            <section class="cr-section s-01">
                <p class="text">
                    留学も、年代によって様々な種類があります。これはサンプルのテキストです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </section>
            <!-- 高校生 -->
            <article class="cr-article a-01">
                <header class="cr-header">
                    <h2 class="title">高校生の方へ</h2>
                    <div class="image"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/ca/header-bg-01.jpg')"></div>
                </header>

                <section class="cr-section s-01">
                    <p class="text">
                        高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。
                    </p>
                </section>
            </article>
            <!-- line -->
            　
            <div class="line-place">
                <div class="age-option">
                    <div class="age-line-button">
                        <i class="fab fa-line"></i>
                        <p class="open-win">LINEで相談する</p>
                    </div>
                </div>
            </div>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/age.js"></script>
            <!--
                    <!-- 画像リンク -->
            <div class="content-block">
                <section class="image-link">
                    <ul>
                        <li class="pc-3c sp-2c i-03">
                            <a href="<?php echo home_url('/purpose/short'); ?>">
                                <div class="wrap">
                                    <h1 class="title">短期留学</h1>
                                </div>
                                <div class="bg-image"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-01.jpg')"></div>
                            </a>
                        </li>
                        <li class="pc-3c sp-2c i-05">
                            <a href="<?php echo home_url('/purpose/long'); ?>">
                                <div class="wrap">
                                    <h1 class="title">長期留学</h1>
                                </div>
                                <div class="bg-image"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-02.jpg')"></div>
                            </a>
                        </li>
                        <li class="pc-3c sp-2c i-03">
                            <a href="<?php echo home_url('/purpose/working'); ?>">
                                <div class="wrap">
                                    <h1 class="holiday">ワーキングホリデー</h1>
                                </div>
                                <div class="bg-image"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-holiday.jpg')"></div>
                            </a>
                        </li>
                        <li class="pc-3c sp-2c i-05">
                            <a href="<?php echo home_url('/purpose/language'); ?>">
                                <div class="wrap">
                                    <h1 class="title">語学留学</h1>
                                </div>
                                <div class="bg-image"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-03.jpg')"></div>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- 社会人 -->
            <article class="cr-article a-02">
                <header class="cr-header">
                    <h2 class="title">社会人の方へ</h2>
                    <div class="image"
                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/ca/header-bg-02.jpg')"></div>
                </header>

                <section class="cr-section s-01">
                    <p class="text">
                        高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けコンテンツですので、高校生向けのメッセージをご用意ください。
                    </p>
                </section>
            </article>
            <div class="content-block">
                <section class="image-link-2">
                    <ul>
                        <li class="pc-3c sp-2c i-03">
                            <a href="<?php echo home_url('/purpose/working'); ?>">
                                <div class="wrap">
                                    <h1 class="holiday">ワーキングホリデー</h1>
                                </div>
                                <div class="bg-image"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-holiday.jpg')"></div>
                            </a>
                        </li>
                        <li class="pc-3c sp-2c i-05">
                            <a href="<?php echo home_url('/purpose/language'); ?>">
                                <div class="wrap">
                                    <h1 class="title">語学留学</h1>
                                </div>
                                <div class="bg-image"
                                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/image-link-03.jpg')"></div>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- line -->
            <div class="line-place">
                <div class="age-option">
                    <div class="age-line-button">
                        <i class="fab fa-line"></i>
                        <p class="open-win">LINEで相談する</p>
                    </div>
                </div>
            </div>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/age.js"></script>
    </main>
<?php get_footer(); ?>