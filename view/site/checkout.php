<style>

   .font-Onest {
      font-family: 'Onest-Regular';
   }


   #checkoutForm * {
      font-family: 'Onest-Regular';
   }

   .font-Montserrat {
      font-family: 'Onest-Bold' !important;
   }

   #checkoutForm input,
   #checkoutForm button {
      padding: 0.75rem 1rem;
      font-size: 15px;
   }

   .container-password {
      height: 0;
      overflow: hidden;
   }

   .block.text-bold.pb-4,
   .payment-products-list {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Fazer Checkout',
         'current' => 'Checkout',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="ribonbar d-flex items-center justify-center flex-wrap">
                     <a href="<?= url('cart') ?>" class="ribon-link">Carrinho</a>
                     <span>
                        <i class="bx bx-chevron-right"></i>
                     </span>
                     <a href="#" class="ribon-link active">Checkout</a>
                     <span class="d-block">
                        <i class="bx bx-chevron-right"></i>
                     </span>
                     <a href="" class="ribon-link">Finalizar Pedido</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <small class="d-flex my-1"></small>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container">
            <div class="row">
               <div class="col-lg-7">
                  <span class="flex items-center flex-wrap text-black pb-4" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">
                     ESTAS DE VOLTA ?
                     <a href="" name="openauth1290ub1390" class="font-Onest text-muted block ml-0 ml-sm-2">FACA LOGIN NA SUA CONTA</a>
                  </span>
                  <span class="mt-3 mb-0 block text-bold">Preencha os campos abaixo</span>
                  <small class="text-black block mb-4">Precisamos dessas informacoes para o pedido.</small>

                  <form action="#" method="POST" class="row" id="checkoutForm">
                     <div class="col-lg-6">
                        <div class="input-group">
                           <label for="" class="default-input-label">Nome *</label>
                           <input type="text" class="default-input" placeholder="Seu nome">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="input-group">
                           <label for="" class="default-input-label">Apelido *</label>
                           <input type="text" class="default-input" placeholder="Seu Apelido">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="input-group">
                           <label for="" class="default-input-label">Municipio *</label>
                           <select name="" class="default-input">
                              <option value="">Localizacao</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="input-group">
                           <label for="" class="default-input-label">Email (Opcional)</label>
                           <input type="text" class="default-input" placeholder="Endereco email">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="input-group">
                           <label for="" class="default-input-label">Telefone *</label>
                           <input type="text" class="default-input" placeholder="Nº de Telefone">
                        </div>
                     </div>
                     <div class="col-12 mt-3">
                        <div class="input-group">
                           <label for="createValid" class="default-input-label flex items-center w-100">
                              <input type="checkbox" id="createValid" class="" placeholder="Nº de Telefone" style="accent-color: #000;">
                              <span class="block cursor-pointer ml-2">Criar uma nova conta</span>
                           </label>
                        </div>
                     </div>
                     <div class="col-12 container-password" id="containPwdFields">
                        <div class="input-group">
                           <label for="" class="default-input-label">
                              Palavra-passe *
                              <small class="block">Define uma Palavra-passe</small>
                           </label>
                           <input type="password" class="default-input" placeholder="Define uma senha">
                           <input type="password" class="default-input mt-2" placeholder="Confirmar senha">
                        </div>
                     </div>
                     <div class="col-12">
                        <span class="mt-3 font-Montserrat mb-0 block text-bold">Informar uma zona diferente</span>
                        <small class="text-black block mb-4">Caso deseje entregar o seu artigo algures.</small>
                     </div>
                     <div class="col-12">
                        <div class="input-group">
                           <label for="" class="default-input-label">Municipio *</label>
                           <input type="text" class="default-input" placeholder="Nº de Telefone">
                        </div>
                        <div class="input-group">
                           <label for="" class="default-input-label">Bairro *</label>
                           <input type="text" class="default-input" placeholder="Nº de Telefone">
                        </div>
                     </div>

                  </form>
               </div>

               <div class="col-lg-5 mt-4 mt-lg-0 font-Onest">
                  <div class="cart-payment-details">
                     <span class="block mt-2 mb-3">Detalhes do Pedido</span>
                     <small class="block text-bold pb-4">Artigos</small>

                     <div class="payment-products-list">
                        <div class="contain-pp-list">
                           <?php for ($i = 0; $i < 3; $i++): ?>
                              <div class="pp-list-item flex flex-wrap items-center">
                                 <div class="pp-list-item-info">
                                    <div class="flex items-center">
                                       <span class="pp-list-name">Vestido Frangose</span> x
                                       <span class="qtd">4</span>
                                    </div>
                                    <small class="text-muted">Tamanho: XL</small>
                                 </div>
                                 <span class="ml-auto">AO 10 000,00</span>
                              </div>
                           <?php endfor; ?>
                        </div>
                        <a href="" id="showMoreContain" class="pp-list-show-more flex justify-center items-center w-50 text-black text-underline w-lg-25 ml-auto mb-2">
                           <small>mostrar mais</small>
                        </a>
                     </div>

                     <div class="d-flex items-center px-0 border-b pb-3 mt-3">
                        <span>SubTotal</span>
                        <span class="product-single-price ml-auto" id="checkout-subtotal-val">AO 20.5K</span>
                     </div>
                     <div class="shipping py-3">
                        <small class="tiny-title font-bold">Forma de entrega</small>
                        <div class="shipping-list my-1 px-2">
                           <div class="input-group">
                              <label for="free-ship">
                                 <input type="radio" name="shipping" class="default-input-radio" id="free-ship">
                                 <small>Entrega grátis</small>
                              </label>
                              <small class="block mt-2 py-2 px-3" style="background-color: #E4E4E4">Isso significa, para levantar o seu artigo pedido, teras que se dirigiar ate nos.</small>
                           </div>
                           <label for="encontro" class="my-2">
                              <input type="radio" name="shipping" class="default-input-radio" id="encontro">
                              <small>Ponto de encontro: +5%</small>
                           </label>
                           <label for="casa">
                              <input type="radio" name="shipping" class="default-input-radio" id="casa">
                              <small>Em sua casa: +10%</small>
                           </label>
                        </div>

                        <small class="text-black tiny-title d-block mt-4">Entregar a:</small>
                        <span>Madacris</span>
                        <a href="" class="text-muted d-flex">
                           <small>mudar local de entrega</small>
                        </a>
                     </div>
                     <div class="border-b mt-3"></div>
                     <div class="d-flex items-center py-3 px-0 border-b pb-3">
                        <small>Taxa</small>
                        <small class="product-single-price ml-auto" id="checkout-subtotal-val">AO 20.5K</small>
                     </div>
                     <div class="d-flex items-center px-0 py-3 border-b pb-3">
                        <span>Total</span>
                        <span class="product-single-price ml-auto" id="checkout-subtotal-val">AO 20.5K</span>
                     </div>

                  </div>
                  <div class="cart-payment-details my-4">
                     <span class="flex items-center flex-wrap">
                        Tens um Cuppon ? <a href="" id="openPopupCuppon" class="flex text-muted ml-0 sm:ml-2">Aplique o seu desconto agora!</a>
                     </span>
                  </div>
                  <div class="cart-payment-details">
                     <div class="shipping py-3">
                        <small class="tiny-title font-bold">Forma de pagamento</small>
                        <div class="shipping-list my-1 px-2">
                           <div class="input-group">
                              <label for="payment-method-1">
                                 <input type="radio" name="payment-method" class="default-input-radio" id="payment-method-1" checked>
                                 <small class="text-bold">Multicaixa Express</small>
                              </label>
                              <small class="block my-2 py-2 px-3" style="background-color: #E4E4E4"> Quando fizer o seu pagamento usando o Metodo Express, isso lhe garante uma reducao de 2% do valor total a ser pago. Assim tratamos os nossos clientes.</small>
                           </div>
                           <div class="input-group">
                              <label for="payment-method-2">
                                 <input type="radio" name="payment-method" class="default-input-radio" id="payment-method-2">
                                 <small class="text-bold">Pagamento Cash na entrega</small>
                              </label>
                              <small class="block my-2 py-2 px-3"> Selecionando esta opcao sera necessario adiantar o valor da entrega e 50% do valor total. Mas caso prefira se dirigir ate nos, so sera necessario pagar os 50%.</small>
                           </div>
                           <label for="agreed-terms" class="flex ai-start">
                              <input type="checkbox" name="shipping" class="default-input-radio mt-3n" id="agreed-terms">
                              <small>Li e concordo com os <a href="" class="text-bold text-underline text-black">os termos de uso</a> e <a href="" class="text-bold text-underline text-black">as politicas de privacidade</a> da loja.</small>
                           </label>
                        </div>
                     </div>


                     <div class="popup-cart-action px-0 d-flex items-center mt-4">
                        <a href="" class="w-100 py-3 action-checkout bg-black">Finalizar Pedido</a>
                        <span></span>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>



   <span class="flex mt-4"></span>


   <?= view_component('footer') ?>
</div>

<script>
   $(document).ready(function() {
      if ($('.contain-pp-list .pp-list-item').length > 2) {
         if ($(showMoreContain).hasClass('hidden')) {
            $(showMoreContain).removeClass('hidden');
         }
         $(showMoreContain).addClass('flex');
      } else {
         if ($(showMoreContain).hasClass('flex')) {
            $(showMoreContain).removeClass('flex');
         }
         $(showMoreContain).addClass('hidden');
      }
   });

   $(createValid).change(function() {
      if (createValid.checked) {

         const currentHeight = $(containPwdFields).css("height", "auto").height();
         $(containPwdFields).css("height", "0");
         $(containPwdFields).animate({
            height: currentHeight
         }, 150);

      } else {
         $(containPwdFields).animate({
            height: 0
         }, 150);
      }

   });

   $(showMoreContain).click(function(e) {
      e.preventDefault();

      var small = $(this).find('small');
      var textSmall = small.text().split(" ")[1] == "mais" ? "menos" : "mais";
      small.text("mostrar " + textSmall);

      var h = $('.contain-pp-list').height();

      if (h == 150) {
         var newH = $('.contain-pp-list').css("height", 'auto').height();
         $('.contain-pp-list').css("height", '199px');
         $('.contain-pp-list').animate({
            height: newH
         }, 150);
      } else {
         $('.contain-pp-list').animate({
            height: 150
         }, 150);
      }

   });
   // popups();
</script>