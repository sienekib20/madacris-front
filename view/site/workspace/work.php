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
      width: 768px;
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
                  <span class="section-card-title block">Workspace</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card pt-3 pb-5">
      <div class="section-card-contain">
         <div class="main-container px-4 px-sm-5">
            <div class="row">
               <div class="col-lg-3">
                  <aside class="sidepane">
                     <ul class="items">
                        <li>
                           <a href="">Minha conta</a>
                        </li>
                        <li>
                           <a href="">Meus Pedidos</a>
                        </li>
                        <li>
                           <a href="">Comentarios</a>
                        </li>
                     </ul>
                  </aside>
               </div>
               <div class="col-lg-9">
                  <div class="tabs">
                     <div class="tab-item active">
                        <!-- Minha Conta -->
                     </div>
                     <div class="tab-item active">
                        <div class="col-12">
                           <div class="cart-products mt-5n">
                              <div class="flex items-center cart-top-table" style="border-bottom: 1px solid rgba(0, 0, 0, 0.15); padding-bottom: 0.5rem; margin-top: -0.5rem !important">
                                 <span class="cart-product-title pb-4 adapate-font-size">Pediso feitos</span>
                                 <a href="#" class="ml-auto text-black text-underline btn-update-total" name="" role="button">
                                    <small>Limpar lista</small>
                                 </a>
                              </div>

                              <div class="container-products">
                                 <?php foreach ($pedidos as $pedido): $pedido = (object) $pedido;
                                    $file = $pedido->arquivos;
                                    if (strpos($pedido->arquivos, ',')) {
                                       $file = explode(',', $file)[0];
                                    }
                                 ?>
                                    <div class="cart-products-list w-100" data-id="list">
                                       <div class="cart-product-list-item" style="min-width: 100%">
                                          <div class="contain-img" style="min-width: 10%">
                                             <img src="<?= env('API_URL') . 'assets/storage/products/' . $file ?>" alt="">
                                          </div>
                                          <div class="cart-product-name ml-4" style="min-width: 280px">
                                             <span class="name adapate-font-size"><?= $pedido->nome ?></span>
                                             <small class="text-muted d-block"><?= $pedido->categoria ?></small>
                                          </div>
                                          <span class="cart-product-price adapate-font-size d-flex w-15" style="min-width: 140px">AO <?= $pedido->preco ?></span>
                                          <input type="number" id="artigo-item-${index}" class="default-input w-10 text-center" value="<?= $pedido->qtd ?>" readonly style="min-width: 80px" />

                                          <span class="cart-product-price ml-4 adapate-font-size d-flex w-15" style="min-width: 140px">AO <?= $pedido->preco * $pedido->qtd ?>.00</span>

                                          <span class="cart-product-price adapate-font-size jc-end d-flex w-15 mr-3" id="cartProductPrice" style="min-width: 200px">
                                             <?= \DateTime::createFromFormat('Y-m-d', explode(' ', $pedido->created_at)[0])->format('d-m-Y') ?>
                                          </span>

                                          <span class="cart-product-price adapate-font-size jc-end d-flex w-15 mr-3" id="cartProductPrice" style="min-width: 100px">
                                             <?= \DateTime::createFromFormat('H:i:s', explode(' ', $pedido->created_at)[1])->format('H:i') ?>
                                          </span>

                                          <span class="cart-product-price adapate-font-size jc-end d-flex w-15 mr-3" id="cartProductPrice" style="min-width: 200px">
                                             Estado: <?= $pedido->estado ?>
                                          </span>
                                          <a href="" class="cart-product-action d-flex w-20">
                                             <!-- <i class="bx bxs-trash-alt adapate-font-size"></i> -->

                                          </a>
                                          <?php $token = bin2hex(random_bytes(32 / 2)); ?>
                                          <input type="hidden" id="inputUrlToPdf" value="<?= url('shop') . '?doc=' . $token ?>">
                                          <a href="javascript:;" class="cart-product-action text-underline d-flex w-20" id="openDocPdf" data-ref="<?= $pedido->ref_pedido ?>">
                                             ver
                                             <!-- <i class="bx bxs-show adapate-font-size"></i> -->
                                             <!-- Mostrar Lista em forma de PDF (RECIBO DO CLIENTE - A CARREGAR DO BACK) -->
                                          </a>
                                          <a href="" id="removerCurrentPedido" data-ref="<?= $pedido->ref_pedido ?>" class="cart-product-action d-flex w-20">
                                             <i class="bx bxs-edit adapate-font-size"></i>
                                          </a>

                                       </div>
                                    </div>
                                 <?php endforeach; ?>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="tab-item">
                        <!-- Comentarios -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <span class="flex mt-4"></span>

   <div class="modal-doc">
      <div class="modal-contain">
         <div class="modal-header">
            <a href="" class="closeMode">
               <i class="bi bi-x"></i>
            </a>
         </div>
         <div class="modal-body">
            <iframe src="" frameborder="0" id=""></iframe>
         </div>
         <div class="modal-footer">
            <a href="" class="print flex items-center">
               <small class="bi bi-printer"></small>
               imprimir
            </a>
         </div>
      </div>
   </div>


   <?= view_component('footer') ?>
</div>

<script>
   $(document).ready(function() {
      $('.closeMode').click((e) => {
         e.preventDefault();
         $('.modal-doc').removeClass('show');
         $('iframe').attr('src', ''); // Limpa o src do iframe ao fechar
      });

      // Abrir o modal ao clicar no link
      $('.cart-product-action#openDocPdf').click(function(e) {
         e.preventDefault();

         // Obtém a URL do documento
         const url = $(this).closest('.cart-product-list-item').find('#inputUrlToPdf').val();

         // Define o src do iframe
         $('iframe').attr('src', url);

         // Mostra o modal
         $('.modal-doc').addClass('show');
      });
   });
</script>