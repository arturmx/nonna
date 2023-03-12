<?php get_header(); ?>
    <?php  while ( have_posts() ) : the_post(); ?>
        
        <?php get_template_part('./template-parts/top'); ?>
        <?php get_template_part('./template-parts/texts'); ?>
        <?php get_template_part('./template-parts/gallery'); ?>
        <?php get_template_part('./template-parts/quote'); ?>
        <?php get_template_part('./template-parts/image1'); ?>
        <?php get_template_part('./template-parts/menu'); ?>
        <?php get_template_part('./template-parts/image2'); ?>
        <?php get_template_part('./template-parts/lightbox'); ?>

    <?php endwhile; ?>

<?php get_footer();
