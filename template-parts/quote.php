<?php if (get_field('cytat')) : ?>
<section class="quote">
  <div class="container">
    <div class="quote__wrapper">
      <div class="quote__sign"><?php get_template_part('./img/svg/quote.svg'); ?></div>
      <div class="quote__text"><?php the_field('cytat'); ?></div>
    </div>
  </div>
</section>
<?php endif; ?>