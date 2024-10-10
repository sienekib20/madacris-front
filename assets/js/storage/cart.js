$(document).ready(function() {

   $('[name="addTocart"]').click(function(e) {

      e.preventDefault();

      var targetId = $(this).attr('id');
      var item = window.localStorage.getItem(targetId) ?? null;
      if (item != null) {
         window.localStorage.setItem(targetId);
         return;
      }
   });


});