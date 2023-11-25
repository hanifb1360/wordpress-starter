<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <?php
            // Display the navigation menu
            wp_nav_menu(array(
                'theme_location' => 'primary-menu', // Change this to your menu location
                'menu_class' => 'main-menu',
                'container' => false,
            ));
            ?>
        </nav>
    </div>
</header>

