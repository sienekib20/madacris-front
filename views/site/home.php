<?php include "partials/header.php"; ?>

<div class="wrapper">

   <header>
      <?php include "partials/nav.php"; ?>
      <div class="welcome-bg" style="background-image: url(<?= ASSET_PATH ?>/img/intro.jpg)"></div>

      <div class="welcome-text">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-12">
                  <h1 class="intro-text">
                     Chuva de ofertas para
                     <span>

                     </span>
                     Sua Beleza
                  </h1>
                  <span>Oferecemos ate 25% Reducao para todos pedidos feitos a qualquer tipo de artigos. Mais uma diferenca maior para clientes registados na nossa plataforma.</span>
                  <div class="action mt-9 flex-wrap flex items-center">
                     <a href="" class="header-link">Faca o seu pedido</a>
                     <a href="<?= url('category') ?>" class="header-link">Procura Mais</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </header>

   <div class="section-card hidden">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <!-- Slider main container -->
                  <div class="swiper">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        ...
                     </div>
                     <!-- If we need pagination -->
                     <div class="swiper-pagination"></div>

                     <!-- If we need navigation buttons -->
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-button-next"></div>

                     <!-- If we need scrollbar -->
                     <div class="swiper-scrollbar"></div>
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
               <div class="col-lg-4">
                  <div class="card-marketing">
                     <img src="<?= ASSET_PATH ?>/img/item-1.jpg" alt="">
                     <div class="overlay-card"></div>
                     <div class="card-info">
                        <h5>20% Reducao Vestidos de Gala</h5>
                        <small class="d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, illum!</small>
                        <a href="" class="card-marketing-link">Comprar/Alugar</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 my-4 my-lg-1">
                  <div class="card-marketing">
                     <img src="<?= ASSET_PATH ?>/img/item.jpg" alt="">
                     <div class="overlay-card"></div>
                     <div class="card-info">
                        <h5>20% Reducao Vestidos de Gala</h5>
                        <small class="d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, illum!</small>
                        <a href="" class="card-marketing-link">Comprar/Alugar</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="card-marketing">
                     <img src="<?= ASSET_PATH ?>/img/item-2.jpg" alt="">
                     <div class="overlay-card"></div>
                     <div class="card-info">
                        <h5>20% Reducao Vestidos de Gala</h5>
                        <small class="d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, illum!</small>
                        <a href="" class="card-marketing-link">Comprar/Alugar</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php include "partials/destaques.php" ?>


   <div class="section-card edition-bg-fixed">
      <div class="section-card-contain">
         <div class="container">
            <div class="fixed-bg" style="background-image: url(<?= ASSET_PATH ?>/img/item-3.jpg)"></div>
            <div class="col-md-5">
               <div class="content">
                  <span class="text-bold text-white">Tempo de Oferta Limitado</span>
                  <h1 class="mt-2 mb-3 text-white">Especial Edicao</h1>
                  <span class="text-white d-block my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse, omnis illum. Labore.</span>
                  <span class="cupon">Compra Esse Vestido e Obtenha ate 20% de Desconto</span>
                  <a href="" class="fixed-link">Comprar/Alugar Agora</a>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <span>Temos Artigos Por Categorias</span>
            <div class="pilot-container-grid grid-cols-5">

            </div>
         </div>
      </div>
   </div>  






   <?php include "partials/footer.php"; ?>

</div>

<script>
   const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,

      // If we need pagination
      pagination: {
         el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
         el: '.swiper-scrollbar',
      },
   });
</script>