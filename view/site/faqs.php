<?= view_component("include") ?>
<div class="wrapper">

   <?= view_component('nav.topnav') ?>

   <?php
   $faqs = (object) [
      [
         'question' => 'Quais são os custos envolvidos na utilização da plataforma?',
         'answer' => 'Os custos podem variar dependendo do plano escolhido. Geralmente, há uma taxa de assinatura mensal, além de comissões sobre as vendas realizadas. É importante verificar também possíveis taxas adicionais para pagamentos, aplicativos ou funcionalidades extras.'
      ],
      [
         'question' => 'Quais métodos de pagamento são aceitos?',
         'answer' => 'A plataforma geralmente suporta diversos métodos de pagamento, incluindo cartões de crédito, PayPal, transferência bancária e, em alguns casos, pagamentos por criptomoedas. É recomendável conferir a lista específica de métodos suportados.'
      ],
      [
         'question' => 'A plataforma é compatível com dispositivos móveis?',
         'answer' => 'Sim, a maioria das plataformas modernas é responsiva, ou seja, se adapta automaticamente a diferentes tamanhos de tela. Isso garante uma boa experiência de compra tanto em desktops quanto em dispositivos móveis.'
      ],
      [
         'question' => 'Como posso gerenciar o estoque e os pedidos?',
         'answer' => 'A plataforma oferece um sistema de gerenciamento de estoque onde você pode adicionar, editar e monitorar produtos. Além disso, há um painel para acompanhar pedidos, processar envios e gerenciar devoluções.'
      ],
      [
         'question' => 'A plataforma oferece suporte ao cliente?',
         'answer' => 'Sim, a maioria das plataformas disponibiliza suporte ao cliente através de chat ao vivo, e-mail e telefone. Os horários de atendimento podem variar, mas muitas oferecem suporte 24/7, especialmente para planos premium.'
      ],
   ];

   ?>

   <?= view_component(
      'nav.navigator',
      [
         'title' => 'Perguntas Frequentes',
         'current' => 'FAQs',
         'backTo' => 'Inicio',
         'link' => ROOT
      ]
   )
   ?>

   <div class="section-card">
      <div class="section-card-contain">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <span class="question-title">Tens alguma, Perguna ?</span>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section-card">
      <div class="questions">
         <?php foreach ($faqs as $key => $faq): ?>
            <div class="question-elem <?= $key == 2 ? 'active' : '' ?>">
               <div class="question-o">
                  <span class="count"> <?= $key + 1 ?></span>
                  <span class="question-t"><?= $faq['question'] ?></span>
               </div>

               <div class="question-contain <?= $key == 2 ? 'h-auto' : '' ?> ">
                  <p>
                     <?= $faq['answer'] ?>
                  </p>
               </div>
            </div>
         <?php endforeach; ?>
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
   </script>
   <?= view_component('footer') ?>
</div>