<?php

class WorkspaceController extends Controller
{
   protected static $currentId = -1;
   protected static $getPedidos = [];

   public function index(Request $request)
   {

      $pedidos = $this->get_pedidos($request->id);
      static::$getPedidos = $pedidos;
      static::$currentId = $request->id;

      // echo '<pre>'; print_r($pedidos);exit;

      // echo '<pre>';
      // print_r($pedidos);
      // exit;

      // TODO: 
      return view('site.workspace.work', compact('pedidos'));
   }

   public function getPdf(Request $request)
   {
      $pedidos = $this->get_pedidos($request->id);
      $artigosPedido = $this->get_artigos_pedido($request->id);
      $listPedido = [];
      $dadosDoc = [];
      $dadosDoc['referencia'] = $request->i;
      $dadosDoc['modoPagamento'] = $request->payment;

      $statusPedido = "Pendente";

      foreach ($artigosPedido as $key => $pedidoArtigo) {
         if (str_replace('#', '', $pedidoArtigo['ref_pedido']) == $request->i) {
            $listPedido[] = (object) $pedidoArtigo;
            $dadosDoc['status'] = $pedidoArtigo['estado'];
            $dadosDoc['created_at'] =  \DateTime::createFromFormat('Y-m-d', explode(' ', $pedidoArtigo['created_at'])[0])->format('d-m-Y');
            $dadosDoc['total'] = $pedidoArtigo['total'];
            $dadosDoc['desconto'] = $pedidoArtigo['desconto'];
         }
      }


      // \DateTime::createFromFormat('Y-m-d', explode(' ', $pedido->created_at)[0])->format('d-m-Y')

      return view('site.workspace.pdf_doc', compact('listPedido', 'dadosDoc'));
   }
}
