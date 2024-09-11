<style>
   body {
      background-color: #f5f7f9 !important;
   }

   .container {
      max-width: 1200px !important;
   }

   @media (max-width: 991.92px) {
      .reverse-row {
         flex-wrap: wrap-reverse !important;
         flex-direction: row-reverse !important;
      }
   }

   @media (max-width: 540px) {
      .product-item .contain-img {
         height: 240px !important;
      }

      .product-item .product-name {
         font-size: 13px !important;
      }

      .product-item .action-select-option {
         padding: 0.4rem 0 !important;
         height: 35px !important;
         font-size: 13px !important;
      }
   }

   @media (max-width: 456px) {
      .col-6:has(.product-item) {
         padding: 0 0.1rem !important;
      }

      .product-item .contain-img {
         height: 140px !important;
      }

   }
</style>
<?php partial("header")  ?>

<div class="wrapper">
   <?php partial("nav")  ?>

   <div class="d-flex py-3"></div>

   <div class="section-card py-5">
      <div class="section-card-contain">
         <div class="container">
            <div class="row reverse-row">
               <div class="col-lg-3">
                  <div class="product-filters">
                     <small class="product-filters-title">
                        <a href="" class="action-clear-filters">Limpar Tudo</a>
                     </small>
                     <div class="product-filter-list px-2">
                        <div class="product-filter-list-item active">
                           <a href="" class="filter-list-item-title clicable pb-2">
                              <span class="text">Categorias</span>
                              <i class='bx bx-chevron-down'></i>
                           </a>
                           <div class="filter-list-item-content h-auto">
                              <a href="" class="filter-link">
                                 Tudo
                              </a>
                              <a href="" class="filter-link active">
                                 Vestidos Gala
                                 <span>(10)</span>
                              </a>
                              <a href="" class="filter-link">
                                 Vestidos Festas
                                 <span>(02)</span>
                              </a>
                              <a href="" class="filter-link">
                                 Casamentos
                                 <span>(05)</span>
                              </a>
                           </div>
                        </div>
                        <div class="product-filter-list-item">
                           <a href="" class="filter-list-item-title clicable pb-2">
                              <span class="text">Tamanho</span>
                              <i class='bx bx-chevron-down'></i>
                           </a>
                           <div class="filter-list-item-content">
                              <a href="" class="filter-link active">
                                 XS
                              </a>
                              <a href="" class="filter-link">
                                 M
                              </a>
                              <a href="" class="filter-link">
                                 L
                              </a>
                              <a href="" class="filter-link">
                                 XL
                              </a>
                              <a href="" class="filter-link">
                                 X
                              </a>
                           </div>
                        </div>
                        <div class="product-filter-list-item">
                           <a href="" class="filter-list-item-title clicable pb-2">
                              <span class="text">Cor</span>
                              <i class='bx bx-chevron-down'></i>
                           </a>
                           <div class="filter-list-item-content">
                              <a href="" class="filter-link">
                                 Vermelha
                                 <span class="filter-link-color">
                                    <span class="color"></span>
                                 </span>
                              </a>
                              <a href="" class="filter-link">
                                 Branca
                                 <span class="filter-link-color">
                                    <span class="color"></span>
                                 </span>
                              </a>
                           </div>
                        </div>
                        <div class="product-filter-list-item active">
                           <a href="" class="filter-list-item-title clicable pb-2">
                              <span class="text">Preco</span>
                              <i class='bx bx-chevron-down'></i>
                           </a>
                           <div class="filter-list-item-content h-auto">
                              <!-- <div id="slider-price" class="mt-3"></div> -->
                              <input type="text" id="example_id" name="example_name" value="" />
                              <div class="d-flex mt-4"></div>
                              <div class="price-slider d-flex ai-center">
                                 <span>(AO) 10K</span> -
                                 <span>(AO) 25K</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-9 mt-5n mt-lg-0 mb-5 mb-lg-0">
                  <div class="category-products">
                     <div class="category-header-title">
                        <span class="category-title">TODOS OS ARTIGOS</span>
                        <small class="text-muted d-block">Resultados (8) no total</small>
                     </div>
                     <div class="all-products mt-4">
                        <div class="col-lg-4 col-6">
                           <div class="product-item">
                              <span class="promo-mark">PRO</span>
                              <div class="contain-img w-100">
                                 <img src="<?= asset("img/mada/img-3.jpeg") ?>" alt="">
                              </div>
                              <div class="product-item-action mt-2">
                                 <a href="" class="action-select-option">Ver opcoes</a>
                              </div>
                              <span class="product-name">Vestido de Gala - Frangose</span>
                              <small class="text-black d-block text-bold">AO 10 000</small>
                           </div>
                        </div>

                        <div class="col-lg-4 col-6">
                           <div class="product-item">
                              <span class="promo-mark">PRO</span>
                              <div class="contain-img">
                                 <img src="<?= asset("img/mada/img-1.jpeg") ?>" alt="">
                              </div>
                              <div class="product-item-action mt-2">
                                 <a href="" class="action-select-option">Ver opcoes</a>
                              </div>
                              <span class="product-name">Vestido de Gala - Frangose</span>
                              <small class="text-black d-block text-bold">AO 10 000</small>
                           </div>
                        </div>

                        <div class="col-lg-4 col-6">
                           <div class="product-item">
                              <div class="contain-img">
                                 <span class="promo-mark">PRO</span>
                                 <img src="<?= asset("img/category/cat-0.webp") ?>" alt="">
                              </div>
                              <div class="product-item-action mt-2">
                                 <a href="" class="action-select-option">Ver opcoes</a>
                              </div>
                              <span class="product-name">Vestido de Gala - Frangose</span>
                              <small class="text-black d-block text-bold">AO 10 000</small>
                           </div>
                        </div>

                        <div class="col-lg-4 col-6">
                           <div class="product-item">
                              <div class="contain-img">
                                 <span class="promo-mark">PRO</span>
                                 <img src="<?= asset("img/mada/img-2.jpeg") ?>" alt="">
                              </div>
                              <div class="product-item-action mt-2">
                                 <a href="" class="action-select-option">Ver opcoes</a>
                              </div>
                              <span class="product-name">Vestido de Gala - Frangose</span>
                              <small class="text-black d-block text-bold">AO 10 000</small>
                           </div>
                        </div>

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


