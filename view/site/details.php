<?= view_component("include") ?>
<style>
   @media (max-width: 992px) {
      .aaaf {
         flex-wrap: wrap;
      }

      .aaaf>* {
         margin: 2rem 0 !important;
      }

      .aaaf>*:nth-child(1) {
         margin-right: 1rem !important;
      }

      .aaaf .ratings {
         justify-content: flex-start !important;
      }
   }

   body {
      background-color: #f5f7f9 !important;
   }

   select,
   input {
      padding: 0.85rem 1rem !important;
   }

   .action-product-btn {
      width: 70%;
      background-color: #000;
      color: #fff !important;
      font-size: 12.5px;
      padding: 1rem 0;
      text-align: center;
   }

   .action-product-btn:hover {
      opacity: 0.75;
   }
</style>

<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">

               <div class="col-lg-7">
                  <div class="d-product">
                     <div class="d-product-img">
                        <img src="<?= env('API_URL') . 'assets/storage/products/' . $arquivos[0] ?>" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="flex ratings">
                     <?php for ($i = 1; $i <= 5; $i++):
                        $starClass = ($currentItems->ratings >= $i) ? 'bxs-star active-rating' : 'bx-star'; ?>
                        <i class="bx <?= $starClass ?>"></i>
                     <?php endfor; ?>

                  </div>
                  <span class="d-product-name"><?= $currentItems->nome ?></span>
                  <small class="text-muted d-block mb-3"><?= $currentItems->categoria ?></small>
                  <small class="d-product-typo">
                     <?= $currentItems->tipo ?? 'Normal' ?>
                  </small>

                  <div class="flex items-baseline d-product-price mb-2">
                     <span class="bold">AO <?= $currentItems->preco ?></span>
                     <small class="line-through">0,00</small>
                  </div>
                  <p>
                     <?= $currentItems->descricao ?>
                  </p>
                  <div class="variantes">
                     <div class="variante-item flex items-center">
                        <span class="variante-name">Tamanho</span>
                        <div class="variante-values ml-3 flex items-center">
                           <span class="variante-val">X</span>
                        </div>
                     </div>
                  </div>

                  <div class="styled-form">
                     <div class="d-flex items-center details-product-action mt-5">
                        <input type="number" class="default-input w-30" value="1" min="1">
                        <a href="" class="action-product-btn w-65 ml-auto">Adiconar no carrinho</a>
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
                  <h4 class="text-bold">Artigos relacionados</h4>
                  <small class="block">Desta categoria tem mais. Explore!</small>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="list-card">
            
         </div>
      </div>
   </div>

   <div class="d-flex my-4"></div>

   <?php view_component("footer") ?>
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