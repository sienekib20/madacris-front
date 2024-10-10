<style>

   .content-loader {
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      position: fixed;
      background: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 999999999999999999
   }

   .loader {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      border: 3px solid;
      border-color: #FFF #FFF transparent transparent;
      box-sizing: border-box;
      animation: rotation 1s linear infinite;
   }

   .loader::after,
   .loader::before {
      content: '';
      box-sizing: border-box;
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      margin: auto;
      border: 3px solid;
      border-color: transparent transparent #FF3D00 #FF3D00;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      box-sizing: border-box;
      animation: rotationBack 0.5s linear infinite;
      transform-origin: center center;
   }

   .loader::before {
      width: 32px;
      height: 32px;
      border-color: #FFF #FFF transparent transparent;
      animation: rotation 1.5s linear infinite;
   }

   @keyframes rotation {
      0% {
         transform: rotate(0deg);
      }

      100% {
         transform: rotate(360deg);
      }
   }

   @keyframes rotationBack {
      0% {
         transform: rotate(0deg);
      }

      100% {
         transform: rotate(-360deg);
      }
   }
</style>

<div class="content-loader">
   <span class="loader"></span>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function(e) {
      const loader = this.querySelector('.content-loader');
      setTimeout(() => {
         loader.style.display = "none";
      }, 1000);
   });
</script>