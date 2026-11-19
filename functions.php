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


// =========================================================
// VIMA VIDYA STORIES - CPT AND DYNAMIC CATEGORIES
// =========================================================
// Story content is maintained in existing ACF fields:
// story_subtitle, story_image, story_content, takeaway,
// glossary_terms. Category assignment is a WordPress taxonomy,
// NOT the old ACF story_category Select field.

add_action('init', 'vimavidya_register_story_cpt');
function vimavidya_register_story_cpt() {
    register_post_type('vima_story', [
        'labels' => [
            'name'               => 'Vima Stories',
            'singular_name'      => 'Vima Story',
            'menu_name'          => 'Stories',
            'all_items'          => 'All Stories',
            'add_new'            => 'Add Story',
            'add_new_item'       => 'Add New Story',
            'edit_item'          => 'Edit Story',
            'new_item'           => 'New Story',
            'view_item'          => 'View Story',
            'search_items'       => 'Search Stories',
            'not_found'          => 'No stories found',
            'not_found_in_trash' => 'No stories found in Trash',
        ],
        'public'             => false,
        'publicly_queryable' => false,
        'exclude_from_search'=> true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-book-alt',
        'menu_position'      => 21,
        'supports'           => ['title', 'page-attributes', 'thumbnail'],
        'taxonomies'         => ['vv_story_category'],
        'has_archive'        => false,
    ]);
}

add_action('init', 'vv_register_story_categories');
function vv_register_story_categories() {
    register_taxonomy('vv_story_category', ['vima_story'], [
        'labels' => [
            'name'              => 'Story Categories',
            'singular_name'     => 'Story Category',
            'menu_name'         => 'Story Categories',
            'search_items'      => 'Search Story Categories',
            'all_items'         => 'All Story Categories',
            'parent_item'       => 'Parent Story Category',
            'parent_item_colon' => 'Parent Story Category:',
            'edit_item'         => 'Edit Story Category',
            'update_item'       => 'Update Story Category',
            'add_new_item'      => 'Add New Story Category',
            'new_item_name'     => 'New Story Category Name',
        ],
        'hierarchical'      => true,
        'public'            => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => false,
        'rewrite'           => false,
        'query_var'         => false,
    ]);
}

// Make the category column easy to see on All Stories.
add_filter('manage_edit-vima_story_sortable_columns', function($columns) {
    $columns['taxonomy-vv_story_category'] = 'vv_story_category';
    return $columns;
});

/**
 * Vima Vidya - Story Category Success Notification
 * Runs only on the Story Categories admin screen.
 */
add_action('admin_footer-edit-tags.php', 'vv_story_category_success_notice');

function vv_story_category_success_notice() {

    $screen = get_current_screen();

    if (
        !$screen ||
        $screen->taxonomy !== 'vv_story_category'
    ) {
        return;
    }
    ?>

    <script>
    jQuery(function($) {

        const $form = $('#addtag');

        if (!$form.length) return;

        // Remove any old notification.
        function removeNotice() {
            $('#vv-category-success').remove();
        }

        // Show success message.
        function showSuccess(message) {

            removeNotice();

            const $notice = $('<div>', {
                id: 'vv-category-success',
                class: 'notice notice-success is-dismissible'
            });

            $('<p>').text(message).appendTo($notice);

            $form.before($notice);

            // Stop the loading spinner.
            $form.find('.spinner')
                .removeClass('is-active');

            // Re-enable the Add button.
            $form.find(':submit')
                .prop('disabled', false);

            // Remove notice after 5 seconds.
            setTimeout(removeNotice, 5000);
        }

        // Listen for successful WordPress category AJAX.
        $(document).ajaxSuccess(function(event, xhr, settings) {

            if (!settings.url.includes('admin-ajax.php')) {
                return;
            }

            const params = new URLSearchParams(
                settings.data || ''
            );

            if (params.get('action') !== 'add-tag') {
                return;
            }

            if (
                params.get('taxonomy') !==
                'vv_story_category'
            ) {
                return;
            }

            const response = xhr.responseXML;

            if (!response) return;

            const $response = $(response);

            const notice = $response
                .find('notice')
                .first()
                .text()
                .trim();

            const termId = $response
                .find('term_id')
                .first()
                .text()
                .trim();

            // Only show success if WordPress
            // actually created the category.
            if (notice === 'Item added.' && termId) {

                showSuccess(
                    'Story Category added successfully!'
                );

                // Clear category input fields.
                $form.find('#tag-name').val('');
                $form.find('#tag-slug').val('');
                $form.find('#tag-description').val('');

                $form.find('#parent').val('-1');
            }

        });

    });
    </script>

    <?php
}


// propertyinsurance hero banner section


/**
 * VIMA VIDYA - PROPERTY INSURANCE HERO SLIDES
 */

