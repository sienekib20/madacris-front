<style>
   #checkout-subtotal-val {
      font-family: 'Montserrat-Bold';
   }

   .content-check {
      height: 320px;
      max-height: 320px;
      overflow-y: auto;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
   }
</style>
<div class="popup auth-login px-0 pb-3" id="checkoutSection">
   <div class="popup-close-action d-flex items-center pl-4 pr-2" style="--left-m: 0">
      <span class="close-action-title">Carrinho (<span id="checkoutCount"></span>)</span>
      <a href="" class="action-close-btn ml-auto" id="closeCheckoutSection">
         <i class="bx bx-x"></i>
      </a>
   </div>

   <form class="popup-cart-items" method="">
      <div class="content-check">
         <div class="chkcartItems">
            <!-- <div class="popup-cart-item px-4">
               <div class="cart0uitem$-manage mb-3">
                  <div class="product-infon d-flex ai-start">
                     <div class="contain-img">
                        <img src="<?= asset('img/2.jpg') ?>" alt="">
                     </div>
                     <div class="product-infon-name ml-2">
                        <span>Product name</span>
                        <small class="text-muted d-block">Tamanho X</small>
                     </div>
                  </div>
                  <a href="" class="action-rem-product$u012 ml-auto">
                     <i class='bx bxs-trash-alt'></i>
                  </a>
               </div>
               <div class="cart0uitem1-count d-flex items-center">
                  <select name="" class="default-input w-15 product-count-cart">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                  </select>
                  <span class="product-single-price ml-auto product-price">AO 10.5K</span>
               </div>
            </div>
            <div class="popup-cart-item px-4">
               <div class="cart0uitem$-manage mb-3">
                  <div class="product-infon d-flex ai-start">
                     <div class="contain-img">
                        <img src="<?= asset('img/mada/img-1.jpeg') ?>" alt="">
                     </div>
                     <div class="product-infon-name ml-2">
                        <span>Product name</span>
                        <small class="text-muted d-block">Tamanho X</small>
                     </div>
                  </div>
                  <a href="" class="action-rem-product$u012 ml-auto">
                     <i class='bx bxs-trash-alt'></i>
                  </a>
               </div>
               <div class="cart0uitem1-count d-flex items-center">
                  <select name="" class="default-input w-15 product-count-cart">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                  </select>
                  <span class="product-single-price ml-auto product-price">AO 12.5K</span>
               </div>
            </div> -->
         </div>
      </div>

      <div class="popup-cart-price mt-auto pt-3">
         <div class="d-flex items-center px-4">
            <span>SubTotal</span>
            <span class="product-single-price ml-auto" id="checkoutSub"></span>
         </div>
         <div class="d-flex items-center px-4 mt-2">
            <small>Entrega do Produto: Grátis!</small>
         </div>
         <a href="#" class="text-underline text-black mt-2 flex items-center px-3" style="font-size: 0.9rem" name="limparCarrinho">
            <i class="bx bx-x"></i> Limpar carrinho
         </a>
      </div>

      <div class="popup-cart-action d-flex pl-3 items-center mt-3">
         <a href="<?= url('checkout') ?>" class="action-checkout">Checkout</a>
         <a href="<?= url('cart') ?>" class="action-checkout">Ver Carrinho</a>
      </div>
   </form>
</div>
<?= view_component('popups.overlay')  ?>

<script src="<?= asset('js/cart/index.js') ?>"></script>

<script>
   $(closeCheckoutSection).click(function(e) {
      e.preventDefault();
      $(checkoutSection).removeClass('push');
      $(platformOverlay).removeClass('show');
      $('body').css('overflow', 'auto');
   });
</script>