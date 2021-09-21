<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Laporan Data Jabatan.xls"');
    ?>
    <table>
        <tr>
            <th>kode jabatan</th>
            <th>nama jabatan</th>
            <th>tunjangan</th>
        </tr>
        <?php foreach ($getAllData as $d) : ?>
            <tr>
                <td><?= $d['kode_jabatan'] ?></td>
                <td><?= $d['nama_jabatan'] ?></td>
                <td><?= $d['tunjangan'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>