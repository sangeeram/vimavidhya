<?php

// =========================================================
// HIDE WORDPRESS ADMIN BAR
// =========================================================

add_filter(
    'show_admin_bar',
    '__return_false'
);


// =========================================================
// THEME SETUP
// =========================================================

function vimavidya_setup() {

    add_theme_support(
        'title-tag'
    );

    add_theme_support(
        'post-thumbnails'
    );

    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'vimavidya')
        )
    );

}

add_action(
    'after_setup_theme',
    'vimavidya_setup'
);


// =========================================================
// MAIN THEME CSS + JAVASCRIPT
// =========================================================

function vimavidya_scripts() {


    // -----------------------------------------------------
    // MAIN CSS
    // -----------------------------------------------------

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );


    // -----------------------------------------------------
    // AOS CSS
    // -----------------------------------------------------

    wp_enqueue_style(
        'aos-css',
        'https://unpkg.com/aos@2.3.4/dist/aos.css',
        array(),
        '2.3.4'
    );


    // -----------------------------------------------------
    // AOS JS
    // -----------------------------------------------------

    wp_enqueue_script(
        'aos-js',
        'https://unpkg.com/aos@2.3.4/dist/aos.js',
        array(),
        '2.3.4',
        true
    );


    // -----------------------------------------------------
    // MAIN JS
    // AOS IS A DEPENDENCY
    // -----------------------------------------------------

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('aos-js'),
        '1.0',
        true
    );


    // -----------------------------------------------------
    // ASSESSMENT
    // -----------------------------------------------------

    wp_enqueue_script(
        'assessment-js',
        get_template_directory_uri() . '/assets/js/home/assessment.js',
        array(),
        '1.0',
        true
    );


    // -----------------------------------------------------
    // GLOSSARY
    // -----------------------------------------------------

    wp_enqueue_script(
        'glossary-js',
        get_template_directory_uri() . '/assets/js/home/glossary.js',
        array(),
        '1.0',
        true
    );


    // -----------------------------------------------------
    // PILLARS
    // -----------------------------------------------------

    wp_enqueue_script(
        'pillars-js',
        get_template_directory_uri() . '/assets/js/home/pillars.js',
        array(),
        '1.0',
        true
    );

}

add_action(
    'wp_enqueue_scripts',
    'vimavidya_scripts'
);


// =========================================================
// HOME HERO SLIDER JAVASCRIPT
// =========================================================

function enqueue_hero_slider_script() {

    if ( is_front_page() ) {

        wp_enqueue_script(
            'hero-slider-js',
            get_template_directory_uri() . '/assets/js/home/hero-slider.js',
            array(),
            '1.0.0',
            true
        );

    }

}

add_action(
    'wp_enqueue_scripts',
    'enqueue_hero_slider_script'
);


// =========================================================
// FONT AWESOME
// =========================================================

function vimavidya_enqueue_footer_icons() {

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
        array(),
        '6.5.2'
    );

}

add_action(
    'wp_enqueue_scripts',
    'vimavidya_enqueue_footer_icons'
);


// =========================================================
// ABOUT PAGE JAVASCRIPT
// =========================================================

function vimavidya_about_scripts() {

    if ( is_page('about-us') ) {

        wp_enqueue_script(
            'about-js',
            get_template_directory_uri() . '/assets/js/about/about.js',
            array(),
            '1.0',
            true
        );

    }

}

add_action(
    'wp_enqueue_scripts',
    'vimavidya_about_scripts'
);


// =========================================================
// HERO SLIDES CUSTOM POST TYPE
// =========================================================

function vimavidya_register_hero_slide_cpt() {

    $labels = array(

        'name'               => 'Hero Slides',

        'singular_name'      => 'Hero Slide',

        'menu_name'          => 'Hero Slides',

        'add_new'            => 'Add New',

        'add_new_item'       => 'Add New Hero Slide',

        'edit_item'          => 'Edit Hero Slide',

        'new_item'           => 'New Hero Slide',

        'view_item'          => 'View Hero Slide',

        'search_items'       => 'Search Hero Slides',

        'not_found'          => 'No hero slides found',

        'not_found_in_trash' => 'No hero slides found in Trash',

    );


    $args = array(

        'labels' => $labels,

        'public' => false,

        'show_ui' => true,

        'show_in_menu' => true,

        'menu_position' => 5,

        'menu_icon' => 'dashicons-slides',

        'supports' => array(
            'title',
            'thumbnail'
        ),

        'show_in_rest' => true,

    );


    register_post_type(
        'hero_slide',
        $args
    );

}

add_action(
    'init',
    'vimavidya_register_hero_slide_cpt'
);

function vv_register_assessment_cpt() {

    $labels = array(
        'name'               => 'Assessments',
        'singular_name'      => 'Assessment',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Assessment',
        'edit_item'          => 'Edit Assessment',
        'new_item'           => 'New Assessment',
        'view_item'          => 'View Assessment',
        'search_items'       => 'Search Assessments',
        'not_found'          => 'No assessments found',
        'menu_name'          => 'Assessments',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-feedback',
        'supports'           => array('title', 'page-attributes'),
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'assessment'),
        'show_in_rest'       => true,
    );

    register_post_type('vv_assessment', $args);
}

add_action('init', 'vv_register_assessment_cpt');