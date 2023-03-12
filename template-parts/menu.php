<section class="menu" id="menu">
  <div class="container">
    <div class="menu__wrapper">
      <div class="menu__nav">
        <?php get_template_part('./template-parts/menu-nav'); ?>
      </div>
      <div class="menu__menu">
        <?php if (get_field('pizze-czerwone')) : ?>
          <div class="menu__part" id="pizze-czerwone">
            <h3 class="menu__heading"><?php pll_e('Pizze czerwone') ?></h3>
            <?php while (have_rows('pizze-czerwone')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('pizze-biale')) : ?>
          <div class="menu__part" id="pizze-biale">
            <h3 class="menu__heading"><?php pll_e('Pizze białe') ?></h3>
            <?php while (have_rows('pizze-biale')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('dodatki-grupa')) : ?>
          <div class="menu__part" id="dodatki">
            <h3 class="menu__heading"><?php pll_e('Dodatki') ?></h3>
            <?php while (have_rows('dodatki-grupa')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('talerzyki')) : ?>
          <div class="menu__part" id="talerzyki">
            <h3 class="menu__heading"><?php pll_e('Talerzyki') ?></h3>
            <?php while (have_rows('talerzyki')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('przystawki')) : ?>
          <div class="menu__part" id="przystawki">
            <h3 class="menu__heading"><?php pll_e('Przystawki') ?></h3>
            <?php while (have_rows('przystawki')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('salaty')) : ?>
          <div class="menu__part" id="salaty">
            <h3 class="menu__heading"><?php pll_e('Sałaty') ?></h3>
            <?php while (have_rows('salaty')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('panuozzo')) : ?>
          <div class="menu__part" id="panuozzo">
            <h3 class="menu__heading">Panuozzo</h3>
            <?php while (have_rows('panuozzo')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('desery')) : ?>
          <div class="menu__part" id="desery">
            <h3 class="menu__heading"><?php pll_e('Desery') ?></h3>
            <?php while (have_rows('desery')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('napoje-zimne')) : ?>
          <div class="menu__part" id="napoje-zimne">
            <h3 class="menu__heading"><?php pll_e('Napoje zimne') ?></h3>
            <?php while (have_rows('napoje-zimne')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('napoje-cieple')) : ?>
          <div class="menu__part" id="napoje-cieple">
            <h3 class="menu__heading"><?php pll_e('Napoje ciepłe') ?></h3>
            <?php while (have_rows('napoje-cieple')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('napary')) : ?>
          <div class="menu__part" id="napary">
            <h3 class="menu__heading"><?php pll_e('Napary') ?></h3>
            <?php while (have_rows('napary')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('piwa')) : ?>
          <div class="menu__part" id="piwa">
            <h3 class="menu__heading"><?php pll_e('Piwa butelkowe') ?></h3>
            <?php while (have_rows('piwa')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('shoty')) : ?>
          <div class="menu__part" id="shoty">
            <h3 class="menu__heading"><?php pll_e('Shoty') ?></h3>
            <?php while (have_rows('shoty')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('wina-musujace')) : ?>
          <div class="menu__part" id="wina-musujace">
            <h3 class="menu__heading"><?php pll_e('Wina musujące') ?></h3>
            <?php while (have_rows('wina-musujace')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('wina-biale')) : ?>
          <div class="menu__part" id="wina-biale">
            <h3 class="menu__heading"><?php pll_e('Wina białe') ?></h3>
            <?php while (have_rows('wina-biale')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('wina-czerwone')) : ?>
          <div class="menu__part" id="wina-czerwone">
            <h3 class="menu__heading"><?php pll_e('Wina czerwone') ?></h3>
            <?php while (have_rows('wina-czerwone')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if (get_field('drinki')) : ?>
          <div class="menu__part" id="drinki">
            <h3 class="menu__heading"><?php pll_e('Drinki') ?></h3>
            <?php while (have_rows('drinki')) : the_row(); ?>
              <div class="menu__item">
                <div class="menu__item-top">
                  <div class="menu__name"><?php the_sub_field('nazwa'); ?></div>
                  <div class="menu__price"><?php the_sub_field('cena'); ?></div>
                </div>
                <div class="menu__ingredients">
                  <?php while (have_rows('dodatki')) : the_row(); ?>
                    <span class="menu__ingredient"><?php the_sub_field('dodatek'); ?></span>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>


      </div>
    </div>
  </div>
</section>