<?php
global $global_theme_options;

$logo_path = $global_theme_options['logo_v5'];
if( !$logo_path ){
    $logo_path = get_template_directory_uri() . "/images/logo.png";
}

?>	
	
	<div id="black-fade" class="display-hide"></div>
	<div id="logo" class="logo-fixed"><a class="external" href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url( $logo_path ); ?>" alt=""></a></div>
    <button class="hamburger hamburger-rotate"><span>toggle menu</span></button>
	<!--Header -->
	<header class="slide-menu">
    	<div class="outer navbar">
            <div class="inner">
                <nav>
                    <?php
                        if( has_nav_menu('main') ){
                			wp_nav_menu(array(
                  				'theme_location' => 'main',
                  				'container' => '',
                  				'menu_class' => 'nav',
                  				'menu_id' => 'nav',
                  				'echo' => true,
                  				'walker' => new Slide_Menu_Walker(),
                  				'depth' => 0 
							));
                        }
                        else{
                    ?>
                        <p class="no-main-menu-text">
                    <?php
                        _e('There is no Main Menu assigned!', 'newave_theme');
                    ?>
						</p>

                    <?php
                        }
              		?>
                </nav>
            </div>
        </div>
    </header>
    <!--/Header -->