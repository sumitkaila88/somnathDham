$( document ).ready(function() {

	$('#upload').on('click', function(){
		$('#image-upload input').click();
	});
	$('#image-upload input').on('change', function () {
		console.log('hello');
	    var a = $('#image-upload input').val().toString().split('\\');
	    $('#image-upload').html( $('#image-upload').html().replace('Upload Your Photo',a[a.length -1]) ).css('color','#fff');
	});
});