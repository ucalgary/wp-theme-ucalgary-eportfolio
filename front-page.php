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



			<div class="section-title">
			
				<h1>Why Create an ePortfolio?</h1>		
			
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



			<div class="section-title">
			
				<h1>How can an ePortfolio be used?</h1>		
			
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

		<section id="front-getting-started">


			<div class="section-title">
			
				<h1>Getting Started</h1>	
				
			</div>

			<div class="section-content">


			<?php
			
			$query = new WP_query('pagename=getting-started');	
			if($query->have_posts()){
				while($query->have_posts()){
					$query->the_post();
					echo '<div class="entry-content">';
					the_content();
					echo '</div>';	
				}
			}		
			wp_reset_postdata();	
			

			$query = new WP_query('pagename=login-options');	
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
