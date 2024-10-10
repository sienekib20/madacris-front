<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $this->yield('title', 'Piloto Office') ?></title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

   <?= view_component('includes.header') ?>

</head>

<body>
   <div class="wrapper_o">
      <?= view_component('nav.sidenav') ?>
   
      <div class="contain-page">
         <?= view_component('nav.topnav') ?>
   
         <!-- Carrega As demais Paginas -->
         <?php $this->load() ?>
   
         <?= view_component('nav.footer') ?>
      </div>
   </div>

   <!-- Arquivos Js -->
   <?= view_component('includes.script') ?>
   <?= view_component('loader') ?>

</body>

</html>