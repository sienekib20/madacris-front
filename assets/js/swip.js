$(document).ready(function () {
   const swipContainer = $('.swip-items');
   const swipItems = $('.swip-item');
   let itemsArray = swipItems.toArray(); // Cria um vetor com os itens
   let itemWidth = swipItems.outerWidth(true);
   let itemsPerSlide = 4; // Padrão com 4 itens visíveis
   let currentSlide = 0;
   let autoSlideInterval;

   // Função para ajustar o número de itens por slide conforme a tela
   function adjustItemsPerSlide() {
      const containerWidth = $('.swip-container').width();

      if (containerWidth <= 600) {
         itemsPerSlide = 1;
      } else if (containerWidth <= 900) {
         itemsPerSlide = 2;
      } else {
         itemsPerSlide = 4;
      }

      itemWidth = swipItems.outerWidth(true);
   }

   // Função para mover o slider para a esquerda
   function moveLeft() {
      itemsArray.push(itemsArray.shift()); // Move o primeiro item para o final do array
      swipContainer.css({
         transform: `translateX(${-18.4}rem)`,
         transition: 'transform 1s ease-in-out'
      });

      setTimeout(() => {
         // Após a animação, reseta o container e reordena os itens
         swipContainer.css({
            transform: 'translateX(0)',
            transition: 'none'
         });
         swipContainer.append(itemsArray[itemsArray.length - 1]); // Move o último item para o final do DOM
      }, 1000); // 1 segundo para corresponder ao tempo da transição
   }

   // Função para mover o slider para a direita
   function moveRight() {
      itemsArray.unshift(itemsArray.pop()); // Move o último item para o começo do array
      swipContainer.prepend(itemsArray[0]); // Prepara o próximo item no DOM
      swipContainer.css({
         transform: `translateX(${itemWidth}px)`,
         transition: 'none'
      });

      setTimeout(() => {
         swipContainer.css({
            transform: 'translateX(0)',
            transition: 'transform 1s ease-in-out'
         });
      }, 10); // Pequeno atraso para iniciar a animação de retorno
   }

   // Função para iniciar o slider automático
   function startAutoSlide() {
      autoSlideInterval = setInterval(moveLeft, 3000); // Movimenta a cada 3 segundos
   }

   // Função para parar o slider automático temporariamente
   function stopAutoSlide() {
      clearInterval(autoSlideInterval);
   }

   // Ajustar o número de itens por slide quando a janela é redimensionada
   $(window).resize(adjustItemsPerSlide);

   // Controles de navegação
   $('.swip-control-left').click((e) => {
      e.preventDefault();
      stopAutoSlide(); // Pausar o slider automático
      moveLeft(); // Mover manualmente para a esquerda
      startAutoSlide(); // Retomar o slider automático
   });

   $('.swip-control-right').click((e) => {
      e.preventDefault();
      stopAutoSlide(); // Pausar o slider automático
      moveRight(); // Mover manualmente para a direita
      startAutoSlide(); // Retomar o slider automático
   });

   // Iniciar o slider automático
   startAutoSlide();

   // Inicializar o layout
   adjustItemsPerSlide();
});
