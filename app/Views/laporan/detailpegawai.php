<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<div class="profile-detail card-box">
    <div>
        <img src="/img/<?= $detail['foto']; ?>" alt="profile-image">

        <hr>

        <div class="text-left" style="text-align: center;">
            <p class="text-muted font-13"><strong>Nik :</strong> <span class="m-l-15"><?= $detail['nik']; ?></span></p>

            <p class="text-muted font-13"><strong>Nama Pegawai :</strong><span class="m-l-15"><?= $detail['nama']; ?></span></p>

            <p class="text-muted font-13"><strong>Jenis Kelamin :</strong> <span class="m-l-15"><?= ($detail['jenis_kelamin'] == "L") ? "Laki-Laki" : "Perempuan"; ?></span></p>

            <p class="text-muted font-13"><strong>Tanggal Lahir :</strong> <span class="m-l-15"><?= format_tanggal($detail['tanggal_lahir']); ?></span></p>

            <p class="text-muted font-13"><strong>No Hp :</strong><span class="m-l-15"><?= $detail['nohp']; ?></span></p>

            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?= $detail['email']; ?></span></p>

            <p class="text-muted font-13"><strong>Alamat :</strong> <span class="m-l-15"><?= $detail['alamat']; ?></span></p>

        </div>
    </div>

    <a href="/laporan" class="btn btn-default">Kembali</a>
</div>
<?= $this->endSection(); ?>