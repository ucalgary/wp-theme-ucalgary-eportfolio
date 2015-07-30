jQuery(document).ready(function($){
	
	
	$('a[title="home-menu"]').addClass('active-menu');
	
	
	/* Scroll to specific section on front page */
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			
			
			$('.main-navigation li a').removeClass('active-menu');
			$(this).addClass('active-menu');
			
			
			//hide menu
			if($('#site-navigation').hasClass('toggled')){
				$('#site-navigation').removeClass('toggled');
			}
			else{
				$('#site-navigation').addClass('toggled');
			}
			
			
			
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					
					if($('body').hasClass('logged-in')){
					
						$('html,body').animate({
							scrollTop: (target.offset().top - 78)
						}, 500);					
					}
					
					else{
					
						$('html,body').animate({
							scrollTop: (target.offset().top - 46)
						}, 500);
					
					}
					
					return false;
				}
			}
		});
	});
		
	
	
	
});