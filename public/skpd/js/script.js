	
$(document).ready(function(){

	

	
	// Blur images on mouse over
	$(".works a").hover( function(){ 
		$(this).children("img").animate({ opacity: 0.75 }, "fast"); 
	}, function(){ 
		$(this).children("img").animate({ opacity: 1.0 }, "slow"); 
	}); 
	
	//works Mouse Effects
	$('.item').mouseenter(function(e) {
		$(this).find('.overlay-block').fadeIn(1000,'swing');
		
	});
	
	$('.item').mouseleave(function(e) {
		$('.item').find('.overlay-block').fadeOut(100);
	});

	

	
	// Initialize prettyPhoto plugin
	$(".portfolio a[data-gal^='prettyPhoto']").prettyPhoto({
		theme:'light_square', 
		autoplay_slideshow: false, 
		overlay_gallery: false, 
		show_title: false
	});

	// Clone portfolio items 
	var $data = $(".portfolio").clone();
	
	// Attempt to call Quicksand on every click event handler
	$(".filter a").click(function(e){
		
		
		
		$(".filter li").removeClass("current");	
		
		// Get the class attribute value of the clicked link
		var $filterClass = $(this).parent().attr("class");

		if ( $filterClass == "all" ) {
			var $filteredPortfolio = $data.find("li");
		} else {
			var $filteredPortfolio = $data.find("li[data-type~=" + $filterClass + "]");
		}
		
		
		
		// Call quicksand
		$(".portfolio").quicksand( $filteredPortfolio, { 
			duration: 800, 
			easing: 'easeInOutQuad' 
		}, function(){
			
			//HERE WE ARE INVOKING CALLBACK THROUGHT THE SAME FUNCTIONS FOR OVERLAY AND PRETTYPHOTO, 
			//SO EACH TIME WHEN FILTERED EVERYTHING WILL WORK PROPERLY:
			
							// Blur images on mouse over
							$(".works a").hover( function(){ 
								$(this).children("img").animate({ opacity: 0.75 }, "fast"); 
							}, function(){ 
								$(this).children("img").animate({ opacity: 1.0 }, "slow"); 
							}); 
							
							//works Mouse Effects
							$('.item').mouseenter(function(e) {
								$(this).find('.overlay-block').fadeIn(1000,'swing');
								
							});
							
							$('.item').mouseleave(function(e) {
								$('.item').find('.overlay-block').fadeOut(100);
							});
						
						
							
							// Initialize prettyPhoto plugin
							$(".portfolio a[data-gal^='prettyPhoto']").prettyPhoto({
								theme:'light_square', 
								autoplay_slideshow: false, 
								overlay_gallery: false, 
								show_title: false
							});

	
		});

		
		

		$(this).parent().addClass("current");

		// Prevent the browser jump to the link anchor
		e.preventDefault();
	})
});