<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box widget-inline">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget-inline-box text-center">
                        <h3><i class="text-primary md  md-content-copy"></i> <b><?= $hitung1; ?></b></h3>
                        <h4 class="text-muted">Laporan Terkirim</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="widget-inline-box text-center">
                        <h3><i class="text-custom md md-account-child"></i> <b><?= $hitung; ?></b></h3>
                        <h4 class="text-muted">Data Pegawai</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="widget-inline-box text-center">
                        <h3><i class="text-pink md md-people-outline"></i> <b>
                                <?php foreach ($hitung3 as $a) {
                                    echo $a->jumlah;
                                } ?>
                            </b></h3>
                        <h4 class="text-muted">Pegawai Pensiun</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="widget-inline-box text-center b-0">
                        <h3><i class="text-purple md  md-account-box"></i> <b><?= $hitung2; ?></b></h3>
                        <h4 class="text-muted">Pengguna</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>