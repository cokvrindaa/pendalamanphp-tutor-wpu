<?php 
class Home extends Controller{
  // untuk method deafult
  public function index(){
    $this->view('home/index');
  }
}