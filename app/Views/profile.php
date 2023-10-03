<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<img class="profile-image" src="/assets/img/muka.jpg" alt="Profile Image" width="200" height="200"><br>
    <table>
        <tr>
            <td><?= $nama ?></td>
        </tr>
    </table><br>

    <table>    
        <tr>
            <td>Kelas <?= $kelas ?></td>
        </tr>
    </table><br>

    <table>
        <tr>
            <td><?= $npm ?></td>
        </tr>
    </table>
<?= $this->endSection() ?>