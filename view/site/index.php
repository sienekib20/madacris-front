<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <?= view_component("include") ?>
</head>

<body>

   <div class="wrapper">

      <?= view_component('nav.topnav') ?>
      <header class="page-header">
         <div class="sliders">
            <div class="slide" style="background-image: url(<?= asset('img/intro.jpg') ?>)">
               <div class="slide-captions px-0 px-sm-5">
                  <h3>Impressione a todos</h3>
                  <span>Oferecemos ate 25% de Reducao para os nossos clientes.</span>
               </div>
            </div>
            <div class="slide" style="background-image: url(<?= asset('img/item-1.jpg') ?>)">
               <div class="slide-captions px-0 px-sm-5">
                  <h3>Atrai a todos, seja uma marca</h3>
                  <span>Oferecemos ate 25% de Reducao para os nossos clientes.</span>
               </div>
            </div>
         </div>
      </header>

      <span class="flex mt-4"></span>

      <div class="section-card">
         <div class="section-card-contain">
            <div class="main-container">
               <div class="section-card-flex">
                  <span class="card-title">Artigos Recentes</span>
               </div>
               <div class="list-card" id="artigosRecent">
                  <?php $countItms = 0;
                  foreach ($artigos as $artigo) :
                     $file = $artigo['arquivos'];
                     if (strpos($artigo['arquivos'], ',')) {
                        $file = explode(',', $file)[0];
                     }
                     if ($countItms == 4) break;
                  ?>
                     <div class="list-card-item" data-id="<?= $artigo['artigo_id'] ?>" data-name="<?= $artigo['nome'] ?>" data-cateogry="<?= $artigo['categoria'] ?>" data-price="<?= $artigo['preco'] ?>" data-img="<?= env('API_URL') . 'assets/storage/products/' . $file ?>">

                        <div class="list-card-img">
                           <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                           <div class="list-card-actions">
                              <a href="" class="link">
                                 <i class="bx bx-show"></i>
                              </a>
                              <a href="" class="link" role="addTocart" data-target="item-<?= $artigo['artigo_id'] ?>">
                                 <i class="bx bx-cart"></i>
                              </a>
                           </div>
                        </div>
                        <span class="list-card-title"><?= $artigo['nome'] ?></span>
                        <small class="text-muted block list-card-category"><?= $artigo['categoria'] ?></small>
                        <div class="list-ratings">
                           <?php for ($i = 0; $i < 5; $i++): ?>
                              <i class="bx bx-star"></i>
                           <?php endfor; ?>
                        </div>
                        <span class="list-card-price"><?= $artigo['preco'] ?> KZ</span>
                     </div>
                  <?php $countItms++;
                  endforeach; ?>
               </div>
            </div>
         </div>
      </div>


      <div class="section-card pt-0">
         <div class="section-card-contain secondary-section">
            <div class="main-container">
               <div class="section-card-flex">
                  <span class="card-title">Categorias</span>
               </div>
               <div class="list-card" style="align-items: flex-start;">
                  <?php foreach ($categorias as $categoria):  ?>
                     <div class="list-card-item" style="--list-card-width: 360px">
                        <div class="list-card-img">
                           <img src="<?= asset('img/3.jpg') ?>" alt="">
                        </div>
                        <div class="list-contain text-left">
                           <span class="list-card-title"><?= $categoria['categoria'] ?></span>
                           <small class="text-muted block mb-2 mt-2 list-card-category"><?= $categoria['descricao'] ?></small>
                           <a href="#" class="list-card-action">
                              ver mais <i class="bx bx-chevron-right"></i>
                           </a>
                        </div>
                     </div>
                  <?php endforeach ?>
               </div>
            </div>
         </div>
      </div>

      <div class="section-card">
         <div class="section-card-contain">
            <div class="main-container">
               <div class="section-card-flex">
                  <span class="card-title">Diversos</span>
               </div>
               <div class="list-card" id="artigosRecentes">
                  <?php $countItms = 0;
                  foreach ($artigos as $artigo) :
                     $file = $artigo['arquivos'];
                     if (strpos($artigo['arquivos'], ',')) {
                        $file = explode(',', $file)[0];
                     }
                     if ($countItms == 4) break;
                  ?>
                     <div class="list-card-item" data-id="<?= $artigo['artigo_id'] ?>" data-name="<?= $artigo['nome'] ?>" data-cateogry="<?= $artigo['categoria'] ?>" data-price="<?= $artigo['preco'] ?>" data-img="<?= env('API_URL') . 'assets/storage/products/' . $file ?>">

                        <div class="list-card-img">
                           <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                           <div class="list-card-actions">
                              <a href="" class="link">
                                 <i class="bx bx-show"></i>
                              </a>
                              <a href="" class="link" role="addTocart" data-target="item-<?= $artigo['artigo_id'] ?>">
                                 <i class="bx bx-cart"></i>
                              </a>
                           </div>
                        </div>
                        <span class="list-card-title"><?= $artigo['nome'] ?></span>
                        <small class="text-muted block list-card-category"><?= $artigo['categoria'] ?></small>
                        <div class="list-ratings">
                           <?php for ($i = 0; $i < 5; $i++): ?>
                              <i class="bx bx-star"></i>
                           <?php endfor; ?>
                        </div>
                        <span class="list-card-price"><?= $artigo['preco'] ?> KZ</span>
                     </div>
                  <?php $countItms++;
                  endforeach; ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container">
            <div class="section-card-flex flex-column">
               <span class="card-title">Depoimentos de Clientes</span>
               <img src="<?= asset('img/ring.png') ?>" alt="" class="tring">
            </div>
            <div class="list-card">
               <div class="list-review">
                  <div class="list-review-ratings">
                     <?php for ($i = 0; $i < 5; $i++): ?>
                        <i class="bx bxs-star"></i>
                     <?php endfor; ?>
                  </div>
                  <span class="block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo architecto voluptas nulla.</span>
                  <div class="profile flex mt-auto">
                     <div class="contain-img">
                        <img src="<?= asset('img/2.jpg') ?>" alt="">
                     </div>
                     <small class="text-black">Mila Kunis</small>
                  </div>
               </div>
               <div class="list-review large-review">
                  <img src="<?= asset('img/i2150171828.jpg') ?>" alt="">
                  <div class="list-review-overlay"></div>

                  <div class="list-review-contain">
                     <span class="list-review-deal">Oferta do dia. 15% de redução</span>
                     <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus sunt doloribus error!</span>
                     <a href="" class="list-review-btn" role="">
                        Comprar agora <i class="bx bx-chevron-right"></i>
                     </a>
                  </div>

               </div>
               <div class="list-review">
                  <div class="list-review-ratings">
                     <?php for ($i = 0; $i < 5; $i++): ?>
                        <i class="bx bxs-star"></i>
                     <?php endfor; ?>
                  </div>
                  <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo architecto voluptas nulla.</span>
                  <div class="profile flex">
                     <div class="contain-img">
                        <img src="<?= asset('img/1.jpg') ?>" alt="">
                     </div>
                     <small class="text-black">Mila Kunis</small>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="d-flex mb-5"></div>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container px-3 px-sm-5">
            <div class="pubmark w-100 relative mb-5">
               <div class="grid grid-cols-3 lg:grid-cols-6 grid-nogap">
                  <?php for ($i = 1; $i <= 6; $i++):  ?>
                     <a href="#" class="contain-img">
                        <img src="<?= asset("img/$i.jpg") ?>" alt="">
                     </a>
                  <?php endfor; ?>
               </div>
               <div class="banner w-100 w-sm-65 w-lg-35">
                  <span class="footer-link">Visite o Nosso Instagram</span>
                  <a href="" class="banner-link">@madacris_shop</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?= view_component('footer') ?>
   </div>



