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
         <input type="text" class="default-input" id="uname" placeholder="username">
      </div>
      <div class="default-input-group my-1">
         <label for="" class="default-input-label">Senha</label>
         <input type="password" class="default-input" id="upass" placeholder="palavra-passe">
      </div>
      <div class="default-input-group my-2">
         <!-- <label for="remember" class="d-flex items-center cursor-pointer mb-4">
            <input type="checkbox" id="remember" class="default-input w-5">
            <small>Lembrar de mim</small>
         </label> -->
         <button type="submit" class="default-btn" id="btnLogin">
            entrar
         </button>
      </div>
      <div class="default-input-group my-3">
         <div>
            <span>Sem conta ? Crie uma agora</span>
            <a href="<?= url('register') ?>" class="action-create-account text-black">Criar conta</a>
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

   $(document).ready(function() {

      $(btnLogin).click(function(e) {
         e.preventDefault();

         let username = uname.value;
         let password = upass.value;

         if (username.length == 0 || password.length == 0) {
            alert('Campos obrigatórios');
            $(uname).focus();
            return;
         }
         let formData = new FormData();
         formData.append('email', username);
         formData.append('password', password);
         formData.append('retrieve', true);

         $.ajax({
            url: endpoint.value + 'authenticate',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
               console.log(data);
               if (data[0] == null) {
                  alert('Usuario invalido, criar conta');
                  // window.location.reload();
               } else {
                  const userSession = {
                     id: data[0].id,
                     data: data,
                     timestamp: Date.now()
                  };

                  sessionStorage.setItem('loggedIn', JSON.stringify(userSession));
                  window.location.reload();
               }
            },
            error: (error) => {
               console.log(error);
               alert('Algo deu errado, tente mais tarde');
               window.location.reload();
            }
         });

      });


   });
</script>