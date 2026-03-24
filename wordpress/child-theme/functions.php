<?php
/**
 * FLOH Cornhole Child Theme Functions
 */

// Enqueue parent and child theme styles
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('floh-child-style', get_stylesheet_uri(), ['astra-parent-style']);
});

// Add body class on our homepage template
add_filter('body_class', function($classes) {
    if (is_page_template('page-home.php')) {
        $classes[] = 'floh-template';
    }
    return $classes;
});
