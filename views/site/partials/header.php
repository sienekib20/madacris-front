<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <title><?= "title" ?></title> -->

   <link rel="stylesheet" href="<?= asset('css/alquimist.css') ?>">
   <link rel="stylesheet" href="<?= asset('css/aldes.css') ?>">
   <link rel="stylesheet" href="<?= asset('css/reset.css') ?>">
   <link rel="stylesheet" href="<?= asset('css/fonts/all.css') ?>">
   <link rel="stylesheet" href="<?= asset('boxicons/css/boxicons.css') ?>">
   <link rel="stylesheet" href="<?= asset('pilot/pilot-theme.css') ?>">
   <link rel="stylesheet" href="<?= asset('pilot/layout.css') ?>">
   <link rel="stylesheet" href="<?= asset('pilot/pilot-section.css') ?>">
   <link rel="stylesheet" href="<?= asset('vendors/swiper/swiper-bundle.min.css') ?>">
   <link rel="stylesheet" href="<?= asset('vendors/nouislider/nouislider.min.css') ?>">
   <link rel="stylesheet" href="<?= asset('vendors/select2/select2.min.css') ?>">
   <link rel="stylesheet" href="<?= asset('vendors/ionrange/ion.min.css') ?>">
   <script src="<?= asset('js/jquery-3.3.1.min.js') ?>"></script>
   <script src="<?= asset('vendors/swiper/swiper-bundle.min.js') ?>"></script>
   <script src="<?= asset('vendors/nouislider/nouislider.min.js') ?>"></script>
   <script src="<?= asset('vendors/ionrange/ion.min.js') ?>"></script>
   <script src="<?= asset('vendors/select2/select2.min.js') ?>"></script>
</head>

<body>

   <script>
      $(window).scroll(function() {
         var scrollTop = $(window).scrollTop();
         $('.background').css('transform', 'translateY(' + scrollTop * 0.5 + 'px)');
      });
   </script>

   