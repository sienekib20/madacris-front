<style>
   .input-text+small {
      font-family: 'Onest-Bold';
      font-size: 0.7rem;
   }

   .section-card-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   @media (max-width: 992px) {
      .row-to-reverse {
         flex-direction: column-reverse !important;
      }
   }

   .input-error {
      border-color: red !important;
   }
</style>

<?= view_component("include") ?>

<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Novo registo',
         'current' => 'Criar conta',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container w-60">
            <form action="" method="" id="formUsers" class="row styled-form styled-default">
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="input-text mb-2">Nome*</div>
                     <input type="text" id="nome" class="input" placeholder="Nome">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="input-text mb-2">Apelido*</div>
                     <input type="text" id="apelido" class="input" placeholder="Apelido">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="input-text w-100">Telefone*</div>
                     <small class="mb-2 text-white">.</small>
                     <input type="text" id="telefone" class="input" placeholder="9xx xxx xxx">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="input-text w-100">Email*</div>
                     <small class="mb-2">Será usado para próxima sessão</small>
                     <input type="email" id="email" class="input" placeholder="Nome & apelido">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="input-text w-100">Provincia*</div>
                     <small class="d-flex onest-bold mb-2">Informe a sua localidade</small>
                     <select id="provincia" class="select">
                        <option value="Bengo">Bengo</option>
                        <option value="Benguela">Benguela</option>
                        <option value="Bié">Bié </option>
                        <option value="Cabinda">Cabinda</option>
                        <option value="Cuando-Cubango">Cuando-Cubango</option>
                        <option value="Cuanza Norte">Cuanza Norte</option>
                        <option value="Cuanza Sul">Cuanza Sul </option>
                        <option value="Cunene">Cunene </option>
                        <option value="Huambo">Huambo </option>
                        <option value="Huíla">Huíla </option>
                        <option value="Luanda">Luanda </option>
                        <option value="Lunda Norte">Lunda Norte</option>
                        <option value="Lunda Sul">Lunda Sul </option>
                        <option value="Malanje">Malanje </option>
                        <option value="Moxico">Moxico </option>
                        <option value="Namibe">Namibe </option>
                        <option value="Uíge">Uíge </option>
                        <option value="Zaire">Zaire</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-6"></div>
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="input-text w-100">Definir senha*</div>
                     <small class="mb-2">Será para iniciar a próxima sessão</small>
                     <input type="password" id="senha" class="input" placeholder="Senha">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="input-group">
                     <div class="d-flex w-100 mb-lg-4"></div>
                     <small class="mb-1 flex">.</small>
                     <input type="password" id="confirmSenha" class="input" placeholder="Confirmar Senha">
                  </div>
               </div>
               <div class="col-lg-6"></div>
               <div class="col-lg-6">
                  <small class="block mt-4">
                     * Criando essa conta, concordas com os nossos <a href="#" class="text-underline text-black">termos de uso</a> e as <a href="#" class="text-underline text-black">politicas de segurança</a>
                  </small>
               </div>
               <div class="col-lg-6"></div>
               <div class="col-lg-6 mt-5">
                  <button class="btn btn-default btn-block" id="btnCreateAccount" type="submit">Registrar</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <span class="flex mt-5"></span>
   <span class="flex mt-5"></span>
   <span class="flex mt-5"></span>


   <?= view_component('footer') ?>
</div>
<input type="hidden" id="apiRoute" value="<?= env('API_URL') ?>consumidor/add">
<input type="hidden" id="rootUrl" value="<?= ROOT ?>">

<script>
   $(document).ready(function() {

      $('input, select').focus(() => {
         $('input, select').removeClass('input-error');
      });

      $(btnCreateAccount).click(function(e) {
         e.preventDefault();

         let count = empty();

         if (count > 0) {
            alert('Campo obrigatórios, preencha');
            return 0;
         }

         let username = nome.value;
         let nickname = apelido.value;
         let e_mail = email.value;
         let phone = telefone.value;
         let province = provincia.value;
         let password = senha.value;
         let confirmarSenha = confirmSenha.value;

         if (password != confirmarSenha) {
            alert('Senha não corresponde');

            $(senha).addClass('input-error');
            $(confirmSenha).addClass('input-error');

            return;
         }

         let formData = new FormData();
         formData.append('nome', username);
         formData.append('apelido', nickname);
         formData.append('email', e_mail);
         formData.append('telefone', phone);
         formData.append('provincia', province);
         formData.append('password', password);
         formData.append('senha', confirmarSenha);

         // alert(apiRoute.value);

         $.ajax({
            url: apiRoute.value,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {

            },
            success: function(data) {
               console.log(data);
               if (data[0] == 1) {
                  alert('Adicionado com sucesso');
                  window.localStorage.setItem('callLogin', 1);
                  setTimeout(() => {
                     window.location.replace(rootUrl.value);
                  }, 1500);
               }
            },
            error: function(error) {
               console.log(error);
               alert('Algo deu errado, tente mais tarde');
               setTimeout(() => {
                  // window.location.reload();
               }, 1500);
            }
         });

      });



   });

   function empty() {
      let count = 0;
      const inputs = formUsers.querySelectorAll('input, select');
      inputs.forEach(input => {
         if (input.value.length == 0) {
            $(input).addClass('input-error');
            count += 1;
         }
      });
      return count;
   }
</script>