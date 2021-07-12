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

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama Pegawai</th>
                        <th>Tanggal Lahir</th>
                        <th>Waktu</th>
                        <th style="text-align: center;">Aksi</th>
                        <th style="text-align: center;">Keterangan</th>
                    </tr>
                </thead>


                <tbody>
                    <?php $no = 1;
                    foreach ($sukses as $b) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b->nik; ?></td>
                            <td><?= $b->nama; ?></td>
                            <td><?= format_tanggal($b->tanggal_lahir); ?></td>
                            <td><?= $b->created_at; ?></td>
                            <td style="text-align: center;"><a href="/laporan/detail/<?= $b->nik; ?>" class="btn btn-warning">Detail</a></td>
                            <td style="text-align: center; font-size:13pt"><label style="padding:10px 40px;" class='label label-success'>Berhasil Terkirim</label></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
<?= $this->endSection(); ?>