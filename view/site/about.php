<style>
   .section-card-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   .default-input {
      padding: 0.65rem 1rem !important;
   }

   form * {
      border-radius: 0.25rem;
      font-size: 15px;
      font-family: 'Onest-Regular';
   }

   form {
      border: 1px solid rgba(0, 0, 0, 0.1);
      padding: 1rem;
      border-radius: 0.25rem;
   }

   @media (max-width: 370px) {
      form {
         padding: 1rem 0.125rem;
      }
   }

   textarea {
      resize: none;
   }

   .form-title {
      font-family: 'Onest-Bold';
      font-size: 1.2rem;
   }

   .cti {
      justify-content: flex-start;
   }

   .cti [class*="col-"] {
      background: red;
      height: 100px;
   }

   .ct-title {
      font-family: 'Onest-Bold';
      font-size: 1.1rem;
   }

   .ct-title+span {
      font-size: 0.9rem;
   }

   .ct-title+div {
      display: flex;
      align-items: center;
   }

   [class*="col-lg"] i {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 32px;
      height: 32px;
      aspect-ratio: 1/1;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 50%;
   }

   .ct-item {
      display: flex;
      align-items: center;
      gap: 0.75rem;
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Sobre nós',
         'current' => 'Sobre',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container px-4 px-sm-5">
            <div class="row">
               <div class="col-lg-6 col-12">
                  <span class="section-card-title block">Sobre a Loja</span>
                  <span class="text-muted">O estilo de uma página "Sobre Nós" pode variar dependendo da empresa e de seu público-alvo.</span>
               </div>
            </div>
         </div>
      </div>
   </div>

 



   <span class="flex mt-4"></span>
   <span class="flex py-5"></span>
   <span class="flex py-5"></span>


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