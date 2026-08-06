<?php 
include_once 'Proses.php';
$aksi = new Proses;

if (isset($_POST["tambah"])){
  $nis = $_POST["nis"];
  $nama_siswa = $_POST["nama_siswa"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $agama = $_POST["agama"];
  $kelas = $_POST["kelas"];
  
  $aksi->create($nis, $nama_siswa,$jenis_kelamin, $agama,$kelas);
  header("location: index.php");
}

if (isset($_POST["edit"])){
  $id = $_POST["id"];
  $nis = $_POST["nis"];
  $nama_siswa = $_POST["nama_siswa"];
  $jenis_kelamin = $_POST["jenis_kelamin"];
  $agama = $_POST["agama"];
  $kelas = $_POST["kelas"];
  
  $aksi->update($id,$nis, $nama_siswa,$jenis_kelamin, $agama,$kelas);
  header("location: index.php");

}

if (isset($_GET["hapus"])){
  $id = $_GET["hapus"];
  $aksi->delete($id);
  header("location: Index.php");
}


?>