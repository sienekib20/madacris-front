<div class="popup comment" id="popupComment">
   <div class="popup-close-action">
      <a href="" class="action-close-btn" id="closeComment">
         <i class="bx bx-x"></i>
      </a>
   </div>
   <div class="popup-header-title">
      <span class="title d-block">Comentário</span>
      <span class="text-black d-block mb-4">Deixa o seu ponto de vista, sobre a plataforma. Diga-nos o que achou?</span>
   </div>

   <form action="" method="POST">
      <div class="default-input-group">
         <label for="" class="default-input-label">Nome</label>
         <input type="text" class="default-input" placeholder="username">
      </div>
      <div class="default-input-group my-3">
         <label for="" class="default-input-label">Classificação</label>
         <select name="" class="default-input">
            <option value="">Quanto de Estrelas</option>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
               <option value="<?= $i ?>"><?= $i ?> Estrelas</option>
            <?php endfor; ?>
         </select>
      </div>
      <div class="default-input-group my-1">
         <label for="" class="default-input-label">Deixa a sua mensagem</label>
         <textarea class="default-input" id="" placeholder="Escreva aqui"></textarea>
      </div>
      <div class="default-input-group my-2">
         <button type="submit" class="default-btn" id="btnComentar">
            Enviar comentário
         </button>
      </div>
   </form>
</div>
<?= view_component('popups.overlay')  ?>

<script>
   $(closeComment).click(function(e) {
      e.preventDefault();
      closeAuth();
   });
</script>