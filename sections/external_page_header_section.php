<?php

$image_path = get_post_meta( get_the_ID(), 'newave_page_external_header_image', true );

$caption 			= get_post_meta( get_the_ID(), 'newave_page_external_header_caption', true );                           
$caption_alignment 	= get_post_meta( get_the_ID(), 'newave_page_external_header_caption_alignment', true );

$overlay_color   = get_post_meta( get_the_ID(), 'newave_page_external_header_overlay_color', true );
$overlay_opacity = get_post_meta( get_the_ID(), 'newave_page_external_header_overlay_color_opacity', true );
$overlay_rgba    = clapat_hex2rgba( $overlay_color, $overlay_opacity );

$content_type    = get_post_meta( get_the_ID(), 'newave_page_external_header_content_type', true );
$class_content_type = '';
if( $content_type == 'light' ){
    $class_content_type = ' light-content';
}

$hero_classes = '';
if( get_post_meta( get_the_ID(), 'newave_page_external_header_position', true ) == 'parallax' ){
	
	$hero_classes .= 'parallax-hero ';
}
if( get_post_meta( get_the_ID(), 'newave_page_external_header_position', true ) == 'static' ){
	
	$hero_classes .= 'static-hero ';
}
if( get_post_meta( get_the_ID(), 'newave_page_external_header_opacity', true ) == 'yes' ){
	
	$hero_classes .= 'opacity-hero ';
}
?>

	<!-- Hero --> 
    <div id="hero">
		<div id="hero-styles"<?php if( !empty( $hero_classes ) ){ echo 'class="'. esc_attr( $hero_classes ) . '"';} ?>>
			<div class="hero-image" style="background-image:url(<?php echo esc_url( $image_path ); ?>)">
            	<div class="overlay" style="background-color:<?php echo esc_attr( $overlay_rgba ); ?>">
                    <!-- Slide Caption -->
                    <div class="clapat-caption animated<?php echo esc_attr( $class_content_type ); ?>">
                        <div class="caption-content <?php echo esc_attr( $caption_alignment ); ?>">
                            <?php echo wp_kses( $caption, wp_kses_allowed_html( 'post' ) ); ?>
                        </div>
                    </div>
                    <!--/Slide Caption -->
                </div>
            </div>
		</div>
	</div>	