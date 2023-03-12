</div>
<footer class="footer" id="kontakt">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__top">
                <div class="footer__column">
                    <div class="footer__column-texts">
                        <div class="footer__heading">Nonna Pizzeria</div>
                        <div class="footer__line"><?php the_field('contact1'); ?></div>
                        <div class="footer__line">tel. <a href="tel:<?php echo str_replace(' ', '', get_field('tel')); ?>"><?php the_field('tel'); ?></a></div>
                        <a class="footer__btn" target="_blank" href="<?php the_field('map'); ?>"><?php pll_e('mapa') ?></a>
                    </div>
                </div>
                <div class="footer__column">
                    <div class="footer__column-texts">
                        <div class="footer__heading">Nonna Pizzeria Take Away</div>
                        <div class="footer__line"><?php the_field('contact2'); ?></div>
                        <div class="footer__line">tel. <a href="tel:<?php echo str_replace(' ', '', get_field('tel2')); ?>"><?php the_field('tel2'); ?></a></div>
                        <a class="footer__btn" target="_blank" href="<?php the_field('map2'); ?>"><?php pll_e('mapa') ?></a>
                    </div>
                </div>
                <div class="footer__column">
                    <div class="footer__column-texts">
                        <div class="footer__heading"><?php pll_e('kontakt') ?></div>
                        <div class="footer__line">tel. <a href="tel:<?php echo str_replace(' ', '', get_field('tel')); ?>"><?php the_field('tel'); ?></a><br />
                        tel. <a href="tel:<?php echo str_replace(' ', '', get_field('tel2')); ?>"><?php the_field('tel2'); ?></a></div>
                        <div class="footer__line">mail. <a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></div>
                    </div>
                </div>
                <div class="footer__column">
                    <div class="footer__column-texts">
                        <div class="footer__heading"><?php pll_e('godziny otwarcia') ?></div>
                        <div class="footer__line"><?php the_field('godziny1'); ?></div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-part">© Nonna</div>
                <div class="footer__bottom-part footer__bottom-part--social">
                    <?php get_template_part('./template-parts/social'); ?>
                </div>
                <div class="footer__bottom-part footer__bottom-part--copyright">
                    <?php if (get_locale() == 'en_GB') : ?>
                        Project and realization:
                    <?php else : ?>
                        <?php pll_e('Projekt i realizacja:') ?>
                    <?php endif; ?>
                    <a href="http://www.propercolors.pl" target="_blank">www.propercolors.pl</a></div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>