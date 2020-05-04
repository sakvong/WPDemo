 <div class="newave_metabox">

<?php
	$this->radio( 'page_external_default_container',
				'Container Type:',
                array('normal' => 'Normal', 'small' => 'Small', 'full' => 'Full'),
				''
            );
			
	$this->upload( 'page_external_header_image',
                'Header background image',
                'Upload background image for the page header'
             );
			 
	$this->select(	'page_external_header_position',
				'Header content type:',
				array('normal' => 'Normal', 'parallax' => 'Parallax', 'static' => 'Static'),
				''
            );

	$this->select(	'page_external_header_opacity',
				'Header opacity:',
				array('no' => 'No', 'yes' => 'Yes'),
				''
            );

	$this->text( 'page_external_header_overlay_color',
                'Header overlay color:',
                'Page header overlay color as hexadecimal value (example #FFFFFF)'
           );
		   
	$this->text( 'page_external_header_overlay_color_opacity',
                'Header overlay color opacity:',
                'Header overlay color opacity. From 0.0 (fully transparent) to 1.0 (fully opaque)'
           );
	
	$this->textarea( 'page_external_header_caption',
                'Header caption:',
                'HTML content displayed on top of the header image.'
           );
		   
	$this->select(	'page_external_header_caption_alignment',
				'Header caption alignment:',
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

	$this->select(	'page_external_header_content_type',
				'Header content type:',
				array('light' => 'Light', 'dark' => 'Dark'),
				''
            );
	
?>

</div>