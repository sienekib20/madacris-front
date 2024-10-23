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

<div id="layout-doc-content">
   	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat mollitia recusandae minus id explicabo reiciendis velit officia nam corrupti repudiandae quod voluptatem similique possimus minima repellat, ad ducimus aut odio.
</div>

<script>
   function openDoc() {
      return `
                <div class="my-5 page marca-dagua" size="A4">
                    <div class="p-5">
            `;
   }

   function closeDoc(current, totalPaginas) {
      const paginateSectionHTML = `
                        <small class="d-flex justify-content-end mt-auto" style="top: 95%; right: 3rem; position: absolute;font-size: 6pt;">
                            ${current} de ${totalPaginas}
                        </small>
                    </div>
                </div>
            `;
      return paginateSectionHTML;
   }

   $(document).ready(function(e) {

      var mainDoc = document.querySelector('#layout-doc-content');

      const dataLine = <?php echo json_encode($artigo); ?>;
      const totalLinhas = dataLine.length;
      const linhasPorPagina = 24;
      const totalPaginas = Math.ceil(totalLinhas / linhasPorPagina);

      let documentParts = [];


      mainDoc.innerHTML = documentParts.join("");

   });
</script>