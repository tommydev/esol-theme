//Gallery Slider
$(document).ready(function() {
$("#gallery-carousel").owlCarousel({
   autoPlay: 6000, //Set AutoPlay to 3 seconds
      pagination:false,
      navigation:true,
      navigationText:["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
      items :4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
    }); 
  });
   
 $(document).ready(function() { 
  $("#project-carousel").owlCarousel({
      autoPlay: 6000, //Set AutoPlay to 3 seconds
      pagination:false,
      navigation:true,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
  });
   }); 
  $(document).ready(function() { 
    $("#clients-carousel").owlCarousel({
      autoPlay: 6000, //Set AutoPlay to 3 seconds
      pagination:false,
      navigation:false,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      items :6,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
});
// Testimonials
$(document).ready(function() { 
$("#home-testimonial").owlCarousel({
   autoPlay: 6000, //Set AutoPlay to 3 seconds
      pagination:false,
      navigation:true,
      navigationText:["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
      items :2,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
    });  
   });
// Testimonials2
$(document).ready(function() {
  $("#testimonials2").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
  });	 
});   
// Blog slider
$(document).ready(function() { 
$("#home-blog").owlCarousel({
   autoPlay: 6000, //Set AutoPlay to 3 seconds
      pagination:false,
      navigation:true,
      navigationText:["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
      items :2,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
    });
	
   $("#blog-carousel").owlCarousel({
     autoPlay: 6000, //Set AutoPlay to 3 seconds
      pagination:false,
      navigation:true,
      navigationText:["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
      items :2,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
    });
	
   });
 // About slider
$(document).ready(function() {
  $("#about-carousel").owlCarousel({
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
  });	 
});
$(function() {
	 /*--Menu Dropdown--------*/ 
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });   

  /* Demo Scripts for Bootstrap Carousel and Animate.css */
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			   $this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#main-slider'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  		

	// Tooltip js	
	 $('[data-toggle="tooltip"]').tooltip(); 

});

/*-- Page Scroll To Top Section ---------------*/
	jQuery(document).ready(function () {
	
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.hc_scrollup').fadeIn();
			} else {
				jQuery('.hc_scrollup').fadeOut();
			}
		});
	
		jQuery('.hc_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	});	
	
	$(document).ready(function() { 	
   //Menu fixed top	
	  $('.header').affix({
      offset: {
        top: $('.header-top').height()
			  }
		});	
	//wow animation
      new WOW().init();		
});
//Number count
  jQuery(document).ready(function( $ ) {
       $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
 });
	
			
// Gallery filter with isotope
	  jQuery(document).ready(function( $ ) {
	
            var jQueryportfolio = jQuery('#isotope-portfolio-container');
            var jQueryfilter = jQuery('.portfolio-filter');
			var jQueryesol_gallery = jQuery('#isotope-gallery-container');
			
            jQuery(window).load(function () {
                // Initialize Isotope
				
				//portfolio
				jQueryportfolio.isotope({
                    itemSelector: '.portfolio-item-wrapper'
                });
                jQuery('.portfolio-filter a').click(function () {
                    var selector = jQuery(this).attr('data-filter');
                    jQueryportfolio.isotope({ filter: selector });
                    return false;
                });
                jQueryfilter.find('a').click(function () {
                    var selector = jQuery(this).attr('data-filter');
                    jQueryfilter.find('a').parent().removeClass('active');
                    jQuery(this).parent().addClass('active');
                });
                
            });
         
	    });