	<!-- Portfolio -->
	<section id="<?php echo $post->post_name; ?>" class="content" style="background-color:#FFF">
    		
        <!-- Container -->
		<div class="container portfolio-title">

            <?php if( get_post_meta( $post->ID, "newave_show_page_title", true ) == "yes" ){ ?>
            <!-- Section Title -->
            <div class="section-title">
                <h1><?php the_title(); ?></h1>
                <span class="border"></span>
                <p><?php echo get_post_meta(get_the_ID(), 'newave_page_subtitle', true); ?></p>
            </div>				
			<!--/Section Title -->
            <?php } ?>
            
        </div> 
        <!-- Container -->  
          
          
          
          
          
        <div class="portfolio-top"></div>          
        
        <?php
			global $global_theme_options;
			 
			$portfolio_columns = 4;
			if( isset($global_theme_options['portfolio_columns']) && $global_theme_options['portfolio_columns'] ){

				$portfolio_columns = $global_theme_options['portfolio_columns'];
			}
		?>
        <!-- Portfolio Plus Filters -->
        <div class="portfolio" data-col="<?php echo esc_attr( $portfolio_columns ); ?>">
        
            
     
       <?php
      
       $style_filters = '';
       if( isset( $global_theme_options['show_portfolio_filter'] ) && ($global_theme_options['show_portfolio_filter'] != 1) ){

           $style_filters = 'style="display: none"';
       }
	   
	   $class_filters = '';
       if( isset( $global_theme_options['portfolio_filters_style'] ) && ($global_theme_options['portfolio_filters_style'] == 'modern') ){

           $class_filters = ' modern-filters';
       }

       ?>
       <!-- Portfolio Filters -->   
       <div  id="filters" class="sixteen columns<?php echo esc_attr( $class_filters ); ?>" <?php echo $style_filters; ?>>
    
          <ul class="clearfix">
          
            <li><a id="all" href="#" data-filter="*" class="active"><h5><?php esc_html_e('All', 'newave_theme'); ?></h5></a></li>
            <?php
             
            	$portfolio_category = get_terms('portfolio_category', array( 'hide_empty' => 0 ));
            
            	if($portfolio_category){
            		
            		foreach($portfolio_category as $portfolio_cat){
            ?>
            <li><a href="#" data-filter=".<?php echo $portfolio_cat->slug; ?>"><h5><?php echo  $portfolio_cat->name; ?></h5></a></li>         	
            <?php                      
                    }
				}
            ?>	
            
          </ul>
        </div>
        <!--/Portfolio Filters -->
    
       
             
        <!-- Portfolio Wrap -->  
        <div id="portfolio-wrap"<?php if( !$global_theme_options['portfolio_margins'] ) { echo ' class="no-gutter"'; } ?>>
        
            <?php

            $portfolio_hover = 'overlay';
            if( isset( $global_theme_options['portfolio_hover_effect'] ) && $global_theme_options['portfolio_hover_effect']  ){

                $portfolio_hover = $global_theme_options['portfolio_hover_effect'];
            }
            if( $portfolio_hover == 'slide' ){

                get_template_part('sections/portfolio_section_slide');
            }
			else if( $portfolio_hover == 'modern' ){

                get_template_part('sections/portfolio_section_modern');
            }
            else{

                get_template_part('sections/portfolio_section_overlay');
            }
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