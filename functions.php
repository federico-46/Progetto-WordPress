<?php

/*  Include Styles and script
/* ------------------------------------ */
if (!function_exists('herofed_styles_scripts')) {

    function herofed_style_scripts()
    {
        wp_enqueue_style('BS-style', get_template_directory_uri() . '/bootstrap-5.0.1/css/bootstrap.min.css');
        wp_enqueue_style('herofed-style', get_template_directory_uri() . '/style.css');
        //wp_enqueue_script('jquery');
        wp_enqueue_script('BS-scripts', get_template_directory_uri() . '/bootstrap-5.0.1/js/bootstrap.bundle.min.js', array('jquery'), '', true);
        wp_enqueue_script('herofed-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
    }
}
add_action('wp_enqueue_scripts', 'herofed_style_scripts');


if (!function_exists('herofed_after_setup_theme')) {

    function herofed_after_setup_theme()
    {

        global $content_width;

        if (!isset($content_width)) $content_width = 1110;

        add_theme_support('title_tag');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');


        add_image_size(
            'herofed_large_thumbnail',
            1110,
            400,
            true
        );

        add_image_size(
            'herofed_small_thumbnail',
            730,
            263,
            true
        );

        register_nav_menus(array(
            'main-menu' => esc_html('Main menu', 'herofed'),
            'footer-menu' => esc_html('Footer menu', 'herofed')
        ));







        wp_enqueue_script(
            'herofed-navigation',
            get_template_directory_uri() . '/js/navigation.js',
            FALSE,
            '1.0',
            TRUE
        );
    }
    add_action('after_setup_theme', 'herofed_after_setup_theme');
}
