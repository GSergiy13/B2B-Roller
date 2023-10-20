<?php
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action('wp_enqueue_scripts', 'b2b_roller_scripts');
add_action('wp_enqueue_scripts', 'load_custom_scripts');

function b2b_roller_scripts() {
    wp_enqueue_style( 'b2b_roller-style', get_stylesheet_uri() );
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10', 'all');

    wp_enqueue_script( 'b2b_roller-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), null, true);
};


function theme_register_nav_menu() {
	register_nav_menus(
        array(

            'main-menu' => __('Main Menu'),
            'footer-bottom-menu' => __('Footer Bottom Menu')
        )
    );
}

function load_custom_scripts() {
    if (is_page(164)) {
        wp_enqueue_script('muuri', 'https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js', array(), '20231012200848', true);
        wp_enqueue_script('web-animations', 'https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js', array(), '20231012200848', true);
    }
}

// require get_template_directory() . './inc/theme-setup.php';
?>