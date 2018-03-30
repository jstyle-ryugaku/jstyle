<?php
/*
template name: purpose-language
*/
__( 'purpose-short', 'tcd-w' );
get_header();
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <div class="purpose-detail-wrapper">

        <!-- 概要 -->
        <section class="pd-about">
            <h1 class="title">短期留学</h1>
            <p class="text">
                短期留学とは、１週間から3か月までの期間で行う留学です。学生なら、春休み、夏休みを使って、社会人なら有給休暇を使って行くのがおすすめです。
            </p>
        </section>

        <!-- 短期留学でも学べることはたくさん！ -->
        <section class="pd-point">
            <h2 class="title">短期留学でも学べることはたくさん！</h2>
            <ul class="point-wrapper">
                <li class="p-01">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-01.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">語学力の向上！</h3>
                        <p class="text">
                            短期間でも努力次第でいくらでも語学力は向上させることができます。できるだけ現地の人といる時間を増やし、習得したい言語を人一倍に話すようにしましょう。
                        </p>
                    </div>
                </li>
                <li class="p-02">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-02.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">異文化交流ができる！</h3>
                        <p class="text">
                            語学学校では世界各国からの留学生と共に学びます。また、アクティビティ等を通してより多くの国籍の方と交流することができます。
                        </p>
                    </div>
                </li>
                <li class="p-03">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-03.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">憧れの海外生活を体験！</h3>
                        <p class="text">
                            映画に出てくるような都市で外国人と暮らせば、旅行では味わえない体験ができます。新しくてワクワクする日々が待っているでしょう。
                        </p>
                    </div>
                </li>
                <li class="p-04">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-04.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">留学先の観光地を楽しむ！</h3>
                        <p class="text">
                            留学は時間がたくさんあります。空いている時間で憧れの有名スポットへ気軽に行くことができます。
                        </p>
                    </div>
                </li>
                <li class="p-05">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-05.jpg">
                    <div class="p-wrapper">
                        <h3 class="title">ボランティアに挑戦！</h3>
                        <p class="text">
                            語学の他にも、ダイビングやラグビー、ダンスやミュージカルなどその土地本場のものを体験できます。
                        </p>
                    </div>
                </li>
                <li class="p-06">
                    <img class="p-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/point-06.jpg">
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
            <h2 class="title">短期留学Q&A</h2>
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

        <!-- Jstyleで短期留学しました！ -->
        <section class="pd-experience">
            <h2 class="title">Jstyleで短期留学しました！</h2>
            <div class="ep-wrapper">

                <!-- 左側・体験談 -->
                <div class="ep-left">
                    <ul>
                        <li class="i-01">
                            <a class="inner-link" href="javascript:void(0);">
                                <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/experience-01.jpg')"></div>
                                <h3 class="title">1年間で身についた英語力をもっと上達させたい</h3>
                                <p class="text">
                                    私は高校1年生の時に1年間アメリカのオハイオ州に留学していました。帰国後、進路を考えた際に海外進学という…
                                </p>
                                <span class="sub-data">
                                    <time>2017.1.2</time>
                                    <span class="tag">短期留学</span>
                                    <span class="tag">アメリカ</span>
                                </span>
                            </a>
                        </li>
                        <li class="i-02">
                            <a class="inner-link" href="javascript:void(0);">
                                <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/experience-02.jpg')"></div>
                                <h3 class="title">1年間で身についた英語力をもっと上達させたい</h3>
                                <p class="text">
                                    私は高校1年生の時に1年間アメリカのオハイオ州に留学していました。帰国後、進路を考えた際に海外進学という…
                                </p>
                                <span class="sub-data">
                                    <time>2017.1.2</time>
                                    <span class="tag">短期留学</span>
                                    <span class="tag">アメリカ</span>
                                </span>
                            </a>
                        </li>
                        <li class="i-03">
                            <a class="inner-link" href="javascript:void(0);">
                                <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/experience-03.jpg')"></div>
                                <h3 class="title">1年間で身についた英語力をもっと上達させたい</h3>
                                <p class="text">
                                    私は高校1年生の時に1年間アメリカのオハイオ州に留学していました。帰国後、進路を考えた際に海外進学という…
                                </p>
                                <span class="sub-data">
                                    <time>2017.1.2</time>
                                    <span class="tag">短期留学</span>
                                    <span class="tag">アメリカ</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- 右側・バナー -->
                <div class="ep-right">
                    <a href="javascript:void(0);">
                        <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/banner-01.jpg')">
                    </a>
                    <a href="javascript:void(0);">
                        <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/banner-01.jpg')">
                    </a>
                    <a href="javascript:void(0);">
                        <img class="image" src="<?php echo get_template_directory_uri(); ?>/assets/images/purpose-short/banner-01.jpg')">
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
