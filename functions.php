<?php

require_once ( get_template_directory() . '/include/defines.php');

// admin framework
require_once ( get_template_directory() . '/admin/index.php');

// Support for automatic plugin installation
require_once(  get_template_directory() . '/components/helper_classes/tgm-plugin-activation/class-tgm-plugin-activation.php');
require_once(  get_template_directory() . '/components/helper_classes/tgm-plugin-activation/required_plugins.php');

// Widgets
require_once(  get_template_directory() . '/components/widgets/widgets.php');

// Shortcodes
require_once(  get_template_directory() . '/shortcodes.php');

// Like posts
require_once(  get_template_directory() . '/components/post_like/newave-like.php');

// util functions
require_once ( get_template_directory() . '/include/util_functions.php');

// post format support
add_theme_support( 'post-formats', array('gallery', 'link', 'quote', 'audio', 'video')); 

/**
 * Tell WordPress to run newave_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'newave_setup' );

if ( ! function_exists( 'newave_setup' ) ){

	function newave_setup() {

		// Load up our theme options page and related code.
		require( get_template_directory() . '/include/theme-options.php' );

        // Set content width 
        if ( ! isset( $content_width ) ) $content_width = 1180;
        
        // Allow shortcodes in widget text
        add_filter('widget_text', 'do_shortcode');

        register_nav_menu( 'main', __( 'Main Menu', 'newave_theme' ) );
        
        // support for multiple featured images
		if (class_exists('MultiPostThumbnails')) {

            // set multiple post thumbnails
            $images_no = get_blog_post_featured_images_no();
            for( $idx = 2; $idx <= $images_no; $idx++ ){
                new MultiPostThumbnails(
                    array(
                        'label' => 'Featured Image ' . $idx,
                        'id' => 'featured-image-' . $idx,
                        'post_type' => 'post'
                    )
                );
            }
            
            // set multiple portfolio item thumbnails
            $images_no = get_portfolio_featured_images_no();
            for( $idx = 2; $idx <= $images_no; $idx++ ){
                new MultiPostThumbnails(
                    array(
                        'label' => 'Featured Image ' . $idx,
                        'id' => 'featured-image-' . $idx,
                        'post_type' => 'newave_portfolio'
                    )
                );
            }
            
        }

        // add support for multiple languages
        load_theme_textdomain( 'newave_theme', get_template_directory() . '/languages' );

        // add blog excerpt filter
        global $global_theme_options;
		if( isset( $global_theme_options['content_length'] ) )
			if( $global_theme_options['content_length'] == 'excerpt' )
				add_filter( 'excerpt_length', 'newave_custom_excerpt_length', 999 );
}

} // newave_setup


if ( ! function_exists( 'newave_load_scripts' ) ){

	function newave_load_scripts() {

        // detect browser version; if chrome disable the smooth scrolling
        $bIsChrome = false;
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false)
        {
            // User agent is Google Chrome
            $bIsChrome = true;
        }
    	// Register css files
		wp_register_style( 'newave_flexslider', get_template_directory_uri() . '/css/flexslider.css', TRUE);
		
        wp_register_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css', TRUE);

        wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', TRUE);

        wp_register_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css', TRUE);
            
        wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', TRUE);
		
		wp_register_style( 'newave_animsition', get_template_directory_uri() . '/css/animsition.css', TRUE);
		
		wp_register_style( 'newave_sliders', get_template_directory_uri() . '/css/sliders.css', TRUE);

        global $global_theme_options;
        //navigation menu
        if( $global_theme_options['header_layout'] == 'v2' ){

            wp_register_style( 'navigation', get_template_directory_uri() . '/css/navigation-style-2.css', TRUE);

        } else if( $global_theme_options['header_layout'] == 'v3' ){

            wp_register_style( 'navigation', get_template_directory_uri() . '/css/navigation-style-3.css', TRUE);

        }
        else if( $global_theme_options['header_layout'] == 'v4' ){

            wp_register_style( 'navigation', get_template_directory_uri() . '/css/navigation-style-4.css', TRUE);

        }
        else{

            wp_register_style( 'navigation', get_template_directory_uri() . '/css/navigation-style-1.css', TRUE);

        }

        // color skin
        if( !isset( $global_theme_options['color_skin'] ) ){

            $global_theme_options['color_skin'] = 'gray';
        }

        if( $global_theme_options['color_skin'] == 'blue' ){

            wp_register_style( 'colorskin', get_template_directory_uri() . '/css/colors/color-blue.css', TRUE);

        } else if( $global_theme_options['color_skin'] == 'green' ){

            wp_register_style( 'colorskin', get_template_directory_uri() . '/css/colors/color-green.css', TRUE);

        }
        else if( $global_theme_options['color_skin'] == 'yellow' ){

            wp_register_style( 'colorskin', get_template_directory_uri() . '/css/colors/color-yellow.css', TRUE);

        }
        else if( $global_theme_options['color_skin'] == 'red' ){

            wp_register_style( 'colorskin', get_template_directory_uri() . '/css/colors/color-red.css', TRUE);

        }
        else if( $global_theme_options['color_skin'] == 'custom' ){

            // we enqueue the gray style but we set the inline custom styles
            wp_register_style( 'colorskin', get_template_directory_uri() . '/css/colors/color-gray.css', TRUE);

        }
        else{

            wp_register_style( 'colorskin', get_template_directory_uri() . '/css/colors/color-gray.css', TRUE);

        }

        
        // Register scripts
        if( is_page_template( 'one-page.php' ) ) {

            wp_register_script(
                'ytplayer',
                get_template_directory_uri() .'/js/jquery.mb.YTPlayer.js',
                'jquery',
                false,
                true
            );

        }

        wp_register_script(
            'waitforimages',
            get_template_directory_uri() .'/js/jquery.waitforimages.js',
            'jquery',
            false,
            true
        );
        
        wp_register_script(
			'jquery-sticky',
			get_template_directory_uri() . '/js/jquery.sticky.js', 
			'jquery', 
			false,
			true
		);
        
		wp_register_script(
			'jquery-easing',
			get_template_directory_uri() . '/js/jquery.easing-1.3.pack.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'bootstrapjs',
			get_template_directory_uri() . '/js/bootstrap.min.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'parallax-jquery',
			get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'appearjs',
			get_template_directory_uri() . '/js/appear.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'modernizrjs',
			get_template_directory_uri() . '/js/modernizr.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'prettyphotojs',
			get_template_directory_uri() . '/js/jquery.prettyPhoto.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'isotopejs',
			get_template_directory_uri() . '/js/isotope.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'bxslider-jquery',
			get_template_directory_uri() . '/js/jquery.bxslider.min.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'cycle-all-jquery',
			get_template_directory_uri() . '/js/jquery.cycle.all.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'maximage-jquery',
			get_template_directory_uri() . '/js/jquery.maximage.js', 
			'jquery', 
			false,
			true
		);

        if( $bIsChrome && $global_theme_options['enable_smooth_scrolling'] ){
		    wp_register_script(
			    'sscrjs',
			    get_template_directory_uri() . '/js/sscr.js',
			    'jquery',
			    false,
			    true
		    );
        }
		
		wp_register_script(
			'skrollrjs',
			get_template_directory_uri() . '/js/skrollr.js', 
			'jquery', 
			false,
			true
		);

        ////////// 1.2 //////////

        wp_register_script(
            'flexsliderjs',
            get_template_directory_uri() . '/js/jquery.flexslider.js',
            'jquery',
            false,
            true
        );

        wp_register_script(
            'easingjs',
            get_template_directory_uri() . '/js/jquery.easing.js',
            'jquery',
            false,
            true
        );

        wp_register_script(
            'mousewheeljs',
            get_template_directory_uri() . '/js/jquery.mousewheel.js',
            'jquery',
            false,
            true
        );

        wp_register_script(
            'caroufredseljs',
            get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js',
            'jquery',
            false,
            true
        );

        wp_register_script(
            'knobjs',
            get_template_directory_uri() . '/js/jquery.knob.js',
            'jquery',
            false,
            true
        );

        ////////// end 1.2 //////////

		wp_register_script(
			'newave_pluginsjs',
			get_template_directory_uri() . '/js/plugins.js', 
			'jquery', 
			false,
			true
		);
		
		wp_register_script(
			'scriptsjs',
			get_template_directory_uri() . '/js/scripts.js', 
			'jquery', 
			false,
			true
		);
		
		
		// enqueue styles
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('theme', get_stylesheet_uri(), 'bootstrap');
        wp_enqueue_style('colorskin');
		wp_enqueue_style('newave_flexslider');
		wp_enqueue_style('prettyPhoto');
		wp_enqueue_style('bxslider');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('newave_animsition');
		wp_enqueue_style('newave_sliders');
        wp_enqueue_style('navigation');

        
		// enqueue google fonts styles
        $body_font = get_body_font_option();
        $htag_font = get_htag_font_option();

        $protocol = is_ssl() ? 'https' : 'http';
        if( !empty( $body_font ) ){
            wp_enqueue_style( 'mytheme-body-font', $protocol . "://fonts.googleapis.com/css?family=" . urlencode($body_font) . ":400,400italic,700,700italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
        }
        else{
            wp_enqueue_style( 'newave-open-sans-font', $protocol . "://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700");
        }
        if( !empty( $htag_font ) ){
            wp_enqueue_style( 'mytheme-htag-font', $protocol . "://fonts.googleapis.com/css?family=" . urlencode($htag_font) . ":400,400italic,700,700italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese");
        }
        else{
            wp_enqueue_style( 'newave-montserrat-font', $protocol . "://fonts.googleapis.com/css?family=Montserrat:400,700");
        }


		// enqueue scripts		
		wp_enqueue_script(
			'jquery'
		);
		
		wp_enqueue_script(
			'jquery-sticky'
		);
		
		wp_enqueue_script(
			'jquery-easing'
		);
		
		wp_enqueue_script(
			'bootstrapjs'
		);
		
		wp_enqueue_script(
			'parallax-jquery'
		);
		
		wp_enqueue_script(
			'appearjs'
		);
		
		wp_enqueue_script(
			'modernizrjs'
		);
		
		wp_enqueue_script(
			'prettyphotojs'
		);
		
		wp_enqueue_script(
			'isotopejs'
		);
		
		wp_enqueue_script(
			'bxslider-jquery'
		);
        
		wp_enqueue_script(
			'cycle-all-jquery'
		);
		
		wp_enqueue_script(
			'maximage-jquery'
		);

        if( $bIsChrome && $global_theme_options['enable_smooth_scrolling'] ){

		    wp_enqueue_script(
			    'sscrjs'
		    );
        }
		
		wp_enqueue_script(
			'skrollrjs'
		);
		
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		if( is_page_template( 'one-page.php' ) ) {

            wp_enqueue_script(
                'ytplayer'
            );

		}

        wp_enqueue_script(
            'waitforimages'
        );

        ////////// 1.2 //////////

        wp_enqueue_script(
            'flexsliderjs'
        );

        wp_enqueue_script(
            'caroufredseljs'
        );

        wp_enqueue_script(
            'easingjs'
        );

        wp_enqueue_script(
            'mousewheeljs'
        );

        wp_enqueue_script(
            'knobjs'
        );

        ////////// end 1.2 //////////

		wp_enqueue_script(
			'newave_pluginsjs'
		);
		
        wp_enqueue_script(
			'scriptsjs'
		);
		
		if( is_page_template( 'one-page.php' ) ) {

            if( $global_theme_options['contact_show_map'] ){
				
				wp_localize_script( 'scriptsjs',
									'ClapatMapOptions',
									array(  "map_marker_image"   => esc_js( esc_url ( $global_theme_options["gmap_marker_icon"] ) ),
												"map_address"       		=> $global_theme_options['gmap_address'],
												"map_zoom"    			=> $global_theme_options['map_zoom_level'],
												"marker_title"  				=> $global_theme_options['gmap_company_name'],
												"marker_text"  			=> $global_theme_options['gmap_company_info'],
												"map_type" 					=> $global_theme_options['map_type'],
												"map_api_key"				=> $global_theme_options['map_google_api_key'] ) );
			}
			
		}
		
	}
		
	add_action('wp_enqueue_scripts', 'newave_load_scripts');

}

// wp_head hook
if ( ! function_exists( 'newave_wp_head_hook' ) ){

    function newave_wp_head_hook(){

        global $global_theme_options;

        if( !isset( $global_theme_options['color_skin'] ) ){

            $global_theme_options['color_skin'] = 'gray';
        }
        if( $global_theme_options['color_skin'] == 'custom' ){

            require_once( get_template_directory() . '/css/colors/color-custom.css.template' );

            global $custom_css_template;

            if( $custom_css_template != FALSE ){

                $rgb_values = hex2rgb( $global_theme_options['custom_color'] );

                $custom_css = str_replace("#000000", $global_theme_options['custom_color'], $custom_css_template);
                $custom_css = str_replace("0,0,0", $rgb_values[0].','.$rgb_values[1].','.$rgb_values[2], $custom_css);

                echo '<style type="text/css">';
                echo trim( $custom_css );
                echo '</style>';
            }
        }

        $body_font = get_body_font_option();
        $htag_font = get_htag_font_option();

        if( !empty($body_font) ){

            echo '<style type="text/css">';
            echo 'html, body, .project-counters .counters li, .navbar .nav > li > a.collapse_menu1, .navbar .nav > li > a.dropdown-toggle, .navbar .nav > li > a.external  {';
            echo 'font-family: "' . $body_font . '", sans-serif;';
            echo '}';
            echo '</style>';
        }

        if( !empty($htag_font) ){

            echo '<style type="text/css">';
            echo 'h1, h2, h3, h4, h5, h6, .dropcap-normal, .dropcap, .counters li, .counters li span, a.newave-button, .ultralarge, .four-zero-four, .text-slide-vertical, .project-counters .counters li .count, .company-phone a, #contact-formular input[type="text"], #contact-formular input[type="email"], input[type="password"], textarea, #contact-formular input[type="submit"], input[type="submit"], #commentsform input[type="text"], textarea, input#search, .navbar .nav > li > a, .newave-newsletter input[type="email"] {';
            echo 'font-family: "' . $htag_font . '", sans-serif;';
            echo '}';
            echo '</style>';

        }

		if( $global_theme_options['loading_img'] ){

			echo '<style type="text/css">';
            echo '.animsition-loading:after { content: url(' . $global_theme_options['loading_img'] . ') }';
			echo 'html { background-color:' . $global_theme_options['loading_img_bknd_color'] . '; }';
            echo '</style>';
    
		}
		
        if( isset( $global_theme_options['custom_css'] ) ){

            if( trim($global_theme_options['custom_css']) ){

                echo '<style type="text/css">';
                echo trim($global_theme_options['custom_css']);
                echo '</style>';
            }
        }

        echo $global_theme_options['space_head'];

    }

    add_action('wp_head', 'newave_wp_head_hook');

}

if ( ! function_exists( 'add_opengraph' ) ){

    function add_opengraph() {

        global $post; // Ensures we can use post variables outside the loop

        // Start with some values that don't change.
        echo "<meta property='og:site_name' content='". get_bloginfo('name') ."'/>"; // Sets the site name to the one in your WordPress settings
        echo "<meta property='og:url' content='" . get_permalink() . "'/>"; // Gets the permalink to the post/page

        if (is_singular()) { // If we are on a blog post/page
            echo "<meta property='og:title' content='" . get_the_title() . "'/>"; // Gets the page title
            echo "<meta property='og:type' content='article'/>"; // Sets the content type to be article.
        } elseif(is_front_page() or is_home()) { // If it is the front page or home page
            echo "<meta property='og:title' content='" . get_bloginfo("name") . "'/>"; // Get the site title
            echo "<meta property='og:type' content='website'/>"; // Sets the content type to be website.
        }

        if($post && has_post_thumbnail( $post->ID )) { // If the post has a featured image.
            $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
            echo "<meta property='og:image' content='" . esc_attr( $thumbnail[0] ) . "'/>"; // If it has a featured image, then display this for Facebook
        }

    }

    add_action( 'wp_head', 'add_opengraph', 5 );

}


// wp_footer hook
if ( ! function_exists( 'newave_wp_footer_hook' ) ){

    function newave_wp_footer_hook(){

        global $global_theme_options;

        echo $global_theme_options['google_analytics'];

    }

    // change priority here if there are more important actions associated with the hook
    add_action('wp_footer', 'newave_wp_footer_hook', 100);

}


// pagination
if( !function_exists('newave_pagination') ){
	
	function newave_pagination( $current_query = null ){
    
    	// see what is the page # we are on
    	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    	if(empty($paged)) $paged = 1;

    	// pages represent the total number of pages 
    	global $wp_query;
    	if( $current_query == null )
        	$current_query = $wp_query;
    
    	$pages = ($current_query->max_num_pages) ? $current_query->max_num_pages : 1;

     	if( $pages > 1 )
     	{
     		echo '<div id="blog-footer" class="clearfix">';
    	
       		echo '<div class="container no-padding">';
        
        	echo '<ul class="inner-navigation masonry clearfix">';
        	
        	if ( get_previous_posts_link() ){
                echo '<li class="blog-pagination-prev">';
                previous_posts_link( '<span><img src="'.get_template_directory_uri().'/images/prev_article.png" alt="' . __("Previous", 'newave_theme') . '"></span>');
                echo '</li>';
            }

         	if( get_next_posts_link( '', $current_query->max_num_pages ) ) {
                echo '<li class="blog-pagination-next">';
                next_posts_link( '<span><img src="'.get_template_directory_uri().'/images/next_article.png" alt="' . __("Previous", 'newave_theme') . '"></span>', $current_query->max_num_pages );
                echo '</li>';
            }

         	echo '</ul>';
         	
         	echo '</div>';
         	
         	echo '</div>';
     	}
	}

} // pagination function


// pagination
if( !function_exists('newave_comment') ){
	
	function newave_comment($comment, $args, $depth) {
        
        $GLOBALS['comment'] = $comment;
        $add_below = '';
        echo '<div class="user_comment" ';
        comment_class();
        echo ' id="div-comment-';
        comment_ID();
        echo '">';
        echo '<div class="avatar">'. get_avatar($comment, 54) . '</div>';
        echo '<p><strong>'. get_comment_author_link() . '</strong> ' . __('says:', 'newave_theme') . '</p>';
        echo '<p class="comment-date">' . get_comment_date() . ' ' . __('at', 'newave_theme' ) . ' ' . get_comment_time() . '</p>';

        echo '<div class="comment-text">';
        if ($comment->comment_approved == '0'){
            echo '<em>' . __("Your comment is awaiting moderation", 'newave_theme') . '</em><br />';
        }
        comment_text();
        echo '</div>';
        
        comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'newave_theme'), 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'])));

	}
}


// custom excerpt length
if( !function_exists('newave_custom_excerpt_length') ){
	
    function newave_custom_excerpt_length( $length ) {
        
        global $global_theme_options;
        
		return intval( $global_theme_options['excerpt_length_blog'] );
    }
}


if ( ! function_exists( 'Menu_Walker::start_el' ) ){


class Menu_Walker extends Walker_Nav_Menu
{

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		global $wp_query;
           
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

        // add submenu class if current item is a top menu item
        $menu_link_class = '"';
        $bIsTopMenuItem  = false;
        if( in_array("menu-item-has-children", $classes) ){

            $classes[]          = 'dropdown';
            $menu_link_class    = ' dropdown-toggle" data-toggle="dropdown"';
            $bIsTopMenuItem     = true;
        }

        if( (in_array("current-menu-item", $classes)) || (in_array("current_page_item", $classes)) ){

            $classes[]          = 'active';
        }

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		
		if( $item->object == 'page' )
        {
        	$page_post 			= get_post( $item->object_id );                
            $section_page 		= (get_post_meta( $item->object_id, "newave_is_page_section", true ) == 'yes');
            $disable_menu 		= (get_post_meta( $item->object_id, "newave_menu_disable_page", true ) == 'yes');
			$main_page_id 		= get_option( 'page_on_front' );
			
			if( !$disable_menu && ( $page_post->ID != $main_page_id ) ){

                if( !$bIsTopMenuItem ){
				    if ( !$section_page )
	                    $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url ) .'"' : '';
	                else{
	               	    if (is_front_page())
	               		    $attributes .= ' href="#' . $page_post->post_name . '"';
	               	    else
	               		    $attributes .= ' href="' . home_url() . '#' . $page_post->post_name . '"';
	                }
                }

	            $item_output = $args->before;
                if( !$bIsTopMenuItem ){
	                if ( $section_page && is_front_page() )
					    $item_output .= '<a class="collapse_menu1' . $menu_link_class . ' '. $attributes .'>';
				    else
					    $item_output .= '<a class="external' . $menu_link_class . ' '. $attributes .'>';
                }
                else{
                    $item_output .= '<a class="' . $menu_link_class . ' '. $attributes .'>';
                }
		
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;

                global $global_theme_options;
                $css_margin         = '';
                $margin             = '';
                $threshold_margin   = '';
                if( $global_theme_options['header_layout'] == 'v1' ){
                    if( trim(get_post_meta( $item->object_id, "newave_menu_item_margin_right", true )) != '' ){
                        $css_margin = ' style="margin-right: ' . get_post_meta( $item->object_id, "newave_menu_item_margin_right", true ) . 'px"';
                        $margin = ' data-margin-right="' . get_post_meta( $item->object_id, "newave_menu_item_margin_right", true ) . '"';
                    }

                    if( trim(get_post_meta( $item->object_id, "newave_menu_item_threshold_margin_right", true )) != '' ){
                        $threshold_margin = ' data-threshold-margin-right="' . get_post_meta( $item->object_id, "newave_menu_item_threshold_margin_right", true ) . '"';
                    }
                }

                $output .= $indent . '<li' . $id . $value . $class_names . $css_margin . $margin . $threshold_margin .'>';
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
				
			}
			
        }
        else {

            if( !$bIsTopMenuItem ){
        	    $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url ) .'"' : '';
            }
        	
        	$item_output = $args->before;
			$item_output .= '<a class="external' . $menu_link_class . ' '. $attributes .'>';
		
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

            $output .= $indent . '<li' . $id . $value . $class_names .'>';
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        	
        }
		
	}

	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		
		if( $item->object == 'page' )
        {
        	$page_post 			= get_post( $item->object_id );                
            $section_page 		= (get_post_meta( $item->object_id, "newave_is_page_section", true ) == 'yes');
            $disable_menu 		= (get_post_meta( $item->object_id, "newave_menu_disable_page", true ) == 'yes');
			$main_page_id 		= get_option( 'page_on_front' );
			
			if( !$disable_menu && ( $page_post->ID != $main_page_id ) ){
			
				// use the default behavior
			
			}
			else{
				return;
			}
		}
		
		$output .= "</li>\n";
	}

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown-menu\">\n";
    }

}
	
}

if ( ! function_exists( 'Slide_Menu_Walker::start_el' ) ){


class Slide_Menu_Walker extends Walker_Nav_Menu
{

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$bIsTopMenuItem  = false;
        if( in_array("menu-item-has-children", $classes) ){

            $bIsTopMenuItem = true;
			$classes[] 		= 'has-sub';
        }
		
		if( (in_array("current-menu-item", $classes)) || (in_array("current_page_item", $classes)) ){

            $classes[] = 'active';
        }
		
		/**
		 * Filter the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filter the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		//$atts['href']   = ! empty( $item->url )        ? $item->url        : ''; - we decide what's the href

		/**
		 * Filter the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param object $item  The current menu item.
		 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
		 * @param int    $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$menu_link_class	= ''; //add here classes regarding the menu links
		if( $item->object == 'page' )
        {
        	$page_post 			= get_post( $item->object_id );                
            $section_page 		= (get_post_meta( $item->object_id, "newave_is_page_section", true ) == 'yes');
            $disable_menu 		= (get_post_meta( $item->object_id, "newave_menu_disable_page", true ) == 'yes');
			$main_page_id 		= get_option( 'page_on_front' );
						
			if( !$disable_menu && ( $page_post->ID != $main_page_id ) ){

                if( !$bIsTopMenuItem ){
				    if ( !$section_page )
	                    $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url ) .'"' : '';
	                else{
	               	    if (is_front_page())
	               		    $attributes .= ' href="#' . $page_post->post_name . '"';
	               	    else
	               		    $attributes .= ' href="' . home_url() . '#' . $page_post->post_name . '"';
	                }
                }
				
				if( !$bIsTopMenuItem ){
	                if ( !$section_page ){
					    $menu_link_class = ' class="external"';
					}
                }

	            $item_output = $args->before;
				$item_output .= '<a'. $menu_link_class . $attributes .'>';
				/** This filter is documented in wp-includes/post-template.php */
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;

				/**
				 * Filter a menu item's starting output.
				 *
				 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
				 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
				 * no filter for modifying the opening and closing `<li>` for a menu item.
				 *
				 * @since 3.0.0
				 *
				 * @param string $item_output The menu item's starting HTML output.
				 * @param object $item        Menu item data object.
				 * @param int    $depth       Depth of menu item. Used for padding.
				 * @param array  $args        An array of {@see wp_nav_menu()} arguments.
				 */
				$output .= $indent . '<li' . $id . $class_names .'>';
 
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
				
			}
			
        }
        else {

            if( !$bIsTopMenuItem ){
        	    $attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url ) .'"' : '';
            }
        	
        	$item_output = $args->before;
			$item_output .= '<a class="external" ' . $attributes .'>';
			/** This filter is documented in wp-includes/post-template.php */
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			/**
			 * Filter a menu item's starting output.
			 *
			 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
			 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
			 * no filter for modifying the opening and closing `<li>` for a menu item.
			 *
			 * @since 3.0.0
			 *
			 * @param string $item_output The menu item's starting HTML output.
			 * @param object $item        Menu item data object.
			 * @param int    $depth       Depth of menu item. Used for padding.
			 * @param array  $args        An array of {@see wp_nav_menu()} arguments.
			 */
			$output .= $indent . '<li' . $id . $class_names .'>';
 
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        	
        }
	}
	
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		
		if( $item->object == 'page' )
        {
        	$page_post 			= get_post( $item->object_id );                
            $section_page 		= (get_post_meta( $item->object_id, "newave_is_page_section", true ) == 'yes');
            $disable_menu 		= (get_post_meta( $item->object_id, "newave_menu_disable_page", true ) == 'yes');
			$main_page_id 		= get_option( 'page_on_front' );
			
			if( !$disable_menu && ( $page_post->ID != $main_page_id ) ){
			
				// use the default behavior
			
			}
			else{
				return;
			}
		}
		
		$output .= "</li>\n";
	}

}
	
}

if( !function_exists('searchfilter') ){

	function searchfilter($query) {
		
		if ($query->is_search && !is_admin() ) {

			$query->set('post_type',array('post'));

		}
		return $query;

	}
	add_filter('pre_get_posts','searchfilter');

}

// Visual Composer
if ( function_exists( 'vc_set_as_theme' ) ) {
	require_once ( get_template_directory() . '/include/vc-config.php');
}

?>