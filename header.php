<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package uc-eportfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'uc-eportfolio' ); ?></a>


	<nav id="site-navigation" class="main-navigation"  role="navigation">
		
			<div class="nav-container">
		
			<div class="site-logo">UCALGARY EPORTFOLIOS</div>
			
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
			
			<div class="top-menu-container">
			
			<?php 
				
				if(is_front_page() && basename($_SERVER['PHP_SELF']) != "wp-signup.php"){
					
					wp_nav_menu( array( 'menu' => 'Front Page Menu'));
					
				}
				else{
				
					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'depth' => '1' ) ); 
				
				}
				?>
				
			</div>	
			
			<div class="clear"></div>
			
			</div>
			
	</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header" role="banner">
		
		
		<?php if ( get_header_image() && ('blank' == get_header_textcolor() ) ) : ?>
		
		<div class="header-image">
			<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
			<?php endif; // End header image check. ?>		
		</div>
		
		
		<?php endif; ?>
		
		
		<?php 
			if ( get_header_image() && !('blank' == get_header_textcolor()) ) { 
				echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">'; 
    		} else {
				echo '<div class="site-branding">';
    		}
		?>	

			<div class="header-image-overlay">
		
				<div class="title-box">
		
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
					<p class="site-description"><?php 
				
						//For TI EDU Tagline, change it to multiline
				
						//bloginfo( 'description' ); 
						$tagline = get_bloginfo("description", '');
						echo str_replace(", ", "<br>", $tagline, $count);	
				
					?></p>
					<!--<a class="btn btn-default" href="#" role="button">Link</a>-->
		
				</div>
		
			</div><!-- .header-image-overlay -->
		
		</div><!-- .site-branding -->
		
		
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
