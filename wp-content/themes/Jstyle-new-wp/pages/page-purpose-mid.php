<?php
/*
template name: purpose-mid
*/

$blog_args = array(
    'post_status' => 'publish',
    'post_type' => 'interview',
    'posts_per_page' => 8,
    'tax_query' => array(
        array(
            'taxonomy' => 'term',
            'field' => 'slug',
            'terms' => '中期留学',
            'operator'=>'IN'
        ),
    ),
);
$blog_query = new WP_Query($blog_args);

__( 'purpose-mid', 'tcd-w' );
get_header();
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <div class="purpose-detail-wrapper">

        <!-- 概要 -->
        <section class="pd-about">
            <h1 class="title">中期留学</h1>
            <p class="text">
                中期留学とは、3か月から９か月までの期間で行う留学です。語学力を向上させたり、外国で何かを学ぶには十分な期間です。「本気で話せるようになりたい！」「大学でこれが学びたい！」という強い意志がある方は、ぜひ中期で留学へ行きましょう。
            </p>
        </section>

        <!-- 中期留学は学べることがたくさん！ -->
        <section class="pd-point">
            <h2 class="title">中期留学は学べることがたくさん！</h2>
            <ul class="point-wrapper">
                <li class="p-01">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-mid/point-01.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">語学力の向上！</h3>
                        <p class="text">
                            中期間であれば、努力次第でいくらでも語学力を向上させることができます。本気で勉強をすれば、日常では困らない程度の会話をできるようになるでしょう。
                        </p>
                    </div>
                </li>
                <li class="p-02">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-mid/point-02.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">他国に友達ができる！</h3>
                        <p class="text">
                            クラスメイトやホストファミリーと打ち解けていくための時間的余裕があります。長い間一緒に過ごした人と帰国後も良い関係が続くケースは少なくありません。
                        </p>
                    </div>
                </li>
                <li class="p-03">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-mid/point-03.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">憧れの海外生活を体験！</h3>
                        <p class="text">
                            映画に出てくるような都市で外国人と暮らせば、旅行では味わえない体験ができます。新しくてワクワクする日々が待っているでしょう。
                        </p>
                    </div>
                </li>
                <li class="p-04">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-mid/point-04.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">留学先の観光地を楽しむ！</h3>
                        <p class="text">
                            留学は時間がたくさんあります。空いている時間で憧れの有名スポットへ気軽に行くことができます。
                        </p>
                    </div>
                </li>
                <li class="p-05">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-mid/point-05.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">ボランティ・インターンシップに挑戦！</h3>
                        <p class="text">
                            世界には、日本とは違った価値観や文化、コミュニケーションがあります。ボランティア・インターンシップを通して「世界の中での自分」を感じることが出来ます。ぜひ、挑戦してみましょう！
                        </p>
                    </div>
                </li>
                <li class="p-06">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-mid/point-06.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">本場で趣味を楽しむ！</h3>
                        <p class="text">
                            語学の他にも、ダイビングやラグビー、ダンスやミュージカルなど様々なものを体験できます。自分の趣味を本場で試してみましょう。
                        </p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- 中期留学Q&A -->
        <section class="pd-qa">
            <h2 class="title">中期留学Q&A</h2>
            <ul class="pa-wrapper">
                <li class="qa-01 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">語学力はどれくらい必要？</p>
                        </span>
                        <span class="answer">
                            <p class="text">語学力があるにこしたことはないですが、なくても大丈夫です。積極的に会話をし、短期間でできる最大限の努力をしましょう。語学力があるにこしたことはないですが、なくても大丈夫です。積極的に会話をし、短期間でできる最大限の努力をしましょう。</p>
                        </span>
                    </div>
                </li>
                <li class="qa-02 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">滞在先の種類は？
                            </p>
                        </span>
                        <span class="answer">
                            <p class="text">ホームステイ、または学校の寮滞在が一般的です。現地の生活を楽しむなら、会話力を磨くこともできるホームステイがおすすめ。</p>
                        </span>
                </li>
                <li class="qa-03 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">どこで学ぶ？</p>
                        </span>
                        <span class="answer">
                            <p class="text">私立の語学学校で学ぶのが一般的です。ビルに入っている校舎のほか、大学のキャンパスで行われるコースもあります。</p>
                        </span>
                </li>
                <li class="qa-04 qa-anime">
                    <div class="inner">
                        <span class="question">
                            <p class="text">ビザは必要？</p>
                        </span>
                        <span class="answer">
                            <p class="text">ほとんどの国の場合は必要ないですが、アメリカにおいては、たとえ1週間だけでもビザが必要になります。</p>
                        </span>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Jstyleで中期留学しました！ -->
        <section class="pd-experience">
            <h2 class="title">Jstyleで中期留学しました！</h2>
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
