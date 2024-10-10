$('.tablist-item').click(function (e) {
   e.preventDefault();
   $('.tablist-item').removeClass('active');
   $(this).addClass('active');
   $(this).data('target') == 1 ? $('.tablist-activator').css('left', '50%') : $('.tablist-activator').css('left', '5%');
});