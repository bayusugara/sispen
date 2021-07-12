<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title"><?= $title; ?></h4><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box table-responsive">
            <?php if (session('level') == "superadmin") { ?>
                <h5><a class="btn btn-primary" href="/pegawai/create">Tambah</a></h5>
            <?php } ?>

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama Pegawai</th>
                        <th>No WhatsApp</th>
                        <th>Alamat</th>
                        <!-- <th>Foto</th> -->
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    <?php $no = 1;
                    foreach ($pegawai as $b) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['nik']; ?></td>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['nohp']; ?></td>
                            <td><?= $b['alamat']; ?></td>
                            <td style="text-align: center;"><a href="/pegawai/detail/<?= $b['nik']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
<?= $this->endSection(); ?>