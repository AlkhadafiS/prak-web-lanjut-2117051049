<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 20%;
            border-collapse: collapse;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            text-align: center;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #ccc;
        }

        .profile-image {
            display: block;
            margin: 0 auto;
            border-radius: 50%;
            border: 4px solid #ccc;
        }
    </style>

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