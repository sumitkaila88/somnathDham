'use strict';

$( document ).ready(function() {


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


});


