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
    <a href="/user/create" type="button" class="btn btn-primary">Tambah Data</a>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
</div>
<?= $this->endSection() ?>