add_action('init', function () {

    register_post_type('property_hero', [
        'labels' => [
            'name' => 'Property Hero Slides',
            'singular_name' => 'Property Hero Slide',
            'add_new_item' => 'Add New Hero Slide',
            'edit_item' => 'Edit Hero Slide',
            'all_items' => 'All Hero Slides',
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => ['title', 'thumbnail', 'page-attributes'],
        'show_in_rest' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
    ]);
});

add_action('add_meta_boxes', function () {
    add_meta_box(
        'property_hero_fields',
        'Hero Slide Content',
        'vv_property_hero_fields',
        'property_hero',
        'normal',
        'high'
    );
});

function vv_property_hero_fields($post) {

    wp_nonce_field('vv_save_hero', 'vv_hero_nonce');

    $fields = [
        'eyebrow' => 'Eyebrow',
        'tag' => 'Tag',
        'title_accent' => 'Accent Title',
        'description' => 'Description',
        'primary_label' => 'Primary Button Label',
        'primary_url' => 'Primary Button URL',
        'secondary_label' => 'Secondary Button Label',
        'secondary_url' => 'Secondary Button URL',
        'category' => 'Category',
        'category_icon' => 'Category Icon',
    ];

    foreach ($fields as $key => $label) {

        $value = get_post_meta(
            $post->ID,
            '_vv_' . $key,
            true
        );

        echo '<p>';
        echo '<label for="vv_' . esc_attr($key) . '"><strong>'
            . esc_html($label) . '</strong></label><br>';

        if ($key === 'description') {
            echo '<textarea id="vv_' . esc_attr($key) . '"
                name="vv_' . esc_attr($key) . '"
                rows="5" style="width:100%">'
                . esc_textarea($value) . '</textarea>';
        } else {
            $type = str_ends_with($key, '_url') ? 'text' : 'text';

            echo '<input type="' . esc_attr($type) . '"
                id="vv_' . esc_attr($key) . '"
                name="vv_' . esc_attr($key) . '"
                value="' . esc_attr($value) . '"
                style="width:100%">';
        }

        echo '</p>';
    }

    echo '<p><strong>Background Image:</strong> Set using Featured Image.</p>';
    echo '<p><strong>Slide Order:</strong> Set using Page Attributes → Order.</p>';
}

add_action('save_post_property_hero', function ($post_id) {

    if (
        !isset($_POST['vv_hero_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['vv_hero_nonce'])),
            'vv_save_hero'
        )
    ) {
        return;
    }

    if (
        (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) ||
        wp_is_post_revision($post_id) ||
        !current_user_can('edit_post', $post_id)
    ) {
        return;
    }

    $fields = [
        'eyebrow', 'tag', 'title_accent',
        'description', 'primary_label',
        'primary_url', 'secondary_label',
        'secondary_url', 'category',
        'category_icon'
    ];

    foreach ($fields as $field) {

        $input = 'vv_' . $field;

        if (!isset($_POST[$input])) {
            continue;
        }

        $raw = wp_unslash($_POST[$input]);

        $value = str_ends_with($field, '_url')
            ? esc_url_raw($raw)
            : ($field === 'description'
                ? sanitize_textarea_field($raw)
                : sanitize_text_field($raw));

        update_post_meta(
            $post_id,
            '_vv_' . $field,
            $value
        );
    }
});


// All FAQs page

/**
 * Vima Vidya - Dynamic Insurance FAQs
 */

add_action('init', 'vv_register_insurance_faqs');

function vv_register_insurance_faqs() {

    register_post_type('vv_faq', [
        'labels' => [
            'name'          => 'Insurance FAQs',
            'singular_name' => 'Insurance FAQ',
            'add_new_item'  => 'Add New FAQ',
            'edit_item'     => 'Edit FAQ',
            'all_items'     => 'All FAQs',
        ],
        'public'       => true,
        'show_in_rest' => true,
        'has_archive'  => false,
        'rewrite'      => [
            'slug' => 'insurance-faq'
        ],
        'menu_icon'    => 'dashicons-editor-help',
        'supports'     => [
            'title',
            'editor',
            'page-attributes',
        ],
        'taxonomies'   => [
            'vv_faq_category'
        ],
    ]);

    register_taxonomy(
        'vv_faq_category',
        ['vv_faq'],
        [
            'labels' => [
                'name'          => 'Insurance Categories',
                'singular_name' => 'Insurance Category',
                'add_new_item'  => 'Add Insurance Category',
            ],
            'hierarchical'      => true,
            'public'            => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
            'rewrite'           => [
                'slug' => 'faq-category'
            ],
        ]
    );
}

/**
 * Vima Vidya - FAQ Answer ACF Field
 */

add_action('acf/init', 'vv_register_faq_answer_field');

function vv_register_faq_answer_field() {

    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key' => 'group_vv_faq_answer',
        'title' => 'FAQ Answer',

        'fields' => [
            [
                'key' => 'field_vv_faq_answer',
                'label' => 'Answer',
                'name' => 'faq_answer',
                'type' => 'wysiwyg',
                'instructions' => 'Enter the answer to the FAQ question.',
                'required' => 1,
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
            ],
        ],

        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'vv_faq',
                ],
            ],
        ],

        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'active' => true,
    ]);
}