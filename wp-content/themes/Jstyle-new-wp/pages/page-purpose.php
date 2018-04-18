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
            ひとことで留学と言ってもそのスタイルはいろいろ。自分に最適な留学のスタイルを選ぶために、留学の目的から考えてみましょう。しっかり語学力を身につけたいなら「語学留学」、海外での生活体験をメインに考えているなら「ワーキングホリデー」、海外の大学の学位を取得するなら「大学留学」、身につけたいスキルがあるなら「専門スキルアップ留学」という具合に、目的によって最適な留学スタイルは異ってきます。ここではそれぞれの留学スタイルをご紹介します。
        </p>

        <div class="images">
            <ul>
                <li class="image i-01">
                    <a href="<?php echo home_url('/purpose/short'); ?>">
                        <div class="wrap">
                            <h1 class="title">短期留学</h1>
                            <span class="text">春休み、夏休みに。学生はもちろん、休暇をつかって社会人も短期留学を。</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-short.jpg')"></div>
                    </a>
                </li>
                <li class="image i-02">
                    <a href="<?php echo home_url('/purpose/long'); ?>">
                        <div class="wrap">
                            <h1 class="title">長期留学</h1>
                            <span class="text">グローバルな環境で通用する英語力や専門知識を身につけられます。</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-long.jpg')"></div>
                    </a>
                </li>
                <li class="image i-03">
                    <a href="<?php echo home_url('/purpose/language'); ?>">
                        <div class="wrap">
                            <h1 class="title">語学留学</h1>
                            <span class="text">学校で語学を総合的に学びながら、生活の中で実践。</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-language.jpg')"></div>
                    </a>
                </li>
                <li class="image i-04">
                    <a href="<?php echo home_url('/purpose/working'); ?>">
                        <div class="wrap">
                            <h1 class="title">ワーキングホリデー</h1>
                            <span class="text">海外で暮らす、学ぶ、働くのすべてが体験できます。</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose/bg-holiday.jpg')"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>
