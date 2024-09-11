<style>
   body {
      background-color: #f5f7f9 !important;
   }
</style>
<?php partial("header")  ?>

<div class="wrapper">

   <?php partial("nav")  ?>

   <div class="section-card"></div>

   <div class="section-card section-default-bg zoom-big">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="details-product-content d-flex">
                     <div class="col-lg-6 col-6">
                        <div class="product-item">
                           <span class="promo-mark">Frente</span>
                           <div class="contain-img w-100">
                              <img src="<?= asset("img/mada/img-2.jpeg") ?>" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-6">
                        <div class="product-item">
                        <span class="promo-mark">Tras</span>
                           <div class="contain-img w-100">
                              <img src="<?= asset("img/mada/img-2.jpeg") ?>" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                  <div class="details-product">
                     <div class="details-product-top">
                        <span class="product-detail-name">Vestido Frangose</span>
                        <small class="text-muted d-block">Categoria: Gala</small>
                        <span class="product-detail-price-official font-bold d-block my-2" id="oficial-price-product">AO 10K</span>
                     </div>

                     <div class="details-product-choose">
                        <div class="details-product-item">
                           <label for="productItem" class="details-product-item-label cursor-pointer">COR</label>
                           <select name="" id="productItem" class="default-input">
                              <option value="">Escolha uma opção</option>
                              <option value="">Vermelha</option>
                              <option value="">Branca</option>
                              <option value="">Preta</option>
                           </select>
                        </div>
                        <div class="details-product-item">
                           <label for="productItem1" class="details-product-item-label cursor-pointer">TAMANHO</label>
                           <select name="" id="productItem1" class="default-input">
                              <option value="">Escolha uma opção</option>
                              <option value="">XL</option>
                              <option value="">M</option>
                              <option value="">L</option>
                           </select>
                        </div>

                        <div class="d-flex ai-center details-product-action mt-5">
                           <input type="number" class="default-input w-30" value="1" min="1">
                           <a href="" class="action-product-btn">Adiconar no carrinho</a>
                        </div>

                        <div class="details-products-aditional-options mt-4">
                           <div class="product-filter-list px-2">
                              <div class="product-filter-list-item active">
                                 <a href="" class="filter-list-item-title clicable pb-2">
                                    <span class="text">Descricao</span>
                                    <i class='bx bx-chevron-down'></i>
                                 </a>
                                 <div class="filter-list-item-content h-auto">
                                    <span class="filter-link">
                                       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore nostrum molestiae nulla consequatur corporis
                                    </span>
                                 </div>
                              </div>
                           </div>
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
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h4>Artigos relacionados</h4>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="d-flex my-4"></div>

   <?php partial("footer") ?>
</div>

<script>
   $('.article-color-item > .color').each(function() {
      $(this).css("background-color", $(this).attr('data-color'));
   });

   $('.article-color-item').click(function(e) {
      e.preventDefault();
      $('.article-color-item').removeClass('selected-color');
      $(this).addClass('selected-color');
   });
</script>