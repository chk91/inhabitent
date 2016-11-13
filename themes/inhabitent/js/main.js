

	jQuery('.search-submit').on('click', function(e) {

		e.preventDefault();
		jQuery('.search-field').animate({width: 'toggle'}).focus();

	});