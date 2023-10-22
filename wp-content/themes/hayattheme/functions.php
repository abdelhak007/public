<?php

// Theme Support
add_theme_support('post-thumbnails');


/* Load CSS Stylsheets */
function hayat_enqueue_stylesheets(){

    wp_enqueue_style('hayat_stylesheet', get_stylesheet_uri());
    wp_style_add_data('hayat_stylesheet', 'rtl', 'replace');

}
add_action('wp_enqueue_scripts','hayat_enqueue_stylesheets');

/* Register the Menus */

function hayat_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'hayat'), // 'Main Menu' is the name that will appear in the WordPress admin
        // You can register additional menus by adding more items to the array
        'top-menu' => __('Top Menu', 'hayat'),
    ));
}

add_action('init', 'hayat_register_menus');

/* END Menus */

/* Register Footer Widgets */

function hayat_register_widget() {
    // Register the left footer widget
    register_sidebar(array(
        'name'          => esc_html__('Footer Left', 'hayat-theme'),
        'id'            => 'footer-widget-left',
        'description'   => esc_html__('Widgets for the left footer widget area.', 'hayat-theme'),
        'before_widget' => '<div id="%1$s" class=" widget hayat-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    // Register the Middle footer widget
    register_sidebar(array(
        'name'          => esc_html__('Footer Middle', 'hayat-theme'),
        'id'            => 'footer-widget-middle',
        'description'   => esc_html__('Widgets for the Middle footer widget area.', 'hayat-theme'),
        'before_widget' => '<div id="%1$s" class=" widget hayat-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    // Register the right footer widget
    register_sidebar(array(
        'name'          => esc_html__('Footer Right', 'hayat-theme'),
        'id'            => 'footer-widget-right',
        'description'   => esc_html__('Widgets for the right footer widget area.', 'hayat-theme'),
        'before_widget' => '<div id="%1$s" class=" widget hayat-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    // Register the single post sidebar
    register_sidebar(array(
        'name'          => esc_html__('Single Post Sidebar', 'hayat-theme'),
        'id'            => 'single-post-sidebar',
        'description'   => esc_html__('Widgets for the single post sidebar area.', 'hayat-theme'),
        'before_widget' => '<div id="%1$s" class=" widget card hayat-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}

add_action('widgets_init', 'hayat_register_widget');

/* END Footer Widgets*/

/* Limite the excrept */
function custom_excerpt_length($length) {
    return 20; // Change the number to limit the excerpt to your desired length (in words).
}
add_filter('excerpt_length', 'custom_excerpt_length');


/* Register the widgets */

class Custom_Options_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'custom_options_widget',
            'حياة | تصنيفات و وسوم',
            array(
                'description' => 'A widget that displays taxonomies with options for title, subtitle, and Font Awesome icon.'
            )
        );
    }

  }

