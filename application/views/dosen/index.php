<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Daftar Dosen</h3>
    <table border="1" style="color : red" class='table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($dosen as $dsn){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$dsn->nama?></td>
                    <td><?=$dsn->gender?></td>
                    <td><?=$dsn->pendidikan?></td>
                    <td>
                <a href="<?php echo "detail/$dsn->id"?>">Detail</a>
                </td>
                </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>