<?php
/*
template name: preparation
*/
__('preparation', 'tcd-w');
get_header();

$life_info_args = array(
    'post_status' => 'publish',
    'post_type' => 'life-info',
    'orderby' => 'post_date',
    'order' => 'DESC'
);

$life_info_query = new WP_Query($life_info_args);

?>
<main class="l-main">
    <?php get_template_part('template-parts/page-header'); ?>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="preparation-page-wrapper">
        <h2 class="pp-title">
            あなたの留学を<br class="sp-br">成功させるために必要な<br>
            留学の基礎知識<b>8</b>ヵ条
        </h2>

        <!-- 00 -->
        <section class="pp-section s-00">
            <h3 class="title">はじめに</h3>
            <div class="text-box">
                <p class="text">
                    こんにちは。留学エージェント Jstyle
                    です。留学を決意したあなた、留学を考えているあなた、留学に行く前に知ってほしいことをお伝えするために、このページをまとめました。知っていること、始めて知ること、いろいろあると思いますが、留学する人すべてに知ってほしい知識や心構えを解説しています。適切な知識を身につければ、あなたの留学の成功や充実度がぐっと高まることは間違いありません。まっさらな気持ちですべての記事を読んでいただければと思います。
                </p>
                <p class="text">
                    まずは、実際に留学に行き、その経験を活かしている方の体験談を読んでみてください。
                </p>
            </div>
            <div class="link">
                <?php echo get_interview_tags(); ?>
            </div>
        </section>

        <!-- 01 -->
        <section class="pp-section s-01">
            <h3 class="title">留学をするとどんないいことがあるか？</h3>
            <div class="text-box">
                <p class="text">
                    そもそも、留学をするとどんないいことがあるのでしょうか。語学習得、キャリアアップ、学生時代の貴重な想いで作り・・・留学の目的は人によって、違うとは思いますが、実際に留学にいった人の声を聞きながら留学をするとどんないいことがあるか、再確認してみましょう。</p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(1); ?>
            </div>
        </section>

        <!-- 02 -->
        <section class="pp-section s-02">
            <h3 class="title">留学前で決まる！日本にいるときの英語学習の大切さ</h3>
            <div class="text-box">
                <p class="text">
                    留学の成功は、留学前の語学学習で決まる。
                </p>
                <p class="text">
                    いよいよ留学への決意を固めたあなた。まだ見ぬ世界に一歩踏み出すことに、ワクワクも不安も入り混じった感覚ではないでしょうか。多くの方が誤解していることがあります。それは、”海外で生活すれば、英語はしゃべれるようになる”ということ。たしかに、長期間海外に滞在すれば、少しずつ環境に適応し、語学力は向上します。しかし、まったく英語が喋れない状態でいきなりそのような環境に身をおいても、もちろん最初はうまくコミュニケーションはできません。
                    現地の会話スピードへの慣れ、必要な語彙力/文法力の習得には一定の期間が必要であるためです。準備不足で、語学力も不十分な状態で、ただ漫然と海外にいっても成長速度は遅いのです。逆にしっかりとした英語の土台を作っておけば、たとえ期間の短い短期留学であっても、留学期間をしっかりと”実践のコミュニケーション”にあてることができ、しっかりとした語学力が身につきます。
                </p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(2); ?>
            </div>
        </section>

        <!-- 03 -->
        <section class="pp-section s-03">
            <h3 class="title">留学形態の基礎知識</h3>
            <div class="text-box">
                <p class="text no-indent">
                    留学のタイプは様々ありますが、大きく分けると3種類に分類できます。<br>
                    <br>
                </p>
                <p class="text no-indent">
                    ①語学留学<br>
                    ②大学進学/編入<br>
                    ③ワーキングホリデー<br>
                    <br>
                </p>
                <p class="text no-indent">
                    それぞれの形態の概要や、滞在先の種類、留学をするにあたって知っておいてもらいたい留学制度をご紹介します。
                </p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(3); ?>
            </div>
        </section>

        <!-- 04 -->
        <section class="pp-section s-04">
            <h3 class="title">留学の持ち物　基礎知識</h3>
            <div class="text-box">
                <!-- 下記文章は、開発者が追加 -->
                <p class="text">いざ、留学しようと決意した際に、最初に悩むのは留学の持ち物。何を日本から持っていくべきで、何を持っていなかなくていいのか？</p>
                <p class="text">大切な持参品についての基礎知識をまとめました。</p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(4); ?>
            </div>
        </section>

        <!-- 05 -->
        <section class="pp-section s-05">
            <h3 class="title">留学に関する　お金の知恵</h3>
            <div class="text-box">
                <!-- 下記文章は、開発者が追加 -->
                <p class="text">
                    やっぱり一番気になるのが、留学にかかるお金。留学にはいきたいけど、なるべく費用は抑えたい・・・そんな方のための、賢いお金の知識をまとめました。
                </p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(5); ?>
            </div>
        </section>

        <!-- 06 -->
        <section class="pp-section s-06">
            <h3 class="title">海外留学　いざというときの知恵</h3>
            <div class="text-box">
                <!-- 下記文章は、開発者が追加 -->
                <p class="text">
                    どれだけ気を付けていても、留学にはトラブルはつきもの。万が一の病気やケガが、海外滞在中に起こってしまったらどうすればいいか。不安になることもあると思います。そのために事前に知っておいてほしいことをまとめました。。
                </p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(6); ?>
            </div>
        </section>

        <!-- 07 -->
        <section class="pp-section s-07">
            <h3 class="title">留学後のキャリアの知識</h3>
            <div class="text-box">
                <!-- 下記文章は、開発者が追加 -->
                <p class="text">
                    留学をしたのちに、どのようなキャリアパスを歩むのか？就活や転職など、留学体験がキャリア形成にどのような影響を及ぼし、どのようなメリットがあるのか、まとめました。
                </p>
            </div>
            <div class="link">
                <?php echo get_preparation_tags(7); ?>
            </div>
        </section>

        <!-- 08 -->
        <section class="pp-section s-08">
            <h3 class="title">留学生インタビュー</h3>
            <div class="text-box">
                <!-- 下記文章は、開発者が追加 -->
                <p class="text">
                    実際に留学に行き、留学体験をもとに成功をおさめている先輩たちの体験談をまとめました。
                </p>
            </div>
            <div class="link">
                <?php echo get_interview_tags(); ?>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
