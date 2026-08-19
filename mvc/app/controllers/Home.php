<?php 
class Home extends Controller{
  // untuk method deafult
  public function index(){
    $data['judul'] = 'Home';
    
    // Memanggil class model dengan method get user
    $data['nama'] = $this->model('User_model')->getUser();
    
    $this->view('templates/header', $data);
    $this->view('home/index' , $data);
    $this->view('templates/footer');
    
  }
}