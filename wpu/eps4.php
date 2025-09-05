<?php 
$nama = "Manusia";
$nama_depan = "Maso";
$nama_belakang = "Peso";

$angka1 = 2;
$angka1 *= 2;
var_dump($nama);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selamat Datang, <?php echo $nama_depan . $nama_belakang; ?></h1>
    <p><?php echo $angka1; ?></p>
</body>

</html>