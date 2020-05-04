<?php

if ( function_exists( 'vc_map' ) ) {
	
vc_map( array( 
'name' => 'Accordion',
'base' => 'accordion',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'accordion_item'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Accordion', 'newave_theme'),
'admin_enqueue_css' => array( get_template_directory_uri() . '/include/vc-extend.css' ),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_accordion extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Accordion Item',
'base' => 'accordion_item',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Accordion Item', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => 'Accordion Title',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Accordion Content Here', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_accordion_item extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Alert Box',
'base' => 'alert',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Alert Box', 'newave_theme'),
'params' => array(
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Color', 'newave_theme'),
'description' => esc_html__('Background color for the alert box', 'newave_theme'),
'param_name' => 'color',
'value' => array( 'red', 'blue', 'yellow', 'green', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('YOUR MESSAGE HERE', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Button',
'base' => 'button',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Button', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Button Link', 'newave_theme'),
'description' => esc_html__('URL for the button', 'newave_theme'),
'param_name' => 'link',
'value' => 'http://',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Target Window', 'newave_theme'),
'description' => esc_html__('Button link opens in a new or current window', 'newave_theme'),
'param_name' => 'target',
'value' => array( '_blank', '_self', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Button Shape', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'shape',
'value' => array( 'square', 'rounded', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Button Size', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'size',
'value' => array( 'small', 'medium', 'large', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Outlined', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'outline',
'value' => array( 'yes', 'no', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Button Color', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'color',
'value' => array( 'black', 'white', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('In-page scrolling', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'move',
'value' => array( 'no', 'yes', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('External', 'newave_theme'),
'description' => esc_html__('Link to external page', 'newave_theme'),
'param_name' => 'external',
'value' => array( 'no', 'yes', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Button Caption', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Counter Box',
'base' => 'counter',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Counter Box', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Icon', 'newave_theme'),
'description' => esc_html__('Icon displayed within counter box', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Counts', 'newave_theme'),
'description' => esc_html__('Number of counts', 'newave_theme'),
'param_name' => 'counts',
'value' => '100',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('TITLE GOES HERE', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Big Counter Box',
'base' => 'big_counter',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Big Counter Box', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Counts', 'newave_theme'),
'description' => esc_html__('Number of counts', 'newave_theme'),
'param_name' => 'counts',
'value' => '100',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('TITLE GOES HERE', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Radial Counter Box',
'base' => 'radial_counter',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Radial Counter Box', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Counts', 'newave_theme'),
'description' => esc_html__('Number of counts', 'newave_theme'),
'param_name' => 'counts',
'value' => '100',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('DESCRIPTION GOES HERE', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Client Testimonials',
'base' => 'testimonials',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'testimonial'),
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Client Testimonials', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_testimonials extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Testimonial',
'base' => 'testimonial',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Testimonial', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Client Logo', 'newave_theme'),
'description' => esc_html__('URL or path to logo file', 'newave_theme'),
'param_name' => 'logo',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Client Name', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'name',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Client Company', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'company',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Client Testimonial goes here', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_testimonial extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Contact Box',
'base' => 'contact_details',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Contact Box', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Company Phone', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'company_phone',
'value' => '0753-016-572',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Company Email', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'company_email',
'value' => 'office@newave.com',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Company Address', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'company_address',
'value' => '77a First Street, London, United Kingdom',
),
)
) );


vc_map( array( 
'name' => 'Contact Details Slider',
'base' => 'contact_details_slider',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'contact_details_info_slides'),
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Contact Details Slider', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_contact_details_slider extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Contact Details Info Slides',
'base' => 'contact_details_info_slides',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'contact_details_info_slide'),
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Contact Details Slider', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_contact_details_info_slides extends WPBakeryShortCodesContainer {}}

vc_map( array( 
'name' => 'Contact Details Info Slide',
'base' => 'contact_details_info_slide',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Contact Info', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Icon', 'newave_theme'),
'description' => esc_html__('Icon for this service', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => 'Contact Info Title',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Contact Info Here', 'newave_theme'),
),
)
) );

if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_contact_details_info_slide extends WPBakeryShortCode {}}



vc_map( array( 
'name' => 'Parallax Quote',
'base' => 'parallax_quote',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Parallax Quote', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Author', 'newave_theme'),
'description' => esc_html__('Author of the quote', 'newave_theme'),
'param_name' => 'author',
'value' => 'John Doe',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('The Quote Here', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Parallax Link',
'base' => 'parallax_link',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Parallax Link', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Link URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url',
'value' => 'http://',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('External Link', 'newave_theme'),
'description' => esc_html__('If the link points to an external page or an anchor in the current page', 'newave_theme'),
'param_name' => 'external',
'value' => array( 'yes', 'no', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('The Content Here', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Recent Posts',
'base' => 'recent_posts',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Recent Posts', 'newave_theme'),
'show_settings_on_create' => true,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Posts', 'newave_theme'),
'description' => esc_html__('Number of posts to display', 'newave_theme'),
'param_name' => 'posts',
'value' => '5',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Post Title Length', 'newave_theme'),
'description' => esc_html__('The length of the post title', 'newave_theme'),
'param_name' => 'post_title_length',
'value' => '40',
),
)
) );

vc_map( array( 
'name' => 'Posts Carousel',
'base' => 'posts_carousel',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Recent Posts in Carousel', 'newave_theme'),
'show_settings_on_create' => true,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Posts', 'newave_theme'),
'description' => esc_html__('Number of posts to display', 'newave_theme'),
'param_name' => 'posts',
'value' => '5',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Post Title Length', 'newave_theme'),
'description' => esc_html__('The length of the post title', 'newave_theme'),
'param_name' => 'post_title_length',
'value' => '40',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Post Content Length', 'newave_theme'),
'description' => esc_html__('The length of the post content', 'newave_theme'),
'param_name' => 'excerpt',
'value' => '80',
),
)
) );


vc_map( array( 
'name' => 'Show Three Blog_Posts',
'base' => 'show_three_blog_posts',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Show Three Blog_Posts', 'newave_theme'),
'show_settings_on_create' => true,
'params' => array(
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Order', 'newave_theme'),
'description' => esc_html__('Order of the blog posts being displayed', 'newave_theme'),
'param_name' => 'order',
'value' => array( 'latest', 'most_commented', ),
),
)
) );


vc_map( array( 
'name' => 'Tweet Box',
'base' => 'parallax_twitter',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Twitter Parallax Box', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Tweets Count', 'newave_theme'),
'description' => esc_html__('Number of tweets to display', 'newave_theme'),
'param_name' => 'count',
'value' => '5',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Twitter username', 'newave_theme'),
'description' => esc_html__('Twitter account name', 'newave_theme'),
'param_name' => 'username',
'value' => '',
),
)
) );


