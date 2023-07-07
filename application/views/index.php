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
    <form method="post" action="<?= base_url('') ?>">
        <input type="text" name="nip" placeholder="Masukkan NIP">
        <button type="submit">Cari</button>
    </form>
    <?php if ($pegawai): ?>
        <h2>Hasil Pencarian Data Pegawai</h2>
        <a href="<?= base_url('export_pdf/'.$pegawai->NIP) ?>" target="_blank"><button type="button">Export PDF</button></a>
        <a href="<?= base_url('export_excel/'.$pegawai->NIP) ?>" target="_blank"><button type="button">Export Excel</button></a>
        <table>
            <tr>
                <td>Nama</td>
                <td><?= $pegawai->Nama ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $pegawai->Alamat ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $pegawai->Tanggal_lahir ?></td>
            </tr>
            <tr>
                <td>Divisi</td>
                <td><?= $pegawai->Nama_divisi ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
