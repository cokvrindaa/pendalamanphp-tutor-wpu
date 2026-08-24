<?php 
class Mahasiswa extends Controller{
  public function index() {
    
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
  public function detail($id) {
    
    $data['judul'] = 'Daftar Mahasiswa';
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }
  public function tambah() {
    // Jika ada data yang masuk alias ketika kita imput data
    if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
      Flasher::setFlash('Berhasil' ,'ditambahkan' , 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('Gagal' ,'ditambahkan' , 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
  public function hapus($id) {
    // Jika ada data yang masuk alias ketika kita menghapus data berlandaskan id
    if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
      Flasher::setFlash('Berhasil' ,'dihapus' , 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    } else {
      Flasher::setFlash('Gagal' ,'dihapus' , 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
}