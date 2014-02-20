$( document ).ready(function() {

	$('button.detail').click( function() { $(this).parents('section').toggleClass('detailed'); });
	
	$('dl dt').click( function () { $(this).next('dd').slideToggle().parents('dl').toggleClass('disclosed'); })
	

});