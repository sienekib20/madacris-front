function currencyFormat(valor) {
   return valor.toLocaleString('pt-PT', {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
   });
}

document.addEventListener('DOMContentLoaded', function () {

});

const cartSub = document.getElementById('cartSub');

// checkout
const countItem = openCheckoutSection.querySelector('.count');
const countItemCart = document.getElementById('checkoutCount');
const subTotalCart = document.getElementById('checkoutSub');
const btnAdicionar = document.querySelectorAll('[role="addTocart"]');
const chkcartItems = document.querySelector('.chkcartItems');
// Obter items no carrinho
const artigos = getCarrinho();



// Onload
$(document).ready(function () {

   fxCountItem();

   btnAdicionar.forEach(btnAd => {
      $(btnAd).click(function (e) {
         aplicar_add(e);
      });
   });

   $(openCheckoutSection).click(function (e) {
      e.preventDefault();
      loadCheckoutPopup();
   });

});

function aplicar_add(event) {
   event.preventDefault();
   var parent = nodoPai($(event.target), 'list-card-item');
   adicionarArtigo(parent);
}

// functions

function getCarrinho() {
   let articles = localStorage.getItem('em_articles');
   return articles ? JSON.parse(articles) : [];;
}

function nodoPai(no, search) {
   var no1 = no.parent();
   if (no1.hasClass(search)) {
      return no1;
   }
   return nodoPai(no1, search);
}

function fxCountItem() {
   var qtd = 0;
   if (artigos.length > 0) {
      artigos.map((item, index) => {
         qtd += parseInt(item.qtd);
      });
      countItem.textContent = artigos.length;
      countItemCart.textContent = qtd;
   }
}

function adicionarArtigo(item) {
   let idArtigo = item.data('id');
   let imgSrc = item.data('img');
   let nomeArtigo = item.data('name');
   let precoArtigo = parseFloat(item.data('price').replace(" ", ""));
   let tamanhoArtigo = item.data('cateogry');

   let artigoExistente = null;
   let posicaoArtigo = -1;

   artigos.map((item, index) => {
      if (item.id == idArtigo) {
         artigoExistente = item;
         posicaoArtigo = index;
      }
   });


   if (artigoExistente != null) {
      artigoExistente.qtd += 1;
      artigos[posicaoArtigo] = artigoExistente;
      // actualizarTotalPreco()
   } else {
      let novoArtigoAd = {
         id: idArtigo,
         img: imgSrc,
         nome: nomeArtigo,
         precoAd: precoArtigo,
         preco: precoArtigo,
         tamanho: tamanhoArtigo,
         qtd: 1,
      };
      // actualizarTotalPreco();
      artigos.push(novoArtigoAd);
   }
   salvarArtigo(artigos);
   fxCountItem();


   styledAl.showWith('Adicionado com sucesso');

}

function salvarArtigo(artigos) {
   localStorage.setItem('em_articles', JSON.stringify(artigos));
}

// 
function loadCheckoutPopup() {
   chkcartItems.innerHTML = '';

   if (artigos.length === 0) {
      const emptyMsg = document.createElement('li');
      emptyMsg.textContent = 'Seu carrinho está vazio.';
      chkcartItems.appendChild(emptyMsg);
   } else {
      artigos.forEach((item, index) => {
         const listItem = checkoutPopupItem(item, index);
         chkcartItems.innerHTML += listItem;
      });
   }
   actualizarTotalPrecoCheckoutPopup();
}

function checkoutPopupItem(item, index) {
   let precoAd = parseFloat(item.qtd) * parseFloat(item.precoAd);
   let itemList = `
      <div class="popup-cart-item px-4">
         <div class="cart0uitem$-manage mb-3">
            <div class="product-infon d-flex ai-start">
               <div class="contain-img">
                  <img src="${item.img}" alt="">
               </div>
               <div class="product-infon-name ml-2">
                  <span>${item.nome}</span>
                  <small class="text-muted d-block">${item.tamanho}</small>
               </div>
            </div>
            <a href="" class="action-rem-product$u012 ml-auto" onclick="removerCheckoutItem(event, ${index})">
               <i class='bx bxs-trash-alt'></i>
            </a>
         </div>
         <div class="cart0uitem1-count d-flex items-center">
            <input
               type="number"
               class="default-input w-20 product-count-cart"
               onchange="updateQtdItemCP(event, ${index})"
               min="1"
               value="${item.qtd}"
            >

            <select name="" class="default-input w-15 product-count-cart" style="display: none">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
            </select>
            <span class="product-single-price ml-auto product-price">AO ${currencyFormat(precoAd)}</span>
         </div>
      </div>
   `;
   return itemList;
}

