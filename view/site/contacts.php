<style>
   .section-card-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   .default-input {
      padding: 0.65rem 1rem !important;
   }

   form * {
      border-radius: 0.25rem;
      font-size: 15px;
      font-family: 'Onest-Regular';
   }

   form {
      border: 1px solid rgba(0, 0, 0, 0.1);
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
      background: red;
      height: 100px;
   }

   .ct-title {
      font-family: 'Onest-Bold';
      font-size: 1.1rem;
   }

   .ct-title+span {
      font-size: 0.9rem;
   }

   .ct-title+div {
      display: flex;
      align-items: center;
   }

   [class*="col-lg"] i {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      aspect-ratio: 1/1;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 50%;
   }

   .ct-item {
      display: flex;
      align-items: center;
      gap: 0.75rem;
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Contactos',
         'current' => 'Contactos',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container px-4 px-sm-5">
            <div class="row">
               <div class="col-lg-6 col-12">
                  <span class="section-card-title block">Disponivel 24h/24</span>
                  <span class="text-muted">Com isso em mente, nos esforçamos para fornecer conteúdo preciso, confiável e envolvente para nossos usuários.</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card mt-8n">
      <div class="section-card-contain">
         <div class="main-container px-4 px-sm-5">
            <div class="grid lg:grid-cols-2">
               <div>
                  <div class="row">
                     <div class="col-lg-6">
                        <span class="ct-title block">Ligue agora</span>
                        <span class="mb-2 block">Estamos disponiveis pra voce.</span>
                        <div class="ct-item">
                           <i class="bx bx-phone"></i>
                           <span class="block w-80">+244 946 268 824</span>
                        </div>
                     </div>

                     <div class="col-lg-6 mt-4 mb-4 mt-lg-0 mb-lg-0">
                        <span class="ct-title block">Localizacao</span>
                        <span class="mb-2 block">Venha ate nos.</span>
                        <div class="ct-item">
                           <i class="bx bx-current-location"></i>
                           <span class="block w-80">Urbanizacao Nova vida, Frente ao Banco Sol</span>
                        </div>
                     </div>

                     <div class="col-lg-6 mt-4">
                        <span class="ct-title block mb-2">Inbox</span>
                        <span class="mb-2 block">Deixe um email.</span>
                        <div class="ct-item">
                           <i class="bx bx-envelope"></i>
                           <span class="block w-80">suporte@madacris.ao</span>
                        </div>
                     </div>
                  </div>
               </div>
               <form action="" class="row pb-5">
                  <div class="col-lg-12">
                     <span class="form-title block mb-1n">Deixe aqui a sua menssagem</span>
                     <span class="block mb-4">Respondemos-lhe em breve.</span>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <small class="default-input-label">Nome</small>
                        <input required type="text" class="default-input" placeholder="Seu primeiro Nome">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <small class="default-input-label">Apelido</small>
                        <input required type="text" class="default-input" placeholder="Seu ultimo Nome">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <small class="default-input-label">Email</small>
                        <input required type="email" class="default-input" placeholder="Seu primeiro Nome">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <small class="default-input-label">Telefone</small>
                        <input required type="text" class="default-input" placeholder="Seu ultimo Nome">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="input-group">
                        <small class="default-input-label">Descreva</small>
                        <textarea required name="" rows="5" id="" placeholder="Deixe a sua mensagem" class="default-input"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <button type="submit" class="default-btn">Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>




   <span class="flex mt-4"></span>
   <span class="flex py-5"></span>
   <span class="flex py-5"></span>


   <?= view_component('footer') ?>
</div>

