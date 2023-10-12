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
                    <td style="text-align: center; vertical-align: middle;">
                    <a class="btn btn-primary" href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                      <button class="btn btn-warning" type="button">Edit</button>
                      <button class="btn btn-danger" type="button">Delete</button>
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