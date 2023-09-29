<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> -->
    <title>Import Data</title>
</head>
<body>
    <h2>Form Tambah Data</h2>
    <form action="<?=base_url("user/store");?>" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" name="nama" value="<?= old('nama'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ;?>
            </div>
            </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>
                <select name="kelas" id="kelas">
                    <?php foreach($kelas as $item):?>
                        <option value="<?=$item['id']?>"><?=$item['nama_kelas']?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '';?>" name="npm" value="<?= old('npm'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('npm') ;?>
            </div>
            </td>
        </tr><br>
    <table><br>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
    </form>
</body>
</html>