$(document).ready(function() {

	$('.lessonTab').click(function() {
		
		 $('.lessonTab').removeClass("active");
		 $(this).addClass("active");
		 $('.col99').toggleClass("show");

	});


});