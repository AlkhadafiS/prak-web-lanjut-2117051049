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
    <form class="container" action=<?= base_url('user/store') ?> method="POST" enctype="multipart/form-data">

    <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" name="nama" value="<?= old('nama'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ;?>
            </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="kelas" name="kelas">
                    <?php foreach($kelas as $item):?>
                        <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="npm" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '';?>" name="npm" value="<?= old('npm'); ?>">
                <div class="invalid-feedback">
                <?= $validation->getError('npm') ;?>
            </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <label> Choose the File to upload: </label>
                <input type="file" id="foto" name="foto"/>
            </div>
        </div>
        <input type="submit" name="tambah_data" value="Tambah Data" class="btn btn-primary">
        <a href="/user" class="btn btn-danger">Kembali</a>
    </form>
</div>
<?= $this->endSection() ?>