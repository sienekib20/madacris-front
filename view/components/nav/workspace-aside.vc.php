<?php
$path = request()->path();
?>

<div class="workspace-sidepane">
   <a href="" class="workspace-side-link d-none <?= end($path) == 'account' ? 'active' : '' ?>">
      <i class="bx bx-user"></i>
      <p>
         Minha conta
      </p>
   </a>
   <a href="" class="workspace-side-link <?= end($path) == 'pedidos' ? 'active' : '' ?>">
      <i class="bx bx-layer"></i>
      <p>
         Meus Pedidos
      </p>
   </a>
   <a href="javascript:;" name="openSideComentario" class="workspace-side-link">
      <i class="bx bx-chat"></i>
      <p>
         Deixar um comentario
      </p>
   </a>
</div>

<script>
   $('.workspace-side-link').click(function() {
      if ($('.workspace-sidepane').hasClass('active')) {
         $('.workspace-sidepane').removeClass('active');
      }
   });
</script>