vc_map( array( 
'name' => 'Service Box',
'base' => 'service',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Service Box', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Icon', 'newave_theme'),
'description' => esc_html__('Icon displayed within service box', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Service Title', 'newave_theme'),
'description' => esc_html__('Title of the service', 'newave_theme'),
'param_name' => 'title',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Content position', 'newave_theme'),
'description' => esc_html__('Position of the content within the layout', 'newave_theme'),
'param_name' => 'position',
'value' => array( 'left', 'right', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('FX effect', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'fx_effect',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Service Description', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Services Box - Carousel',
'base' => 'services_box_carousel',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'service_box_carousel_item'),
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Services Box', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_services_box_carousel extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Service',
'base' => 'service_box_carousel_item',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Service', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Icon', 'newave_theme'),
'description' => esc_html__('Icon for this service', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => 'Service Title',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Button Text', 'newave_theme'),
'description' => esc_html__('Caption of the button displayed underneath service description', 'newave_theme'),
'param_name' => 'button_text',
'value' => 'Details',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Service URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url',
'value' => '#',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Service Description Here', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_service_box_carousel_item extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Call To Action Box',
'base' => 'tagline_box',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Tagline Box', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Button Caption', 'newave_theme'),
'description' => esc_html__('The caption of the tagline button', 'newave_theme'),
'param_name' => 'button',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Link', 'newave_theme'),
'description' => esc_html__('URL of the tagline', 'newave_theme'),
'param_name' => 'link',
'value' => 'http://',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Target Action', 'newave_theme'),
'description' => esc_html__('Open the link in a new page or same page', 'newave_theme'),
'param_name' => 'target',
'value' => array( '_blank', '_self', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Tagline description', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Technologies Box',
'base' => 'technologies',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'technology'),
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Technologies', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_technologies extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Technology Box',
'base' => 'technology',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Technology', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Icon', 'newave_theme'),
'description' => esc_html__('Icon for this technology', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => 'Technology Title',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('FX effect', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'fx_effect',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Technology Description Here', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_technology extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Image Group',
'base' => 'image_group',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Image Group', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Left Image URL', 'newave_theme'),
'description' => esc_html__('The URL or path of the left image', 'newave_theme'),
'param_name' => 'left_image_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Left Image FX', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'left_image_fx',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Center Image URL', 'newave_theme'),
'description' => esc_html__('The URL or path of the center image', 'newave_theme'),
'param_name' => 'center_image_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Center Image FX', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'center_image_fx',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Right Image URL', 'newave_theme'),
'description' => esc_html__('The URL or path of the right image', 'newave_theme'),
'param_name' => 'right_image_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Right Image FX', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'right_image_fx',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
)
) );


