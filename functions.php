<?php
add_filter('use_block_editor_for_post', '__return_false');

function blank_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.0/TweenMax.min.js', array('jquery'));
	// wp_enqueue_script( 'scrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.js', array('jquery'));
	// wp_enqueue_script( 'AnimationGSAP', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js', array('jquery'));
	// wp_enqueue_script( 'indicators', get_template_directory_uri() . '/js/vendor/addIndicators.js', array('jquery'));
	// wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick.js', array('jquery'));
	// wp_enqueue_script( 'Magic', get_template_directory_uri() . '/js/magic.js');
	wp_enqueue_script( 'swipe', get_template_directory_uri() . '/js/vendor/swiped-events.min.js', array('jquery'));
	wp_enqueue_script( 'paralax', get_template_directory_uri() . '/js/vendor/parallax.min.js', array('jquery'));
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'blank_scripts' );

// admin panel clean
if (!(current_user_can('administrator'))) {
    function lightoffo_remove_form_admin() {
        remove_menu_page( 'tools.php' );
        remove_menu_page( 'profile.php' );
        remove_menu_page( 'edit.php?post_type=instructors' );
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
    }

    add_action('admin_menu', 'lightoffo_remove_form_admin');
 }

pll_register_string('o nas', 'o nas');
pll_register_string('kontakt', 'kontakt');
pll_register_string('Pizze czerwone', 'Pizze czerwone');
pll_register_string('Pizze białe', 'Pizze białe');
pll_register_string('Talerzyki', 'Talerzyki');
pll_register_string('Przystawki', 'Przystawki');
pll_register_string('Sałaty', 'Sałaty');
pll_register_string('Desery', 'Desery');
pll_register_string('Napoje zimne', 'Napoje zimne');
pll_register_string('Napoje ciepłe', 'Napoje ciepłe');
pll_register_string('Napary', 'Napary');
pll_register_string('Piwa butelkowe', 'Piwa butelkowe');
pll_register_string('Shoty', 'Shoty');
pll_register_string('Wina musujące', 'Wina musujące');
pll_register_string('Wina białe', 'Wina białe');
pll_register_string('Wina czerwone', 'Wina czerwone');
pll_register_string('Drinki', 'Drinki');
pll_register_string('Nasze menu', 'Nasze menu');
pll_register_string('mapa', 'mapa');
pll_register_string('godziny otwarcia', 'godziny otwarcia');
pll_register_string('Projekt i realizacja:', 'Projekt i realizacja:');