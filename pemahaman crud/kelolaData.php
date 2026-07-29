<!DOCTYPE html>
<?php 
include "koneksi.php";
  // tidak mendampilkan data saat mode tambah
  $id_siswa = '';
  $nisn = '';
  $nama = '';
  $jenis_kelamin = '';
  $alamat = '';
  
  // Menampilkan data saat mode ubah
  if(isset($_GET["ubah"])){
    $id_siswa = $_GET['ubah'];
    $query = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
    
    $sql = mysqli_query($koneksi, $query);
    $hasil = mysqli_fetch_assoc($sql);

    $nisn = $hasil['nis'];
    $nama = $hasil["nama_siswa"];
    $jenis_kelamin = $hasil["jenis_kelamin"];
    $alamat = $hasil["alamat"];
    
  }
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data </title>
</head>

<body>
  <nav class="navbar bg-body-tertiary mb-4">
    <div class="container">
      <a class="navbar-brand" href="./index.php">
        CRUD - LATIHAN
      </a>
    </div>
  </nav>
  <div class="container">
    <!-- gunakan multipart/form-data untuk memasukan input gambar. -->
    <form method="POST" action="../pemahaman crud/proses.php" enctype="multipart/form-data">
      <input type="hidden" name="id_siswa" value="<?php echo $id_siswa  ?>">

      <div class=" mb-3 row">
        <label for="nis" class="col-sm-2 col-form-label">NIS </label>
        <div class="col-sm-10">
          <input required type="text" class="form-control" id="nis" placeholder="contoh: 1111" name="nis"
            value="<?php echo $nisn ?>">
        </div>
      </div>
      <div class=" mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
        <div class="col-sm-10">
          <input required type="text" class="form-control" id="nama" name="nama" laceholder="Contoh: Ujang Dujang"
            value="<?php echo $nama ?>">
        </div>
      </div>
      <div class=" mb-3 row">
        <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin </label>
        <div class="col-sm-10">
          <select class="form-select " name="jenis_kelamin" id=" jenisKelamin" required>
            <!-- Menggunakan akal akalan selected wkwkkw -->
            <option <?php if ($jenis_kelamin == "Laki-Laki") {echo "selected";} ?> value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan" <?php if ($jenis_kelamin == "Perempuan") {echo "selected";} ?>>Perempuan</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="col-sm-10">
          <div class="input-group ">
            <input <?php if(isset($_GET['edit'])){echo "required";}?> type="file" class="form-control" id="foto"
              name="foto">
            <label class="input-group-text" for="upFoto">Upload</label>
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat </label>
        <div class="col-sm-10">
          <input required type="text" class="form-control" name="alamat" id="alamat"
            placeholder="Contoh: Jl. Raya Jalan Jalan" value="<?php echo $alamat ?>">
        </div>
      </div>
      <div class="col">
        <?php if(isset($_GET['ubah'])) {?>
        <button type="submit" name="aksi" value="edit" class="btn btn-outline-primary btn-sm">Simpan
          Perubahan!</button>
        <?php } else { ?>
        <button type="submit" name="aksi" value="tambah" class="btn btn-outline-primary btn-sm">Tambahkan!</button>
        <?php }?>
        <a href="index.php">
          <button type="button" class="btn btn-outline-danger btn-sm">Kembali</button>
        </a>
      </div>
    </form>
  </div>
</body>

</html>