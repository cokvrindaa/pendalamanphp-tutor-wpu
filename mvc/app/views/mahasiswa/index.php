<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary  tombolTambahData" data-bs-toggle="modal"
        data-bs-target="#formModal">
        Tambah data
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="cari mahasiswa" name="keyword" id="keyword">
          <button class="btn btn-outline-secondary" type="submit" id="tombolcari">Cari</button>
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-6">

      <h3>Daftar Mahasiswa</h3>
      <ul class="list-group">
        <?php foreach($data['mahasiswa'] as $mahasiswa) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $mahasiswa['nama'] ?>
          <div class="btn-group" role="group">
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mahasiswa['id']; ?>" class="btn btn-primary btn-sm">
              Detail
            </a>
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mahasiswa['id']; ?>"
              class="btn btn-success btn-sm tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal"
              data-id="<?= $mahasiswa['id']; ?>">
              Ubah
            </a>
            <a href=" <?= BASEURL; ?>/mahasiswa/hapus/<?= $mahasiswa['id']; ?>" class="btn btn-danger btn-sm"
              onclick="return confirm('Yakin mau hapus data ini?')">
              Hapus
            </a>
          </div>
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
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
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
          <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
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