vc_map( array( 
'name' => 'List Styles',
'base' => 'list_styles',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'list_style'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('List Styles', 'newave_theme'),
'show_settings_on_create' => true,
'content_element' => true,
'params' => array(
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('List Size', 'newave_theme'),
'description' => esc_html__('Size of the list items', 'newave_theme'),
'param_name' => 'size',
'value' => array( 'normal', 'big', ),
),
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_list_styles extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'List Item',
'base' => 'list_style',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('List Item', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Icon', 'newave_theme'),
'description' => esc_html__('Icon for this list item', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Nullam dignissim convallis', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_list_style extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Progress Bars',
'base' => 'progress',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'progress_bar'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Progress Bars', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_progress extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Progress Bar',
'base' => 'progress_bar',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Progress Bar', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Percentage', 'newave_theme'),
'description' => esc_html__('Progress Bar Percentage', 'newave_theme'),
'param_name' => 'percentage',
'value' => '100',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Web Design', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_progress_bar extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Social Sharing Links',
'base' => 'social_icons',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'social_icon'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Social Sharing Links', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_social_icons extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Social Sharing Link',
'base' => 'social_icon',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Social Sharing Link', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Link URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Link Target Window', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'target',
'value' => array( '_blank', '_self', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link Type', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social',
'value' => array( 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_social_icon extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Team Members',
'base' => 'team',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'team_member'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Team Members', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_team extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Team Member',
'base' => 'team_member',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Team Member', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Team Member Name', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'name',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Job Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Picture', 'newave_theme'),
'description' => esc_html__('URL or path to team member\'s picture', 'newave_theme'),
'param_name' => 'picture',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('FX effect', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'fx_effect',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 1', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link1',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 1 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link1_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 2', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link2',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 2 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link2_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 3', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link3',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 3 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link3_url',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Team member description', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_team_member extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Team Members - Carousel',
'base' => 'team_carousel',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'team_member_carousel'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Team Members', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_team_carousel extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Team Member - Carousel',
'base' => 'team_member_carousel',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Team Member', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Team Member Name', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'name',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Job Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Picture', 'newave_theme'),
'description' => esc_html__('URL or path to team member\'s picture', 'newave_theme'),
'param_name' => 'picture',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 1', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link1',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 1 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link1_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 2', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link2',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 2 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link2_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 3', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link3',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 3 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link3_url',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Team member description', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_team_member_carousel extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Team Members - Modern',
'base' => 'team_modern',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'team_member_modern'),
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Team Members', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_team_modern extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Team Member - Modern',
'base' => 'team_member_modern',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Team Member', 'newave_theme'),
'show_settings_on_create' => true,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Team Member Name', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'name',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Job Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Picture', 'newave_theme'),
'description' => esc_html__('URL or path to team member\'s picture', 'newave_theme'),
'param_name' => 'picture',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 1', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link1',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 1 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link1_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 2', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link2',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 2 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link2_url',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Social Link 3', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link3',
'value' => array( '', 'facebook', 'twitter', 'linkedin', 'behance', 'deviantart', 'dribble', 'flickr', 'google', 'lastfm', 'picasa', 'pinterest', 'rss', 'skype', 'stumble', 'vimeo', 'youtube', 'instagram', ),
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Social Link 3 URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'social_link3_url',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Team member description', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_team_member_modern extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Youtube Video',
'base' => 'youtube',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Media', 'newave_theme'),
'description' => esc_html__('Youtube Video', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Video ID', 'newave_theme'),
'description' => esc_html__('Enter video ID (eg. Wq4Y7ztznKc)', 'newave_theme'),
'param_name' => 'id',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Video Width', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'width',
'value' => '600',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Video Height', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'height',
'value' => '350',
),
)
) );


vc_map( array( 
'name' => 'Vimeo Video',
'base' => 'vimeo',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Media', 'newave_theme'),
'description' => esc_html__('Vimeo Video', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Video ID', 'newave_theme'),
'description' => esc_html__('Enter video ID (eg. 10145153)', 'newave_theme'),
'param_name' => 'id',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Video Width', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'width',
'value' => '600',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Video Height', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'height',
'value' => '350',
),
)
) );


