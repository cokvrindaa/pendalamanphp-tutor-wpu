<?php 
// Koneksi ke database 
$koneksi = mysqli_connect("localhost", "root", "" , "phpdasar");

// Ambil data siswa menggunakan query
$sqlsintaks = "SELECT * FROM siswa ";
$hasil = mysqli_query($koneksi, $sqlsintaks);



if ( !$hasil) {
    mysqli_error($koneksi);
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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>jurusan</th>
            <th>Semester</th>
            <th>Gambar</th>
        </tr>
        <?php while($siswa = mysqli_fetch_assoc($hasil)){ ?>
        <tr>

            <td><?php echo $siswa["id"] ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><?php echo $siswa["nama"] ?></td>
            <td><?php echo $siswa["nis"] ?></td>
            <td><?php echo $siswa["jurusan"] ?></td>
            <td><?php echo $siswa["semester"] ?></td>
            <td><img src="" alt=""></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>