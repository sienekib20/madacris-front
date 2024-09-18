<nav class="navbar">
   <div class="container">
      <button class="btn-hamburguer flex lg:hidden">
         <span class="line"></span>
      </button>

      <div class="navbar-items-left d-none lg:flex">
         <a href="<?= url('category') ?>" class="navbar-link">Tudo</a>
         <a href="" class="navbar-link">Categorias</a>
         <a href="" class="navbar-link">Vendas</a>
         <a href="" class="navbar-link">Accessorios</a>
      </div>

      <a href="<?= url('/') ?>" class="navbar-brand mx-auto w-auto w-sm-20" id="brandNavbar">Madacris</a>

      <div class="navbar-items-right">
         <a href="" class="navbar-link">
            <i class='bx bx-heart'></i>
         </a>
         <a href="" class="navbar-link" name="openauth1290ub1390">
            <i class='bx bxs-user'></i>
         </a>
         <a href="" class="navbar-link" id="opensec0$90k2aA00">
            <i class='bx bxs-shopping-bag-alt'></i>
         </a>

      </div>
   </div>
</nav>

<?= partial('popups.login')  ?>
<?= partial('popups.checkout')  ?>

<script>
   function popups() {
      $('[name="openauth1290ub1390"]').click(function(e) {
         e.preventDefault();
         $(auth1290ub1390).addClass('push');
         $(platofm10b394u1).addClass('show');
         $('body').css('overflow', 'hidden');
      });

      $(opensec0$90k2aA00).click(function(e) {
         e.preventDefault();
         $(sec0$90k2aA00).addClass('push');
         $(platofm10b394u1).addClass('show');
         $('body').css('overflow', 'hidden');
      });


      $(platofm10b394u1).click(function() {
         $(".popup").removeClass("push");
         $(platofm10b394u1).removeClass('show');
         $('body').css('overflow', 'auto');
      });
   }

   popups();
</script>