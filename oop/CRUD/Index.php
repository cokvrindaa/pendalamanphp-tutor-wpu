<?php
require_once('Proses.php');
$data = new Proses;
$index = 1;

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tabel Data Siswa</h5>
      </div>
      <div class="card-body">
        <a href="Input.php" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="table-responsive">
          <table class="table table-bordered table-striped align-middle mb-0">
            <thead class="table-dark">
              <tr>
                <th style="width: 80px;">No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Kelas</th>
                <th style="width: 160px;">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data->read() as $siswa) : ?>
              <tr>
                <input type="hidden" value="<?= $siswa['id']; ?>">
                <td><?php echo $index ++; ?></td>
                <td><?php echo $siswa['nis']; ?></td>
                <td><?php echo $siswa['nama_siswa']; ?></td>
                <td><?php echo $siswa['jenis_kelamin']; ?></td>
                <td><?php echo $siswa['agama']; ?></td>
                <td><?php echo $siswa['kelas']; ?></td>
                <td>
                  <a href="Edit.php?id=<?= $siswa['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                  <a href="Aksi.php?hapus=<?= $siswa['id']; ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin hapus?');">Hapus</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>