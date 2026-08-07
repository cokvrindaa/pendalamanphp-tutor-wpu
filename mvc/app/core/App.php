<?php 
class App {
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();
    
    // controller
    // mengecek apakah ada controller di url ini
    if (file_exists('../app/controllers/' . $url[0] . '.php')){
      $this->controller = $url[0];
      unset($url[0]);
      var_dump($url);
    }

    // require_once '' . $this->controller;

    // if(isset($url[1])) {
    //   if (method_exists($this->controller, $url[1])){
        
    //   }
    // }
    
  }

  public function parseURL(){
    if (isset($_GET['url'])){
      // mengambil url
      $url = $_GET['url'];
      // mengubah url menjadi array di setiap "/" nya
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      return $url;
    }
  }
}