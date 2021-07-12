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
                        <th>Umur</th>
                        <th style="text-align: center;">Aksi</th>
                        <th style="text-align: center;">Keterangan</th>
                        <!-- <th>Foto</th> -->
                        <?php if (session('level') == "superadmin") { ?>
                            <th style="text-align: center;">WhatsApp</th>
                        <?php } ?>
                    </tr>
                </thead>


                <tbody>
                    <?php $no = 1;
                    foreach ($pensiun as $b) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b->nik; ?></td>
                            <td><?= $b->nama; ?></td>
                            <td><?= format_tanggal($b->tanggal_lahir); ?></td>
                            <td><?= $b->umur; ?></td>
                            <td style="text-align: center;"><a href="/pensiun/detail/<?= $b->nik; ?>" class="btn btn-warning">Detail</a></td>
                            <td style="text-align: center; font-size:13pt"><label style="padding:10px 40px;" class='label label-danger'>Sudah Pensiun</label></td>
                            <?php if (session('level') == "superadmin") { ?>
                                <td style="text-align: center;">
                                    <a href="#custom-modal<?= $b->nohp; ?>" class="btn btn-primary waves-effect waves-light" data-animation="newspaper" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">WhatsApp</a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->
<!-- Modal -->
<?php foreach ($pensiun as $b) { ?>
    <div id="custom-modal<?= $b->nohp; ?>" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Kirim lewat WhatsApp</h4>
        <div class="custom-modal-text">
            <form action="/pensiun/whatsapp" method="post">
                <input type="hidden" name="nik" value="<?= $b->nik; ?>">
                Jika anda ingin mengirim pesan pensiun lewat whatsapp kepada <b><?= $b->nama; ?></b> silahkan klik lanjutkan.
                <hr>
                <input type="button" class="btn btn-danger" onclick="Custombox.close();" value="Kembali">
                <input class="btn btn-success" type="submit" value="Lanjutkan">
            </form>
        </div>
    </div>
<?php } ?>
<?= $this->endSection(); ?>


<!--
<a href="https://web.whatsapp.com/send?phone='.<?= $b->nohp; ?>.'&text=
Assalamaualaikum,...%0a
Kami ingin mengkonfirmasi kepada anda dengan data sebagai berikut, %0a
Nama = *<?= $b->nama; ?>*, %0a
Nik = *<?= $b->nik; ?>*%0a
Jenis Kelamin = *<?= $b->jenis_kelamin ?>*%0a
Email = *<?= $b->email ?>*%0a
No Wa = *<?= $b->nohp ?>*%0a
Tanggal Lahir = *<?= $b->tanggal_lahir ?>*%0a
Alamat = *<?= $b->alamat ?>*%0a


Menyatakan bahwa anda telah pensiun dari Dinas Pendidikan, Terima Kasih :)" target="blank" class="btn btn-success">Kirim WhatsApp</a>
  -->