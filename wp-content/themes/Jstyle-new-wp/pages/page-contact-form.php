<?php
/*
template name: contact form
*/
__( 'contact form', 'tcd-w' );
get_header();
?>
<main class="l-main">
    <?php get_template_part( 'template-parts/page-header' ); ?>
    <?php get_template_part( 'template-parts/breadcrumb' ); ?>
    <?php the_content(); ?>
</main>
<?php get_footer(); ?>