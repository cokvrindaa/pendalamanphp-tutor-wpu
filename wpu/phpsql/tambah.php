<?php 
require_once 'koneksi.php';
require_once 'fungsi.php';
if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo"
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index2.php' 
        </script>
        ";
    }
    else{
        echo "
                <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index2.php' 
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>

<body>

    <h1>Tambah data siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="nis">Nis:</label>
        <input type="text" id="nis" name="nis" required><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" required><br><br>
        <br>
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" id="gambar">
        <br>
        <button type="submit" name="submit">Tambah data</button>
    </form>
    <a href="index2.php">Balik</a>
</body>

</html>