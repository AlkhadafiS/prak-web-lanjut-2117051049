<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br>
<div style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; margin: 0 auto; border: 2px solid black;">
  <img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="Profile Image" style="width: 100%; height: 100%; object-fit: cover;">
</div><br>
<table class="mx-auto">
    <tr>
      <td>
        <button class="p-2 bg-secondary text-white" style="width: 300px;"><?= $user['nama'] ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;">Kelas <?= $user['nama_kelas'] ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $user['npm'] ?></button>
      </td>
    </tr>
  </table>
<?= $this->endSection() ?>