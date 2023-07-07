<!DOCTYPE html>
<html>
<head>
    <title>Cari Presensi Pegawai</title>
</head>
<body>
    <a href="<?=base_url()?>">NIP</a>
    <a href="<?=base_url('divisi')?>">Divisi</a>
    <a href="<?=base_url('presensi')?>">Presensi</a>
    <h1>Cari Presensi Pegawai</h1>
    <form method="post" action="<?= base_url('presensi') ?>">
        <input type="date" name="tanggal">
        <button type="submit">Cari</button>
    </form>
    <?php if ($presensi): ?>
        <h2>Data Presensi Pegawai <span><?=$tanggal?></span></h2>
        <table>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($presensi as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->NIP ?></td>
                    <td><?= $row->Nama ?></td>
                    <td><?= $row->Jam_Masuk ?></td>
                    <td><?= $row->Jam_Pulang ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
