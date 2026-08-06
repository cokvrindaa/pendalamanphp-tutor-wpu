<?php 
  require_once 'Database.php';
  class Proses extends Database {
    function create($nis, $nama_siswa, $jenis_kelamin, $agama, $kelas) {
      // Sql sintaks
      $query = "INSERT INTO siswa VALUES(NULL, '$nis', '$nama_siswa', '$jenis_kelamin', '$agama', '$kelas')";
      // mengambil database serta mengeksekusi query
      $result = $this->getKoneksi()->query($query);
      
      return $result ? true : false;
    }

    function read() {
      $query = "SELECT * FROM siswa";
      // mengambil database serta mengeksekusi query
      $result = $this->getKoneksi()->query($query);

      // Data dijadikan array asossiatif
      $data = [];
      while ($row = $result->fetch_assoc()){
        $data[] = $row;
      }
        
      return $data;
    }

    function readById($id) {
      $query = "SELECT * FROM siswa WHERE id = '$id'";
      $result = $this->getKoneksi()->query($query);
      
      return $result->fetch_assoc();
    }

    function update($id, $nis, $nama_siswa, $jenis_kelamin, $agama, $kelas){
      // Sql sintaks
      $query = "UPDATE siswa SET nis = '$nis',  nama_siswa = '$nama_siswa', jenis_kelamin = '$jenis_kelamin', agama = '$agama', kelas = '$kelas' WHERE id = $id";
      //  mengambil database serta mengeksekusi query
      $result = $this->getKoneksi()->query($query);

      return $result ? true : false;
    }

    function delete($id) {
      // Sql sintaks
      $query = "DELETE FROM siswa WHERE id = '$id'";
      //  mengambil database serta mengeksekusi query
      $result = $this->getKoneksi()->query($query);
      
      return $result ? true : false;

    }
  }



?>