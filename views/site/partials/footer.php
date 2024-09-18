<?php
$footer_link_media = [
   [
      "link" => "#",
      "icon" => "facebook-square",
      "tooltip" => "Pagina facebook"
   ],
   [
      "link" => "#",
      "icon" => "twitter",
      "tooltip" => "@pagina"
   ],
   [
      "link" => "#",
      "icon" => "instagram",
      "tooltip" => "@mayongi-ao_lda"
   ],
   [
      "link" => "#",
      "icon" => "google",
      "tooltip" => "no tooltip"
   ]

];
?>
<footer>
   <div class="container">

      <div class="row mb-4">

         <div class="col-lg-10">

            <form action="" class="row items-center">
               <div class="col-md-6">
                  <div class="input-group w-100 items-center justify-center">
                     <div class="w-100 w-lg-50">
                        <span>
                           Receber Novidades
                        </span>
                        <small class="block">Fique conectado, e sera actualizado</small>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="input-group mt-2">
                     <input type="text" class="default-input" placeholder="Inserir email" required>
                     <button type="submit" class="default-btn cuppon-absolute-btn">
                        <small>enviar</small>
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="line-dir"></div>
   <div class="container mb-4">

      <div class="row mt-4">
         <div class="col-lg-l0 mx-auto py-4">
            <div class="flex items-center justify-center flex-wrap">
               <a href="" class="footer-action-link">Sobre</a>
               <a href="<?= url('terms') ?>" class="footer-action-link">Termos de uso</a>
               <a href="<?= url('policy') ?>" class="footer-action-link">Politicas</a>
               <a href="<?= url('contact') ?>" class="footer-action-link">Contactos</a>
               <a href="<?= url('delivery') ?>" class="footer-action-link">Entregas & reembolsos</a>
            </div>
         </div>
      </div>
   </div>

   <div class="line-dir"></div>

   <div class="container py-2">
      <div class="row mt-3">
         <div class="col-lg-6 col-12 text-black">
            <small class="d-block">Marcas registradas e marcas são propriedade de seus respectivos proprietários.</small>
            <small>
               &copy; Copyright
               <script>
                  document.write(new Date().getFullYear());
               </script> <a href="mayongi-ao.com" class="text-underline text-black text-bold" target="_blank">Mayongi Lda</a>
               | Design feito com <i class="bx bx-heart"></i> por : <a href="tel:+244949901787" class="text-underline text-black text-bold">Sienekib</a>
            </small>

         </div>
         <div class="col-lg-6">
            <div class="footer-link-media justify-start lg:justify-end mt-4 mt-lg-0 ml-2n">
               <?php foreach ($footer_link_media as $link): ?>
                  <a href="<?= $link['link'] ?>" class="footer-link-item">
                     <i class='bx bxl-<?= $link['icon'] ?>'></i>
                     <span class="footer-link-item-tooltip d-none">
                        <?= $link['tooltip'] ?>
                     </span>
                  </a>
               <?php endforeach; ?>
            </div>
         </div>
      </div>
   </div>

</footer>

</body>

</html>