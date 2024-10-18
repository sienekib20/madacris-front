<style>
   .section-card-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   @media (max-width: 992px) {
      .row-to-reverse {
         flex-direction: column-reverse !important;
      }
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Todos os Artigos',
         'current' => 'Categorias',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-container">
         <div class="main-container px-4 px-sm-5">
            <div class="row">
               <div class="col-lg-6 col-12">
                  <span class="section-card-title block">Todos os artigos</span>
                  <span class="text-muted">Resultado artigos (<span><?= count($artigos) ?></span>) encontrados.</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card pt-3 pb-5">
      <div class="section-card-contain">
         <div class="main-container px-4 px-sm-20">
            <div class="row row-to-reverse">
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
                              <a href="" class="filter-link active">
                                 Tudo
                              </a>
                              <?php foreach ($categorias as $categoria): ?>
                                 <a href="<?= $categoria['categoria_id'] ?>" class="filter-link">
                                    <?= $categoria['categoria'] ?>
                                    <!-- <span>(10)</span> -->
                                 </a>
                              <?php endforeach; ?>
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
                        <div class="product-filter-list-item active d-none">
                           <a href="" class="filter-list-item-title clicable pb-2">
                              <span class="text">Preco</span>
                              <i class='bx bx-chevron-down'></i>
                           </a>
                           <div class="filter-list-item-content h-auto">
                              <!-- <div id="slider-price" class="mt-3"></div> -->
                              <input type="text" id="example_id" name="example_name" value="" />
                              <div class="d-flex mt-4"></div>
                              <div class="price-slider d-flex items-center">
                                 <span>(AO) 10K</span> -
                                 <span>(AO) 25K</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-9 mt-0 lg:mt-5n">
                  <div class="list-card flex-wrap noflow">
                     <?php foreach ($artigos as $artigo):
                        $file = $artigo['arquivos'];
                        if (strpos($artigo['arquivos'], ',')) {
                           $file = explode(',', $file)[0];
                        }
                     ?>
                        <div class="list-card-item" style="--list-card-width: 250px" data-id="<?= $artigo['artigo_id'] ?>" data-name="<?= $artigo['nome'] ?>" data-cateogry="<?= $artigo['categoria'] ?>" data-price="<?= $artigo['preco'] ?>" data-img="<?= env('API_URL') . 'assets/storage/products/' . $file ?>">
                           <div class="list-card-img">
                              <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                              <div class="list-card-actions">
                                 <a href="" class="link">
                                    <i class="bx bx-show"></i>
                                 </a>
                                 <a href="" class="link" role="addTocart">
                                    <i class="bx bx-cart"></i>
                                 </a>
                              </div>
                           </div>
                           <span class="list-card-ticket d-none">-5%</span>
                           <span class="list-card-title"><?= $artigo['nome'] ?></span>
                           <small class="text-muted block list-card-category"><?= $artigo['categoria'] ?></small>
                           <div class="list-ratings">
                              <?php for ($i = 0; $i < 5; $i++): ?>
                                 <i class="bx bx-star"></i>
                              <?php endfor; ?>
                           </div>
                           <span class="list-card-price"><?= $artigo['preco'] ?> KZ</span>
                        </div>
                     <?php endforeach ?>
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