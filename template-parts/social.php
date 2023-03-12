<ul class="social">
  <li class="social__item"><a class="social__link" href="<?php the_field('facebook'); ?>" target="_blank"><?php get_template_part('img/svg/facebook.svg'); ?></a></li>
  <li class="social__item"><a class="social__link" href="<?php the_field('instagram'); ?>" target="_blank"><?php get_template_part('img/svg/instagram.svg'); ?></a></li>
  <li><ul class="header__lang"><?php pll_the_languages(array('display_names_as' => 'slug','show_names'=>2,'hide_current'=>1)); ?></ul></li>
</ul>