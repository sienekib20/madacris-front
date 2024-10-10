<?php $this->extends('auth', ['title' => 'Login']) ?>


<form action="authenticate" method="post" class="styled-form-auth">
   <div class="styled-form pt-4">
      <div class="ski-brand">
         <div class="bubble-logo mx-auto">
            <img src="<?= asset('assets/img/logo-1.png') ?>" alt="logo_pagina">
         </div>
      </div>
      <div class="styled-auth-header text-center mt-2 mb-3">
         <span class="title">Entrar agora</span>
         <span>Insira o teu email e senha</span>
      </div>

      <div class="row">
         <div class="col-12">


            <div class="input-group">
               <small class="form-label">Email address*</small>
               <input type="text" class="styled-input" name="email" placeholder="Your email address">
            </div>
         </div>
         <div class="col-12">
            <div class="input-group">
               <small class="form-label">Password*</small>
               <input type="password" name="password" class="styled-input" placeholder="Your email address">
               <a href="" class="absolute-eye">
                  <i class="bx bx-show"></i>
               </a>
            </div>
         </div>
         <div class="col-12">
            <div class="input-group">
               <label for="checked" class="flex items-center">
                  <input type="checkbox" name="" id="checked">
                  <small class="ml-1 block">Manter-me logado</small>
               </label>
            </div>
         </div>
         <div class="col-12 flex-wrap mb-6 sm:mt-4n flex items-center">
            <small>Esqueceu a senha?</small>
            <a href="" class="flex block ml-2"> <small>recuperar aqui.</small></a>
         </div>
         <div class="col-12">
            <div class="input-group">
               <button type="submit" class="styled-btn-form">Login</button>
            </div>
         </div>
      </div>
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