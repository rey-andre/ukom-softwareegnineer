<!DOCTYPE html>
<html>
<head>
    <title>Cari Pegawai</title>
</head>
<body>
    <a href="<?=base_url()?>">NIP</a>
    <a href="<?=base_url('divisi')?>">Divisi</a>
    <a href="<?=base_url('presensi')?>">Presensi</a>
    <h1>Cari Pegawai</h1>
    <form method="post" action="<?= base_url('divisi') ?>">
        <select name="divisi">
            <?php foreach ($divisi as $row): ?>
                <option value="<?= $row->Kode_divisi ?>"><?= $row->Nama_divisi ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Cari</button>
    </form>
    <?php if ($pegawai): ?>
        <h2>Data Pegawai <span><?=$kode_divisi?></span></h2>
        <table>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($pegawai as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->NIP ?></td>
                    <td><?= $row->Nama ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
