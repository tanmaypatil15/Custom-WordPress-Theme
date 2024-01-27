<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="site-branding">
            <?php
            // Display the site logo or title and tagline.
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1 class="site-title"><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) {
                    echo '<p class="site-description">' . $description . '</p>';
                }
            }
            ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <?php
            // Display the site navigation menu.
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
            ));
            ?>
        </nav><!-- .main-navigation -->
    </div><!-- .container -->
</header><!-- #masthead -->

<div id="content" class="site-content">
