<?= view_component('loader') ?>
<nav class="navbar" role="navigation">
   <div class="main-container">
      <button class="nav-toggler" type="button">
         <span class="line"></span>
      </button>
      <a href="" class="brand">
         <i class='bx bxl-shopify'></i>
         madacris.
      </a>
      <ul class="navbar-items">
         <li class="navbar-item">
            <a href="<?= url('category.all') ?>" class="navbar-link">Todas os Artigos</a>
         </li>

         <li class="navbar-item">
            <a href="<?= url('category') ?>/2" class="navbar-link">Vestidos</a>
         </li>

         <li class="navbar-item">
            <a href="<?= url('category') ?>/3" class="navbar-link">Joias</a>
         </li>

         <li class="navbar-item ml-lg-auto ml-0">
            <a href="<?= url('about') ?>" class="navbar-link">Sobre</a>
         </li>

         <li class="navbar-item">
            <a href="<?= url('contacts') ?>" class="navbar-link">Contactos</a>
         </li>

         <li class="navbar-item ml-sm-auto ml-lg-0">
            <a href="" class="navbar-link" id="openCheckoutSection">
               <i class="bx bx-cart"></i>
               <span class="count">0</span>
            </a>
         </li>

         <li class="navbar-item">
            <a href="" class="navbar-link" name="openAuthLogin">
               <i class="bx bx-user"></i>
            </a>
         </li>
      </ul>
   </div>
</nav>


<?= view_component('popups.auth.login') ?>
<?= view_component('popups.checkout') ?>


<script>
   $('.has-dropdown > a').click(function(e) {
      e.preventDefault();

      const currentHeight = $('.topnavbar-dropdown').height();
      if (currentHeight == 0) {
         var autoHeight = $('.topnavbar-dropdown').css('height', 'auto').height();
         $('.topnavbar-dropdown').css('height', '0');
         $('.topnavbar-dropdown').css('pointerEvents', 'all');
         $('.topnavbar-dropdown').css('zIndex', '9999991');
         $('.topnavbar-dropdown').animate({
            height: autoHeight,
         }, 500);
      } else {
         $('.topnavbar-dropdown').animate({
            height: 0,
         }, 500);
         $('.topnavbar-dropdown').css('height', '0');
         $('.topnavbar-dropdown').css('pointerEvents', 'none');
         $('.topnavbar-dropdown').css('zIndex', '0');
      }


   });











   $('[name="openAuthLogin"]').click(function(e) {
      e.preventDefault();
      addOverlayAndMuteBody();
      $(authLogin).addClass('push');
   });

   $(openCheckoutSection).click((e) => {
      e.preventDefault();
      addOverlayAndMuteBody();
      $(checkoutSection).addClass('push');
   });

   function addOverlayAndMuteBody() {
      $(platformOverlay).addClass('show');
      $('body').css('overflow', 'hidden');
   }
</script>