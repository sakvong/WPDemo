<?php

// Archive template for portfolio categories

get_header();

get_template_part('sections/menu_section');

// retrieve the background color for this section. A section has gray background (#f5f5f5) by default, therefore
// we care only if the section has white background
$section_style = 'style="background-color:#FFF;"';
    
$container_type = 'normal';
if( $container_type == 'normal' ){

    $container_type = '';
}
else if( $container_type == 'small' ){

    $container_type = 'small-width';
}
else if( $container_type == 'full' ){

    $container_type = 'full-width';
}
else {

    $container_type = '';
}

?>

	<!-- Portfolio -->
	<section class="content" <?php echo $section_style; ?> >
    		
        <!-- Container -->
		<div class="container portfolio-title">

            <!-- Section Title -->
            <div class="section-title">
                <h1><?php single_cat_title(); ?></h1>
            </div>				
			<!--/Section Title -->
            
        </div> 
        <!-- Container -->  
          
          
        <div class="portfolio-top"></div>          
        
        <?php $portfolio_columns = 4; ?>
		
        <!-- Portfolio Plus Filters -->
        <div class="portfolio" data-col="<?php echo esc_attr( $portfolio_columns ); ?>">
       
        <?php $style_filters = 'style="display: none"'; ?>
	   
        <!-- Portfolio Filters -->   
        <div  id="filters" class="sixteen columns<?php echo esc_attr( $class_filters ); ?>" <?php echo $style_filters; ?>>
			<ul class="clearfix">
				<li><a id="all" href="#" data-filter="*" class="active"><h5><?php esc_html_e('All', 'newave_theme'); ?></h5></a></li>
            </ul>
        </div>
        <!--/Portfolio Filters -->
             
        <!-- Portfolio Wrap -->  
        <div id="portfolio-wrap" class="no-gutter">
        
        
        <?php
			// preset with infinite number of portfolio items
			$portfolio_hover = 'overlay';
            
            global $global_theme_options;

        			
            while( have_posts() ){
            	
            	the_post();

                $thumbnail_image = trim( get_post_meta( get_the_ID(), 'newave_portfolio_item_thumbnail_image', true ) );
                if( has_post_thumbnail() || !empty( $thumbnail_image ) ){
	
                 	$item_classes 		= '';
                 	$item_categories 	= '';
					$item_cats = get_the_terms($post->ID, 'portfolio_category');
					if($item_cats){

                        foreach($item_cats as $item_cat) {
                            $item_classes 		.= $item_cat->slug . ' ';
                            $item_categories 	.= $item_cat->name . ' / ';
                        }
                        $item_categories = rtrim($item_categories, ' / ');

					}
					
					if( get_post_meta(get_the_ID(), 'newave_portfolio_item_thumbnail_size', true) == 'big' ){
						
						$item_classes .= 'wide';
					}
					
					$full_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
					if( empty( $thumbnail_image ) ){
						
						$thumbnail_image = $full_image[0];
					}
        ?>
        
            <!-- Portfolio Item -->                 
            <div class="portfolio-item one-four <?php echo $item_classes; ?>">
            
            <div class="portfolio-image" style="background-image: url('<?php echo esc_url( $thumbnail_image ); ?>')">
            </div>
            
            <?php
				$post_layout = get_post_meta(get_the_ID(), 'newave_portfolio_item_layout', true);
				
				if( $post_layout == "image_popup" ){ ?>

                <a title="<?php the_title(); ?>" rel="prettyPhoto[<?php echo $post->ID; ?>]" href="<?php echo $full_image[0]; ?>">

            <?php } ?>
            <?php if( ($post_layout == "external") || ($post_layout == "external_slider") ){ ?>
                <a href="<?php the_permalink(); ?>" class="external">
            <?php } ?>
            <div class="project-overlay">
                <?php
                if( ($post_layout == "normal") || ($post_layout == "slider") || ($post_layout == "full_screen") ){
                    ?>
                    <div class="open-project-link">
                        <a class="open-project" href="<?php the_permalink(); ?>" title="Open Project"></a>
                    </div>
                <?php
                }
                ?>
                <div class="project-info">
                	<div class="zoom-icon"></div>
                    <h4 class="project-name"><?php the_title(); ?></h4>
                    <p class="project-categories"><?php echo $item_categories; ?></p>	
                </div>
            </div>
            <?php if( $post_layout == "image_popup" ){ ?>
            </a>

            <?php

                $i = 2;
                $images_no = 5;
                if( function_exists( 'get_portfolio_featured_images_no' ) ){
                    $images_no = get_portfolio_featured_images_no();
                }

                while( $i <= $images_no ) {

                    $image_url = "";
                    if (class_exists('MultiPostThumbnails')) {

                        $image_url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'featured-image-'.$i);
                    }

                    $i++;

                    if( $image_url != "" ) {
            ?>
                        <a title="<?php the_title(); ?>" style="display:none" rel="prettyPhoto[<?php echo $post->ID; ?>]" href="<?php echo $image_url; ?>"></a>
            <?php

                    } // if image url is not empty

                } // while images

            ?>

            <?php } ?>
            <?php if( ($post_layout == "external") || ($post_layout == "external_slider") ){ ?>
            </a>
            <?php } ?>
              
            </div>
            <!--/Portfolio Item -->       
        
       <?php
                 } // if post has thumbnail
                 
            } // while gallery has posts 
       ?>
		
                 
       </div>
       <!--/Portfolio Wrap -->
            
        </div>
        <!--/Portfolio Plus Filters -->
        
        
        <div class="portfolio-bottom"></div>
        
        
        <!-- Project Page Holder-->
        <div id="project-page-holder">
            
			<div id="loader-line-box">
				<div id="loader-line-value"></div>
			</div>
			
            <div class="clear"></div>
            <div id="project-page-data"></div>
        
        </div>
        <!--/Project Page Holder-->

             
	</section>	
	<!--/Portfolio -->

<?php

get_footer();

?>