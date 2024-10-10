<div class="product-item swip-item">
   <div class="product-contain">
      <div class="product-img">
         <small class="product-promom"></small>
         <img src="<?= asset("img/$productImg")?>" alt="">
         <div class="product-options">
            <a href="" class="product-link"> <i class="bx bx-show"></i> </a>
            <a href="" class="product-link"> <i class="bx bx-heart"></i> </a>
            <a href="" class="product-link"> <i class="bx bx-cart"></i> </a>
         </div>
      </div>
      <div class="product-details">
         <span class="product-name"><?= $product ?></span>
         <small class="product-price"><?= $preco ?></small>
         <div class="ratings flex items-center mt-2">
            <i class="bx bx-star"></i>
            <i class="bx bx-star"></i>
            <i class="bx bx-star"></i>
            <i class="bx bx-star"></i>
            <i class="bx bx-star"></i>
         </div>
      </div>
   </div>
</div>