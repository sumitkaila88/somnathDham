'use strict';

$( document ).ready(function() {

	$(".owl-carousel").owlCarousel({
		loop:true,
	    nav:true,
	    items: 1,
	    autoplay:true,
	    autoplayTimeout:3000,
	    nav: false,
	    dots: false
	});


	$('#photo').on('change', function(){
		var temp_text = $('#image-upload').html().split('<s')[0];
		$('#image-upload').html($('#image-upload').html().replace(temp_text,this.files[0].name)).css('color', '#fff');
	});

	$("#register-form").submit(function(e){
		e.preventDefault();

	    $.ajax({
			url      : 'action.php',
			type     : "POST",
			data     : new FormData(this),
			contentType: false,
			cache    : false,
			processData: false,
			success  : function(data) {
				
					$('#form-content').html(data);
				
				// $('#form-content').html('<p class = "success-note">Your Id generated Successfully</p>');
			}
	    });
	 })

	$('.image-container').on('click', '.generate-preview' , function () {	
	    var divToPrint= $(this).prev('.id-container');

		var newWin=window.open('','Print-Window');

		newWin.document.open();

		newWin.document.write('<html><link rel="stylesheet" href="css/print.css"><body onload="window.print()">'+divToPrint[0].innerHTML+'</body></html>');

		newWin.document.close();

		setTimeout(function(){newWin.close();},10);
	});

	// smooth scroll

	// Select all links with hashes
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


});


