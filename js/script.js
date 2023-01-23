(function($) {
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});
})(jQuery);

// $('.log_in').click(function() {
// 	$('#readyModal').modal('show');
// });
