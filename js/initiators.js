
//BuggyFill for iOS and browsers that don't like vh units
window.viewportUnitsBuggyfill.init();

$(document).ready(function() {

	/* Off Canvas nav */
	$(".open-panel").click(function(){
  
		$("html").toggleClass("openNav");
		//$('#page').toggleClass('open');
	});
	
		//Click anywhere in primary content area to close menu
		$('main').click(function() {
			$('html').removeClass('openNav');
			//$('#page').removeClass('open');
		});
	

	  $('.flexslider').flexslider({
	    animation: "slide"
	  });

	//Homemade accordion - opens multiple items at once
	$('.accordion .head').click(function() {
			$(this).toggleClass('active');
		$(this).next().toggle('medium');
		return false;
	}).next().hide();

	$( ".tabs" ).tabs();

	$('.test-popup-link').magnificPopup({ 
	  type: 'image'
		// other options
	});


	//Form test
	$('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
}); //end document ready



//Header change to solid when scroll below slier
$(window).scroll(function() {
	var scroll = $(window).scrollTop();

	//Reveal Top link 
	if (scroll >= 300) {
		$("#masthead").addClass("solid");
	} else {
		$("#masthead").removeClass("solid");
	}

}); //end window scroll

