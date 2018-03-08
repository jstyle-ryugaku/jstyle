<?php
/*
template name: flow
*/
__( 'flow', 'tcd-w' );
get_header();
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <div class="flow-wrapper">
        <!-- 概要文 -->
        <section class="flow-about">
            <h1 class="title">お申し込みから留学までの流れ</h1>
            <p class="text">
                ご相談・お見積もりは無料です。ヒアリングをした上で、該当するプランを複数ご用意いたします。<br class="br-pc">
                留学に必要な手続きまで、全て同じスタッフが行いますので、安心してご利用いただけます。
            </p>
        </section>

        <!-- フロー図 -->
        <section class="flow-figure">

            <!-- PC版 -->
            <div class="pc">
                <div class="figure-top">
                    <div class="figure-left">
                        <span class="figure-arrow">
                            <p class="figure-period">約<br>2<br>週<br>間</p>
                        </span>
                    </div>
                    <div class="figure-right">
                        <ul class="figure-inner">
                            <span class="figure-free">
                                <span class="figure-arrow-free">
                                    <p class="figure-period">完<br>全<br>無<br>料</p>
                                </span>
                                <li class="figure-step figure-step-01" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow-figure-phone.svg')">
                                    <h2 class="figure-title">まずはお気軽にお問い合わせください</h2>
                                    <p class="figure-text">
                                        電話・メールにてお問い合わせください。<br class="br-pc">
                                        事前に「ヒアリングシート」をご記入いただきます。
                                    </p>
                                    <span class="figure-free-sp">完全無料</span>
                                </li>
                                <li class="figure-step figure-step-02">
                                    <h2 class="figure-title">条件に合う大学をリストアップ</h2>
                                    <p class="figure-text">
                                        いただいた情報を元に、8,359校から大学をリストアップします。<br class="br-pc">
                                        この段階までは完全無料ですので、一切費用はかかりません。
                                    </p>
                                    <span class="figure-free-sp">完全無料</span>
                                </li>
                            </span>
                            <li class="figure-step figure-step-03" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow-figure-doller.svg')">
                                <h2 class="figure-title">プラン(大学,期間)が決定後にご契約</h2>
                                <p class="figure-text">
                                    留学先・プランが決まったら契約書を作成します。<br class="br-pc">
                                    この正式な契約をもってはじめて費用が発生します。
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="figure-memo">
                    ※留学先の学校には規定による入学者数の制限があります。入学許可証を取得するまでは、入学確約の保証は致しかねます。ホームステイも同様に規定の人数制限がございます。ご検討の方は、お早めにお申し込みください。
                </p>
                <div class="figure-center">
                    <div class="figure-left">
                        <span class="figure-arrow">
                            <p class="figure-period">約<br>1<br>カ<br>月<br><span class="figure-rotation">〜</span><br>2<br>カ<br>月</p>
                        </span>
                    </div>
                    <div class="figure-right">
                        <ul class="figure-inner">
                            <li class="figure-step figure-step-04" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow-figure-pazzle.svg');">
                                <h2 class="figure-title">大学願書など、必要な書類への記入</h2>
                                <p class="figure-text">
                                    留学に必要な書類はすべてJstyleがご用意します。<br class="br-pc">
                                    手順のとおりに記入・ご返送いただきます。
                                </p>
                            </li>
                            <li class="figure-step figure-step-05" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow-figure-house.svg');">
                                <h2 class="figure-title">VISAの手続き・滞在先の選択</h2>
                                <p class="figure-text">
                                    VISAの手続きもご心配無用。Jstyleが責任を持って行います。<br class="br-pc">
                                    この段階で滞在先を選択します。
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="figure-bottom">
                    <ul class="figure-inner">
                        <li class="figure-step figure-step-06" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/flow/flow-figure-airplane.svg');">
                            <h2 class="figure-title">留学先へ出発</h2>
                            <p class="figure-text">
                                海外留学生活がスタート！現地についた後も定期的にサポートいたします。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
