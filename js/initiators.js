

$(document).ready(function() {
	
	// Can also be used with $(document).ready()
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });



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

