<div class='newave_metabox'>

<?php

$this->upload(	'portfolio_item_thumbnail_image',
                'Thumbnail Image',
                'Thumbnail image for this portfolio item. If empty the first featured image will be displayed in portfolio.'
             );

$this->select(	'portfolio_item_thumbnail_size',
				'Thumbnail Size',
				array('normal' => 'Normal', 'big' => 'Big'),
				'Select how thumbnail is displayed.'
            );
			
$this->upload(	'portfolio_item_cover_image',
                'Expander Cover Image',
                'Cover image (only) for Normal and Slider expanders.'
             );
			 
$this->select(	'portfolio_item_layout',
				'Layout type',
				array('normal' => 'Normal', 'slider' => 'Slider', 'full_screen' => 'Full Screen Slider', 'external' => 'External Project', 'external_slider' => 'External Project With Full Slider', 'image_popup' => 'Image Popup'),
				'The type of layour for this portfolio item. External projects open in a separate page. Except popup the rest are inline expanders.'
            );

$this->upload(	'portfolio_item_external_header_image',
                'External Project Header Background Image:',
                'If layout type is external, this is the header image in project page.'
             );

$this->text(	'portfolio_item_external_header_subtitle',
                'External Project Header Subtitle',
                'If layout type is external, this is the header caption in project page.'
            );

$this->select(	'portfolio_item_external_header_text_alignment',
                'External Project Header Text Alignment',
                array('center' => 'Center', 'left' => 'Left', 'right' => 'Right'),
                'Text alignment for header caption.'
            );
?>

</div>