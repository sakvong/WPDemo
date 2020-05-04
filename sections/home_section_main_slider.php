<?php
/**
 * Created by Clapat.
 * Date: 17/09/15
 * Time: 1:54 PM
 */

global $global_theme_options;

wp_localize_script( 'scriptsjs',
                    'MainSliderOptions',
                    array(  "slider_direction"   => $global_theme_options['home_main_slider_direction'],
                            "slider_speed"       => ($global_theme_options['home_main_slider_speed'] * 1000),
                            "slider_autoplay"    => ( ($global_theme_options['home_main_slider_autoplay'] == 'Yes') ? true : false),
                            "slider_transition"  => $global_theme_options['home_main_slider_transition'] ) );

require_once ( get_template_directory() . '/include/util_functions.php');

$hero_classes = '';
if( $global_theme_options['home_main_slider_hero_position'] == 'parallax' ){
	
	$hero_classes .= 'parallax-hero ';
}
if( $global_theme_options['home_main_slider_hero_position'] == 'static' ){
	
	$hero_classes .= 'static-hero ';
}
if( $global_theme_options['home_main_slider_hero_opacity'] == 'yes' ){
	
	$hero_classes .= 'opacity-hero ';
}

?>

	<div id="<?php echo $post->post_name; ?>">
	
		<!-- Hero --> 
        <div id="hero">
			<div id="hero-styles"<?php if( !empty( $hero_classes ) ){ echo 'class="'. esc_attr( $hero_classes ) . '"';} ?>>

			<!-- Full Screen Slider -->
        	<div class="clapat-slider delay-slides">

                    <?php

                    $args = array(
                        'post_type' => 'newave_main_slider',
                        'orderby'   => 'menu_order',
                        'order'     => 'ASC',
						'posts_per_page' => -1
                    );

                    $query_slides = new WP_Query( $args );

                    if( $query_slides->have_posts() ){

                    ?>

                <ul class="slides">

                    <?php
						$first_slide = true;
                        while ( $query_slides->have_posts() ) {

                            $query_slides->the_post();

                            $image_path = get_post_meta( get_the_ID(), 'newave_main_slider_image', true );
                           
                            $bknd_repeat  = get_post_meta( get_the_ID(), 'newave_main_slider_background_repeat', true );
                            $style_repeat = '';
                            if( $bknd_repeat == 'yes'){

                                $style_repeat = 'background-repeat: repeat; ';
                            }

                            $caption_alignment = get_post_meta( get_the_ID(), 'newave_main_slider_caption_alignment', true );

                            $overlay_color   = get_post_meta( get_the_ID(), 'newave_main_slider_overlay_color', true );
                            $overlay_opacity = get_post_meta( get_the_ID(), 'newave_main_slider_overlay_color_opacity', true );
                            $overlay_rgba    = clapat_hex2rgba( $overlay_color, $overlay_opacity );

                            $content_type    = get_post_meta( get_the_ID(), 'newave_main_slider_content_type', true );
                            $class_content_type = '';
							$class_slide_background = '';
                            if( $content_type == 'light' ){

                                $class_content_type = ' light-content';
								$class_slide_background = 'class="dark-bg" ';
                            }
							
							$animated_class = '';
							if( $first_slide ){
								
								$animated_class = 'animated';
								$first_slide = false;
							}

                    ?>

                        <!-- Slide -->
                        <li <?php echo wp_kses_post( $class_slide_background ); ?> style="<?php echo esc_attr( $style_repeat ); ?>background-image:url(<?php echo esc_url( $image_path ); ?>)">
                            <div class="overlay" style="background-color:<?php echo esc_attr( $overlay_rgba ); ?>">
                                <!-- Slide Caption -->
                                <div class="clapat-caption <?php echo sanitize_html_class( $animated_class ); ?> <?php echo sanitize_html_class( $class_content_type ); ?>">
                                    <div class="caption-content <?php echo sanitize_html_class( $caption_alignment ); ?>">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <!--/Slide Caption -->
                            </div>
                        </li>
                        <!--/Slide -->

                    <?php

                        } // while posts

                    ?>

                </ul>

                    <?php
                    }
                    else{

                        esc_html_e('There are no slides defined. You can create them in admin dashboard under Main Slider.', 'newave_theme' );
                    }

                    wp_reset_postdata();

                    ?>

            </div>
			<div id="static-slider-nav"></div>
			<!-- /Full Screen Slider -->
			
			</div>
		<!-- /Hero --> 
        </div>
		
	</div>	