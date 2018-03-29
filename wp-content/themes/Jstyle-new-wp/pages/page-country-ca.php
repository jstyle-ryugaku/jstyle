<?php
/*
template name: country ca
*/
__( 'country ca', 'tcd-w' );
get_header();

$blog_args = array(
    'post_status' => 'publish',
    'post_type' => 'interview',
    'tax_query' => array(
        array(
            'taxonomy' => 'country-kind',
            'field' => 'slug',
            'terms' => 'オーストラリア',
            'operator'=> 'IN'
        ),
    ),
);
$blog_query = new WP_Query($blog_args);
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>

    <main class="main-content-container">
        <h1 class="main-content-title">カナダ留学</h1>
        <p class="main-content-description">
            コンテンツ準備中です。
        </p>
    </main>
</main>
<?php get_footer(); ?>