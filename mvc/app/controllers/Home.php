<?php 
class Home extends Controller{
  // untuk method deafult
  public function index(){
    $data['judul'] = 'Home';

    $this->view('templates/header', $data);
    $this->view('home/index');
    $this->view('templates/footer');
    
  }
}