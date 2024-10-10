const selectCount = $('.product-count-cart');
const subTotalVal = $('#checkout-subtotal-val');

selectCount.change(function () {
   updateSelectVal();
});

function updateSelectVal() {
   const checkoutItems = document.querySelectorAll('.popup-cart-item');
   let sum = 0;
   $.each($(checkoutItems), (chave, item) => {
      item = $(item);
      var countItemQtd = parseFloat(item.find('.product-count-cart').val());
      var singlePrice = item.find('.product-price').text().split(' ')[1].replace("K", "");
      singlePrice = parseFloat(singlePrice);
      sum += (singlePrice * countItemQtd);
   })
   subTotalVal.text("AO " + sum + "K");
}

$(document).ready(function () {
   updateSelectVal();
})