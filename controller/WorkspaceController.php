<?php

class WorkspaceController extends Controller
{
   public function index(Request $request)
   {
      $pedidos = $this->get_pedidos($request->id);

      // echo '<pre>';
      // print_r($pedidos);
      // exit;

      // TODO: 
      return view('site.workspace.work', compact('pedidos'));
   }

   public function getPdf(Request $request)
   {
      return view('site.workspace.pdf_doc');
   }
}
