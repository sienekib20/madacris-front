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
                  <div class="list-card flex-wrap noflow" id="listCardItems" style="margin-top: -2.5rem">
                     <?php foreach ($artigos as $artigo):
                        $file = $artigo['arquivos'];
                        if (strpos($artigo['arquivos'], ',')) {
                           $file = explode(',', $file)[0];
                        }
                     ?>
                        <div class="list-card-item" style="--list-card-width: 210px" data-id="<?= $artigo['artigo_id'] ?>" data-name="<?= $artigo['nome'] ?>" data-cateogry="<?= $artigo['categoria'] ?>" data-price="<?= $artigo['preco'] ?>" data-img="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" data-desc="<?= $artigo['descricao'] ?>">
                           <div class="list-card-img">
                              <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                              <div class="list-card-actions">
                                 <a href="" data-modal="#modalPreview" class="link" data-target="item-<?= $artigo['artigo_id'] ?>">
                                    <i class="bx bx-show"></i>
                                 </a>
                                 <a href="" class="link" role="addTocart">
                                    <i class="bx bx-cart"></i>
                                 </a>
                              </div>
                           </div>
                           <span class="list-card-ticket d-none">-5%</span>
                           <a href="<?= url('artigo.details') . "?id=" . $artigo['uuid'] ?>" class="list-card-title text-black mt-2 block"><?= $artigo['nome'] ?></a>
                           <small class="text-muted block list-card-category"><?= $artigo['categoria'] ?></small>
                           <div class="list-ratings">
                              <?php for ($i = 0; $i < 5; $i++):
                                 if ($artigo['ratings'] >= $i) {
                                    $class = 'bxs-star active-rating';
                                 } else {
                                    $class = 'bx-star';
                                 }
                              ?>
                                 <i class="bx <?= $class ?>"></i>
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

   <script>
      let atributos = [];
      let formData = new FormData();

      $('.filter-link').click(function(e) {
         e.preventDefault();
         var node = $(this).parent();
         node.find('.filter-link').removeClass('active');
         $(this).addClass('active');

         var tipo = $(this).parent().prev().text().trim();
         var valor = $(this).text().trim();

         var typeName = tipo.toLocaleLowerCase() === 'tamanho' ? 'tamanho' : 'cor';
         var typeValor = tipo.toLocaleLowerCase() === 'tamanho' ? 'valor_tamanho' : 'valor_cor';

         // Atualiza ou adiciona os valores no FormData
         if (tipo.toLocaleLowerCase() === 'tamanho') {
            formData.set('tamanho', tipo);
            formData.set('valor_tamanho', valor);
         } else if (tipo.toLocaleLowerCase() === 'cor') {
            formData.set('cor', tipo);
            formData.set('valor_cor', valor);
         }

         // Atualiza o array de atributos (se necessário)
         atributos.push({
            typeName: typeName,
            typeValor: valor
         });

         aplicarFiltro(formData);
      });


      function aplicarFiltro(formData) {
         $.ajax({
            url: `${api_endpoint.value}view/artigos/variante`,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
               console.log(data);
               listCardItems.innerHTML = "";
               if (data.length > 0) {
                  data.forEach(datum => {
                     let buildItem = listCardItem(datum);
                     listCardItems.innerHTML += buildItem;
                  });
               } else {
                  // Crie um array para armazenar os itens
                  let items = [];

                  <?php foreach ($artigos as $artigo): ?>
                     // Chame a função listCardItem para cada artigo e adicione ao array
                     items.push(listCardItem(<?php echo json_encode($artigo); ?>));
                  <?php endforeach; ?>

                  // Insira todos os itens no innerHTML de uma vez
                  listCardItems.innerHTML = items.join('');
               }
            },
            error: function(err) {
               console.log(err);
            }
         });
      }

      function listCardItem(artigo) {
         var fileArtigo = artigo.arquivos.split(',')[0];
         let listItem = `
         <div class="list-card-item" style="--list-card-width: 210px" data-id="${artigo.artigo_id}" data-name="${artigo.nome}" data-cateogry="${artigo.categoria}" data-price="${artigo.preco}" data-img="${ api_endpoint.value + 'assets/storage/products/' + fileArtigo }" data-desc="${artigo.descricao}">
            <div class="list-card-img">
               <img src="${ api_endpoint.value + 'assets/storage/products/' + fileArtigo }" alt="">
               <div class="list-card-actions">
                  <a href="" data-modal="#modalPreview" class="link" data-target="item-${artigo.artigo_id}">
                     <i class="bx bx-show"></i>
                  </a>
                  <a href="" class="link" onclick="aplicar_add(event)">
                     <i class="bx bx-cart"></i>
                  </a>
               </div>
            </div>
            <span class="list-card-ticket d-none">-5%</span>
            <a href="<?= url('artigo.details') . "?id=" ?>${artigo.uuid}" class="list-card-title text-black mt-2 block">${artigo.nome}</a>
            <small class="text-muted block list-card-category">${artigo.categoria}</small>
            <div class="list-ratings">
               <?php for ($i = 1; $i <= 5; $i++): ?>
                  ${artigo.ratings >= <?= $i ?> ? '<i class="bx bxs-star active-rating"></i>' : '<i class="bx bx-star"></i>'}
               <?php endfor; ?>
            </div>
            <span class="list-card-price">${artigo.preco} KZ</span>
         </div>
      `;

         return listItem;
      }
   </script>

   <?= view_component('footer') ?>
</div>

<input type="hidden" id="baseUrl" value="<?= env('') ?>" />

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
</script>