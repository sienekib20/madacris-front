document.addEventListener('DOMContentLoaded', function () {

   const modalClose = document.querySelector('.modal-close');
   const modalContain = document.querySelector('.modal-contain');
   const modal = document.querySelector('.modal');
   modalClose.addEventListener('click', function (e) {
      e.preventDefault();

      if (modal.classList.contains('show')) {
         setTimeout(() => {
            modal.classList.remove('show');
         }, 10);
      }
   });


})