<script>
   // $("#example_id").ionRangeSlider();
   $("#example_id").ionRangeSlider({
      type: "double", // Alças duplas
      min: 10000, // Valor mínimo
      max: 50000, // Valor máximo
      from: 15000, // Valor inicial da primeira alça
      to: 25000, // Valor inicial da segunda alça
      step: 1000, // Passo de cada movimento
      prefix: "AO ", // Prefixo monetário
      grid: true, // Mostra a grid para facilitar a visualização
      prettify_enabled: true, // Formatação bonita dos valores
   });
   // var slider = document.getElementById('slider-price');

   // noUiSlider.create(slider, {
   //    start: [20, 80],
   //    connect: true,
   //    range: {
   //       'min': 0,
   //       'max': 100
   //    },
   //    format: {
   //       // 'to' the formatted value. Receives a number.
   //       to: function(value) {
   //          return value + ',-';
   //       },
   //       // 'from' the formatted value.
   //       // Receives a string, should return a number.
   //       from: function(value) {
   //          return Number(value.replace(',-', ''));
   //       }
   //    },

   // });

   $(document).ready(function() {
      $('.filter-list-item-title').click(function(e) {
         e.preventDefault();

         $(this).parent().toggleClass('active');
         var next = $(this).next();
         var height = $(this).next().height();

         if (height == 0) {
            var autoHeight = next.css('height', 'auto').height();
            next.css('height', '0');
            next.animate({
               height: autoHeight
            }, 150);
         } else {
            next.animate({
               height: 0
            }, 150);
         }

      });
   });


   $('.filter-link').click(function(e) {
      e.preventDefault();
      var node = $(this).parent();
      node.find('.filter-link').removeClass('active');
      $(this).addClass('active');
   });
</script>