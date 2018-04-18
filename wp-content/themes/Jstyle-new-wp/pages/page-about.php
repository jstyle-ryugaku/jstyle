<?php
/*
template name: about
*/
__( 'about', 'tcd-w' );
get_header();
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <div class="about-wrapper">
        <!-- 企業理念 -->
        <section class="philosophy">
            <h1>企業理念</h1>
            <h2>留学を通して<br>「自分の夢を、自由なやり方で、自分で切り開く “若者”」<br>を増やしたい</h2>
            <p class="text">
                株式会社Jstyleの企業理念は、留学を通して、世界中全ての”若者”に夢を与えることです。ここでいう”若者”とは、決して「年齢が若い」という意味ではありません。夢を持ち、かつそれを実現 したいという強い意思を持っている人であれば、彼らは全員“若者”です。彼らの夢を叶えられる留学を届ける、それこそが私たちJstyleです。<br>
                住み慣れた日本を飛び出し、留学という選択を選んだあなたは、今、夢への第一歩を踏み出しました。この一歩は、あなたの未来にとって非常に重要な一歩です。きっと、あなたの人生はこれまでと大きく違ったものになるでしょう。Jstyleは、あなたが夢を叶えるための支援は惜しみません。
            </p>
        </section>

        <!-- 画像リンク -->
        <section class="image-link">
            <ul>
                <li class="pc-2c sp-1c i-01">
                    <a href="<?php echo home_url('/about/president'); ?>">
                        <div class="wrap">
                            <h1 class="title">代表挨拶</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-01.jpg')"></div>
                    </a>
                </li>
                <li class="pc-2c sp-2c i-02">
                    <a href="<?php echo home_url('ca'); ?>">
                        <div class="wrap">
                            <h1 class="title">Jstyleの留学スタイル</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-02.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-03">
                    <a href="<?php echo home_url('/about/point'); ?>">
                        <div class="wrap">
                            <h1 class="title">Jstyleの<br>ここがすごい</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-03.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-04">
                    <a href="<?php echo home_url('/about/reason'); ?>">
                        <div class="wrap">
                            <h1 class="title">Jstyleが選ばれる<br>5つの理由</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-04.jpg')"></div>
                    </a>
                </li>
                <li class="pc-3c sp-2c i-05">
                    <a href="<?php echo home_url('/about/flow'); ?>">
                        <div class="wrap">
                            <h1 class="title">留学の流れ</h1>
                            <span class="text">テキストテキストテキストテキストテキスト</span>
                        </div>
                        <div class="bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/image-link-05.jpg')"></div>
                    </a>
                </li>
            </ul>
        </section>

        <!-- 5つの理由 -->
        <section class="five-reason">
            <h1>
                Jstyleが選ばれる<span class="blue">5</span>つの理由
            </h1>
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
            <a class="button" href="<?php echo home_url('/about/reason'); ?>">詳細 <span>&gt;</span></a>
        </section>

        <!-- 企業概要 -->
        <section class="overview">
            <h1>会社概要</h1>
            <table>
                <tr>
                    <th>社名</th>
                    <td>Jstyle</td>
                </tr>
                <tr>
                    <th>代表取締社長</th>
                    <td>安藤和隆</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>
                        <span class="b-01">
                            本社<br>
                            〒179-0074 東京都練馬区春日町2丁目14番47号 シュエット203<br>
                            TEL (03) 5848-5432(代)<br>
                            代表直通番号 090-8811-5432
                        </span>
                        <span class="b-02">
                            東京面談用オフィス<br>
                            〒102-0076<br>
                            東京都千代田区五番町 12-6 B1F<br>
                            TEL (03) 5848-5432<br>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>創立</th>
                    <td>2016年(平成28年)12月2日</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>3,000,000円(2016年3月末現在)</td>
                </tr>
                <tr>
                    <th>主要株主</th>
                    <td>
                        安藤 和隆<br>
                        西澤 秀行
                    </td>
                </tr>
                <tr>
                    <th>事業年度</th>
                    <td>毎年12月2日から翌年12月1日まで</td>
                </tr>
                <tr>
                    <th>主な事業内容</th>
                    <td>
                        ・留学先の提供、紹介及び留学手続きの代行事業<br>
                        ・人材育成のための教育事業<br>
                        ・前各事業に附帯する一切の事業
                    </td>
                </tr>
                <tr>
                    <th>データベース管理部門</th>
                    <td>データベース管理部門</td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td>28人(2017年3月末現在)</td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td>info@jstyle-ryugaku.com</td>
                </tr>
            </table>
        </section>
    </div>
</main>
<?php get_footer(); ?>
