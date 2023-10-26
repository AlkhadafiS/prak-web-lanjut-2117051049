<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<nav class="navbar bg-body-tertiary">
    <!-- navbar -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      Pemrograman Web lanjut
    </a>    
  </div>
</nav><br>
<div class="container">
    <form class="container" action=<?= base_url('/kelas/store') ?> method="POST" enctype="multipart/form-data">
    <div class="mb-3 row">
            <label for="kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
            <div class="col-sm-10">
            <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama Kelas" name="nama_kelas" value="<?= old('nama_kelas') ?>">
      <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama_kelas'); ?>
        </div>
      <?php endif; ?>
            </div>
        </div>
        <input type="submit" name="tambah_data" value="Tambah Data" class="btn btn-primary">
        <a href="/user" class="btn btn-danger">Kembali</a>
    </form>
</div>
<?= $this->endSection() ?>