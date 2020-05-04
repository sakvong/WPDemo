<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>

    <?php global $global_theme_options; ?>
    
    <link rel="shortcut icon" href="<?php if( $global_theme_options['favicon'] ){ echo $global_theme_options['favicon']; } else { echo get_template_directory_uri()."/images/favicon.ico"; } ?>">

    <?php wp_head(); ?>
</head>
<?php
$body_class = 'animsition';
if( $global_theme_options['enable_small_title']  ){
	
	$body_class .= ' small-border-title';
}
?>
<body <?php body_class( $body_class ); ?> data-spy="scroll" data-target=".navbar" data-offset="75">
