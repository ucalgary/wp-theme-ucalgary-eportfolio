<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package uc-eportfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
			<!--
			
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'uc-eportfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'uc-eportfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'uc-eportfolio' ), 'uc-eportfolio', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		
			-->
			
			Taylor Institute for Teaching and Learning, Educational Development Unit<br>
			University of Calgary
			





		

			
		
		</div><!-- .site-info -->
		
		
		<!-- only front page -->
		
		<?php
			
		if(is_front_page() && basename($_SERVER['PHP_SELF']) != "wp-signup.php"){			
					
		?>
		
		<div class="footer-content">

			<?php
			
			
			
			$query = new WP_query('pagename=about-ucalgary-eportfolio');	
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

		<?php
		
		}
			
		?>

		
		
		<div class="footer-link">
					<a href="http://ucalgary.ca/taylorinstitute/edu/">http://ucalgary.ca/taylorinstitute/edu/</a>
		</div>		

		
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