</body>

</html>

<script src="<?= asset('js/swip.js') ?>"></script>
<input type="hidden" id="route_root" value="<?= ROOT ?>" />

<script>
   $(document).ready(function() {
      retrieve.get('artigos/get', (data) => {
         console.log(data);
      }, (err) => {

         console.log(err);
      });

   });
</script>


<script>
   $('.sliders').slick({
      dots: true,
      infinite: true,
      speed: 1000,
      fade: true,
      cssEase: 'linear',
      autoplay: true
   });

   $('.slick-arrow').text("");
   $('.slick-dots li button').text("");
   $('.slick-arrow:first-of-type').append('<i class="bx bx-chevron-left"></i>');
   $('.slick-arrow:last-of-type').append('<i class="bx bx-chevron-right"></i>');

   $('.swip-items').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      arrows: true,
      dots: false,
      rows: 1,
      centerMode: true, // Centraliza os itens
      centerPadding: '0px', // Remove qualquer padding extra nos lados
      responsive: [{
            breakpoint: 1030,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 1,
               centerMode: false // Desativar em telas menores, se necessário
            }
         },
         {
            breakpoint: 768,
            settings: {
               slidesToShow: 2,
               slidesToScroll: 1,
               centerMode: false // Desativar em telas menores, se necessário
            }
         },
         {
            breakpoint: 600,
            settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               centerMode: false
            }
         }
      ]


   });
</script>