(function($) {
	$('.search-submit').on('click', function(e) {

		e.preventDefault();
		$('.search-field').animate({width: 'toggle'}).focus();

	});

	$('#search-input').focusout(function() {
		$('#search-input').animate({width: 'toggle'});
	});
})(jQuery)	