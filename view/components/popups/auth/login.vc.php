<div class="popup auth-login" id="authLogin">
   <div class="popup-close-action">
      <a href="" class="action-close-btn" id="closeAuthLogin">
         <i class="bx bx-x"></i>
      </a>
   </div>
   <div class="popup-header-title">
      <span class="title d-block">Login</span>
      <span class="text-black d-block mb-4"> Entre com a sua conta para beneficiar do desconto. </span>
   </div>

   <form action="" method="POST">
      <div class="default-input-group">
         <label for="" class="default-input-label">Email</label>
         <input type="text" class="default-input" placeholder="username">
      </div>
      <div class="default-input-group my-1">
         <label for="" class="default-input-label">Senha</label>
         <input type="password" class="default-input" placeholder="palavra-passe">
      </div>
      <div class="default-input-group my-2">
         <label for="remember" class="d-flex items-center cursor-pointer mb-4">
            <input type="checkbox" id="remember" class="default-input w-5">
            <small>Lembrar de mim</small>
         </label>
         <button type="submit" class="default-btn">
            entrar
         </button>
      </div>
      <div class="default-input-group my-3">
         <div>
            <span>Sem conta ? Crie uma agora</span>
            <a href="" class="action-create-account text-black">Criar conta</a>
         </div>
      </div>
   </form>
</div>
<?= view_component('popups.overlay')  ?>

<script>
   $(closeAuthLogin).click(function(e) {
      e.preventDefault();
      closeAuth();
   });
</script>