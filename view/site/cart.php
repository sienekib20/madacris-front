<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Itens no Carrinho',
         'current' => 'Carrinho',
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
                     <a href="#" class="ribon-link active">Carrinho</a>
                     <span>
                        <i class="bx bx-chevron-right"></i>
                     </span>
                     <a href="<?= url('checkout') ?>" class="ribon-link">Checkout</a>
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

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="cart-products mt-5n">
                     <div class="flex items-center cart-top-table" style="border-bottom: 1px solid rgba(0, 0, 0, 0.15); padding-bottom: 0.5rem; margin-top: -0.5rem !important">
                        <span class="cart-product-title pb-4 adapate-font-size">Ítem Adicionados</span>
                        <a href="#" class="ml-auto text-black text-underline btn-update-total" name="limparCarrinho" role="button">
                           <small>Limpar carrinho</small>
                        </a>
                     </div>

                     <div class="container-products">
                        <div class="cart-products-list w-100" id="listaArtigos"></div>
                     </div>


                     <div class="product-card-cuppon">
                        <div class="cuppon-container">
                           <small class="text-black block mt-4 mb-3">Para os nossos clientes fieis aplicamos um desconto de ate 45%. <br /> Insira o seu numero de cuppon. </small>
                           <form action="">
                              <div class="input-group mt-2">
                                 <input type="text" class="default-input" placeholder="Inserir numero de cuppon">
                                 <button type="submit" class="default-btn cuppon-absolute-btn">
                                    <small>Aplicar</small>
                                 </button>
                              </div>
                           </form>
                        </div>
                        <a href="<?= url('category') ?>" class="text-black mt-5 text-underline adapate-font-size flex items-center">
                           <i class="bx bx-chevron-right"></i>
                           <span class="block ml-2">
                              Continuar com as Compras
                           </span>
                        </a>
                     </div>

                  </div>
               </div>
               <div class="col-lg-4 mt-4 mt-lg-0">
                  <div class="cart-payment-details">
                     <div class="d-flex items-center px-0 border-b pb-3">
                        <span>SubTotal</span>
                        <span class="product-single-price ml-auto" id="cartSub">AO 20.5K</span>
                     </div>
                     <div class="shipping py-3">
                        <small class="tiny-title font-bold">Forma de entrega</small>
                        <div class="shipping-list my-1 px-2">
                           <div class="input-group">
                              <label for="free-ship">
                                 <input type="radio" name="shipping" class="default-input-radio" id="free-ship" checked>
                                 <small>Entrega grátis</small>
                              </label>
                              <small class="block w-100 mt-2 py-2 px-3" style="background-color: #E4E4E4">Isso significa, para levantar o seu artigo pedido, teras que se dirigiar ate nos.</small>
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
                        <small class="product-single-price ml-auto" id="cartTax">AO 20.5K</small>
                     </div>
                     <div class="d-flex items-center px-0 py-3 border-b pb-3">
                        <span>Total</span>
                        <span class="product-single-price ml-auto" id="cartTotal">AO 20.5K</span>
                     </div>
                     <div class="popup-cart-action px-0 d-flex items-center mt-4">
                        <a href="<?= url('checkout') ?>" class="w-100 py-3 action-checkout bg-black">Proceder</a>
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
   // let listaArt = getCarrinho();

   $(document).ready(function() {

      loadCart();

      $('[name="limparCarrinho"]ki').click(function(e) {
         e.preventDefault();
         localStorage.removeItem('em_articles');
         window.location.reload();
      });

   });
</script>