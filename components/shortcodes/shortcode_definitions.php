<?php


$newave_shortcodes = array(

    'accordion' => array(
        'name' => __('Accordion', 'newave_theme'),
        'sub_items' => array(
                                'accordion_item' => array(  'name' => __('Accordion Item', 'newave_theme'),
                                                            'attributes' => array(
                                                                                    'title' => array( 'title' => __('Title', 'newave_theme'),
                                                                                                      'desc' => '',
                                                                                                      'type' => 'text',
                                                                                                      'default' => __('Accordion Title', 'newave_theme')
                                                                                                     )
                                                                                  ),
                                                            'has_content' => true,
                                                            'default_content' => __('Accordion Content Here', 'newave_theme')
                                                         )
        ),
        'has_content' => false
    ),

    'alert' => array(
        'name' => __('Alert Box', 'newave_theme'),
        'attributes' => array(
                            'color' => array( 'title' => __('Color', 'newave_theme'),
                                              'desc' => __('Background color for the alert box', 'newave_theme'),
                                              'type' => 'select',
                                              'values' => array("red", "blue", "yellow", "green")
                                            )
                            ),
        'has_content' => true,
        'default_content' => __('YOUR MESSAGE HERE', 'newave_theme')
    ),

    'button' => array(
        'name' => __('Button', 'newave_theme'),
        'attributes' => array(
                                "link" => array(    "title" => __("Button Link", 'newave_theme'),
                                                    "desc"  => __("URL for the button", 'newave_theme'),
                                                    "type"  => "text",
                                                    "default" => "http://"
                                                ),
                                "target" => array(  "title" => __("Target Window", 'newave_theme'),
                                                    "desc" => __("Button link opens in a new or current window", 'newave_theme'),
                                                    "type" => "select",
                                                    "values" => array("_blank", "_self")
                                                ),
                                "shape" => array(   "title" => __("Button Shape", 'newave_theme'),
                                                    "desc" => "",
                                                    "type" => "select",
                                                    "values" => array("square", "rounded")
                                                ),
                                "size" => array(    "title" => __("Button Size", 'newave_theme'),
                                                    "desc" => "",
                                                    "type" => "select",
                                                    "values" => array("small", "medium", "large")
                                                ),
                                "outline" => array( "title" => __("Outlined", 'newave_theme'),
                                                    "desc" => "",
                                                    "type" => "select",
                                                    "values" => array("yes", "no")
                                                ),
                                "color" => array(   "title" => __("Button Color", 'newave_theme'),
                                                    "desc" => "",
                                                    "type" => "select",
                                                    "values" => array("black", "white")
                                                ),
								"move" => array( "title" => __("In-page scrolling", 'newave_theme'),
                                                    "desc" => "",
                                                    "type" => "select",
                                                    "values" => array("no", "yes")
                                                ),
								"external" => array( "title" => __("External", 'newave_theme'),
                                                    "desc" => __("Link to external page", 'newave_theme'),
                                                    "type" => "select",
                                                    "values" => array("no", "yes")
                                                ),						
        ),
        'has_content' => true,
        'default_content' => __('Button Caption', 'newave_theme')
    ),

    'counter' => array(
        'name' => __('Counter Box', 'newave_theme'),
        'attributes' => array(
                                "icon" => array(  "title" => __("Icon", 'newave_theme'),
                                                  "desc" => __("Icon displayed within counter box", 'newave_theme'),
                                                  "type" => "icon",
                                                  "default" => ""
                                                ),
                                "counts" => array(  "title" => __("Counts", 'newave_theme'),
                                                  "desc" => __("Number of counts", 'newave_theme'),
                                                  "type" => "text",
                                                  "default" => "100"
                                                )
        ),
        'require_icon' => true,
        'has_content' => true,
        'default_content' => __('TITLE GOES HERE', 'newave_theme')
    ),

    'big_counter' => array(
        'name' => __('Big Counter Box', 'newave_theme'),
        'attributes' => array(
            "counts" => array(  "title" => __("Counts", 'newave_theme'),
                "desc" => __("Number of counts", 'newave_theme'),
                "type" => "text",
                "default" => "100"
            )
        ),
        'has_content' => true,
        'default_content' => __('TITLE GOES HERE', 'newave_theme')
    ),

    'radial_counter' => array(
        'name' => __('Radial Counter Box', 'newave_theme'),
        'attributes' => array(
                "counts" => array(  "title" => __("Counts", 'newave_theme'),
                    "desc" => __("Number of counts", 'newave_theme'),
                    "type" => "text",
                    "default" => "100"
                ),
                "title" => array(  "title" => __("Title", 'newave_theme'),
                    "desc" => "",
                    "type" => "text",
                    "default" => ""
                )
        ),
        'has_content' => true,
        'default_content' => __('DESCRIPTION GOES HERE', 'newave_theme')
    ),

    'testimonials' => array(    'name' => __('Client Testimonials', 'newave_theme'),
                                'sub_items' => array(
                                                    'testimonial' => array( 'name' => __('Testimonial', 'newave_theme'),
                                                                            'attributes' => array(
                                                                                            'logo' => array( 'title' => __('Client Logo', 'newave_theme'),
                                                                                                             'desc' => __('URL or path to logo file', 'newave_theme'),
                                                                                                             'type' => 'text',
                                                                                                             'default' => ''
                                                                                                            ),
                                                                                            'name' => array( 'title' => __('Client Name', 'newave_theme'),
                                                                                                            'desc' => '',
                                                                                                            'type' => 'text',
                                                                                                            'default' => ''
                                                                                                        ),
                                                                                            'company' => array( 'title' => __('Client Company', 'newave_theme'),
                                                                                                            'desc' => '',
                                                                                                            'type' => 'text',
                                                                                                            'default' => ''
                                                                                                        )
                                                                                            ),
                                                                            'has_content' => true,
                                                                            'default_content' => __('Client Testimonial goes here', 'newave_theme')
                                                                          )
                                                    ),
                                'has_content' => false
                            ),

    'carousel_testimonials' => array(    'name' => __('Client Testimonials', 'newave_theme'),
        'attributes' => array(
            'dark_bknd' => array( 'title' => __('Dark Background', 'newave_theme'),
                'desc' => '',
                "type" => "select",
                "values" => array("yes", "no")
            )
        ),
        'sub_items' => array(
            'carousel_testimonial' => array( 'name' => __('Testimonial', 'newave_theme'),
                'attributes' => array(
                    'image_url' => array( 'title' => __('Client Image', 'newave_theme'),
                        'desc' => __('URL or path to image file', 'newave_theme'),
                        'type' => 'text',
                        'default' => ''
                    ),
                    'name' => array( 'title' => __('Client Name', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                ),
                'has_content' => true,
                'default_content' => __('Client Testimonial goes here', 'newave_theme')
            )
        ),
        'has_content' => false
    ),

    'tabs' => array(    'name' => __('Tabs', 'newave_theme'),
                        'sub_items' => array(
                                                'tab_item' => array(  'name' => __('Tab Item', 'newave_theme'),
                                                                      'attributes' => array(
                                                                                            'tab_name' => array( 'title' => __('Tab Name', 'newave_theme'),
                                                                                                              'desc' => '',
                                                                                                              'type' => 'text',
                                                                                                              'default' => __('Tab Title', 'newave_theme')
                                                                                                            )
                                                                                           ),
                                                                      'has_content' => true,
                                                                      'default_content' => __('Tab Content Here', 'newave_theme')
                                                                )
                                            ),
                        'has_content' => false
                    ),

    'contact_details' => array(
        'name' => __('Contact Box', 'newave_theme'),
        'attributes' => array(
            'company_phone' => array(   'title' => __('Company Phone', 'newave_theme'),
                                        'desc' => '',
                                        'type' => 'text',
                                        'default' => '0753-016-572'
                                    ),
            'company_email' => array(   'title' => __('Company Email', 'newave_theme'),
                                        'desc' => '',
                                        'type' => 'text',
                                        'default' => 'office@newave.com'
                                    ),
            'company_address' => array(   'title' => __('Company Address', 'newave_theme'),
                                        'desc' => '',
                                        'type' => 'text',
                                        'default' => '77a First Street, London, United Kingdom'
                                    ),

        ),
        'has_content' => false,
    ),

    'contact_details_slider' => array(
        'name' => __('Contact Details Slider', 'newave_theme'),
        'sub_items' => array(
            'contact_details_slide' => array(  'name' => __('Contact Info', 'newave_theme'),
                'attributes' => array(
                    'icon' => array( 'title' => __('Icon', 'newave_theme'),
                        'desc' => 'Icon for this service',
                        'type' => 'icon',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Title', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => __('Contact Info Title', 'newave_theme')
                    )
                ),
                'has_content' => true,
                'default_content' => __('Contact Info Here', 'newave_theme')
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),

    'parallax_quote' => array(
                                'name' => __('Parallax Quote', 'newave_theme'),
                                'attributes' => array(  'author' => array( 'title' => __('Author', 'newave_theme'),
                                                                          'desc' => __('Author of the quote', 'newave_theme'),
                                                                          'type' => 'text',
                                                                          'default' => 'John Doe'
                                                                        )
                                                    ),
                                'has_content' => true,
                                'default_content' => __('The Quote Here', 'newave_theme' )
                              ),

    'parallax_link' => array(
                                'name' => __('Parallax Link', 'newave_theme'),
                                                'attributes' => array(  'url' => array( 'title' => __('Link URL', 'newave_theme'),
                                                                                            'desc' => '',
                                                                                            'type' => 'text',
                                                                                            'default' => 'http://' ),
                                                                        'external' => array(  "title" => __("External Link", 'newave_theme'),
                                                                                            "desc" => __("If the link points to an external page or an anchor in the current page", 'newave_theme'),
                                                                                            "type" => "select",
                                                                                            "values" => array("yes", "no")   ),
                                                                    ),
                                'has_content' => true,
                                'default_content' => __('The Content Here', 'newave_theme' )
                            ),

    'recent_posts' => array(
                               'name' => __('Recent Posts', 'newave_theme'),
                               'attributes' => array(  'posts' => array( 'title' => __('Posts', 'newave_theme'),
                                                                         'desc' => __('Number of posts to display', 'newave_theme'),
                                                                         'type' => 'text',
                                                                         'default' => '5'
                                                                        ),
                                                        'post_title_length' => array( 'title' => __('Post Title Length', 'newave_theme'),
                                                                                      'desc' => __('The length of the post title', 'newave_theme'),
                                                                                      'type' => 'text',
                                                                                      'default' => '40'
                                                                                    ),
                                                    ),
                                'has_content' => false,
                            ),
							
	'posts_carousel' => array(
                               'name' => __('Recent Posts - Carousel', 'newave_theme'),
                               'attributes' => array(  'posts' => array( 'title' => __('Posts', 'newave_theme'),
                                                                         'desc' => __('Number of posts to display', 'newave_theme'),
                                                                         'type' => 'text',
                                                                         'default' => '5'
                                                                        ),
                                                        'post_title_length' => array( 'title' => __('Post Title Length', 'newave_theme'),
                                                                                      'desc' => __('The length of the post title', 'newave_theme'),
                                                                                      'type' => 'text',
                                                                                      'default' => '40'
                                                                                    ),
														'excerpt' => array( 'title' => __('Excerpt', 'newave_theme'),
                                                                         'desc' => __('Number of characters to display in post content', 'newave_theme'),
                                                                         'type' => 'text',
                                                                         'default' => '50'
                                                                        ),							
                                                    ),
                                'has_content' => false,
                            ),						
							
	'show_three_blog_posts' => array(
                               'name' => __('Show Three Blog_Posts', 'newave_theme'),
                               'attributes' => array(  
														"order" => array(  	"title" => __("Order", 'newave_theme'),
																			"desc" => __("Order of the blog posts being displayed", 'newave_theme'),
																			"type" => "select",
																			"values" => array("latest", "most_commented" )
																			),
                                                    ),
                                'has_content' => false,
                            ),						

    'parallax_twitter' => array(
        'name' => __('Twitter Parallax Box', 'newave_theme'),
        'attributes' => array(  'count' => array( 'title' => __('Tweets Count', 'newave_theme'),
            'desc' => __('Number of tweets to display', 'newave_theme'),
            'type' => 'text',
            'default' => '5'
        ),
            'username' => array( 'title' => __('Twitter username', 'newave_theme'),
                'desc' => __('Twitter account name', 'newave_theme'),
                'type' => 'text',
                'default' => ''
            ),
        ),
        'has_content' => false,
    ),

    'service' => array(
        'name' => __('Service Box', 'newave_theme'),
        'attributes' => array(
            "icon" => array(  "title" => __("Icon", 'newave_theme'),
                "desc" => __("Icon displayed within service box", 'newave_theme'),
                "type" => "icon",
                "default" => ""
            ),
            "title" => array(  "title" => __("Service Title", 'newave_theme'),
                "desc" => __("Title of the service", 'newave_theme'),
                "type" => "text",
                "default" => ""
            ),
            "position" => array(  "title" => __("Content position", 'newave_theme'),
                                "desc" => __("Position of the content within the layout", 'newave_theme'),
                                "type" => "select",
                                "values" => array("left", "right")
                            ),
            'fx_effect' => array( 'title' => __('FX effect', 'newave_theme'),
                                        'desc' => '',
                                        'type' => 'select',
                                        'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
                                    )
        ),
        'require_icon' => true,
        'has_content' => true,
        'default_content' => __('Service Description', 'newave_theme')
    ),

    'services_box_carousel' => array(
        'name' => __('Services Box', 'newave_theme'),
        'sub_items' => array(
            'service_box_carousel_item' => array(  'name' => __('Service', 'newave_theme'),
                'attributes' => array(
                    'icon' => array( 'title' => __('Icon', 'newave_theme'),
                        'desc' => 'Icon for this service',
                        'type' => 'icon',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Title', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => __('Service Title', 'newave_theme')
                    ),
                    'button_text' => array( 'title' => __('Button Text', 'newave_theme'),
                        'desc' => __('Caption of the button displayed underneath service description', 'newave_theme'),
                        'type' => 'text',
                        'default' => __('Details', 'newave_theme')
                    ),
                    'url' => array( 'title' => __('Service URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => '#'
                    )
                ),
                'has_content' => true,
                'default_content' => __('Service Description Here', 'newave_theme')
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),

    'tagline_box' => array(
        'name' => __('Tagline Box', 'newave_theme'),
        'attributes' => array(
            "button" => array(  "title" => __("Button Caption", 'newave_theme'),
                "desc" => __("The caption of the tagline button", 'newave_theme'),
                "type" => "text",
                "default" => ""
            ),
            "link" => array(  "title" => __("Link", 'newave_theme'),
                "desc" => __("URL of the tagline", 'newave_theme'),
                "type" => "text",
                "default" => "http://"
            ),
            "target" => array(  "title" => __("Target Action", 'newave_theme'),
                "desc" => __("Open the link in a new page or same page", 'newave_theme'),
                "type" => "select",
                "values" => array("_blank", "_self")
            )
        ),
        'has_content' => true,
        'default_content' => __('Tagline description', 'newave_theme')
    ),

    'technologies' => array(
        'name' => __('Technologies', 'newave_theme'),
        'sub_items' => array(
            'technology' => array(  'name' => __('Technology', 'newave_theme'),
                'attributes' => array(
                    'icon' => array( 'title' => __('Icon', 'newave_theme'),
                        'desc' => 'Icon for this technology',
                        'type' => 'icon',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Title', 'newave_theme'),
                                      'desc' => '',
                                      'type' => 'text',
                                      'default' => __('Technology Title', 'newave_theme')
                                    ),
                    'fx_effect' => array( 'title' => __('FX effect', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
                    )
                ),
                'has_content' => true,
                'default_content' => __('Technology Description Here', 'newave_theme')
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),

    'image_group' => array(
        'name' => __('Image Group', 'newave_theme'),
        'attributes' => array(
                    'left_image_url' => array( 'title' => __('Left Image URL', 'newave_theme'),
                        'desc' => 'The URL or path of the left image',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'left_image_fx' => array( 'title' => __('Left Image FX', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
                    ),
                    'center_image_url' => array( 'title' => __('Center Image URL', 'newave_theme'),
                        'desc' => 'The URL or path of the center image',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'center_image_fx' => array( 'title' => __('Center Image FX', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
                    ),
                    'right_image_url' => array( 'title' => __('Right Image URL', 'newave_theme'),
                        'desc' => 'The URL or path of the right image',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'right_image_fx' => array( 'title' => __('Right Image FX', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
                    )
                ),
        'has_content' => false
    ),

    'list_styles' => array(
        'name' => __('List Styles', 'newave_theme'),
        'sub_items' => array(
            'list_style' => array(  'name' => __('List Item', 'newave_theme'),
                'attributes' => array(
                    'icon' => array( 'title' => __('Icon', 'newave_theme'),
                        'desc' => 'Icon for this list item',
                        'type' => 'icon',
                        'default' => ''
                    ),
                ),
                'has_content' => true,
                'default_content' => 'Nullam dignissim convallis'
            )
        ),
        'attributes' => array(
            'size' => array( 'title' => __('List Size', 'newave_theme'),
                'desc' => 'Size of the list items',
                'type' => 'select',
                'values' => array('normal', 'big')
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),

    'progress' => array(
        'name' => __('Progress Bars', 'newave_theme'),
        'sub_items' => array(
            'progress_bar' => array(  'name' => __('Progress Bar', 'newave_theme'),
                'attributes' => array(
                    'percentage' => array( 'title' => __('Percentage', 'newave_theme'),
                        'desc' => 'Progress Bar Percentage',
                        'type' => 'text',
                        'default' => '100'
                    ),
                ),
                'has_content' => true,
                'default_content' => __('Web Design', 'newave_theme')
            )
        ),
        'has_content' => false,
     ),

    'social_icons' => array(
        'name' => __('Social Sharing Links', 'newave_theme'),
        'sub_items' => array(
            'social_icon' => array(  'name' => __('Social Sharing Link', 'newave_theme'),
                'attributes' => array(
                    'url' => array( 'title' => __('Link URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'target' => array( 'title' => __('Link Target Window', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array('_blank', '_self')
                    ),
                    'social' => array( 'title' => __('Social Link Type', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                                            "twitter",
                                            "linkedin",
                                            "behance",
                                            "deviantart",
                                            "dribble",
                                            "flickr",
                                            "google",
                                            "lastfm",
                                            "picasa",
                                            "pinterest",
                                            "rss",
                                            "skype",
                                            "stumble",
                                            "vimeo",
                                            "youtube",
                                            "instagram"
                                        )
                    ),
                ),
                'has_content' => false,
             )
        ),
        'has_content' => false,
    ),

    'team' => array(
        'name' => __('Team Members', 'newave_theme'),
        'sub_items' => array(
            'team_member' => array(  'name' => __('Team Member', 'newave_theme'),
                'attributes' => array(
                    'name' => array( 'title' => __('Team Member Name', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Job Title', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'picture' => array( 'title' => __('Picture', 'newave_theme'),
                        'desc' => __('URL or path to team member\'s picture', 'newave_theme'),
                        'type' => 'text',
                        'default' => ''
                    ),
                    'fx_effect' => array( 'title' => __('FX effect', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
                    ),
                    'social_link1' => array( 'title' => __('Social Link 1', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link1_url' => array( 'title' => __('Social Link 1 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link2' => array( 'title' => __('Social Link 2', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link2_url' => array( 'title' => __('Social Link 2 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link3' => array( 'title' => __('Social Link 3', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link3_url' => array( 'title' => __('Social Link 3 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                ),
                'has_content' => true,
                'default_content' => __('Team member description', 'newave_theme')
            )
        ),
        'has_content' => false,
    ),

    'team_carousel' => array(
        'name' => __('Team Members', 'newave_theme'),
        'sub_items' => array(
            'team_member_carousel' => array(  'name' => __('Team Member', 'newave_theme'),
                'attributes' => array(
                    'name' => array( 'title' => __('Team Member Name', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Job Title', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'picture' => array( 'title' => __('Picture', 'newave_theme'),
                        'desc' => __('URL or path to team member\'s picture', 'newave_theme'),
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link1' => array( 'title' => __('Social Link 1', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link1_url' => array( 'title' => __('Social Link 1 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link2' => array( 'title' => __('Social Link 2', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link2_url' => array( 'title' => __('Social Link 2 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link3' => array( 'title' => __('Social Link 3', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link3_url' => array( 'title' => __('Social Link 3 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                ),
                'has_content' => true,
                'default_content' => __('Team member description', 'newave_theme')
            )
        ),
        'has_content' => false,
    ),
	
	'team_modern' => array(
        'name' => __('Team Members', 'newave_theme'),
        'sub_items' => array(
            'team_member_modern' => array(  'name' => __('Team Member', 'newave_theme'),
                'attributes' => array(
                    'name' => array( 'title' => __('Team Member Name', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'title' => array( 'title' => __('Job Title', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'picture' => array( 'title' => __('Picture', 'newave_theme'),
                        'desc' => __('URL or path to team member\'s picture', 'newave_theme'),
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link1' => array( 'title' => __('Social Link 1', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link1_url' => array( 'title' => __('Social Link 1 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link2' => array( 'title' => __('Social Link 2', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link2_url' => array( 'title' => __('Social Link 2 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'social_link3' => array( 'title' => __('Social Link 3', 'newave_theme'),
                        'desc' => '',
                        'type' => 'select',
                        'values' => array(  "facebook",
                            "twitter",
                            "linkedin",
                            "behance",
                            "deviantart",
                            "dribble",
                            "flickr",
                            "google",
                            "lastfm",
                            "picasa",
                            "pinterest",
                            "rss",
                            "skype",
                            "stumble",
                            "vimeo",
                            "youtube",
                            "instagram"
                        )
                    ),
                    'social_link3_url' => array( 'title' => __('Social Link 3 URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                ),
                'has_content' => true,
                'default_content' => __('Team member description', 'newave_theme')
            )
        ),
        'has_content' => false,
    ),

    'fontawesome_icon' => array(
        'name' => __('FontAwesome Icon', 'newave_theme'),
        'attributes' => array(
            "icon" => array(  "title" => __("Icon", 'newave_theme'),
                "desc" => '',
                "type" => "icon",
                "default" => ""
            ),
            "size" => array(  "title" => __("Size", 'newave_theme'),
                "desc" => __("Icon size relative to their container", 'newave_theme'),
                "type" => "select",
                "values" => array('none', 'lg', '2x', '3x', '4x', '5x')
            ),
            "shape" => array(  "title" => __("Shape", 'newave_theme'),
                "desc" => __("Icon shape", 'newave_theme'),
                "type" => "select",
                "values" => array('normal', 'circle-box')
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),

    'youtube' => array(
        'name' => __('Youtube Video', 'newave_theme'),
        'attributes' => array(
            'id' => array( 'title' => __('Video ID', 'newave_theme'),
                'desc' => __('Enter video ID (eg. Wq4Y7ztznKc)', 'newave_theme'),
                'type' => 'text',
                'default' => ''
            ),
            'width' => array( 'title' => __('Video Width', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => '600'
            ),
            'height' => array( 'title' => __('Video Height', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => '350'
            )
        ),
        'has_content' => false

    ),

    'vimeo' => array(
        'name' => __('Vimeo Video', 'newave_theme'),
        'attributes' => array(
            'id' => array( 'title' => __('Video ID', 'newave_theme'),
                'desc' => __('Enter video ID (eg. 10145153)', 'newave_theme'),
                'type' => 'text',
                'default' => ''
            ),
            'width' => array( 'title' => __('Video Width', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => '600'
            ),
            'height' => array( 'title' => __('Video Height', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => '350'
            )
        ),
        'has_content' => false

    ),

    'toggle' => array(
        'name' => __('Toggle', 'newave_theme'),
        'attributes' => array(
            'title' => array( 'title' => __('Title', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => ''
            )
        ),
        'has_content' => true,
        'default_content' => __('Toggle Content Here', 'newave_theme')
    ),

    'dropcap' => array(
        'name' => __('Dropcap', 'newave_theme'),
        'attributes' => array(
            'letter' => array( 'title' => __('Dropcap Letter', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => 'A'
            ),
            'shape' => array( 'title' => __('Dropcap Shape', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('normal', 'round', 'square')
            )
        ),
        'has_content' => true,
        'default_content' => __('Content With Dropcap', 'newave_theme')
    ),

    'title' => array(
        'name' => __('Title', 'newave_theme'),
        'attributes' => array(
            'size' => array( 'title' => __('Title Size', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('1', '2', '3', '4')
            )
        ),
        'has_content' => true,
        'default_content' => __('Title', 'newave_theme')
    ),

    'small_title' => array(
        'name' => __('Small Title', 'newave_theme'),
        'attributes' => array(
            'header_text' => array( 'title' => __('Header', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => ''
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'one_half' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                 'desc' => '',
                 'type' => 'select',
                 'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
                )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'one_third' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'one_fourth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'one_fifth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'one_sixth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'two_third' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'two_fifth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'three_fourth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'three_fifth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'four_fifth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'five_sixth' => array(
        'name' => __('Column', 'newave_theme'),
        'attributes' => array(
            'last' => array( 'title' => __('Last Column?', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('no', 'yes')
            ),
            'text_align' => array( 'title' => __('Text Alignment', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('text-align-left', 'text-align-center', 'text-align-right' )
            )
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'project_section' => array(
        'name' => __('Project Section', 'newave_theme'),
        'attributes' => array(
            'color' => array( 'title' => __('Background Color', 'newave_theme'),
                               'desc' => '',
                               'type' => 'select',
                               'values' => array('light-grey-background', 'white-background', 'dark-background', 'primary-color-background')
                            ),
            'container' => array( 'title' => __('Container type', 'newave_theme'),
                                  'desc' => '',
                                  'type' => 'select',
                                  'values' => array('none', 'normal', 'without-padding', 'small-width')
                                ),
        ),
        'has_content' => true,
        'default_content' => __('Content goes here', 'newave_theme')
    ),

    'project_url' => array(
        'name' => __('Project URL', 'newave_theme'),
        'attributes' => array(
            'url' => array( 'title' => __('URL of the project', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => 'http://'
            ),
            'url_text' => array( 'title' => __('Website name', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => 'www.newave.com'
            ),
            'url_goto' => array( 'title' => __('"Go to website" text', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => __('go to website', 'newave_theme')
            ),
            'target' => array( 'title' => __('Target Window', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('_blank', '_self')
            ),
        ),
        'has_content' => false
    ),

    'project_title' => array(
        'name' => __('Project Title', 'newave_theme'),
        'attributes' => array(
                                'project_title' => array( 'title' => __('Title', 'newave_theme'),
                                                 'desc' => '',
                                                 'type' => 'text',
                                                  'default' => ''
                                               )
                             ),
        'has_content' => true,
        'default_content' => __('Project description goes here', 'newave_theme')
    ),

    'single_image' => array(
        'name' => __('Project Single Image', 'newave_theme'),
        'attributes' => array(
            'img_url' => array( 'title' => __('Image URL', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => 'http://'
            ),
            'img_alt' => array( 'title' => __('Image ALT', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => ''
            ),
            'fx_effect' => array( 'title' => __('FX effect', 'newave_theme'),
                'desc' => '',
                'type' => 'select',
                'values' => array('fade', 'fade-from-left', 'fade-from-right', 'none')
            )
        ),
        'has_content' => false
    ),

    'project_slider' => array(
        'name' => __('Project Slider', 'newave_theme'),
        'sub_items' => array(
            'project_slide' => array(  'name' => __('Project Slide', 'newave_theme'),
                'attributes' => array(
                    'img_url' => array( 'title' => __('Slider Image URL', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    ),
                    'img_alt' => array( 'title' => __('Slider Image ALT', 'newave_theme'),
                        'desc' => '',
                        'type' => 'text',
                        'default' => ''
                    )
                ),
                'has_content' => false
            )
        ),
        'has_content' => false
    ),

    'project_options' => array(
        'name' => __('Project Options', 'newave_theme'),
        'sub_items' => array(
            'project_option' => array(  'name' => __('Project Option', 'newave_theme'),
                'attributes' => array(
                    'icon' => array( 'title' => __('Project Option Icon', 'newave_theme'),
                        'desc' => '',
                        'type' => 'icon',
                        'default' => ''
                    ),

                ),
                'has_content' => true,
                'default_content' => __('Project option goes here', 'newave_theme')
            )
        ),
        'require_icon' => true,
        'has_content' => false
    ),

    'visit_project' => array(
        'name' => __('Visit Project', 'newave_theme'),
        'attributes' => array(
            'url' => array( 'title' => __('Project URL', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => 'http://'
            ),
            'button_name' => array( 'title' => __('Button Name', 'newave_theme'),
                'desc' => '',
                'type' => 'text',
                'default' => 'Visit Website'
            )
        ),
        'has_content' => false
    ),
	
	'newave_info_box' => array(
        'name' => __('Info Box', 'newave_theme'),
        'attributes' => array(
                    'header_icon' => array( 'title' => __('Header Icon', 'newave_theme'),
                        'desc' => __('The class of the FontAwesome icon displayed as header', 'newave_theme'),
                        'type' => 'icon',
                        'default' => ''
                    ),
                    'footer_text' => array( 'title' => __('Footer Text', 'newave_theme'),
                        'desc' => __('Text displayed underneath footer box content', 'newave_theme'),
                        'type' => 'text',
                        'default' => 'Email Us'
                    ),
                    
                ),
        'has_content' => true,
        'default_content' => __('office@newave.com', 'newave_theme'),
		'require_icon' => true,
    ),

);

?>