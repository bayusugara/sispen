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
            <h5><a class="btn btn-primary" href="/pengguna/create">Tambah</a></h5>

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Foto</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>


                <tbody>
                    <?php $no = 1;
                    foreach ($pengguna as $b) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['nama']; ?></td>
                            <td><?= $b['username']; ?></td>
                            <td><?= ($b['level'] == "admin") ? 'Admin' : 'Super Admin'; ?></td>
                            <td><img width="100" src="img/<?= $b['foto']; ?>" alt=""></td>
                            <td style="text-align: center;">
                                <a href="/pengguna/edit/<?= $b['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="/pengguna/hapus/<?= $b['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin ?');">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
<?= $this->endSection(); ?>