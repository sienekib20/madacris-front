<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?= view_component("nav.title", ['title' => 'Madacris - Inicio']) ?>
   <?= view_component("include") ?>
</head>

<body>

   <div class="wrapper">

      <?= view_component('nav.topnav') ?>
      <header class="page-header">
         <div class="sliders">
            <div class="slide" style="background-image: url(<?= asset('img/intro.jpg') ?>)">
               <div class="slide-captions px-0 px-sm-5">
                  <h3>Compre o visual, Ame o preço</h3>
                  <span>
                     Oferecemos ate 25% de Reducao para os nossos clientes. <br />
                     Descubra as últimas tendências para brilhar em qualquer ocasião.
                  </span>
               </div>
            </div>
            <div class="slide" style="background-image: url(<?= asset('img/item-1.jpg') ?>)">
               <div class="slide-captions px-0 px-sm-5">
                  <h3>Renove seu Guarda-Roupa.</h3>
                  <span> Encontre looks fresquinhos para cada estação, vista-se com confiança e autenticidade. <br /> Estilo para todos os gostos e tamanhos. </span>
               </div>
            </div>
         </div>
      </header>

      <span class="flex mt-4"></span>

      <div class="section-card">
         <div class="section-card-contain">
            <div class="main-container">
               <span class="card-title">Artigos Recentes</span>
               <div class="flex flex-wrap  w-lg-60">
                  <small class="text-muted">
                     Descubra os favoritos da moda que conquistaram o coração <br /> de nossos clientes exigentes. <a href="<?= url('category.all') ?>" class="text-black text-underline ml-2">Ver todos</a>
                  </small>
               </div>

               <div class="list-card" id="artigosRecent">
                  <?php $countItms = 0;
                  foreach ($artigos as $artigo) :
                     $file = $artigo['arquivos'];
                     if (strpos($artigo['arquivos'], ',')) {
                        $file = explode(',', $file)[0];
                     }
                     if ($countItms == 5) break;
                  ?>
                     <div class="list-card-item" data-id="<?= $artigo['artigo_id'] ?>" data-name="<?= $artigo['nome'] ?>" data-cateogry="<?= $artigo['categoria'] ?>" data-price="<?= $artigo['preco'] ?>" data-img="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" data-desc="<?= $artigo['descricao'] ?>">

                        <div class="list-card-img">
                           <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                           <div class="list-card-actions">
                              <a href="javascript:;" class="link" data-modal="#modalPreview" data-target="<?= $artigo['artigo_id'] ?>">
                                 <i class="bx bx-show"></i>
                              </a>
                              <a href="" class="link" role="addTocart" data-target="item-<?= $artigo['artigo_id'] ?>">
                                 <i class="bx bx-cart"></i>
                              </a>
                           </div>
                        </div>
                        <a href="<?= url('artigo.details') . "?id=" . $artigo['uuid'] ?>" class="list-card-title text-black mt-2 block"><?= $artigo['nome'] ?></a>
                        <small class="text-muted block list-card-category"><?= $artigo['categoria'] ?></small>
                        <div class="list-ratings flex items-center mt-2">
                           <?php for ($i = 0; $i < 5; $i++): ?>
                              <i class="bi bi-star"></i>
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

      <div class="section-card mt-5 bg-section-white">
         <div class="section-card-contain">
            <div class="main-container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="contain-img i">
                        <img src="<?= asset('img/filler-1.webp') ?>" alt="">
                        <div class="img-absolute">
                           <img src="<?= asset('img/tiny.avif') ?>" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 mt-5 mt-md-0 category-details">
                     <span>Categorizando os artigos</span>
                     <h4>Organizamos os artigos por categoria, Para faciltar as tuas escolhas</h4>
                     <div class="categories flex flex-column">
                        <?php $count = 0;
                        foreach ($categorias as $categoria):
                           if ($count <= 3):
                        ?>
                              <a href="" class="category-item">
                                 <i class="bi bi-arrow-right"></i>
                                 <span><?= $categoria['categoria'] ?></span>
                              </a>
                        <?php endif;
                           $count++;
                        endforeach ?>
                        <a href="<?= url('category.all') ?>" class="btn">
                           explorar tudo
                        </a>
                        <small class="text-muted block mt-4 w-lg-60">Podes deixar o teu comentário, isso vai nos ajudar a trazer melhorias para você
                           <a href="javascript:;" id="openSideComentario" class="text-black text-underline">Deixar comentário</a>
                        </small>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="section-card mt-4">
         <div class="section-card-contain">
            <div class="main-container">
               <span class="card-title">Em destaque</span>
               <div class="flex flex-wrap  w-lg-60">
                  <small class="text-muted">
                     Encontre o vestido perfeito para brilhar em qualquer evento. <a href="<?= url('category.all') ?>" class="text-black text-underline ml-2">Ver todos</a>
                  </small>
               </div>
               <div class="list-card" id="artigosRecentes">
                  <?php $countItms = 0;
                  foreach ($artigos as $artigo) :
                     $file = $artigo['arquivos'];
                     if (strpos($artigo['arquivos'], ',')) {
                        $file = explode(',', $file)[0];
                     }
                     if ($countItms == 5) break;
                  ?>
                     <div class="list-card-item" data-id="<?= $artigo['artigo_id'] ?>" data-name="<?= $artigo['nome'] ?>" data-cateogry="<?= $artigo['categoria'] ?>" data-price="<?= $artigo['preco'] ?>" data-img="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" data-desc="<?= $artigo['descricao'] ?>">

                        <div class="list-card-img">
                           <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                           <div class="list-card-actions">
                              <a href="javascript:;" class="link" data-modal="#modalPreview" data-target="<?= $artigo['artigo_id'] ?>">
                                 <i class="bx bx-show"></i>
                              </a>
                              <a href="" class="link" role="addTocart" data-target="item-<?= $artigo['artigo_id'] ?>">
                                 <i class="bx bx-cart"></i>
                              </a>
                           </div>
                        </div>
                        <a href="<?= url('artigo.details') . "?id=" . $artigo['uuid'] ?>" class="list-card-title text-black mt-2 block"><?= $artigo['nome'] ?></a>
                        <small class="text-muted block list-card-category"><?= $artigo['categoria'] ?></small>
                        <div class="list-ratings mt-2">
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
            <span class="flex"></span>
         </div>
      </div>

      <div class="section-card">
         <div class="section-card-contain">
            <div class="main-container">
               <span class="card-title">Depoimentos</span>
               <div class="flex flex-wrap  w-lg-50 mb-5">
                  <small class="text-muted">
                     O Feedback dos nossos clientes. O que eles acharam da nossa plataforma. Veja você mesmo, talvez isso lhe ajude a acreditar.
                  </small>
               </div>
               <div class="list-card noflow list-card-reviews">
                  <div class="list-review">
                     <div class="list-review-ratings">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                           <i class="bx bxs-star"></i>
                        <?php endfor; ?>
                     </div>
                     <span class="block">Achei bom a plataforma, em fim consegui salvar a minha noite de Gala, recomendo usar a plataforma.</span>
                     <div class="profile flex mt-auto">
                        <div class="contain-img">
                           <img src="<?= asset('img/2.jpg') ?>" alt="">
                        </div>
                        <small class="text-black">Marleine Domingos</small>
                     </div>
                  </div>
                  <div class="list-review large-review">
                     <img src="<?= asset('img/i2150171828.jpg') ?>" alt="">
                     <div class="list-review-overlay"></div>

                     <div class="list-review-contain">
                        <span class="list-review-deal">Oferta do dia. 15% de redução</span>
                        <span>Para os nossos clientes fieis, oferecemos uma redução de 15% ou mais do que isso. Crie já a sua conta para o benefício.</span>
                        <a href="javascript:;" name="openAuthLogin" class="list-review-btn" role="">
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
                     <span>Não sabia como socorrer a minha noite de Noivado, em fim, só precisei dar um toque na Madacris. É rápido, fácil e a preço accessível.</span>
                     <div class="profile flex">
                        <div class="contain-img">
                           <img src="<?= asset('img/1.jpg') ?>" alt="">
                        </div>
                        <small class="text-black">Elena António</small>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="d-flex mb-5"></div>

      <div class="section-card bg-section-white">
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

   $(openSideComentario).click(function() {
      $(popupComment).addClass('push');
      $(platformOverlay).addClass('show');
      $('body').css('overflow', 'hidden');
   });


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