<?php
/*
template name: purpose-long
*/

$blog_args = array(
    'post_status' => 'publish',
    'post_type' => 'interview',
    'posts_per_page' => 8,
    'tax_query' => array(
        array(
            'taxonomy' => 'term',
            'field' => 'slug',
            'terms' => '長期留学',
            'operator'=>'IN'
        ),
    ),
);
$blog_query = new WP_Query($blog_args);

__( 'purpose-long', 'tcd-w');
get_header();
?>
<main class="l-main">
    <?php get_template_part('template-parts/page-header'); ?>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="purpose-detail-wrapper">

        <!-- 概要 -->
        <section class="pd-about">
            <h1 class="title">長期留学</h1>
            <p class="text">
                長期留学とは、6か月以上の期間で行う留学です。長期留学なら学校だけでなく、日常生活においても24時間英語のシャワーを浴びられる環境に継続的に身を置けるため、努力すれば、滞在日数の長さにほぼ正比例する形で英語力を向上させることができます。 </p>
        </section>

        <!-- 長期留学でも学べることはたくさん！ -->
        <section class="pd-point">
            <h2 class="title">長期留学で学べることはたくさん！</h2>
            <ul class="point-wrapper">
                <li class="p-01">
                    <img class="p-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-01.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">語学力の向上！</h3>
                        <p class="text">
                            長期留学は短期留学よりも英語が上達しやすい点が最大のメリットです。日常生活でも英語でコミュニケーションをとらないといけないので、頭の中が英語づけになり、 英語が自然と身に付いてきます。
                        </p>
                    </div>
                </li>
                <li class="p-02">
                    <img class="p-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-02.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">他国に友達ができる！</h3>
                        <p class="text">
                            クラスメイトやホストファミリーと打ち解けていくための時間的余裕があります。長い間一緒に過ごした人と帰国後も良い関係が続くケースは少なくありません。
                        </p>
                    </div>
                </li>
                <li class="p-03">
                    <img class="p-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-03.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">旅行ができる！</h3>
                        <p class="text">
                            季節や天候に合わせて自分で予定を立て、少し遠出をすることも可能です。上達した英語を使うことで、さらに有意義な旅にすることができるでしょう。
                        </p>
                    </div>
                </li>
                <li class="p-04">
                    <img class="p-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-04.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">ボランティア・インターンシップに挑戦！</h3>
                        <p class="text">
                            世界には、日本とは違った価値観や文化、コミュニケーションがあります。ボランティア・インターンシップを通して「世界の中での自分」を感じることが出来ます。ぜひ、挑戦してみましょう！
                        </p>
                    </div>
                </li>
                <li class="p-05">
                    <img class="p-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-05.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">語学以外も学べる！</h3>
                        <p class="text">
                            長期留学であれば、大学へ通い、
                            経済や商学、工学や情報技術などを
                            学ぶこともできます。
                        </p>
                    </div>
                </li>
                <li class="p-06">
                    <img class="p-image"
                         src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-06.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">本場で趣味を楽しむ！</h3>
                        <p class="text">
                            語学の他にも、ダイビングやラグビー、ダンスやミュージカルなど様々なものを体験できます。自分の趣味を本場で試してみましょう。
                        </p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- 短期留学Q&A -->
        <section class="pd-qa">
            <h2 class="title">長期留学Q&A</h2>
            <ul class="pa-wrapper">
                <li class="qa-01 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">語学力はどれくらい必要？</p>
                        </span>
                        <span class="answer">
                            <p class="text">語学力があるにこしたことはないですが、なくても大丈夫です。積極的に会話をし、短期間でできる最大限の努力をしましょう。</p>
                        </span>
                    </div>
                </li>
                <li class="qa-02 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">滞在先の種類は？</p>
                        </span>
                        <span class="answer">
                            <p class="text">ホームステイ、または学校の寮滞在が一般的です。現地の生活を楽しむなら、会話力を磨くこともできるホームステイがおすすめ。</p>
                        </span>
                </li>
                <li class="qa-03 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">語学力向上以外の魅力は？</p>
                        </span>
                        <span class="answer">
                            <p class="text">
                                長期留学には、英語力の向上だけでなく、日本では得られなかった体験をしたり、グローバルな視点を身に付けたりしやすいというメリットがあります。「本当に使える英語を身に付けたい」「海外の大学に行きたい」「海外で働きたい」という希望を持っている人は、長期留学が一番の近道です。
                            </p>
                        </span>
                </li>
                <li class="qa-04 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">費用面は大丈夫？</p>
                        </span>
                        <span class="answer">
                            <p class="text">
                                ある程度の費用は必要になってきます。しかし、短期留学で本格的な英語力を身に付けるためには、短期留学を何回も繰り返したり、帰国後もモチベーション高く勉強し続けないとどんどん忘れていき、せっかくの費用が無駄になってしまうおそれもあります</p>
                        </span>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Jstyleで長期留学しました！ -->
        <section class="pd-experience">
            <h2 class="title">Jstyleで長期留学しました！</h2>
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
    </div>
</main>
<?php get_footer(); ?>
