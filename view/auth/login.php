<?php $this->extends('auth', ['title' => 'Login']) ?>


<form action="authenticate" method="post" class="styled-form-auth">
   <div class="styled-form pt-4">
   </div>


</form>

<input type="hidden" id="flash_login" value="<?= session()->getFlash('login_error') ?? -1 ?>">
<input type="hidden" id="route_dash" value="<?= url('dashboard') ?>">


<script>
   $(document).ready(function() {
      var valorLogin = $(flash_login).val();
      if (valorLogin == "0") {
         toastr.error('Usuário ou senha inválido .', 'Error!');
         return;
      }
      if (valorLogin == "1") {
         toastr.success('Feito com sucess .', 'Success!');
         setTimeout(() => {
            window.location.href = $(route_dash).val();
         }, 500);
      }
      //alert(valorLogin);


   });
</script>
