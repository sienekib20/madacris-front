document.addEventListener("DOMContentLoaded", function () {
   // Paginator
   const paginator = document.getElementById('paginator');
   const prevBtn = document.getElementById('prevBtn');
   const nextBtn = document.getElementById('nextBtn');

   // Verifica se todos os elementos do paginator existem na página
   if (paginator && prevBtn && nextBtn) {
      const totalPages = 3;  // Exemplo de total de páginas
      let currentPage = 2;

      // Função para atualizar o paginador
      function updatePaginator() {
         paginator.innerHTML = ''; // Limpa os itens anteriores

         // Determina o intervalo de páginas que devem ser mostradas
         let startPage = Math.max(currentPage - 1, 1);
         let endPage = Math.min(startPage + 2, totalPages);

         // Ajusta o início se necessário para mostrar sempre 3 números
         if (endPage - startPage < 2) {
            startPage = Math.max(endPage - 2, 1);
         }

         for (let i = startPage; i <= endPage; i++) {
            const pageItem = document.createElement('span');
            pageItem.classList.add('paginator-item');
            pageItem.textContent = i;

            if (i === currentPage) {
               pageItem.classList.add('active');
            }

            // Adiciona evento de clique
            pageItem.addEventListener('click', () => {
               currentPage = i;
               updatePaginator();
            });

            paginator.appendChild(pageItem);
         }
      }

      // Evento para o botão "next"
      nextBtn.addEventListener('click', (e) => {
         e.preventDefault();
         if (currentPage < totalPages) {
            currentPage++;
            updatePaginator();
         }
      });

      // Evento para o botão "prev"
      prevBtn.addEventListener('click', (e) => {
         e.preventDefault();
         if (currentPage > 1) {
            currentPage--;
            updatePaginator();
         }
      });

      // Inicializa o paginador na página inicial
      updatePaginator();
   }
});

document.addEventListener("DOMContentLoaded", function () {
   // Customized Select
   const selectSelected = document.querySelector(".select-selected");
   const selectItems = document.querySelector(".select-items");
   const searchInput = document.getElementById("search-input");
   const items = document.querySelectorAll(".select-item");

   // Verifica se os elementos do select customizado existem na página
   if (selectSelected && selectItems && items.length > 0) {
      selectSelected.addEventListener("click", function () {
         // Alterna a exibição do menu de seleção
         selectItems.classList.toggle("select-hide");
         
         if (searchInput) {
            searchInput.value = ""; // Limpa a pesquisa ao abrir
            filterItems("");
         }

         // Ajusta a posição do menu (em cima ou embaixo)
         adjustDropdownPosition();
      });

      function adjustDropdownPosition() {
         const rect = selectSelected.getBoundingClientRect();
         const viewportHeight = window.innerHeight;
         const spaceBelow = viewportHeight - rect.bottom; // Espaço disponível abaixo do select
         const spaceAbove = rect.top; // Espaço disponível acima do select

         // Ajusta a posição do dropdown
         if (spaceBelow < selectItems.offsetHeight && spaceAbove > selectItems.offsetHeight) {
            // Aparecerá em cima
            selectItems.style.top = 'auto';
            selectItems.style.bottom = '100%';  // Coloca o dropdown acima do select
         } else {
            // Aparecerá embaixo
            selectItems.style.top = '100%';
            selectItems.style.bottom = 'auto';  // Coloca o dropdown abaixo do select
         }
      }

      items.forEach(item => {
         item.addEventListener("click", function () {
            selectSelected.textContent = this.textContent;
            selectItems.classList.add("select-hide");
         });
      });
      if (searchInput) {
         searchInput.addEventListener("keyup", function () {
            filterItems(this.value);
         });
      }

      function filterItems(query) {
         const filter = query.toLowerCase();
         items.forEach(item => {
            if (item.textContent.toLowerCase().includes(filter)) {
               item.style.display = "block";
            } else {
               item.style.display = "none";
            }
         });
      }

      // Fecha o menu de seleção ao clicar fora
      document.addEventListener("click", function (event) {
         if (!selectSelected.contains(event.target) && !selectItems.contains(event.target)) {
            selectItems.classList.add("select-hide");
         }
      });
   }
});


$(document).ready(function () {
   // Verifica se existem elementos com a classe 'qsidenav-link' antes de adicionar eventos
   if ($('.qsidenav-link').length > 0) {
      $('.qsidenav-link').click(function (event) {
         event.preventDefault();
         var parentItem = $(this).parent();
         $('.qsidenav-item').removeClass('active');
         $('.qsidenav-children').css('height', '0');

         if (parentItem.hasClass('has-children')) {
            var children = parentItem.find('.qsidenav-children');
            if (children.height() == 0) {
               parentItem.addClass('active');
               var currentHeight = children.css('height', 'auto').height();
               children.css('height', '0');
               children.animate({
                  height: currentHeight
               }, 250);
            } else {
               parentItem.removeClass('active');
               children.animate({
                  height: 0
               }, 250);
            }
         } else {
            parentItem.addClass('active');
         }
      });
   }

   // Verifica se existe o elemento com a classe 'qtoggler' antes de adicionar o evento de clique
   if ($('.qtoggler').length > 0) {
      $('.qtoggler').click(function (e) {
         $('.contain-page').toggleClass('fluid');
         $('.qsidenav').toggleClass('flexible');
         $('.topnav-toggler').toggleClass('hidden');
      });
   }
});
