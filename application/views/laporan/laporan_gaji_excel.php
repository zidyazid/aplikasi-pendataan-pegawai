<html>

<head>
    <title>Laporan Jabatan</title>
</head>

<body>
<?php
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Laporan Data Gaji Pegawai.xls"');
    ?>
    <div align="center">
        <h2>Laporan Gaji Pegawai</h2>
        <table border="2" width=”300?>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tunjangan</th>
                <th>Jumlah Lembur</th>
                <th>Total</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($allDataGaji as $l) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $l['nama']; ?></td>
                    <td><?= $l['tunjangan']; ?></td>
                    <td><?= $l['jumlah_lembur']; ?></td>
                    <td><?= $l['total']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>