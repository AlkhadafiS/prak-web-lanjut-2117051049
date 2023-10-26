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
    <form class="container" action=<?= base_url('user/kelas/store') ?> method="POST" enctype="multipart/form-data">

    <div class="mb-3 row">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" name="kelas" value="<?= old('kelas'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('kelas') ;?>
            </div>
            </div>
        </div>
        <input type="submit" name="tambah_data" value="Tambah Data" class="btn btn-primary">
        <a href="/user" class="btn btn-danger">Kembali</a>
    </form>
</div>
<?= $this->endSection() ?>