<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah data
      </button>
      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach($data['mahasiswa'] as $mahasiswa) : ?>

        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?php echo $mahasiswa['nama'] ?>
          <a href="<?=  BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="btn btn-primary btn-sm">detail</a>
        </li>
        <?php endforeach;?>

      </ul>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama: </label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nis" class="form-label">Nis: </label>
            <input type="number" class="form-control" id="nis" name="nis">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <select class="form-select" name="jurusan" aria-label="Default select example">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
          </select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
      </div>
      </form>
    </div>
  </div>
</div>