<div class="popup auth-login" id="auth1290ub1390">
   <div class="popup-close-action">
      <a href="" class="action-close-btn" id="closeauth1290ub1390">
         <i class="bx bx-x"></i>
      </a>
   </div>
   <div class="popup-header-title">
      <span class="title d-block">Login</span>
      <span class="text-black d-block mb-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, iure. </span>
   </div>

   <form action="" method="POST">
      <div class="default-input-group">
         <label for="" class="default-input-label">Email</label>
         <input type="text" class="default-input" placeholder="username">
      </div>
      <div class="default-input-group my-1">
         <label for="" class="default-input-label">Senha</label>
         <input type="text" class="default-input" placeholder="palavra-passe">
      </div>
      <div class="default-input-group my-2">
         <label for="remember" class="d-flex ai-center cursor-pointer mb-4">
            <input type="checkbox" id="remember" class="default-input w-5">
            <small>Lembrar de mim</small>
         </label>
         <button type="submit" class="default-btn">
            entrar
         </button>
      </div>
      <div class="default-input-group my-3 text-center">
         <span>Nao tens conta ?</span>
         <a href="" class="action-create-account">Criar agora</a> 
      </div>
   </form>
</div>
<?= partial('popups.overlay')  ?>

<script>
   $(closeauth1290ub1390).click(function(e) {
      e.preventDefault();
      $(auth1290ub1390).removeClass('push');
      $(platofm10b394u1).removeClass('show');
      $('body').css('overflow', 'auto');
   });
</script>