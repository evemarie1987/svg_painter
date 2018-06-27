'use strict';

$(function() {
	$('.shape').on('click', function() {
		$.post('fieldset.php', 
			{type: $(this).attr('id')},
			function(data) {
				$('#shapes').append(data);
			}
		);
		return false;
	});

	$(document).on('click', '.del', function(event) {
		$(this).parent().remove();
		return false
	});
	$(document).on('click', '.hide', function(event) {
		$(this).parent().children('div').toggle();
	});

	$('#show-form').click(function() {
		$('#config>fieldset:first-of-type').toggle();
		return false;
	});

	$('#draw').click(function() {
		$('#config').trigger('submit');
	});
});
