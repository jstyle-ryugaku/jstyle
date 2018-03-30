<?php
/*
template name: purpose-working-holiday
*/
__('purpose-short', 'tcd-w');
get_header();
?>
<main class="l-main">
    <?php get_template_part('template-parts/page-header'); ?>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="purpose-detail-wrapper">

        <!-- 概要 -->

        <section class="pd-about">
            <h1 class="title">ワーキングホリデー</h1>
            <p class="text">
                ワーキングホリデー制度とは、仕事をすることで滞在資金を補いながら、最長1年間（イギリスは2年間）の海外生活を体験できる制度です。国際交流を目的に政府間協定として結ばれました。海外で生活したり、学んだり、働いたり、旅行したり、などさまざまな体験が1度にでき、「海外で自分を試したい」「今までとは違う環境で自分を成長させたい」という方にとって、嬉しい制度です。また、国によって制度の内容が異なるので、しっかり調べて自分に合った国を選びましょう。
            </p>
        </section>

        <!-- 国ごとの説明 -->
        <section class="country-description">
            <h2 class="country-description__title">ワーホリ対象国は20か国<span class="small">*2018年3月現在</span></h2>
            <div class="wrap">
                <div class="country-description__left-box">
                    <h3 class="country-name"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/country/au.svg">オーストラリア
                    </h3>
                    <p>
                        ワーキングホリデーで最も人気の国です。オーストラリアは日本が初めてワーキングホリデーの協定を結んだ国で、1980年以降、多くの日本人がワーキングホリデーを体験しており、受け入れ態勢が非常に整っています。条件付きながら2度目のワーキングホリデーが可能であるが特徴的です。</p>
                    <p>
                        就労に関しては、最低賃金が高いです。レストランやツアーガイド、ホテルや旅行関係などのホスピタリティ系の仕事が人気です。また、田舎の果樹園でのフルーツピッキングや農場での仕事などオーストラリアらしい仕事もあります。同一の雇用主の下での就労は6ヵ月以内です。</p>
                    <p>
                        オーストラリアは親日家が多いため、初めての海外でも安心。自然が豊かで、気候も良く、生活水準も高く暮らしやすい国で、移民も多く多彩な文化を持ち、人々は大らかでフレンドリーです。サーフィンやダイビングなど趣味も充実できます。 </p>
                </div>
                <div class="country-description__right-box">
                    <h3 class="country-name"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/country/nz.svg">ニュージーランド
                    </h3>
                    <p>制度のスタートは1885年で、ビザの発給数に制限が無く、毎年約4,000名前後にワーキングホリデービザを発給しています。</p>
                    <p>
                        就学期間は6ヵ月まで、就労期間の制限はなくフレキシビリティが高いので働きやすいです。最初に入国した日から12ヵ月間の就労が可能です。農場での仕事を3ヵ月以上行った証明がされると、滞在を3ヵ月延長することも可能。10月～3月の観光シーズンは観光客向けの求人が増え、冬場はスキー場近くのホテルやゲレンデでのアルバイトもあります。</p>
                    <p>自然あふれる環境で、ゆったり滞在できるのがニュージーランド。国土の約3分の1を国立公園や自然保護地区に指定されているほど、自然あふれる国ニュージーランド。</p>
                    <p>マリンスポーツだけでなく、トレッキングやハイキングなども楽しめます。活火山があるので温泉があるのも嬉しい！</p>
                </div>
            </div>

            <div class="wrap">
                <div class="country-description__left-box">
                    <h3 class="country-name"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/country/ca.svg">カナダ
                    </h3>
                    <p>
                        制度のスタートは1985年で、ワーキングホリデーでの渡航先としてはオーストラリアに次いで人気の国です。毎年募集人数の枠に制限があり、秋～年末にかけて発表され、通った者のみが滞在/就労することができます。</p>
                    　<p>
                        ワーキングホリデー就労許可証の有効期限内で就労が可能です。学校には最長半年まで通うことができます。日本人観光客向け土産物店や日本食レストランなどは英語力が低くても仕事に就けるので人気ですが、競争率が高いです。モントリオールやケベックではフランス語ができると仕事のチャンスが広がります。　</p>
                    <p>
                        カナダは自然と都市の便利さが共存し、暮らしやすさに定評があります。英語は誰にでも聞き取りやすく比較的なまりが少ないため、英語習得を目的として選ぶ人も多いです。英語だけでなくフランス語も多く使われているため、2ヵ国語学ぶことができます。</p>
                </div>
                <div class="country-description__right-box">
                    <h3 class="country-name"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/country/gb.svg">イギリス
                    </h3>
                    <p>
                        イギリスのワーキングホリデーは「Youth Mobility
                        Scheme」と呼ばれ、2001年からスタートしました。最長2年間滞在でき、就労期間にも就学期間にも制限がないなど自由度が高いですが、発給数1000名のみで非常に競争率が高いです。</p>
                    <p>最長2年間フルタイムでの就労が可能です。日本人観光客の多いロンドンでは、土産物店や日本食レストランなど比較的仕事はありますが、英語力がないと仕事をみつけるのが難しいです。</p>
                    　<p>
                        イギリスは、歴史と伝統を重んじる一方で、現代文化の流行の発信地として、アート・音楽・ファッションなどの分野でも世界をリードしています。あらゆる分野の教育・研究水準が高く、理想的な学ぶ環境が整っています。英語の発音やスペルでアメリカ英語との違いを見つけるなどおもしろい発見もあります。
                    </p>
                </div>
            </div>

            <div class="wrap">
                <div class="country-description__left-box">
                    <h3 class="country-name"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/country/fr.svg">フランス
                    </h3>
                    <p>制度のスタートは1999年でまだ歴史は浅いが、毎年約400名を募集している。</p>
                    <p>
                        就学期間に制限はなく、就労期間もほぼフルタイムで勤務できて、自由度の高さが特徴的です。日本人観光客の多いパリでは、日本人観光客向けツアーガイドや土産物店、また日本食のレストランなどの仕事があります。ただし、地方では状況が異なるため、やはりフランス語が必要になります。</p>
                    <p>
                        フランスといえば、数多くの歴史遺産と食通をうならせる料理とワインの国ですね。芸術家たちを虜にしたパリや、多彩な魅力にあふれた地方の街は、アウトドア派・アート派・グルメ派、どれもすべて楽しめます。語学や就労だけではなく、フランスの文化や歴史に触れられる素敵な海外生活になること間違いなしです。</p>
                </div>
                <div class="country-description__right-box">
                    <h3 class="country-name"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/country/ie.svg">アイルランド
                    </h3>
                    <p>
                        制度のスタートは2007年スタートでまだまだ歴史は浅いが毎年約400名を募集しています。ワーキングホリデー制度を持つ英語圏の国の中では穴場的な存在です。日本人が少ないところでワーホリをしたいという人にもおすすめです。</p>
                    <p>
                        就学期間に制限はなく、就労期間は1週間に最大39時間までと制限があるが、ほぼフルタイムでの労働が可能で、自由度の高さが特徴的です。日本からの観光客がそれほど多くないので、英語でコミュニケーションができないと仕事に就くのは難しいですが、日本でホテルや旅行会社など実務経験があると、関連した仕事では有利になります。</p>
                    <p>豊かな自然を持つアイルランドでは数々の詩人や芸術家が生まれています。競馬や乗馬、ゴルフ、釣り、サイクリングなど様々なスポーツも楽しめるのも魅力です。</p>
                    </p>
                </div>
            </div>
            <div class="country-description">
                <p class="sub-description">
                    その他、ワーキングホリデーが可能な国は、アルゼンチン、チリ、オーストリア、スペイン、スロバキア、デンマーク、ドイツ、ノルウェー、ハンガリー、ポーランド、ポルトガル、韓国、台湾、香港です。</p>
            </div>
        </section>


    </div>
</main>
<?php get_footer(); ?>
