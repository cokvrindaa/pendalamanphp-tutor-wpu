<?php 
require_once 'koneksi.php';
require_once 'fungsi.php';
$id = $_GET['id'];
$datasiswa = query("SELECT * FROM siswa WHERE id = $id");
var_dump($datasiswa);
if(isset($_POST["submit"])){
    if(ubah($_POST)>0){
        echo"
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index2.php' 
        </script>
        ";
    }
    else{
        echo "
                <script>
        alert('data gagal diubah');
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
    <title>Ubah data</title>
</head>

<body>

    <h1>Ubah data siswa</h1>
    <form action="" method="post">
        <?php foreach ($datasiswa as $siswatampil){ ?>
        <input type="hidden" name="id" value="<?php echo $siswatampil["id"] ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required value="<?php echo $siswatampil["nama"]  ?>"><br><br>

        <label for="nis">Nis:</label>
        <input type="text" id="nis" name="nis" required value="<?php echo $siswatampil["nis"]  ?>"><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required value="<?php echo $siswatampil["jurusan"]  ?>"><br><br>

        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" required value="<?php echo $siswatampil["nama"]  ?>"> <br><br>
        <br>
        <button type="submit" name="submit">Ubah data</button>
        <?php } ?>
    </form>
    <a href=" index2.php">Balik</a>
</body>

</html>