<div class='newave_metabox'>

<?php

$this->upload(	'main_slider_image',
                'Background Image',
                'Upload background image for the slide'
             );

$this->select(	'main_slider_background_repeat',
				'Background Repeat:',
				array('no' => 'No', 'yes' => 'Yes'),
				''
            );

$this->text(	'main_slider_overlay_color',
                'Overlay Color:',
                'Slide overlay color as hexadecimal value (example #FFFFFF)'
           );
		   
$this->text(	'main_slider_overlay_color_opacity',
                'Overlay Color Opacity:',
                'Slide overlay color opacity. From 0.0 (fully transparent) to 1.0 (fully opaque)'
           );
		   
$this->select(	'main_slider_caption_alignment',
				'Caption alignment:',
                array(
                    'center-center' => 'Center-Center',
                    'center-left' => 'Center-Left',
                    'center-right' => 'Center-Right',
                    'bottom-center' => 'Bottom-Center',
                    'bottom-left' => 'Bottom-Left',
                    'bottom-right' => 'Bottom-Right',
                    'top-center' => 'Top-Center',
                    'top-left' => 'Top-Left',
                    'top-right' => 'Top-Right',
                ),
				''
            );		   

$this->select(	'main_slider_content_type',
				'Content Type:',
				array('light' => 'Light', 'dark' => 'Dark'),
				''
            );			
?>

</div>