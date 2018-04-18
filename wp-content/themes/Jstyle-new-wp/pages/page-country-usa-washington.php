<?php
/*
template name: country-usa-washington
*/
__('country-usa-california', 'tcd-w');
get_header();
?>
<main class="l-main">
    <?php get_template_part('template-parts/page-header'); ?>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="country-region-wrapper">

        <!-- 基本情報 -->
        <article class="cr-article a-01">
            <header class="cr-header">
                <h2 class="title">基本情報</h2>
                <div class="image"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/wa/header-bg-01.jpg')"></div>
            </header>

            <section class="cr-section s-01">
                <h3 class="title">ワシントン大統領に由来した州</h3>
                <p class="text">
                    アメリカ合衆国西海岸最北部の州。州都はオリンピア。
                    州の名は、アメリカ建国の父で初代合衆国大統領のジョージ・ワシントンに由来しています。大統領の名前が付けられたことでは、合衆国の中で唯一の州です。
                </p>
            </section>

            <section class="cr-section s-02">
                <h3 class="title">移民の多い州</h3>
                <p class="text">
                    ワシントン州の人口はおよそ706,2万人。
                    太平洋岸北西部では人口最大の州です。昔からドイツ系、アイルランド系、イングランド系の移民が多いです。
                </p>
            </section>
        </article>


        <!-- 歴史 -->
        <article class="cr-article a-02">
            <header class="cr-header">
                <h2 class="title">歴史</h2>
                <div class="image"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/wa/header-bg-02.jpg')"></div>
            </header>

            <section class="cr-section s-01">
                <h3 class="title">ネイティブアメリカンの地</h3>
                <p class="text">
                    1万1500年前に、アジア方面からやってきたネイティブ「・アメリカンのルーツとも言われているモンゴロイドが移住していました。
                    ヨーロッパからの探検者が現在のワシントン州になった地域を訪れる前は、多くのインディアン部族が住んでいました。
                    生業の中心は鮭の漁業であり、マカ族の場合は捕鯨を行っていました。内部の部族は、狩猟採集が基本でした。 </p>
            </section>
        </article>


        <!-- ワシントン州はこんな街！ -->
        <article class="cr-article a-03">
            <header class="cr-header">
                <h2 class="title">ワシントン州はこんな街！</h2>
                <div class="image"
                     style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/country/usa/wa/header-bg-03.jpg')"></div>
            </header>

            <section class="cr-section s-01">
                <h3 class="title">農業の街</h3>
                <p class="text">
                    ワシントン州は、農業生産高の高い州です。赤ラズベリーは国内生産高の9割を占めており、特にりんごは6割程度ですが、重要な産地です。州中部の乾燥し温かい夏と冷涼な冬という好適な気候があるため、りんごの生産をリードし続けています。
                </p>
            </section>

            <section class="cr-section s-02">
                <h3 class="title">クリーンな街</h3>
                <p class="text">
                    ワシントン州は、「公共スペースの清潔さ」と「それにかかわるゴミ処理活動の有効さと質」の評価にて第一位にランクされています。 </p>
            </section>

            <section class="cr-section s-03">
                <h3 class="title">アルコールの専売</h3>
                <p class="text">
                    アルコール飲料を専売する18州のうちの1つです。ただ、コンビニやスーパーで購入できるのはアルコール度数20％以下のものやビール、ワインのみである。発酵酒と醸造酒は、州が運営している酒屋、または私営で州と契約した酒屋でのみ購入が可能。
                </p>
            </section>
        </article>

    </div>
</main>
<?php get_footer(); ?>
