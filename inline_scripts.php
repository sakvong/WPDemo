<?php global $global_theme_options; ?>

<?php 
	if( is_page_template( 'one-page.php' ) && !empty($global_theme_options['contact_show_map']) ) {
?>    
    <style type="text/css">
	#map_canvas{
		<?php 
                    if($global_theme_options['gmap_width']){
                        echo 'width:'.$global_theme_options['gmap_width'].';';
                    } else {
                        echo 'width:100%;';
                    }

                    if($global_theme_options['gmap_height']){
                        echo 'height:' . $global_theme_options['gmap_height'] . ';';
                    } else {
                        echo 'height:500px;';
                    }
        ?>
	}
    .map-overlay.overlay-hide {
        <?php
                if($global_theme_options['gmap_height']){
                    echo 'margin-top:-' . $global_theme_options['gmap_height'] . ';';
                } else {
                    echo 'margin-top:-500px;';
                }
        ?>
        </style>
<?php
    }
?>
            