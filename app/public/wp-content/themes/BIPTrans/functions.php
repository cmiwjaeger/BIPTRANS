<?php


function bip_scripts()
{
    wp_enqueue_style('bootstrap', get_theme_file_uri() . '/styles/bootstrap.min.css', NULL, microtime(), "all");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), "all");
    wp_enqueue_script('jquery-3.2.1', get_theme_file_uri('/js/jquery-3.2.1.slim.min.js'), NULL, microtime(), true);
    wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), NULL, microtime(), true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), NULL, microtime(), true);
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'bip_scripts');


function bip_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'bip_init');



function bip_custom_post_type()
{
    register_post_type(
        'service',
        array(
            'menu_position' => 5,
            'rewrite' => array('slug' => 'service'),
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new_item' => 'Add New Service',
                'edit_item' => 'Edit Service'
            ),
            'menu_icon' => 'dashicons-slides',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', "excerpt", 'comments'
            )

        )
    );
}

add_action('init', 'bip_custom_post_type');



function bip_footer_callout($wp_customize)
{
    $wp_customize->add_section('bip-footer-callout-section', array(
        'title' => "Footer Callout"
    ));


    // footer copyright
    $wp_customize->add_setting('bip-footer-callout-reversed', array(
        'default' => "Example Footer cs"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bip-footer-callout-reversed-control', array(
        'label' => 'Footer Ribbon',
        'section' => 'bip-footer-callout-section',
        'settings' => 'bip-footer-callout-reversed'
    )));

    // Costumer Service 
    $wp_customize->add_setting('bip-footer-callout-cs', array(
        'default' => "Customer Care"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bip-footer-callout-cs-control', array(
        'label' => 'Customer Care',
        'section' => 'bip-footer-callout-section',
        'settings' => 'bip-footer-callout-cs'
    )));

    // Email
    $wp_customize->add_setting('bip-footer-callout-email', array(
        'default' => "E-mail"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bip-footer-callout-email-control', array(
        'label' => 'E-mail',
        'section' => 'bip-footer-callout-section',
        'settings' => 'bip-footer-callout-email'
    )));

    // Operations
    $wp_customize->add_setting('bip-footer-callout-operation', array(
        'default' => "Operations"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bip-footer-callout-operation-control', array(
        'label' => 'Operations',
        'section' => 'bip-footer-callout-section',
        'settings' => 'bip-footer-callout-operation'
    )));

    // Telephone
    $wp_customize->add_setting('bip-footer-callout-telephone', array(
        'default' => "Telephone"
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'bip-footer-callout-telephone-control', array(
        'label' => 'Telephone',
        'section' => 'bip-footer-callout-section',
        'settings' => 'bip-footer-callout-telephone'
    )));
}
add_action('customize_register', "bip_footer_callout");
