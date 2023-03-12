<section class="gallery">
  <div class="container">
    <div class="gallery__nav">
      <div class="gallery__arrow gallery__arrow--prev"><?php get_template_part('./img/svg/arrow.svg'); ?></div>
      <div class="gallery__arrow gallery__arrow--next"><?php get_template_part('./img/svg/arrow.svg'); ?></div>
      <div class="gallery__wrapper">
        <?php while (have_rows('galeria')) : the_row(); ?>
          <div class="gallery__item">
            <img src="<?php the_sub_field('zdjecie'); ?>" alt="gallery image" />
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>