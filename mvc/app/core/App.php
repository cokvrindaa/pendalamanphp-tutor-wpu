<?php 
class App {
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL(); 

    // membuat controller deafult
    // mengecek apakah ada file dengan index 0 / pertama di folder contollers
    if (file_exists('../app/controllers/' . $url[0] . '.php')){
      // menjadikan nilai dari properti controler dengan url index 0
      $this->controller = $url[0];
      // menghapus url index 0 , yakni home
      unset($url[0]);
    }
    
    // membuat method deafult
    require_once '../app/controllers/' . $this->controller .'.php';
    $this->controller = new $this->controller;
    // JIKA ADA URL method index
    if (isset($url[1])) {
      // Jika ada method di file controller
      if (method_exists($this->controller, $url[1])){
        // menjadikan nilai dari properti method dengan url index 1
        $this->method = $url[1];
        // menghapus url index 1 , yakni index
        unset($url[1]);
      }
    }

    // set parameter 
    if (!empty($url)) {
      $this->params = array_values($url);
      var_dump($url);
    }
    
    // menjalankan controler , method ddan kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
    
  }

  public function parseURL() {
    if (isset($_GET['url'])) {
      // menghapus slash di akhir
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      // Memecah url
      $url = explode('/' , $url);
      return $url;
    }
  }

}