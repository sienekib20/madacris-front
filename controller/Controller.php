<?php
// core/Controller.php
class Controller extends BaseController
{
  public function get_categorias()
  {
    return  request()->fromApi('API_URL', 'artigos/categorias')->data ?? [];
  }

  public function get_artigos()
  {
    return request()->fromApi('API_URL', 'artigos/get')->data ?? [];
  }

  public function get_artigos_pedido($id)
  {
    return request()->fromApi('API_URL', 'view/artigos/pedidos', [
      'identificador_id' => $id
    ], 'POST')->data ?? [];
  }

  public function get_pedidos($id)
  {
    return request()->fromApi('API_URL', 'pedido/pedidos', [
      'identificador_id' => $id
    ], 'POST')->data ?? [];
  }
}
