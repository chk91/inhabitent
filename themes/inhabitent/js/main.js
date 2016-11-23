

	jQuery('.search-submit').on('click', function(e) {

		e.preventDefault();
		jQuery('.search-field').animate({width: 'toggle'}).focus();

	});

	jQuery('#search-input').focusout(function() {
		jQuery('#search-input').animate({width: 'toggle'});
	});