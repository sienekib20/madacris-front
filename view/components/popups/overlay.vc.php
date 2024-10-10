<div class="platform-overlay" id="platformOverlay"></div>
<script>
   $(platformOverlay).click(function(e) {
      closeAuth();
   })

   function closeAuth() {
      $('.popup').removeClass('push');
      $(platformOverlay).removeClass('show');
      $('body').css('overflow', 'auto');
   }
</script>