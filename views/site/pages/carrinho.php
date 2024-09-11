<style>
   body {
      background-color: #f5f7f9 !important;
   }
</style>
<?php partial("header")  ?>

<div class="wrapper">
   <?php partial("nav")  ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="ribonbar d-flex ai-center jc-center flex-wrap">
                     <a href="#" class="ribon-link active">Carrinho</a>
                     <span>
                        <i class="bx bx-chevron-right"></i>
                     </span>
                     <a href="/checkout" class="ribon-link">Checkout</a>
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

   <small class="d-flex my-2"></small>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="cart-products mt-5n">
                     <span class="cart-product-title pb-4">Adicionados</span>
                     <div class="container-products">
                        <div class="cart-products-list w-100">
                           <div class="cart-product-list-item">
                              <div class="contain-img">
                                 <img src="<?= asset('img/mada/img-1.jpeg') ?>" alt="">
                              </div>
                              <div class="cart-product-name">
                                 <span class="name">Vestido Frangose</span>
                                 <small class="text-black d-block">TAMANHO: X</small>
                              </div>
                              <span class="cart-product-price d-flex w-15">AO 10.3K</span>
                              <input type="number" class="default-input w-10 text-center" value="1" min="1">
   
                              <span class="cart-product-price jc-end d-flex w-15">AO 10.3K</span>
                              <a href="" class="cart-product-action d-flex w-10">
                                 <i class="bx bxs-trash-alt"></i>
                              </a>
   
                           </div>
                           <div class="cart-product-list-item">
                              <div class="contain-img">
                                 <img src="<?= asset('img/mada/img-1.jpeg') ?>" alt="">
                              </div>
                              <div class="cart-product-name">
                                 <span class="name">Vestido Frangose</span>
                                 <small class="text-black d-block">TAMANHO: X</small>
                              </div>
                              <span class="cart-product-price d-flex w-15">AO 10.3K</span>
                              <input type="number" class="default-input w-10 text-center" value="1" min="1">
   
                              <span class="cart-product-price jc-end d-flex w-15">AO 10.3K</span>
                              <a href="" class="cart-product-action d-flex w-10">
                                 <i class="bx bxs-trash-alt"></i>
                              </a>
   
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mt-4 mt-lg-0">
                  <div class="cart-payment-details">
                     <div class="d-flex ai-center px-0 border-b pb-3">
                        <span>SubTotal</span>
                        <span class="product-single-price ml-auto" id="checkout-subtotal-val">AO 20.5K</span>
                     </div>
                     <div class="shipping py-3">
                        <small class="tiny-title font-bold">Forma de entrega</small>
                        <div class="shipping-list my-1">
                           <label for="free-ship">
                              <input type="radio" name="shipping" class="default-input-radio" id="free-ship">
                              <small>Entrega grátis</small>
                           </label>
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
                     <div class="d-flex ai-center py-3 px-0 border-b pb-3">
                        <small>Taxa</small>
                        <small class="product-single-price ml-auto" id="checkout-subtotal-val">AO 20.5K</small>
                     </div>
                     <div class="d-flex ai-center px-0 py-3 border-b pb-3">
                        <span>Total</span>
                        <span class="product-single-price ml-auto" id="checkout-subtotal-val">AO 20.5K</span>
                     </div>
                     <div class="popup-cart-action px-0 d-flex ai-center mt-4">
                        <a href="" class="w-100 py-3 action-checkout bg-black">Proceder</a>
                        <span></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



   <div class="d-flex py-5"></div>
   <div class="d-flex py-5"></div>


   <?php partial("footer") ?>
</div>