function getValorPreco() {
   var valor = 0.0;
   artigos.map((item, index) => {
      valor += parseFloat(item.qtd) * parseFloat(item.precoAd);
   });
   return currencyFormat(valor);
}

function actualizarTotalPrecoCheckoutPopup() {
   subTotalCart.textContent = "AO " + getValorPreco();
}

function actualizarTotalCart() {
   cartSub.textContent = "AO " + getValorPreco();
   cartTax.textContent = "AO " + currencyFormat(0);

   const subValue = cartSub.textContent.split("AO")[1];
   const taxValue = cartTax.textContent.split("AO")[1];

   const total = toFloat(taxValue) + toFloat(subValue);

   cartTotal.textContent = "AO " + currencyFormat(total);
   cartTotal.style.fontFamily = 'Montserrat-Bold';
}

function toFloat(valor) {
   return parseFloat(valor.replace(/\s/g, '').replace(',', '.'));
}


function updateQtdItemCP(event, index) {
   var artigoAtual = artigos[index];
   var qtdAd = event.target.value;
   var novoPreco = parseFloat(artigoAtual.precoAd) * parseInt(qtdAd);

   artigos[index] = {
      id: artigoAtual.id,
      nome: artigoAtual.nome,
      qtd: event.target.value,
      preco: novoPreco,
      precoAd: artigoAtual.precoAd,
      tamanho: artigoAtual.tamanho,
      img: artigoAtual.img
   };

   salvarArtigo(artigos);
   fxCountItem();
   loadCheckoutPopup();
   loadCart();
   checkItemsLoad();
}

// Cart

function loadCart() {
   listaArtigos.innerHTML = "";
   if (artigos.length == 0) {
      const emptyMsg = document.createElement('li');
      emptyMsg.textContent = 'Seu carrinho está vazio.';
      listaArtigos.appendChild(emptyMsg);
   } else {
      artigos.forEach((artigo, index) => {
         let artigoItem = artigoItemList(artigo, index);
         listaArtigos.innerHTML += artigoItem;
      });
   }
   actualizarTotalCart();
}

function removerCheckoutItem(event, index) {
   event.preventDefault();

   artigos.splice(index, 1);
   styledAl.showWith('Removido do carrinho');

   salvarArtigo(artigos);
   fxCountItem();
   loadCheckoutPopup();
   loadCart();
   checkItemsLoad();
}


// Cart
function artigoItemList(artigo, index) {
   var price = artigo.precoAd * artigo.qtd;
   let artigoItem = `
      <div class="cart-product-list-item" style="min-width: 100%">
         <div class="contain-img" style="min-width: 10%">
            <img src="${artigo.img}" alt="">
         </div>
         <div class="cart-product-name ml-4" style="min-width: 280px">
            <span class="name adapate-font-size">${artigo.nome}</span>
            <small class="text-black d-block">${artigo.tamanho}</small>
         </div>
         <span class="cart-product-price adapate-font-size d-flex w-15" style="min-width: 140px">AO ${currencyFormat(artigo.precoAd)}</span>
         <input type="number" id="artigo-item-${index}" class="default-input w-10 text-center" value="${artigo.qtd}" min="1" onchange="updateQtdItemCP(event, ${index})" style="min-width: 80px"/>

         <span class="cart-product-price adapate-font-size jc-end d-flex w-15" id="cartProductPrice" style="min-width: 190px">
            AO ${currencyFormat(price)}
         </span>
         <a href="" class="cart-product-action d-flex w-20" onclick="removerCheckoutItem(event, ${index})">
            <i class="bx bxs-trash-alt adapate-font-size"></i>
         </a>

      </div>
   `;
   return artigoItem;
}


function checkItem(artigo, index) {
   var p = artigo.precoAd * artigo.qtd;
   return `
      <div class="pp-list-item flex flex-wrap items-start" id="checkArtigo-${artigo.id}" data-qtd="${artigo.qtd}">
         <div class="pp-list-item-info">
            <div class="flex items-center">
               <span class="pp-list-name mr-3">${artigo.nome}</span> x
               <span class="qtd">${artigo.qtd}</span>
            </div>
            <small class="text-muted">${artigo.tamanho}</small>
         </div>
         <span class="ml-auto">AO ${currencyFormat(p)}</span>
      </div>
   `;
}

function checkItemsLoad() {
   checkList.innerHTML = "";
   if (artigos.length == 0) {
      const emptyMsg = document.createElement('li');
      emptyMsg.textContent = 'Seu checkout está vazio.';
      checkList.appendChild(emptyMsg);
   } else {
      artigos.forEach((artigo, index) => {
         let artigoItem = checkItem(artigo, index);
         checkList.innerHTML += artigoItem;
      });
   }
}