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
      <div class="row">
         <div class="col-lg-5">
            <span class="app-brand-logo text-white" id="brandLogo">Madacris</span>
            <small class="app-brand-description" id="appDescription">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ex nesciunt ad deserunt dolore repellat?</small>

            <div class="footer-contact-list mt-4 mb-5">
               <div class="contast-list-item flex ai-center">
                  <i class='bx bxs-phone-call'></i>
                  <div class="list-item-content">
                     <small class="text-bold text-white">Celular</small>
                     <small class="list-item-text" id="phoneNumber">+244 949 901 787</small>
                  </div>
               </div>
               <div class="contast-list-item flex ai-center">
                  <i class='bx bx-headphone'></i>
                  <div class="list-item-content">
                     <small class="text-bold text-white">Call center</small>
                     <small class="list-item-text" id="phoneNumber">+244 949 901 787 | 948 254 864</small>
                  </div>
               </div>

               <div class="contast-list-item flex ai-center">
                  <i class='bx bx-mail-send'></i>
                  <div class="list-item-content">
                     <small class="text-bold text-white">Mailbox</small>
                     <small class="list-item-text" id="phoneNumber">meu@email.com</small>
                  </div>
               </div>
            </div>

         </div>

         <div class="col-lg-4 mb-5 mt-lg-0 mb-lg-0">
            <span class="footer-title">Categorias</span>
            <div class="footer-contain">
               <span class="footer-contain-title">Vestidos</span>
               <div class="d-flex flex-column">
                  <a href="">
                     <small>Vestidos de Gala</small>
                  </a>
               </div>
            </div>
         </div>

         <div class="col-lg-3 mb-5 mb-lg-0">
            <span class="footer-title">Subscricao</span>
            <form action="" method="POST" id="formValidateSubscription">
               <div class="input-group">
                  <input type="text" class="form-input" placeholder="Seu email">
               </div>
               <button class="btn btn-default">Subscrever</button>
            </form>
         </div>

      </div>
   </div>

   <div class="line-dir"></div>

   <div class="container">
      <div class="row mt-4">
         <div class="col-lg-6 col-12 text-muted">
            <small class="d-block">Marcas registradas e marcas são propriedade de seus respectivos proprietários.</small>
            <small>
               &copy; Copyright
               <script>
                  document.write(new Date().getFullYear());
               </script> <a href="mayongi-ao.com" class="text-underline" target="_blank">Mayongi Lda</a>
               | Design made by : <a href="tel:+244949901787">Sienekib</a>
            </small>

         </div>
         <div class="col-lg-6">
            <div class="footer-link-media jc-start jc-lg-end mt-4 mt-lg-0 ml-2n">
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