<style>
   :root {
      --body-bg: rgb(204, 204, 204);
      --white: #ffffff;
      --darkWhite: #ccc;
      --black: #000000;
      --dark: #615c60;
      --themeColor: #560085;
      --pageShadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
   }

   @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100&display=swap');

   body {
      background-color: var(--body-bg);
      -webkit-print-color-adjust: exact !important;
   }

   .page {
      background: var(--white);
      display: block;
      margin: 0 auto;
      position: relative;
      box-shadow: var(--pageShadow);
   }

   .page[size="A4"] {
      width: 21cm;
      min-height: 29.7cm;
      overflow: hidden;
   }

   .bb {
      border-bottom: 3px solid var(--darkWhite);
   }

   .invisible {
      display: none;
   }

   .top-content {
      padding-bottom: 15px;
   }

   .logo img {
      height: 30px;
   }

   .top-left p {
      margin: 0;
   }

   .top-left .graphic-path {
      height: 40px;
      position: relative;
   }

   .top-left .graphic-path::before {
      content: "";
      height: 20px;
      background-color: var(--dark);
      position: absolute;
      left: 15px;
      right: 0;
      top: -15px;
      z-index: 2;
   }

   .top-left .graphic-path::after {
      content: "";
      height: 22px;
      width: 17px;
      background: var(--black);
      position: absolute;
      top: -13px;
      left: 6px;
      transform: rotate(45deg);
   }

   .top-left .graphic-path p {
      color: var(--white);
      height: 40px;
      left: 0;
      right: -100px;
      text-transform: uppercase;
      background-color: var(--themeColor);
      font: 26px;
      z-index: 3;
      position: absolute;
      padding-left: 10px;
   }

   .store-user {
      padding-bottom: 25px;
   }

   .store-user p {
      margin: 0;
      font-weight: 600;
   }

   .store-user .address {
      font-weight: 400;
   }

   .store-user h2 {
      color: var(--themeColor);
      font-family: 'Rajdhani', sans-serif;
   }

   .extra-info p span {
      font-weight: 400;
   }

   .table td,
   .table th {
      text-align: center;
      vertical-align: middle;
   }

   tr th:first-child,
   tr td:first-child {
      text-align: left;
   }

   .media img {
      height: 60px;
      width: 60px;
   }

   .media p {
      font-weight: 400;
      margin: 0;
   }

   .media p.title {
      font-weight: 600;
   }

   .media-body>p {
      font-weight: 600;
   }

   .balance-info .table td,
   .balance-info .table th {
      padding: 0;
      border: 0;
   }

   .balance-info tr td:first-child {
      font-weight: 600;
   }

   tfoot {
      border-top: 2px solid var(--darkWhite);
   }

   tfoot td {
      font-weight: 600;
   }

   footer {
      text-align: center;
      position: absolute;
      bottom: 30px;
      left: 0;
      right: 0;
      background: var(--white);
      padding: 3rem;
   }

   footer hr {
      margin-bottom: -22px;
      border-top: 3px solid var(--darkWhite);
   }

   footer a {
      color: var(--themeColor);
   }

   @media print {

      .page,
      .page * {
         visibility: visible;
      }

      .page {
         position: absolute;
         left: 0;
         top: 0;
         box-shadow: none;
      }

      .my-5 {
         margin: 0 !important;
      }

      @page {
         margin: 0;
      }
   }

   .tabela thead td {
      background-color: #0000000d;
   }

   .tabela td {
      text-align: left;
   }

   .tabela-principal thead {
      font-weight: 600;
   }

   .tabela-principal thead td {
      background: none;
      border-bottom: 1px solid #000;
   }

   .tabela-principal td {
      border: none;
   }

   .marca-dagua {
      position: relative;
      width: 100%;
      height: 100%;
   }

   .marca-dagua::before {
      content: var(--content, '');
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) rotate(-45deg);
      font-size: 10rem;
      color: #bcbcbc;
   }
</style>
<style>
   .invoice-header {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      padding-bottom: 1rem;
   }

   .status-invoice {
      padding: 0.25rem 0.75rem;
      color: #9EA9BF;
      font-family: 'Onest-Bold';
      background-color: #D3D8E2;
   }

   .invoice-table {
      width: 100%;
      position: relative;
   }

   .invoice-table thead tr {
      background-color: #9EA9BF;
   }

   .invoice-table thead tr th {
      padding: 1rem 0;
      font-size: 13px;
      font-family: 'Onest-Regular';
   }

   .invoice-table tbody tr td {
      padding: 1.45rem 0;
      font-size: 14px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
   }

   .invoice-table tbody tr:nth-child(even) {
      background-color: #F5F6F8;
   }

   .invoice-p-title {
      display: block;
      font-family: 'Onest-Bold';
   }
