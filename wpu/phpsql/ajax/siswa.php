<?php 
require '../fungsi.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR nis LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
$siswadata = query($query);
?>
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

    <td><?php echo $siswatampil["id"] ?>
    </td>
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