<?php
class Mahasiswa_model {
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // mengambill semua data mahasiswa
  public function getAllMahasiswa() {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  // mengambil data mahasiswa bedasarkan id
  public function getMahasiswaById($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id' , $id);
    return $this->db->single();
  }
  // tambah data mahasiswa
  public function tambahDataMahasiswa($data) {
    $query = "INSERT INTO " . $this->table . " (nama, nis, email, jurusan) VALUES (:nama, :nis, :email, :jurusan)";
    $this->db->query($query);
    $this->db->bind('nama' , $data['nama']);
    $this->db->bind('nis' , $data['nis']);
    $this->db->bind('email' , $data['email']);
    $this->db->bind('jurusan' , $data['jurusan']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  // Hapus data mahasiswa
  public function hapusDataMahasiswa($id) {
    $query = "DELETE FROM " . $this->table . " WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id' , $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
  // Ubah data mahasiswa
  public function ubahDataMahasiswa($data) {
    $query = "UPDATE " . $this->table . " SET nama = :nama, nis = :nis, email = :email, jurusan = :jurusan WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('nama' , $data['nama']);
    $this->db->bind('nis' , $data['nis']);
    $this->db->bind('email' , $data['email']);
    $this->db->bind('jurusan' , $data['jurusan']);
    $this->db->bind('id' , $data['id']);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function cariDataMahasiswa() {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword ";
    $this->db->query($query);
    $this->db->bind('keyword' , "%$keyword%");
    return $this->db->resultSet();
  }
} 
?>