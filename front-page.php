<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package uc-eportfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section id="front-eportfolio">
		
		
			<div class="section-icon">
						<img src="<?php echo get_template_directory_uri().'/images/ep_icon_3_blue.png'; ?>" >	
	
			</div>
		

		
			<div class="section-title">
				
			<h1>UCalgary ePortfolio</h1>			
			
			</div>
		
		
			<div class="section-content">
		
			<?php
			
			$query = new WP_query('pagename=ucalgary-eportfolio');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	
			
				
			?>

			
			</div>

		</section>

		<section id="front-why">


			<div class="section-icon" >
						<img src="<?php echo get_template_directory_uri().'/images/ep_icon_13_orange.png'; ?>" />	
	
			</div>


			<div class="section-title">
			
				<h1>Why should I create an ePortfolio?</h1>		
			
			</div>


			<div class="section-content">



			<?php
			
			$query = new WP_query('pagename=why');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	
			
				
			?>


			</div>

		</section>

		<section id="front-how">

			<div class="section-icon" >
						<img src="<?php echo get_template_directory_uri().'/images/ep_icon_4_yellow.png'; ?>" />	
	
			</div>

			<div class="section-title">
			
				<h1>How should I use an ePortfolio?</h1>		
			
			</div>


			<div class="section-content">



			<?php
			
			$query = new WP_query('pagename=how');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	
			
				
			?>


			</div>

		</section>

		<section id="front-steps">
			
			<div class="section-icon" style="margin: auto; text-align: center; padding-top: 40px;">
						<img src="<?php echo get_template_directory_uri().'/images/ep_icon_16_green.png'; ?>" />	
	
			</div>


			<div class="section-title">
			
				<h1>4 Steps for creating an ePortfolio</h1>		
			
			</div>
			
			<?php
			
			$query = new WP_query('pagename=steps');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	
			?>			
			
		</section>


		<section id="front-getting-started">

			<div class="section-icon" style="margin: auto; text-align: center; padding-top: 40px;">
						<img src="<?php echo get_template_directory_uri().'/images/ep_icon_11_red.png'; ?>" />	
	
			</div>
			<div class="section-title">
			
				<h1>Getting Started</h1>	
				
			</div>

			<div class="section-content">


			<?php

			

			$query = new WP_query('pagename=register');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	


			$query = new WP_query('pagename=create-site');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();				
			
				
			?>

			</div>

		</section>
		


		<section id="front-resources">

			<div class="section-icon" >
						<img src="<?php echo get_template_directory_uri().'/images/ep_icon_17_gray.png'; ?>" />	
	
			</div>

			<div class="section-title">
			
				<h1>Resources</h1>		
			
			</div>


			<div class="section-content">



			<?php
			
			$query = new WP_query('pagename=resources');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	
			
				
			?>


			</div>

		</section>		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>
