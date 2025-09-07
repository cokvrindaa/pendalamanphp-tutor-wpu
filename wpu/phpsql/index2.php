<?php 
require_once 'koneksi.php';
require_once 'fungsi.php';
$siswadata = query("SELECT * FROM siswa ");

if( isset($_POST["cari"])){
    $siswadata = cari($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halamaman Admin</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="tambah.php">tambah.php</a>
    <form action="" method="post">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border=" 1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>jurusan</th>
            <th>Semester</th>
            <th>Gambar</th>
        </tr>
        <?php foreach($siswadata as $siswatampil){ ?>
        <tr>

            <td><?php echo $siswatampil["id"] ?></td>
            <td>
                <a href="ubah.php?id=<?php echo $siswatampil["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?php echo $siswatampil["id"]?>">Hapus</a>
            </td>
            <td><?php echo $siswatampil["nama"] ?></td>
            <td><?php echo $siswatampil["nis"] ?></td>
            <td><?php echo $siswatampil["jurusan"] ?></td>
            <td><?php echo $siswatampil["semester"] ?></td>
            <td><img style="width: 80px;" src="img/<?php echo $siswatampil["gambar"] ?>" alt=""></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>