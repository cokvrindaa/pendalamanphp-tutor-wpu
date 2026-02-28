<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $db = 'sekolah';
  $koneksi = mysqli_connect($host, $username, $password, $db);
  if (!$koneksi){
    echo "Berhasil koneksi broy". mysqli_connect_error();
  } 
?>