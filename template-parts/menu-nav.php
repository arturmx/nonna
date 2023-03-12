<aside class="menu-nav">
  <h3 class="menu-nav__heading"><?php pll_e('Nasze menu') ?></h3>
  <ul class="menu-nav__list">
    <li class="menu-nav__item"><a href="#pizze-czerwone"><?php pll_e('Pizze czerwone') ?></a></li>
    <li class="menu-nav__item"><a href="#pizze-biale"><?php pll_e('Pizze białe') ?></a></li>
    <li class="menu-nav__item"><a href="#dodatki"><?php pll_e('Dodatki do pizzy') ?></a></li>
    <li class="menu-nav__item"><a href="#przystawki"><?php pll_e('Przystawki') ?></a></li>
    <?php if (get_field('salaty')) : ?>
    <li class="menu-nav__item"><a href="#salaty"><?php pll_e('Sałaty') ?></a></li>
    <?php endif; ?>
    <li class="menu-nav__item"><a href="#desery"><?php pll_e('Desery') ?></a></li>
  </ul>
</aside>