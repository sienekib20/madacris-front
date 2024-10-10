$('.section-card-flex-btn').click(function(e) {
	e.preventDefault();
	var idModal = $(this).attr('data-target');
	$(idModal).addClass('show');
})