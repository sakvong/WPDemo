<?php

// more widgets in the (near) future...

// Register widgetized locations
if(function_exists('register_sidebar')) {
	
        register_sidebar(array(
		'id' => 'blog-sidebar',
        'name' => __('Blog Sidebar', 'newave_theme'),
        'description'   => __('Sidebar displayed in the blog and single post pages', 'newave_theme'),
		'before_widget' => '<div class="widget %2$s clearfix">',
		'after_widget' => '</div>',
		'before_title' => '<div class="heading"><h4>',
		'after_title' => '</h4></div>',
	));

}

?>