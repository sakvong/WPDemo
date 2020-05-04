<?php

$item_categories 	= '';
$item_cats = get_the_terms($post->ID, 'portfolio_category');
if($item_cats){

    foreach($item_cats as $item_cat) {
        $item_categories 	.= $item_cat->name . ' / ';
    }
    $item_categories = rtrim($item_categories, ' / ');

}
	
?>

    <!-- Project Close Button -->
    <ul id="project-page-button" class="clearfix">
        <li><a id="project_close" class="icon-awesome" href="#" title="<?php _e('Close Project', 'newave_theme'); ?>"><i class="fa fa-times-circle-o"></i></a></li>
    </ul>
    <!--/Project Close Button -->

	<?php
	$cover_image = get_post_meta(get_the_ID(), 'newave_portfolio_item_cover_image', true);
	if( !empty( $cover_image ) ){
	?>	
	<div class="expander-cover" style="background-image:url('<?php echo esc_url( $cover_image ); ?>')"></div>
	<?php } ?>
	<!-- Container-->    
    <div class="container small-width no-padding ">
    
    
    
        <!-- Section Title -->
        <div class="project-section-title">
            <h1><?php the_title(); ?></h1>    
            <p><?php echo $item_categories; ?></p>
        </div>				
        <!--/Section Title -->
        
        <?php the_content(); ?>

    </div>    
    <!--/Container-->