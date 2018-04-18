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
    <div class="main-container">

        <!-- 高校生 -->
        <div class="age-forward">
            留学も、年代によって様々な種類があります。これはサンプルのテキストです。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </div>
    </div>
    <div class="title-background">
        <h1 class="age-title">
            高校生の方へ
        </h1>
    </div>
    <div class="main-container">
        <div class="age-image">

        </div>
        <p class="text">
            高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。
        </p>

        <!-- line -->
        <a href="" class="line">

        </a>

        <!-- 画像リンク -->
        <section class="age-imagelink">
            <ul>
                <li class="pc-2c sp-2c i-02">
                    <a href="<?php echo home_url('/about/new-style'); ?>">
                        <div class="wrap">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-02.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-03">
                    <a href="<?php echo home_url('/about/new-style'); ?>">
                        <div class="wrap">
                            <h1 class="title">長期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-03.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-04">
                    <a href="<?php echo home_url('/about/new-style'); ?>">
                        <div class="wrap">
                            <h1 class="title">ワーキングホリデー</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-04.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-05">
                    <a href="<?php echo home_url('/about/new-style'); ?>">
                        <div class="wrap">
                            <h1 class="title">語学留学</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-05.jpg')"></div>
                    </a>
                </li>
            </ul>
        </section>
    </div>
    <!-- 社会人 -->
    <div class="title-background">
        <h1 class="age-title">
            社会人の方へ
        </h1>
    </div>
    <div  class="main-container">
        <div class="age-image">

        </div>
        <p class="text">
            高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。高校生向けのコンテンツですので、高校生向けのメッセージをご用意ください。
        </p>

        <!-- line -->
        <a href="" class="line">

        </a>

        <!-- 画像リンク -->
        <section class="age-imagelink">
            <ul>
                <li class="pc-2c sp-2c i-02">
                    <a href="<?php echo home_url(''); ?>">
                        <div class="wrap">
                            <h1 class="title">短期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-02.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-03">
                    <a href="<?php echo home_url(''); ?>">
                        <div class="wrap">
                            <h1 class="title">長期留学</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-03.jpg')"></div>
                    </a>
                </li>
            </ul>
        </section>
    </div>


</main>
<?php get_footer(); ?>