<?php partial("header")  ?>

<style>
   .flex.flex-column span {
      font-size: 0.9rem;
   }

   .font-bold {
      font-family: 'Montserrat-Bold';
   }
   .block.t {
      font-size: 1.3rem;
      text-align: center;
   }
</style>


<div class="wrapper">
   <?php partial("nav")  ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="section-heading section-heading-border justify-center items-center pb-4">
            <small>Contactos</small>
            <span class="heading">Precisas de Ajuda?</span>
         </div>
      </div>
   </div>

   <div class="section-card py-0">
      <div class="section-card-contain py-0">
         <div class="section-heading flex-row flex-wrap section-heading-border justify-center items-center pb-4">
            <div class="text-left text-lg-center col-sm-6 col-md-4">
               <small class="font-bold">Call center</small>
               <div class="flex flex-column mt-2">
                  <span>+244 949 901 787</span>
                  <span>suporte.madacris@hotmail.com</span>
               </div>
            </div>
            <div class="mt-3 mt-sm-0 text-left text-lg-center col-sm-6 col-md-4">
               <small class="font-bold">Localizacao</small>
               <div class="flex flex-column mt-2">
                  <span>Urbanizacao nova vida, frente ao Banco Sol</span>
                  <span>Das 08:00 As 17:00</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="col-md-10 col-lg-8 mx-auto">
               <span class="block mt-0 mb-5 t">Por Favor preencha os campos abaixo, e submeta o sua mensagem, em Breve receberá uma Resposta</span>
               <form action="" class="row">
                  <div class="col-lg-6">
                     <div class="input-group">
                        <label for="">Seu Nome</label>
                        <input type="text" class="default-input" placeholder="username">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <label for="">Seu Email</label>
                        <input type="text" class="default-input" placeholder="user@domain.com">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <label for="">Telefone</label>
                        <input type="text" class="default-input" placeholder="+244 949 901 787">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="input-group">
                        <label for="">Nº de Pedido</label>
                        <input type="text" class="default-input" placeholder="xxx xx x">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="input-group">
                        <label for="">Mensagem</label>
                        <textarea name="" id="" rows="5" class="default-input" resize="false"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-4 mt-4">
                     <button class="default-btn py-3">Enviar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <small class="d-flex my-1"></small>

   <!-- <h1>Madacris</h1> -->

   <div class="d-flex py-5"></div>


   <?php partial("footer") ?>
</div>