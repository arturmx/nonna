<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <title>Pizzeria Nonna</title>
    <meta name="description" content="Wierzymy, że dobre samopoczucie zaczyna się od dobrego jedzenia.">
    <meta name="keywords" content="pizza, warszawa, pizzeria, neapolitańska">
    <meta property="og:title" content="Pizzeria Nonna" />
    <meta property="og:description" content="Wierzymy, że dobre samopoczucie zaczyna się od dobrego jedzenia." />
    <meta property="og:image" content="https://nonna.com.pl/wp-content/uploads/2020/03/Nonna_Header.jpg" />
    <meta property="og:url" content="https://nonna.com.pl" />
    <meta property="og:type" content="website" />
    <?php wp_head(); ?>
    <style>
        @media (max-width: 767px) {
            html {
                margin-top: 0 !important
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <div class="page__wrapper">
        <header class="header">
            <div class="container">
                <div class="header__wrapper">
                    <a class="header__logo" href="<?php home_url(); ?>"><?php get_template_part('./img/svg/logo.svg'); ?></a>
                    <div class="header__menu">
                        <?php get_template_part('./template-parts/nav'); ?>
                    </div>
                    <div class="header__social">
                        <?php get_template_part('./template-parts/social'); ?>
                    </div>
                </div>
            </div>
        </header>