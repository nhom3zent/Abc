$(document).ready(function(){
	$('a[href*="#"]')
  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });

	
		$(".all").on("click", function() {
			$(".portfolio-img").show();
			// $(".portfolio-img").hasClass(".portfolio-img").show();
	    });
	    $(".diamond-img").on("click", function() {
	        $(".portfolio-img").show();
	        $(".portfolio-img").not(".diamond").hide();
	    });
	    $(".ruby-img").on("click", function() {
	        $(".portfolio-img").show();
	        $(".portfolio-img").not(".rubi").hide();
	    });
	    $(".quazit-img").on("click", function() {
	        $(".portfolio-img").show();
	        $(".portfolio-img").not(".quazit").hide();
	    });
	    $(".gold-img").on("click", function() {
	        $(".portfolio-img").show();
	        $(".portfolio-img").not(".gold").hide();
	    });
	    $(".silver-img").on("click", function() {
	        $(".portfolio-img").show();
	        $(".portfolio-img").not(".silver").hide(); 
	        
	    });


	    $(".op1").on("click", function() {
	    	// $("#body").show();
	    	
	    	// $("#body").not(".lb1").hide();
	    	// $(".isotope").hide();
	    	$("#body").hide();
	    	// $(".isotope").not(".lb1").hide();
	    	$(".lb1").css('display', 'inline')
	    })
	    $(".lb1").on("click", function() {
	    	$(".lightbox").hide();
	    	$(".isotope").show();
	    })
});