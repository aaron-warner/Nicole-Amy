<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <title><?= wp_title() ?> | Nicole Amy Visuals</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="flex-grid">
            <div class="nav-left-container col col-5">
                
            </div>
            <div class="col col-2">
                <div class="logo-container">
                    <a href="/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/public/images/logo.png">
                    </a>
                </div>
            </div>
            <div class="nav-right-container col col-5">
                
            </div>
            <span onclick="openNav()" id="mobileNavToggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
    </div>
</header>

<!-- Overlay Nav -->
<div id="mobileNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
        <?php wp_nav_menu(array('theme_location' => 'main_navigation')) ?>
    </div>

</div>