<?php
// core/Controller.php
class BaseController
{

   private $layout = null;

   private $contentLayout = '';

   private $sectionTitle = '';

   // Método para carregar um modelo
   public function model($model)
   {
      // Verifica se o arquivo do modelo existe
      if (file_exists('model/' . $model . '.php')) {
         // Requer o arquivo do modelo
         require_once 'model/' . $model . '.php';
         // Retorna uma nova instância do modelo
         return new $model();
      } else {
         die('O ' . $model . ' modelo não existe.');
      }
   }

   public function yield($section, $value)
   {
      $this->sectionTitle = $section == 'title' ? $value : '';
      return $this->sectionTitle;
   }

   public function extends($layout, $params = [])
   {
      $this->layout = $layout;
      $this->sectionTitle = $params['title'] ?? $this->sectionTitle;
      $this->yield('title', $this->sectionTitle);
   }

   public function load()
   {
      echo $this->contentLayout;
   }

   // Método para carregar uma visualização
   public function view($view, $data = [])
   {
      $view = str_replace('.', DIRECTORY_SEPARATOR, $view);
      // Verifica se o arquivo de visualização existe
      if (file_exists('view/' . $view . '.php')) {
         // Requer o arquivo da visualização
         ob_start();
         extract($data);
         require_once 'view/' . $view . '.php';
         $content = ob_get_contents();
         $this->contentLayout = $content;
         ob_end_clean();

         if ($this->layout != null) {
            if (!$this->layoutExists($this->layout)) {
               return $this->loadErrorView('error.404', ['message' => 'O Layout indicado não existe!']);
            }
            ob_start();
            require_once $this->layoutFile($this->layout);
            $contentLayout = ob_get_contents();
            ob_end_clean();
            echo $contentLayout;
            $this->layout = null;
            return;
         }
         echo $content;
         return;
      } else {
         die('A view indicada não existe!');
      }
   }

   public function loadErrorView($view, $params = [])
   {
      $view = str_replace('.', DIRECTORY_SEPARATOR, $view);
      if (file_exists('view/' . $view . '.php')) {
         // Requer o arquivo da visualização
         extract($params);
         require_once 'view/' . $view . '.php';
      }
   }

   private function layoutExists($layout)
   {
      return file_exists($this->layoutFile($layout));
   }

   private function layoutFile($layout)
   {
      return view_path() . 'layouts/' . str_replace('.', DIRECTORY_SEPARATOR, $layout) . '.php';
   }

   public function view_component($view, $data = [])
   {
      $view = str_replace('.', DIRECTORY_SEPARATOR, $view);
      // Verifica se o arquivo de visualização existe
      if (file_exists('view/components/' . $view . '.vc.php')) {
         // Requer o arquivo da visualização
         extract($data);

         require_once 'view/components/' . $view . '.vc.php';
      } else {

         die('A view indicada não existe!');
      }
   }
}
