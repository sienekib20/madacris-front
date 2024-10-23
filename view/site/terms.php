<style>
   li {
      list-style-type: none;
   }

   li a {
      font-size: 0.85rem;
      color: #000;
      margin: 0.45rem 0;
      display: block;
   }

   li a:hover {
      color: rgba(0, 0, 0, 0.7);
   }

   .list-title {
      display: block;
      font-size: 0.85rem;
      font-family: 'Montserrat-Bold';
   }
</style>
<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?php
   $terms = [
      [
         'term' => 'Aceitação dos Termos',
         'contract' => 'Ao acessar e usar a plataforma, você concorda em respeitar e cumprir todos os termos e condições aqui estabelecidos. Caso não concorde com algum dos termos, recomendamos que não utilize a plataforma.'
      ],
      [
         'term' => 'Cadastro e Criação de Conta',
         'contract' => 'Para alugar vestidos, você deve criar uma conta fornecendo informações pessoais, como nome, e-mail e dados de pagamento. Você é responsável pela veracidade e atualização dessas informações. Caso identifique qualquer uso não autorizado da sua conta, você deve notificar a plataforma imediatamente.'
      ],
      [
         'term' => 'Responsabilidade pelo Uso da Conta',
         'contract' => 'Você concorda em manter a confidencialidade da sua senha e é responsável por todas as atividades que ocorrerem sob sua conta. A plataforma não se responsabiliza por qualquer perda ou dano decorrente do uso não autorizado da sua conta.'
      ],
      [
         'term' => 'Processo de Aluguel de Vestidos',
         'contract' => 'Os vestidos disponíveis para aluguel estão listados na plataforma, com descrições detalhadas e preços. O aluguel é confirmado somente após o pagamento completo. O prazo de aluguel e as condições de uso são especificados na página do produto.'
      ],
      [
         'term' => 'Cancelamento e Devolução',
         'contract' => 'Os usuários podem cancelar o aluguel até 48 horas antes da data de entrega, recebendo um reembolso total. As devoluções devem ser realizadas no prazo acordado; atrasos podem resultar em taxas adicionais.'
      ],
      [
         'term' => 'Propriedade Intelectual',
         'contract' => 'Todo o conteúdo da plataforma, incluindo textos, imagens, logotipos e design, é protegido por direitos autorais e não pode ser reproduzido sem autorização prévia por escrito da plataforma.'
      ],
      [
         'term' => 'Limitação de Responsabilidade',
         'contract' => 'A plataforma não se responsabiliza por danos indiretos, especiais ou consequenciais resultantes do uso ou da incapacidade de uso da plataforma. Isso inclui, mas não se limita a, perda de lucros, dados ou outras perdas intangíveis.'
      ],
      [
         'term' => 'Alterações nos Termos',
         'contract' => 'A plataforma se reserva o direito de modificar estes Termos de Uso a qualquer momento, com ou sem aviso prévio. O uso contínuo da plataforma após a publicação de mudanças constitui aceitação dos novos termos.'
      ],
      [
         'term' => 'Legislação Aplicável',
         'contract' => 'Este contrato é regido pelas leis do país em que a plataforma está registrada. Qualquer disputa relacionada a este contrato será resolvida nos tribunais competentes dessa jurisdição.'
      ],
   ];

   $privacy = [
      [
         'privacy' => 'Coleta de Dados Pessoais',
         'contract' => 'Coletamos informações pessoais, como nome, e-mail, endereço e informações de pagamento, quando você cria uma conta ou realiza um aluguel. Também podemos coletar dados sobre suas interações com a plataforma.'
      ],
      [
         'privacy' => 'Uso das Informações',
         'contract' => 'As informações coletadas são utilizadas para processar seu pedido, comunicar-se sobre sua conta, enviar confirmações de aluguel, promoções e para melhorar a experiência do usuário. Não utilizaremos seus dados para fins não relacionados sem seu consentimento.'
      ],
      [
         'privacy' => 'Compartilhamento de Dados',
         'contract' => 'Podemos compartilhar suas informações com prestadores de serviços terceiros que nos ajudam a operar a plataforma, como empresas de entrega e processadores de pagamento. Esses parceiros são obrigados a proteger suas informações e a usá-las apenas para os fins acordados.'
      ],
      [
         'privacy' => 'Segurança das Informações',
         'contract' => 'Adotamos medidas de segurança para proteger suas informações pessoais contra acesso não autorizado, uso ou divulgação. No entanto, nenhum método de transmissão pela internet ou armazenamento eletrônico é 100% seguro. Portanto, não podemos garantir segurança absoluta.'
      ],
      [
         'privacy' => 'Direitos dos Usuários',
         'contract' => 'Você tem o direito de acessar, corrigir ou excluir suas informações pessoais. Para solicitar qualquer um desses direitos, entre em contato conosco por meio das informações fornecidas abaixo.'
      ],
      [
         'privacy' => 'Uso de Cookies',
         'contract' => 'Utilizamos cookies e tecnologias similares para melhorar a experiência do usuário. Você pode configurar seu navegador para recusar cookies, mas isso pode afetar a funcionalidade da plataforma.'
      ],
      [
         'privacy' => 'Alterações na Política de Privacidade',
         'contract' => 'Reservamo-nos o direito de modificar esta Política de Privacidade a qualquer momento. As alterações serão publicadas na plataforma, e recomendamos que você revise periodicamente para se manter informado sobre como estamos protegendo suas informações.'
      ],
      [
         'privacy' => 'Contato',
         'contract' => 'Se você tiver dúvidas ou preocupações sobre nossa Política de Privacidade, entre em contato conosco através do e-mail [madacris@gmail.com] ou pelo telefone [seu telefone].'
      ],
   ];

   ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Termos de Uso',
         'current' => 'Terms',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="main-container">
            <div class="row">
               <div class="col-lg-6">
                  <span class="question-title">Tens alguma, Perguna ?</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card" style="margin-top: -4rem">
      <div class="section-card-contain">
         <div class="main-container">
            <div class="row flex-column-reverse flex-lg-row">
               <div class="col-lg-8">
                  <div class="term-item">
                     <span class="term-title">1.Termos de uso</span>
                     <?php foreach ($terms as $key =>  $term): ?>
                        <section id="term-<?= $key ?>">
                           <span class="term-t"><?= '1.' . $key + 1 . '. ' . $term['term'] ?></span>
                           <p class="mb-5">
                              <?= $term['contract'] ?>
                           </p>
                        </section>
                     <?php endforeach; ?>
                     <span class="term-title mt-4">2.Politicas de Segurança</span>
                     <?php foreach ($privacy as $key =>  $term): ?>
                        <section id="privacy-<?= $key ?>">
                           <span class="term-t"><?= '2.' . $key + 1 . '. ' . $term['privacy'] ?></span>
                           <p class="mb-5">
                              <?= $term['contract'] ?>
                           </p>
                        </section>
                     <?php endforeach; ?>
                  </div>
               </div>
               <div class="col-lg-4 topstick">
                  <span class="table-content">Tabela de contéudo</span>
                  <ul class="list">
                     <li class="list-title mb-2">2. Termos de uso</li>
                     <?php foreach ($terms as $key =>  $term): ?>
                        <li class="list-item">
                           <a href="#term-<?= $key ?>"><?= '1.' . $key + 1 . '. ' . $term['term'] ?></a>
                        </li>
                     <?php endforeach; ?>
                     <li class="list-title mt-4 mb-2">2. Políticas de segurança</li>
                     <?php foreach ($privacy as $key =>  $privacy): ?>
                        <li class="list-item">
                           <a href="#privacy-<?= $key ?>"><?= '2.' . $key + 1 . '. ' . $privacy['privacy'] ?></a>
                        </li>
                     <?php endforeach; ?>
                     <li>
                        <a href="" class="backTobtn">Topo <i class="bi bi-arrow-up"></i> </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>




   <span class="flex mt-4"></span>
   <span class="flex py-5"></span>


   <script>
      $('.question-o').click(function() {
         $('.question-elem').removeClass('active');
         $('.question-contain').css('height', '0');
         var contain = $(this.nextElementSibling);

         if (contain.height() == 0) {
            $(this).parent().addClass('active');
            var H = contain.css('height', 'auto').height();
            contain.css('height', '0');
            contain.animate({
               height: H
            }, 150);
         } else {
            contain.animate({
               height: 0
            }, 150);
         }
      });

      $('.backTobtn').css('bottom', '-5rem');
      window.addEventListener('scroll', function(e) {
         if (window.scrollY > 360) {
            $('.backTobtn').css('bottom', '0rem');
         } else {
            $('.backTobtn').css('bottom', '-5rem');
         }
      })

      $(document).ready(function() {
         $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();
            var target = this.hash;
            $('html, body').animate({
               scrollTop: $(target).offset().top
            }, 500);
         });
         $('.backTobtn').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
               scrollTop: 350
            }, 500);
         });
      });
   </script>
   <?= view_component('footer') ?>
</div>