<?= view_component('popups.preview') ?>
<?= view_component('loader') ?>
<style>
   .invisible {
      display: none !important;
   }

   #userLetter {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 999999999999rem;
      background-color: #000;
      color: white;
      width: 36px;
      height: 36px;
      aspect-ratio: 1/1;
   }

   .has-rdopwon {
      position: relative
   }

   .dropdown {
      top: 120%;
      right: 0;
      width: 180px;
      display: flex;
      flex-direction: column;
      background-color: white;
      position: absolute;
      padding: 0.75rem 0;
      opacity: 0;
      z-index: 9999991;
      pointer-events: none;
   }

   .dropdown.active {
      opacity: 1;
      pointer-events: all;
      animation: activeDrop 0.5s ease-in-out forwards;
   }

   @keyframes activeDrop {
      to {
         top: 110%;
      }
   }

   .dropdown a {
      display: flex;
      align-items: center;
      font-size: 0.85rem;
      padding: 0.65rem 1.25rem;
      color: #000;
   }

   .dropdown a:hover {
      background-color: rgba(0, 0, 0, 0.05);
   }
</style>
<input type="hidden" id="endpoint" value="<?= env('API_URL') ?>">
<nav class="navbar" role="navigation">
   <div class="main-container">
      <button class="nav-toggler mr-2 mr-sm-4" type="button">
         <span class="line"></span>
      </button>
      <a href="<?= url('/') ?>" class="brand">
         <!-- <i class='bx bxl-shopify'></i> -->
         <img src="<?= asset('img/icon.ico') ?>" alt="">
         madacris
      </a>
      <ul class="navbar-items">
         <li class="navbar-item">
            <a href="<?= url('category.all') ?>" class="navbar-link">Colecção</a>
         </li>

         <li class="navbar-item">
            <a href="<?= url('category') ?>/2" class="navbar-link">Em destaques</a>
         </li>

         <li class="navbar-item">
            <a href="<?= url('about') ?>" class="navbar-link">Sobre</a>
         </li>

         <li class="navbar-item">
            <a href="<?= url('contacts') ?>" class="navbar-link">Contactos</a>
         </li>

         <li class="navbar-item ml-lg-auto ml-0 ml-sm-auto">
            <a href="javascript:;" class="navbar-link">
               <i class="bx bx-search"></i>
            </a>
         </li>
         
         <li class="navbar-item">
            <a href="" class="navbar-link" id="openCheckoutSection">
               <i class="bx bx-cart"></i>
               <!-- <i></i> -->
               <!-- <span class="emoji-cart">🛒</span> -->
               <span class="count">0</span>
            </a>
         </li>

         <li class="navbar-item has-rdopwon">
            <a href="" class="navbar-link" name="openAuthLogin" id="userLogin">
               <i class="bx bx-user"></i>
            </a>
            <a href="" class="navbar-link openLink" id="userLetter"></a>
            <ul class="dropdown">
               <li>
                  <a href="<?= url('checkout') ?>">Checkout</a>
               </li>
               <li>
                  <a href="javascript:;" id="openWorkspace">Meus pedidos</a>
               </li>
               <li>
                  <a href="javascript:;" id="btnEndSession">Terminar sessao</a>
               </li>
            </ul>
         </li>
      </ul>
   </div>
</nav>


<?= view_component('popups.auth.login') ?>
<?= view_component('popups.comentarios') ?>
<?= view_component('popups.checkout') ?>

<?= view_component('alerts.alerts') ?>
<?= view_component('nav.mobilenav') ?>



<script>
   $('li.has-rdopwon').on('click', '.openLink', function(e) {
      e.preventDefault();

      var next = this.nextElementSibling;
      $(next).toggleClass('active');

      e.stopPropagation();

   });

   $(document).click(function() {
      $('.dropdown').removeClass('active');
   });

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



   $(openCheckoutSection).click((e) => {
      e.preventDefault();
      addOverlayAndMuteBody();
      $(checkoutSection).addClass('push');
   });

   function addOverlayAndMuteBody() {
      $(platformOverlay).addClass('show');
      $('body').css('overflow', 'hidden');
   }

   const checkSession = () => {
      const userSession = JSON.parse(sessionStorage.getItem('loggedIn')) ?? false;

      if (userSession) {
         const currentTime = Date.now();
         const sessionLimit = 30 * 60 * 1000; // Limite de 30 minutos (30 minutos * 60 segundos * 1000 milissegundos)

         if (currentTime - userSession.timestamp > sessionLimit) {
            // Se o tempo de sessão ultrapassar o limite, remove os dados
            sessionStorage.removeItem('loggedIn');
            // alert('Sessão expirada. Faça login novamente.');
            // window.location.href = 'pagina_de_login.html'; // Substitua pela página de login
            return 0;
         }

         return userSession;
      }
      return 0;
   };


   $('.nav-toggler').click(function(e) {
      e.preventDefault();
      var h = $('.mobile-m').height();

      if (h == 0) {
         var cureH = $('.mobile-m').css('height', 'auto').height();
         $('.mobile-m').css('height', '0');
         $('.mobile-m').animate({
            height: cureH
         }, 150);
         $(this).addClass('active');
         $('body').css('overflow', 'hidden');
      } else {
         $('.mobile-m').animate({
            height: 0
         }, 150);
         $(this).removeClass('active');
         $('body').css('overflow', 'auto');
      }

   });
</script>