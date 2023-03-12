<section class="top" id="home">
  <div class="container">
    <div class="top__bg" data-src="<?php the_field('top_tlo'); ?>"></div>
  <div class="top__wrapper">
    <h1><?php the_field('top_naglowek'); ?></h1>
    <a class="top__btn" href="#menu">menu</a>
  </div>
  </div>
  <div class="top__mouse">
    <?php get_template_part('img/svg/mouse.svg'); ?>
  </div>
</section>