<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <title><?= wp_title() ?> | Nicole Amy Visuals</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Overlay Nav -->
<div id="mobile-nav" class="overlay">
    <div class="overlay-content">
        <?php wp_nav_menu(array('theme_location' => 'main_navigation')) ?>
    </div>
    <div class="social-icons">
        <?php get_template_part( 'partials/social-links' ) ?>
    </div>
</div>

<div id="main">

<header class="no-margin">
    <div class="container">
        <div class="flex-grid">
            <div class="col nav-toggle-col">
                <a id="open-nav" href="#"><span></span></a>
            </div>
            <div class="col">
                <div class="logo-container">
                    <a href="/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/public/images/logo.png">
                    </a>
                </div>
            </div>
            <div class="col search-col">
                <i class="fas fa-search" id="search-bar-toggle"></i>
            </div>
        </div>
    </div>
</header>

<section id="search-container" class="no-margin">
    <div class="container">
        <?php get_template_part( 'partials/search-form' ) ?>
    </div>
</section>



