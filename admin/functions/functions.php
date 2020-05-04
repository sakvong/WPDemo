<?php

// Metaboxes
require_once( get_template_directory().'/components/metaboxes/metaboxes.php');

add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

// Register custom post types
add_action('init', 'newave_init');
function newave_init() {

	global $global_theme_options;

    $custom_slug = null;

    if( isset($global_theme_options['portfolio_rewrite_slug']) && !empty($global_theme_options['portfolio_rewrite_slug']) ) $custom_slug = $global_theme_options['portfolio_rewrite_slug'];

	register_post_type(
		'newave_portfolio',
		array(
			'labels' => array(
				'name' => 'Portfolio',
				'singular_name' => 'Portfolio'
			),
            'rewrite' => array('slug' => $custom_slug, 'with_front' => false),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail','comments'),
			'can_export' => true,
		)
	);

	register_taxonomy('portfolio_category', 'newave_portfolio', array('hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true));

	register_post_type(
        'newave_main_slider',
        array(
           'labels' => array(
                    'name' => __('Main Slider', 'newave_theme'),
                    'singular_name' => __('Main Slider', 'newave_theme'),
                    'all_items' => __('Slides', 'newave_theme'),
                    'add_new' => __( 'Add New', 'newave_theme' ),
                    'add_new_item' => __( 'Add New Slide', 'newave_theme' ),
                    'edit_item' => __( 'Edit Slide', 'newave_theme' ),
                    'new_item' => __( 'New Slide', 'newave_theme' ),
                    'view_item' => __( 'View Slide', 'newave_theme' ),
                    'search_items' => __( 'Search Slides', 'newave_theme' ),
                    'not_found' => __( 'No slides found', 'newave_theme' ),
                    'not_found_in_trash' => __( 'No slides found in Trash', 'newave_theme' ),
                    'menu_name' => __( 'Main Slider', 'newave_theme' ),
				),
            'public'             => false,
            'publicly_queryable' => false,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_icon'          => 'dashicons-images-alt',
            'supports' => array('title', 'editor'),
        )
    );
}

// refresh rewrite rules for custom portfolio slugs
add_action( 'after_switch_theme', 'rewrite_flush_slug' );
function rewrite_flush_slug() {

    flush_rewrite_rules();
}

?>