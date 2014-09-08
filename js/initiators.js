

$(document).ready(function() {
	
	// Can also be used with $(document).ready()
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });

	 // $( ".accordion" ).accordion();

	  $('.accordion .head').click(function() {
	      $(this).next().toggle('slow');
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
});