</style>
<link rel="stylesheet" href="<?= asset("css/fonts/all.css") ?>">
<link rel="stylesheet" href="<?= asset("css/fonts/bootstrap-icons.css") ?>">
<link rel="stylesheet" href="<?= asset("boxicons/css/boxicons.min.css") ?>">
<link rel="stylesheet" href="<?= asset("css/alquimist.css") ?>">
<link rel="stylesheet" href="<?= asset("css/aldes.min.css") ?>">
<link rel="stylesheet" href="<?= asset("css/layouts.css") ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div id="layout-doc-content">
   <div class="my-5 page marca-dagua" size="A4">
      <div class="py-5 px-5 flex flex-col">
         <section class="invoice-header">
            <div class="container">
               <div class="row">
                  <div class="col-6">
                     <img src="<?= asset('img/mada/logo.png') ?>" alt="" style="width: 120px">
                  </div>
                  <div class="col-6 justify-end flex flex-col items-end">
                     <span style="font-family: 'Onest-Bold'">Comprovante</span>
                     <small class="text-muted">156 University Ave, Toronto</small>
                     <small class="text-muted">On, Canada, M5H 2H7</small>
                  </div>
               </div>
            </div>
         </section>
         <section class="py-3">
            <div class="container">
               <div class="row">
                  <div class="col-7 justify-end flex flex-col items-start">
                     <span class="text-black">Para:</span>
                     <span style="font-family: 'Onest-Bold'">Nome do Cliente</span>
                     <small class="text-muted">Luanda - Angola</small>
                     <small class="text-primary">email@gmail.com</small>
                     <small class="text-primary">+244 944 956 928</small>
                  </div>
                  <div class="col-5 justify-end flex flex-col items-start">
                     <small class="text-muted">Factura No: 14</small>
                     <small class="text-muted">Referência do Pedido: <?= $dadosDoc['referencia'] ?></small>
                     <small class="text-muted">Data: <?= $dadosDoc['created_at'] ?></small>
                     <small class="text-muted mb-2">Modo Pagamento: <?= $dadosDoc['modoPagamento'] ?></small>
                     <small class="status-invoice"><?= $dadosDoc['status'] ?></small>
                  </div>
               </div>
            </div>
         </section>

         <section class="mt-4">
            <table class="invoice-table">
               <thead>
                  <tr>
                     <th scope="col" style="min-width: 40%; padding-left: 10px;">Artigo</th>
                     <th scope="col" class="text-center" style="min-width: 10%">Qtd.</th>
                     <th scope="col" class="text-center" style="min-width: 20%">P.Unit</th>
                     <th scope="col" class="text-right" style="min-width: 30%; padding-right: 10px;">Total</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($listPedido as $artigo): ?>
                     <tr>
                        <td style="padding-left: 10px;">
                           <span class="invoice-p-title"><?= $artigo->nome ?></span>
                           <small class="text-muted"><?= $artigo->categoria ?></small>
                        </td>
                        <td class="text-muted text-center"><?= $artigo->qtd ?></td>
                        <td class="text-muted text-center" name="valor"><?= $artigo->preco ?></td>
                        <td class="text-muted text-right" style="padding-right: 10px;" name="valor">
                           <?= $artigo->preco * $artigo->qtd ?>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </section>
         <footer class="mt-auto">
            <div class="row">
               <div class="container">
                  <div class="col-4 ml-auto">
                     <div class="flex items-center justify-between">
                        <small>SubTotal:</small>
                        <small class="">A0 <span name="valor"><?= $dadosDoc['total'] ?></span> </small>
                     </div>
                     <div class="flex items-center justify-between">
                        <small>Desconto:</small>
                        <small>A0 <span name="valor"><?= $dadosDoc['desconto'] ?></span></small>
                     </div>
                     <div class="flex items-center justify-between">
                        <small>Total:</small>
                        <small>A0 <span name="valor"><?= $dadosDoc['total'] ?></span></small>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </div>
</div>

<script src="<?= asset("js/jquery-3.3.1.min.js") ?>"></script>
<script>
   $(document).ready(function() {
      var valorField = document.querySelectorAll('[name="valor"]');
      valorField.forEach(field => {
         let valor = parseFloat(field.textContent); // Convertendo para número
         field.textContent = currencyFormat(valor); // Formatando
      });
   });

   function currencyFormat(valor) {
      return valor.toLocaleString('pt-PT', {
         style: 'currency',
         currency: 'AOA', // Substitua pela moeda correta
         minimumFractionDigits: 2,
         maximumFractionDigits: 2
      });
   }
</script>