<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Pemrograman Web Lanjut<span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="<?= base_url('/user') ?>">List User</a>
      <a class="nav-item nav-link" href="<?= base_url('/kelas') ?>">List Kelas</a>
    </div>
  </div>
</nav><br>

<!-- judul -->
<div class="container">
    <figure>
        <h1>Data Mahasiswa</h1>
      <blockquote class="blockquote">
        <p>Data Mahasiswa yang ada didalam database</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        CRUD <cite title="Source Title">Create, Read, Update, Delete</cite>
      </figcaption>
    </figure>
    <a href="<?= base_url('/user/create') ?>" type="button" class="btn btn-primary">Tambah Data</a>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NPM</th>
                <th style="text-align: center; vertical-align: middle;">Kelas</th>
                <th style="text-align: center; vertical-align: middle;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td style="text-align: center; vertical-align: middle;"><?= $user['nama_kelas'] ?></td>
                    <td class="d-flex justify-content-center">
                    <a class="btn btn-primary" href="<?= base_url('user/' . $user['id']) ?>" style="margin-right: 5px;">Detail</a>
                      <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                      <form action="<?=base_url('user/' . $user['id'])?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                          <button type="submit" class="btn btn-danger" value="Delete" style="width: 80px; height: 40px; padding: 5px;">Delete</button>
                      </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
<?= $this->endSection() ?>