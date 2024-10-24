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

   .modal-doc {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999999999999;
      background-color: rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(3px);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
   }

   .modal-doc.show {
      opacity: 1;
      pointer-events: all;
   }

   .modal-contain {
      width: 830px;
      max-width: 95%;
      border-radius: 10px;
      background-color: white;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      position: relative;
      top: -20rem;
   }

   .modal-doc.show .modal-contain {
      animation: showBig 0.15s linear forwards;
   }

   @keyframes showBig {
      to {
         top: 0;
      }
   }

   .modal-footer,
   .modal-header {
      padding: 1.5rem 0.25rem;
      display: flex;
      align-items: center;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
   }

   .modal-footer {
      border-top: 1px solid rgba(0, 0, 0, 0.1);
   }

   .modal-footer a,
   .modal-header a {
      font-size: 1.8rem;
      margin-left: auto;
      margin-right: 0.5rem;
   }

   .modal-footer a {
      font-size: 1rem;
      background-color: #000;
      color: white;
      padding: 0.25rem 0.75rem;
   }

   .modal-body {
      height: 420px;
      max-height: 420px;
      overflow-y: auto;
   }

   .modal-body iframe {
      width: 100%;
      height: 100%;
      position: relative;
      margin: 0 auto;
   }
</style>

<style>
</style>


<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <div class="section-card">
      <div class="section-card-container">
         <div class="workspace-container">
            <div class="row">
               <div class="col-lg-6 col-12">
                  <span class="section-card-title block">My Workspace</span>
                  <span>Accompanhe a evolução dos teus dados.</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <a href="javascript:;" class="openNow">Menu</a>

   <div class="section-card pt-0">
      <div class="section-card-contain pt-0">
         <div class="flex items-start flex-wrap workspace-container">
            <?= view_component('nav.workspace-aside') ?>

            <div class="workspace-pedidos flex flex-wrap" style="margin-top: -3rem">
               <?php foreach ($pedidos as $pedido): $pedido = (object) $pedido; ?>
                  <div class="col-md-6 mt-4">
                     <div class="workspace-pedido-item">
                        <small class="wstatus-pedido"><?= $pedido->estado ?></small>
                        <span class="onest-bold mt-2">Pedido <?= $pedido->ref_pedido ?></span>
                        <small class="text-muted">Qtd. Artigo Adicionado: <?= $pedido->qtdItems ?></small>
                        <small class="text-muted block">Desconto: <?= $pedido->desconto ?></small>
                        <span class="workspace-price"> <i class="bi bi-file"></i> Total: <span id="valorAd">
                              <?= $pedido->total ?>
                           </span> </span>
                        <div class="flex items-center mt-4">
                           <?php $token = bin2hex(random_bytes(32 / 2)); ?>
                           <input type="hidden" id="inputUrlToPdf_<?= str_replace('#', '', $pedido->ref_pedido) ?>" value="<?= url('shop') . '?doc=' . $token . '&i=' . str_replace('#', '', $pedido->ref_pedido) . '&payment=' . $pedido->modo_pagamento ?>">

                           <a href="javascript:;" data-ref="<?= str_replace('#', '', $pedido->ref_pedido) ?>" class="workspace-action-btn openDocPdf">
                              <i class="bx bx-printer"></i>
                              ver
                           </a>
                           <a href="javascript:;" data-ref="<?= str_replace('#', '', $pedido->ref_pedido) ?>" class="workspace-action-btn printDocPdf">
                              <i class="bx bx-download"></i>
                              baixar
                           </a>
                        </div>
                     </div>
                  </div>
               <?php endforeach; ?>

            </div>

         </div>
      </div>
   </div>

   <span class="d-flex my-4"></span>
   <span class="d-flex my-4"></span>
   <span class="d-flex my-5"></span>


   <span class="flex mt-4"></span>

   <div class="modal-doc">
      <div class="modal-contain">
         <div class="modal-header">
            <a href="" class="closeMode">
               <i class="bi bi-x"></i>
            </a>
         </div>
         <div class="modal-body">
            <iframe frameborder="0" id="docRecibo" width="100%" style="height: 60vh;"></iframe>
         </div>
         <div class="modal-footer">
            <a href="" id="btn-print" class="print flex items-center">
               <small class="bi bi-printer"></small>
               imprimir
            </a>
         </div>
      </div>
   </div>


   <?= view_component('footer') ?>