vc_map( array( 
'name' => 'Toggle',
'base' => 'toggle',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Toggle', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'title',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Toggle Content Here', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Dropcap',
'base' => 'dropcap',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Typo Elements', 'newave_theme'),
'description' => esc_html__('Dropcap', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Dropcap Letter', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'letter',
'value' => 'A',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Dropcap Shape', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'shape',
'value' => array( 'normal', 'round', 'square', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Content With Dropcap', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Title',
'base' => 'title',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Typo Elements', 'newave_theme'),
'description' => esc_html__('Title', 'newave_theme'),
'params' => array(
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Title Size', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'size',
'value' => array( '1', '2', '3', '4', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Title', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Small Title',
'base' => 'small_title',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Typo Elements', 'newave_theme'),
'description' => esc_html__('Small Title', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Header', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'header_text',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Content goes here', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Project Section',
'base' => 'project_section',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project Section', 'newave_theme'),
'params' => array(
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Background Color', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'color',
'value' => array( 'light-grey-background', 'white-background', 'dark-background', 'primary-color-background', ),
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Container type', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'container',
'value' => array( 'none', 'normal', 'without-padding', 'small-width', ),
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Content goes here', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Project URL',
'base' => 'project_url',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project URL', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('URL of the project', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url',
'value' => 'http://',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Website name', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url_text',
'value' => 'www.newave.com',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('"Go to website" text', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url_goto',
'value' => 'go to website',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('Target Window', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'target',
'value' => array( '_blank', '_self', ),
),
)
) );


vc_map( array( 
'name' => 'Project Title',
'base' => 'project_title',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project Title', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Title', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'project_title',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Project description goes here', 'newave_theme'),
),
)
) );


vc_map( array( 
'name' => 'Single Image',
'base' => 'single_image',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Media', 'newave_theme'),
'description' => esc_html__('Project Single Image', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Image URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'img_url',
'value' => 'http://',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Image ALT', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'img_alt',
'value' => '',
),
array(
'type' => 'dropdown',
'holder' => 'div',
'heading' => esc_html__('FX effect', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'fx_effect',
'value' => array( 'fade', 'fade-from-left', 'fade-from-right', 'none', ),
),
)
) );


vc_map( array( 
'name' => 'Project Slider',
'base' => 'project_slider',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'project_slide'),
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project Slider', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_project_slider extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Project Slide',
'base' => 'project_slide',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project Slide', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Slider Image URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'img_url',
'value' => '',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Slider Image ALT', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'img_alt',
'value' => '',
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_project_slide extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Project Options',
'base' => 'project_options',
'icon' => 'icon-vc-clapat-newave',
'as_parent' => array('only' => 'project_option'),
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project Options', 'newave_theme'),
'show_settings_on_create' => false,
'content_element' => true,
'params' => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Placeholder Parameter", 'newave_theme'),
            "param_name" => "team_placeholder_param",
			"value" => "Placeholder Container",
            "description" => __("This is a placeholder parameter of the team members container. It has no role or effect. Visual Composer does not display shortcodes without parameters.", 'newave_theme')
        )
),
'js_view' => 'VcColumnView'
) );


if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {class WPBakeryShortCode_project_options extends WPBakeryShortCodesContainer {}}


vc_map( array( 
'name' => 'Project Option',
'base' => 'project_option',
'icon' => 'icon-vc-clapat-newave',
'is_container' => 'true',
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Project Option', 'newave_theme'),
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Project Option Icon', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'icon',
'value' => '',
),
array(
'type' => 'textarea_html',
'holder' => 'div',
'heading' => esc_html__('Content', 'newave_theme'),
'param_name' => 'content',
'value' => esc_html__('Project option goes here', 'newave_theme'),
),
)
) );


