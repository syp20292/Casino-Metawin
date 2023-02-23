<?php
require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
require_once get_template_directory().'/inc/casino_activation.php';
require_once get_template_directory().'/inc/casino-demo-import.php';
require_once get_template_directory().'/inc/casino-acf-data.php';



    function casino_setup_theme(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', array('post', 'bgimage', 'about', 'why', 'casino_table'));
        load_theme_textdomain('casino', get_template_directory_uri().'/languages');

        //register a new menu
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'casino')

        ));
    }

    add_action('after_setup_theme', 'casino_setup_theme'); 



    function load_stylesheets(){

        wp_register_style('desktop', get_template_directory_uri() . '/css/desktop.css', array(), 1, 'all');
        wp_enqueue_style('desktop');

        wp_register_style('mobile', get_template_directory_uri() . '/css/mobile.css', array(), 1, 'all');
        wp_enqueue_style('mobile');

        wp_register_style('styleguide', get_template_directory_uri() . '/css/styleguide.css', array(), 1, 'all');
        wp_enqueue_style('styleguide');

        wp_register_style('globals', get_template_directory_uri() . '/css/globals.css', array(), 1, 'all');
        wp_enqueue_style('globals');

        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
        wp_enqueue_style('style');
    }

    add_action('wp_enqueue_scripts', 'load_stylesheets');


    function loadjs(){

        // wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
        // wp_enqueue_script('custom');
    }

    // //custom post types
    // function casiono_custom_post(){
    //     //custom poat for BGimage/s
    //     register_post_type('BGimage', array(
    //         'labels' => array(
    //             'name' => __('Hero', 'casino'),
    //             'singular_name' => __('Hero', 'casino')
    //         ),
    //         'public' => true,
    //         'show_ui' => true,
    //         'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    //         'show_in_rest' => true
    //     ));

    //     //About Us custom types
    //     register_post_type('about', array(
    //         'labels' => array(
    //             'name' => __('About', 'casino'),
    //             'singular_name' => __('About', 'casino')
    //         ),
    //         'public' => true,
    //         'show_ui' => true,
    //         'supports' => array('subtitle', 'title', 'editor', 'thumbnail', 'custom-fields'),
    //         'show_in_rest' => true
    //     ));


    //     //Why Us custom types
    //     register_post_type('why', array(
    //         'labels' => array(
    //             'name' => __('Why us', 'casino'),
    //             'singular_name' => __('Why', 'casino')
    //         ),
    //         'public' => true,
    //         'show_ui' => true,
    //         'supports' => array('subtitle', 'title', 'editor', 'thumbnail', 'custom-fields'),
    //         'show_in_rest' => true
    //     ));

    //     //Casino Table custom types
    //     register_post_type('casino_table', array(
    //         'labels' => array(
    //             'name' => __('Casino Table', 'casino'),
    //             'singular_name' => __('Casino Table', 'casino')
    //         ),
    //         'public' => true,
    //         'show_ui' => true,
    //         'supports' => array('subtitle', 'title', 'editor', 'thumbnail', 'custom-fields'),
    //         'show_in_rest' => true
    //     ));
    // }

    // add_action('init', 'casiono_custom_post');


    if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Casino General Settings', 'casino',
        'menu_title'    => 'Casino Settings', 'casino',
        'menu_slug'     => 'casino-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Header Settings', 'casino',
        'menu_title'    => 'Header', 'casino',
        'parent_slug'   => 'casino-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'About Settings', 'casino',
        'menu_title'    => 'About', 'casino',
        'parent_slug'   => 'casino-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Why Us Settings', 'casino',
        'menu_title'    => 'Why Us', 'casino',
        'parent_slug'   => 'casino-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Settings', 'casino',
        'menu_title'    => 'Footer', 'casino',
        'parent_slug'   => 'casino-general-settings',
    ));
    
}

?>


