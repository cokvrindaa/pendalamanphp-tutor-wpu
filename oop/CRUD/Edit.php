<?php
  include_once 'Proses.php';
  $data = new Proses;
  $id = $_GET["id"];
  $data_siswa = $data->readById($id);

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tambah Data Siswa</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="Aksi.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="mb-3">
            <label for="nis" class="form-label">Nis</label>
            <input type="text" class="form-control" id="nis" value="<?php echo $data_siswa["nis"]; ?>" name="nis"
              required>
          </div>
          <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_siswa" value="<?php echo $data_siswa["nama_siswa"]; ?>"
              name="nama_siswa" required>
          </div>
          <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
              <option value="" selected disabled>Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" id="agama" name="agama" required>
              <option value="" selected disabled>Pilih Agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $data_siswa["kelas"]; ?>"
              required>
          </div>
          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
            <a href="Index.php" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>