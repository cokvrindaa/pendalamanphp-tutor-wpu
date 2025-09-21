<?php
require_once 'koneksi.php';
require_once 'fungsi.php';
if (isset($_POST["registrasi"])){
    if(registrasi($_POST) > 0){
        echo "
        <script>
        alert('akun berhasil ditambahkan!');
        </script>
        ";
    }
    else{
        echo mysqli_error($koneksi);
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
    label {
        display: block;
    }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method="post">
        <label for="nama" id="nama">Nama :</label>
        <input type="text" name="nama" id="nama">

        <br>
        <label for="password" id="password">Passoword :</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="password2" id="password2">Konfirmasi Pw :</label>
        <input type="password" name="password2" id="password2">
        <br>
        <button type="submit" name="registrasi">Registrasi !</button>
    </form>
</body>

</html>