<style>
   .font-Onest {
      font-family: 'Onest-Regular';
   }


   #checkoutForm * {
      font-family: 'Onest-Regular';
   }

   .font-Montserrat {
      font-family: 'Onest-Bold' !important;
   }

   #checkoutForm input,
   #checkoutForm button {
      /* padding: 0.75rem 1rem;
      font-size: 15px; */
   }

   .container-password {
      height: 0;
      overflow: hidden;
   }

   .block.text-bold.pb-4,
   .payment-products-list {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Fazer Checkout',
         'current' => 'Checkout',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="ribonbar d-flex items-center justify-center flex-wrap">
                     <a href="<?= url('cart') ?>" class="ribon-link">Carrinho</a>
                     <span>
                        <i class="bx bx-chevron-right"></i>
                     </span>
                     <a href="#" class="ribon-link active">Checkout</a>
                     <span class="d-block">
                        <i class="bx bx-chevron-right"></i>
                     </span>
                     <a href="" class="ribon-link">Finalizar Pedido</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <small class="d-flex my-1"></small>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container">
            <div class="row">
               <div class="col-lg-7">
                  <span class="flex items-center flex-wrap text-black pb-4 invisible" id="showCheck" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">
                     PEGAMOS O SEU E-MAIL
                  </span>
                  <div id="hideCheck">
                     <span class="flex items-center flex-wrap text-black pb-4" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">
                        ESTAS DE VOLTA ?
                        <a href="" name="openAuthLogin" class="font-Onest text-muted block ml-0 ml-sm-2">FACA LOGIN NA SUA CONTA</a>
                     </span>
                     <span class="mt-3 mb-0 block text-bold">Preencha os campos abaixo</span>
                     <small class="text-black block mb-4">Precisamos dessas informacoes para o pedido.</small>
                  </div>

                  <form action="#" method="POST" class="styled-form" id="checkoutForm">
                     <div class="row" id="checkoutLoginInfo">

                        <div class="col-lg-6">
                           <div class="input-group">
                              <label for="" class="default-input-label">Nome *</label>
                              <input type="text" id="nomePassante" class="input" placeholder="Seu nome">
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="input-group">
                              <label for="" class="default-input-label">Apelido *</label>
                              <input type="text" id="apelidoPassante" class="input" placeholder="Seu Apelido">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="input-group">
                              <label for="" class="default-input-label">Provincia*</label>
                              <select id="provinciaPassante" class="select">
                                 <option value="Bengo">Bengo</option>
                                 <option value="Benguela">Benguela</option>
                                 <option value="Bié">Bié </option>
                                 <option value="Cabinda">Cabinda</option>
                                 <option value="Cuando-Cubango">Cuando-Cubango</option>
                                 <option value="Cuanza Norte">Cuanza Norte</option>
                                 <option value="Cuanza Sul">Cuanza Sul </option>
                                 <option value="Cunene">Cunene </option>
                                 <option value="Huambo">Huambo </option>
                                 <option value="Huíla">Huíla </option>
                                 <option value="Luanda">Luanda </option>
                                 <option value="Lunda Norte">Lunda Norte</option>
                                 <option value="Lunda Sul">Lunda Sul </option>
                                 <option value="Malanje">Malanje </option>
                                 <option value="Moxico">Moxico </option>
                                 <option value="Namibe">Namibe </option>
                                 <option value="Uíge">Uíge </option>
                                 <option value="Zaire">Zaire</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="input-group">
                              <label for="" class="default-input-label">Email (Opcional)</label>
                              <input type="text" class="input" placeholder="Endereco email" id="emailPassante">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="input-group">
                              <label for="" class="default-input-label">Telefone *</label>
                              <input type="text" class="input" placeholder="Nº de Telefone" id="telefonePassante">
                           </div>
                        </div>
                        <div class="col-12 mt-3">
                           <div class="input-group">
                              <label for="createValid" class="default-input-label flex items-center w-100">
                                 <input type="checkbox" id="createValid" class="" placeholder="Nº de Telefone" style="accent-color: #000;">
                                 <span class="block cursor-pointer ml-2">Criar uma nova conta</span>
                              </label>
                           </div>
                        </div>
                        <div class="col-12 container-password" id="containPwdFields">
                           <div class="input-group">
                              <label for="" class="default-input-label">
                                 Palavra-passe *
                                 <small class="block">Define uma Palavra-passe</small>
                              </label>
                              <input type="password" class="input" placeholder="Define uma senha">
                              <input type="password" class="input mt-2" placeholder="Confirmar senha">
                           </div>
                        </div>
                     </div>
                     <div class="row">

                        <div class="col-12">
                           <span class="mt-3 font-Montserrat mb-0 block text-bold">Informar uma zona diferente</span>
                           <small class="text-black block mb-4">Caso deseje entregar o seu artigo algures.</small>
                        </div>
                        <div class="col-12">
                           <div class="input-group">
                              <label for="" class="default-input-label">Local*</label>
                              <input type="text" class="input" placeholder="Local de entrega" id="localEntrega">
                           </div>
                           <div class="input-group">
                              <label for="" class="default-input-label">Telfone alternativo*</label>
                              <input type="text" class="input" placeholder="Nº de Telefone" id="telefoneAlternativo">
                           </div>
                        </div>
                     </div>

                  </form>
               </div>

               <div class="col-lg-5 mt-4 mt-lg-0 font-Onest">
                  <div class="cart-payment-details">
                     <span class="block mt-2 mb-3">Detalhes do Pedido</span>
                     <small class="block text-bold pb-4">Artigos</small>

                     <div class="payment-products-list">
                        <div class="contain-pp-list" id="checkList"></div>
                        <a href="" id="showMoreContain" class="pp-list-show-more flex justify-center items-center w-50 text-black text-underline w-lg-25 ml-auto mb-2">
                           <small>mostrar mais</small>
                        </a>
                     </div>

                     <div class="d-flex items-center px-0 border-b pb-3 mt-3">
                        <span>SubTotal</span>
                        <span class="product-single-price ml-auto" id="cartSub"></span>
                     </div>
                     <div class="shipping py-3">
                        <small class="tiny-title font-bold">Forma de entrega</small>
                        <div class="shipping-list my-1 px-2">
                           <div class="input-group">
                              <label for="free-ship">
                                 <input type="radio" name="shipping" class="default-input-radio" id="free-ship" checked>
                                 <small>Entrega grátis</small>
                              </label>
                              <small class="block mt-2 py-2 px-3" style="background-color: #E4E4E4">Isso significa, para levantar o seu artigo pedido, teras que se dirigiar ate nos.</small>
                           </div>
                           <label for="encontro" class="my-2">
                              <input type="radio" name="shipping" class="default-input-radio" id="encontro">
                              <small>Ponto de encontro: +5%</small>
                           </label>
                           <label for="casa">
                              <input type="radio" name="shipping" class="default-input-radio" id="casa">
                              <small>Em sua casa: +10%</small>
                           </label>
                        </div>

                        <small class="text-black tiny-title d-block mt-4">Entregar a:</small>
                        <span>Madacris</span>
                        <a href="" class="text-muted d-flex">
                           <small>mudar local de entrega</small>
                        </a>
                     </div>
                     <div class="border-b mt-3"></div>
                     <div class="d-flex items-center py-3 px-0 border-b pb-3">
                        <small>Taxa</small>
                        <small class="product-single-price ml-auto" id="cartTax"></small>
                     </div>
                     <div class="d-flex items-center px-0 py-3 border-b pb-3">
                        <span>Total</span>
                        <span class="product-single-price ml-auto" id="cartTotal"></span>
                     </div>

                  </div>
                  <div class="cart-payment-details my-4">
                     <span class="flex items-center flex-wrap">
                        Tens um Cuppon ? <a href="" id="openPopupCuppon" class="flex text-muted ml-0 sm:ml-2">Aplique o seu desconto agora!</a>
                     </span>
                  </div>
                  <div class="cart-payment-details">
                     <div class="shipping py-3">
                        <small class="tiny-title font-bold">Forma de pagamento</small>
                        <div class="shipping-list my-1 px-2">
                           <div class="input-group">
                              <label for="mpExpress">
                                 <input type="radio" name="pmItems" class="default-input-radio" value="Transferência Express" id="mpExpress" checked>
                                 <small class="text-bold">Multicaixa Express</small>
                              </label>
                              <small class="block my-2 py-2 px-3" style="background-color: #E4E4E4"> Quando fizer o seu pagamento usando o Metodo Express, isso lhe garante uma reducao de 2% do valor total a ser pago. Assim tratamos os nossos clientes.</small>
                           </div>
                           <div class="input-group">
                              <label for="mpCash">
                                 <input type="radio" name="pmItems" class="default-input-radio" value="Pagamento Cash" id="mpCash">
                                 <small class="text-bold">Pagamento Cash na entrega</small>
                              </label>
                              <small class="block my-2 py-2 px-3"> Selecionando esta opcao sera necessario adiantar o valor da entrega e 50% do valor total. Mas caso prefira se dirigir ate nos, so sera necessario pagar os 50%.</small>
                           </div>
                           <label for="agreedItems" class="flex ai-start">
                              <input type="checkbox" name="shipping" class="default-input-radio mt-3n" id="agreedItems">
                              <small>Li e concordo com os <a href="" class="text-bold text-underline text-black">os termos de uso</a> e <a href="" class="text-bold text-underline text-black">as politicas de privacidade</a> da loja.</small>
                           </label>
                        </div>
                     </div>


                     <div class="popup-cart-action px-0 d-flex items-center mt-4">
                        <a href="" id="btnFinalizarPedido" class="w-100 py-3 action-checkout bg-black">Finalizar Pedido</a>
                        <span></span>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>



   <span class="flex mt-4"></span>


   <?= view_component('footer') ?>
</div>

<input type="hidden" id="routeEnd" value="<?= ROOT ?>">

<script>
   $(document).ready(function() {
      checkItemsLoad();
      actualizarTotalCart();

      $('input, select').focus(function(e) {
         $('input, select').removeClass('input-error');
      });

      $(openPopupCuppon).click(function(e) {
         e.preventDefault();
         alert('Cupon Não Encontrado');
         return;
      });

      $(btnFinalizarPedido).click(function(e) {
         e.preventDefault();
         if (!agreedItems.checked) {
            alert('Concorda com os termos');
            return;
         }

         const list = checkList.querySelectorAll('div');
         if (list.length == 0) {
            alert('Sem artigo adicionado');
            return;
         }

         const val = checkSession();

         let criarNovaConta = false;

         let mpPedido = '';
         document.querySelectorAll('[name="pmItems"]').forEach(item => {
            if (item.checked) {
               mpPedido = item.value
            }
         });
         let valorTotal = parseFloat(cartTotal.textContent.split("AO")[1].replace(/\s/g, '').replace(',', '.'));
         let valorTaxa = parseFloat(cartTax.textContent.split("AO")[1].replace(/\s/g, '').replace(',', '.'));

         // alert(valorTotal);
         // alert(valorTaxa);

         let formData = new FormData();

         if (val == 0) {
            if (emptyFields() > 0) {
               $(window).scrollTop(0);
               alert('Preencha os campos ou Entra com a sua conta');
               return;
            } else {
               formData.append('nomeu', nomePassante.value);
               formData.append('apelido', apelidoPassante.value);
               formData.append('email', emailPassante.value);
               formData.append('telefone', telefonePassante.value);
               formData.append('provincia', provinciaPassante.value);
               formData.append('localAlt', localEntrega.value);
               formData.append('telAlt', telefoneAlternativo.value);

               formData.append('tipoconsumidor', 2);
               formData.append('qtdItems', artigos.length);



               formData.append('modo_pagamento', mpPedido);

               formData.append('desconto', parseFloat('0.00'));
               formData.append('total', valorTotal);

               formData.append('taxa', parseFloat(cartTax.textContent.split("AO")[0].replace('\/s/g', '').replace(',', '')));
               // formData.append('consumidor_id', userLetter.dataset.id);
               // Pegar o id pra lhe identificar o lastInserted da tabela passante
               // sera removido quando validar o pedido
               formData.append('estado', 'Pendente');
            }
         } else {
            formData.append('tipoconsumidor', 1);
            formData.append('qtdItems', artigos.length);
            formData.append('modo_pagamento', mpPedido);
            formData.append('desconto', parseFloat('0.00'));
            formData.append('total', valorTotal);
            formData.append('taxa', parseFloat(cartTax.value));

            formData.append('consumidor_id', userLetter.dataset.id); // identificador
            formData.append('estado', 'Pendente');
         }
         const checkItemLists = checkList.querySelectorAll('div.pp-list-item');
         const idsArtigosAdd = [];
         checkItemLists.forEach(item => {
            var v = {};
            v['artigo_id'] = parseInt(item.id.split('-')[1]);
            v['qtd'] = parseInt(item.dataset.qtd) ?? 0;
            idsArtigosAdd.push(v);
         });
         formData.append('artigos', JSON.stringify(idsArtigosAdd));

         let existeItems = localStorage.getItem('em_articles') ?? null;
         let refGerado = localStorage.getItem('corGerada') ?? '';

         if (!existeItems) {
            refGerado = gerarCorHex();
            localStorage.setItem('corGerada', refGerado);
         }

         formData.append('referencia', refGerado);

         $.ajax({
            url: `${endpoint.value}pedido/novo`,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
               if (data[0] == 403) {
                  alert('Já tens um Pedido Pendente com Esses artigos.');
                  alert('Limpa o teu carrinho');
                  return;
               }
               else if (data[0] == 1) {
                  localStorage.removeItem('em_articles');
                  localStorage.removeItem('corGerada');
                  alert('Pedido enviado com sucesso! Você receberá uma resposta em breve.');
                  styledAl.showWith('Pedido enviado com sucesso! Você receberá uma resposta em breve.');
                  setTimeout(() => {
                     window.location.href = routeEnd.value;
                  }, 1500);
               } else {
                  alert('Operação finalizada com algumas falhas.');
                  window.location.reload();
               }
            },
            error: function(err) {
               console.log(err);
            }
         });



      });

      if ($('.contain-pp-list .pp-list-item').length > 2) {
         if ($(showMoreContain).hasClass('hidden')) {
            $(showMoreContain).removeClass('hidden');
         }
         $(showMoreContain).addClass('flex');
      } else {
         if ($(showMoreContain).hasClass('flex')) {
            $(showMoreContain).removeClass('flex');
         }
         $(showMoreContain).addClass('hidden');
      }
   });

   function emptyFields() {
      let count = 0;
      const inputs = checkoutForm.querySelectorAll('input, select');
      inputs.forEach(input => {
         if (input.value.length == 0) {
            $(input).addClass('input-error');
            count += 1;
         }
      });
      return count;
   }

   function gerarCorHex() {
      const letras = '0123456789abcdef';
      let cor = '#';

      for (let i = 0; i < 6; i++) {
         cor += letras[Math.floor(Math.random() * letras.length)];
      }

      return cor;
   }

   $(createValid).change(function() {
      if (createValid.checked) {

         const currentHeight = $(containPwdFields).css("height", "auto").height();
         $(containPwdFields).css("height", "0");
         $(containPwdFields).animate({
            height: currentHeight
         }, 150);

      } else {
         $(containPwdFields).animate({
            height: 0
         }, 150);
      }

   });

   $(showMoreContain).click(function(e) {
      e.preventDefault();

      var small = $(this).find('small');
      var textSmall = small.text().split(" ")[1] == "mais" ? "menos" : "mais";
      small.text("mostrar " + textSmall);

      var h = $('.contain-pp-list').height();

      if (h == 150) {
         var newH = $('.contain-pp-list').css("height", 'auto').height();
         $('.contain-pp-list').css("height", '199px');
         $('.contain-pp-list').animate({
            height: newH
         }, 150);
      } else {
         $('.contain-pp-list').animate({
            height: 150
         }, 150);
      }

   });
   // popups();
</script>