</div>

<script>

   $(document).ready(function(e) {
      $('.openNow').click(function() {
         $('.workspace-sidepane').toggleClass('active');
      });
   });

   $(document).ready(function() {
      // Função para baixar o PDF
      async function downloadPdf(url) {
         const response = await fetch(url);
         const blob = await response.blob();
         const link = document.createElement('a');
         link.href = window.URL.createObjectURL(blob);
         link.download = 'documento.pdf'; // Nome do arquivo
         document.body.appendChild(link);
         link.click();
         document.body.removeChild(link);
      }

      // Função para imprimir o iframe
      function printIframe(iframe) {
         return new Promise((resolve) => {
            iframe.contentWindow.print();
            // Espera um tempo antes de resolver, ajuste conforme necessário
            setTimeout(resolve, 1000);
         });
      }

      $(document).on("click", "#btn-print", async function(e) {
         e.preventDefault();
         var iframe = document.getElementById('docRecibo');
         await printIframe(iframe);
         console.log('Impressão concluída');
      });

      $('.closeMode').click((e) => {
         e.preventDefault();
         $('.modal-doc').removeClass('show');
         $('iframe').attr('src', ''); // Limpa o src do iframe ao fechar
      });

      // Abrir o modal ao clicar no link
      $('.openDocPdf').click(async function(e) {
         e.preventDefault();
         // Obtém a URL do documento
         var input = document.querySelector(`#inputUrlToPdf_${e.target.dataset.ref}`);
         const url = input.value;

         // Define o src do iframe
         $('iframe').attr('src', url);
         console.log($('iframe'));

         // Mostra o modal
         $('.modal-doc').addClass('show');
      });

      $('.printDocPdf').click(async function(e) {
         e.preventDefault();
         // Obtém a URL do documento
         var input = document.querySelector(`#inputUrlToPdf_${e.target.dataset.ref}`);
         const url = input.value;

         // Define o src do iframe
         $('iframe').attr('src', url);

         // Chama a impressão
         await printIframe(document.getElementById('docRecibo'));
      });

      // Adicionando evento para download
      $('.downloadDocPdf').click(async function(e) {
         e.preventDefault();
         // Obtém a URL do documento
         var input = document.querySelector(`#inputUrlToPdf_${e.target.dataset.ref}`);
         const url = input.value;

         // Chama a função para baixar o PDF
         await downloadPdf(url);
      });
   });


   // $(document).ready(function() {

   //    $(document).on("click", "#btn-print", function(e) {
   //       e.preventDefault();
   //       var iframe = document.getElementById('docRecibo');
   //       iframe.contentWindow.print();
   //    });


   //    $('.closeMode').click((e) => {
   //       e.preventDefault();
   //       $('.modal-doc').removeClass('show');
   //       $('iframe').attr('src', ''); // Limpa o src do iframe ao fechar
   //    });

   //    // Abrir o modal ao clicar no link
   //    $('.openDocPdf').click(function(e) {
   //       e.preventDefault();
   //       // Obtém a URL do documento
   //       var input = document.querySelector(`#inputUrlToPdf_${e.target.dataset.ref}`)
   //       const url = input.value; //$(this).closest('.cart-product-list-item').find('#inputUrlToPdf').val();
   //       // alert(url);
   //       // Define o src do iframe
   //       $('iframe').attr('src', url);
   //       console.log($('iframe'))

   //       // Mostra o modal
   //       $('.modal-doc').addClass('show');
   //    });

   //    $('.printDocPdf').click(function(e) {
   //       e.preventDefault();
   //       // Obtém a URL do documento
   //       var input = document.querySelector(`#inputUrlToPdf_${e.target.dataset.ref}`)
   //       const url = input.value; //$(this).closest('.cart-product-list-item').find('#inputUrlToPdf').val();
   //       // alert(url);
   //       // Define o src do iframe
   //       $('iframe').attr('src', url);
   //       // console.log($('iframe'))

   //       $('#btn-print').click();

   //       // Mostra o modal
   //       // $('.modal-doc').addClass('show');
   //    });
   // });
</script>