<div class="section-card featured-section-bg py-5">
   <div class="section-card-contin">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h4 class="card-title">Produtos em Destaque</h4>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card-contain">
      <div class="container">
         <div class="col-lg-12">
            <div class="pb-5">
               <div class="pilot-container-grid grid-cols-2 lg:grid-cols-5">
                  <?php for ($i = 0; $i < 10; $i++): ?>
                     <div class="pilot-product-card w-100">
                        <div class="product-card-img">
                           <small class="product-card-promo absolute">Promo</small>
                           <img src="<?= asset('img/mada/img-1.jpeg') ?>" alt="" class="img-fuild">
                        </div>
                        <div class="product-card-details">
                           <a href="<?= url('details', 1) ?>" class="product-card-action-btn">+ Selecionar</a>
                           <span class="product-card-name block mt-1">Vestido Frangose</span>
                           <small class="text-muted product-category block mt-1n">Categoria Gala</small>
                           <span class="text-bold product-card-price block mt-2">AO 10 000,00</span>
                        </div>
                     </div>
                  <?php endfor; ?>
               </div>

            </div>


         </div>
      </div>
   </div>
</div>