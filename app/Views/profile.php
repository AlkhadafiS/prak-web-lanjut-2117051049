<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title>Document</title>
</head>
<body>
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
</body>
</html>