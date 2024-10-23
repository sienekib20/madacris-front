<style>
   .section-card-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   .default-input {
      border-radius: 0;
      padding: 0.95rem 1rem !important;
   }

   form * {
      font-size: 16px;
      font-family: 'Montserrat-Regular';
   }

   form {
      padding: 1rem;
      border-radius: 0.25rem;
   }

   @media (max-width: 370px) {
      form {
         padding: 1rem 0.125rem;
      }
   }

   textarea {
      resize: none;
   }

   .form-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   .cti {
      justify-content: flex-start;
   }

   .cti [class*="col-"] {
      height: 100px;
   }

   .ct-title {
      text-align: center;
      font-family: 'Onest-Bold';
      font-size: 1.1rem;
   }

   .ct-title+span {
      text-align: center;
      display: block;
      font-size: 0.9rem;
   }

   .ct-title+div {
      display: flex;
      align-items: center;
   }

   [class*="col-lg"] i {
      display: block;
      line-height: 32px;
      text-align: center;
      width: 32px;
      height: 32px;
      aspect-ratio: 1/1;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 50%;
   }

   .ct-item {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 0.75rem;
   }

   .til {
      width: 50%;
      margin: 0 auto;
   }
   
   @media (max-width: 820px) {
      .til {
         width: 90%;
      }
      form {
         width: 100% !important;
      }
      .ct-item {
         flex-direction: column;
         align-items: center;
      }
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Call Center',
         'current' => 'Contactos',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container px-0 px-sm-5">
            <div class="row">
               <div class="til text-center">
                  <span class="section-card-title block">Estamos disponivel 24h/24</span>
                  <span class="text-muted">Com isso em mente, nos esforçamos para fornecer conteúdo preciso, confiável e envolvente para nossos usuários.</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card" style="margin-top: -3rem">
      <div class="section-card-contain">
         <div class="main-container px-0 px-sm-5">
            <div class="grid lg:grid-cols-1">
               <div>
                  <div class="row">
                     <div class="col-lg-4">
                        <span class="ct-title block">Ligue agora</span>
                        <span class="mb-2 block">Estamos disponiveis pra voce.</span>
                        <div class="ct-item">
                           <i class="bx bx-phone"></i>
                           <span class="text-center">+244 946 268 824</span>
                        </div>
                     </div>

                     <div class="col-lg-4 my-5 my-lg-0">
                        <span class="ct-title block">Localizacao</span>
                        <span class="mb-2 block">Visite a nossa sede.</span>
                        <div class="ct-item">
                           <i class="bx bx-current-location"></i>
                           <span class="text-center">Urbanizacao Nova vida, Frente ao Banco Sol</span>
                        </div>
                     </div>

                     <div class="col-lg-4">
                        <span class="ct-title block mb-2">Inbox</span>
                        <span class="mb-2 block">Deixe um email.</span>
                        <div class="ct-item">
                           <i class="bx bx-envelope"></i>
                           <span class="text-center">suporte@madacris.ao</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container px-0 px-sm-5">
            <div class="row">
               <div class="til text-center">
                  <span class="section-card-title block">Deixa aqui a sua mensagem</span>
                  <span class="text-muted">Podes aqui a sua preocupação, e em breve responderemos. temos uma equipa toda para isso.</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card " style="margin-top: -3rem">
      <div class="main-container px-0 px-sm-5" style="width: 100% !important">
         <div class="row">
            <div class="col-12">
               <form action="" class="row pb-5 w-100 mx-auto w-lg-80">
                  <div class="col-lg-6">
                     <div class="input-group">
                        <small class="default-input-label">Nome</small>
                        <input required type="text" class="default-input" placeholder="Seu primeiro Nome">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <small class="default-input-label">Email</small>
                        <input required type="email" class="default-input" placeholder="Seu primeiro Nome">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="input-group">
                        <small class="default-input-label">Sujeito</small>
                        <input required type="text" class="default-input" placeholder="Seu ultimo Nome">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="input-group">
                        <small class="default-input-label">Descreva</small>
                        <textarea required name="" rows="5" id="" placeholder="Deixe a sua mensagem" class="default-input"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-6"></div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <button type="submit" class="default-btn py-3 mt-3">Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <span class="flex mt-4"></span>


   <?= view_component('footer') ?>
</div>