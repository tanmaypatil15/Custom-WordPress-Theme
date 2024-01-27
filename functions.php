<?php

function custom_wordpress_theme_enqueue_styles() {
    wp_enqueue_style('elementor-styles', get_template_directory_uri() . '/elementor-styles.css');
}
add_action('wp_enqueue_scripts', 'custom_wordpress_theme_enqueue_styles');

function white_toro_elementor_support() {
    add_theme_support('elementor');
}
add_action('after_setup_theme', 'custom_wordpress_theme_elementor_support');























?>