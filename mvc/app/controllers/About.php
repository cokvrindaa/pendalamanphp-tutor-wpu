<?php 
class About extends Controller {
  public function index($nama = 'Ujang' , $pekerjaan = 'Ngangur' ) {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $this->view('about/index' , $data);
  }
    public function page() {
    $this->view('about/page');
  }
}