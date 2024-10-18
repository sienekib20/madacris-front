const styledA = $('.styled-alert');

$(document).ready(function () {
   $('.std-alert-close').click(function (e) {
      e.preventDefault();
      styledA.removeClass('push');
   });
});

class styledAl {

   static showWith(text) {
      $('.std-alert-text').text("");
      $('.std-alert-text').text(text);
      styledA.addClass('push');

      setTimeout(() => {
         styledA.removeClass('push');
      }, 2000);
   }

}