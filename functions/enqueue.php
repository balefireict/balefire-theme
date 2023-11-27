<?php

// Load HTML5 Blank scripts (header.php)
function balefire_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_script('balefireblankscripts', get_template_directory_uri() . './dist/app.min.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('balefireblankscripts'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function balefire_styles()
{
    // Check if we are in a development environment
    if (defined('WP_ENV') && WP_ENV === 'development') {
        // Development: Load unminified CSS from the src directory
        wp_register_style('balefireblank-dev', get_template_directory_uri() . '/src/css/app.css', array(), '1.0', 'all');
        wp_enqueue_style('balefireblank-dev'); // Enqueue it!
    } else {
        // Production (or any other environment): Load minified CSS from the dist directory
        wp_register_style('balefireblank', get_template_directory_uri() . '/dist/app.min.css', array(), '1.0', 'all');
        wp_enqueue_style('balefireblank'); // Enqueue it!
    }
}