if ( class_exists( 'WPBakeryShortCode' ) ) {class WPBakeryShortCode_project_option extends WPBakeryShortCode {}}


vc_map( array( 
'name' => 'Visit Project',
'base' => 'visit_project',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Portfolio', 'newave_theme'),
'description' => esc_html__('Visit Project', 'newave_theme'),
'show_settings_on_create' => false,
'params' => array(
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Project URL', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'url',
'value' => 'http://',
),
array(
'type' => 'textfield',
'holder' => 'div',
'heading' => esc_html__('Button Name', 'newave_theme'),
'description' => esc_html__('', 'newave_theme'),
'param_name' => 'button_name',
'value' => 'Visit Website',
),
)
) );

vc_map( array( 
'name' => 'Pricing Table',
'base' => 'pricing_table',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Elements', 'newave_theme'),
'description' => esc_html__('Pricing Table', 'newave_theme'),
'show_settings_on_create' => true,
'content_element' => true,
'params' => array(
	array(
	'type' => 'textarea_html',
	'holder' => 'div',
	'heading' => esc_html__('Content', 'newave_theme'),
	'param_name' => 'content',
	'value' => esc_html__('[pricing_column icon="fa fa-dashboard" title="Standard"][pricing_price price="$19.99" time="Per Month"][/pricing_price][pricing_row]5 Gb Storage[/pricing_row][pricing_row]Free Live Support[/pricing_row][pricing_row]Unlimited Users[/pricing_row][pricing_footer url=""]Sign Up[/pricing_footer][/pricing_column]', 'newave_theme'),
	),
)
) );

vc_map( array( 
'name' => 'Info Box',
'base' => 'newave_info_box',
'icon' => 'icon-vc-clapat-newave',
'category' => esc_html__('Newave - Boxes', 'newave_theme'),
'description' => esc_html__('Info Box with header icon, content and footer text', 'newave_theme'),
'show_settings_on_create' => true,
'content_element' => true,
'is_container' => true,
'params' => array(
	array(
	'type' => 'textfield',
	'holder' => 'div',
	'heading' => esc_html__('Header Icon', 'newave_theme'),
	'description' => esc_html__('The class of the FontAwesome icon displayed as header', 'newave_theme'),
	'param_name' => 'header_icon',
	'value' => 'fa fa-paper-plane',
	),
	array(
	'type' => 'textfield',
	'holder' => 'div',
	'heading' => esc_html__('Footer Text', 'newave_theme'),
	'description' => esc_html__('Text displayed underneath footer box content', 'newave_theme'),
	'param_name' => 'footer_text',
	'value' => 'Visit Website',
	),
	array(
		'type' => 'textarea_html',
		'holder' => 'div',
		'heading' => esc_html__('Content', 'newave_theme'),
		'param_name' => 'content',
		'value' => esc_html__('office@newave.com', 'newave_theme'),
	),
)
) );

}
?>