<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title"><?= $title; ?></h4><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <form class="form-horizontal group-border-dashed" method="post" action="/pegawai/simpan" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nik</label>
                <div class="col-sm-6">
                    <input data-parsley-type="number" type="text" name="nik" class="form-control" required placeholder="Nik" value="<?= old('nik'); ?>" />
                    <?= $valid->getError('nik'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control" value="<?= old('nama'); ?>" required placeholder="Nama Pegawai" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Jenis Kelamin</label>
                <div class="col-sm-6">
                    <select name="jenis_kelamin" class="selectpicker" data-style="btn-success btn-custom">
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Tanggal Lahir</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <input type="text" value="<?= old('tanggal_lahir'); ?>" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                    </div><!-- input-group -->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">No Hp</label>
                <div class="col-sm-6">
                    <input data-parsley-type="number" name="nohp" type="text" class="form-control" value="<?= old('nohp'); ?>" required placeholder="Diawali dengan 62, Contoh: 621365687774" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">E-Mail</label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" value="<?= old('email'); ?>" required parsley-type="email" placeholder="Masukkan Email yang Valid" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-6">
                    <textarea name="alamat" value="<?= old('alamat'); ?>" required class="form-control"><?= old('alamat'); ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Foto</label>
                <div class="col-sm-2">
                    <img src="/img/user.png" class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-4">
                    <input type="file" class="filestyle" id="foto" name="foto" data-buttonname="btn-white" onchange="previewImg()">
                    <?= $valid->getError('foto'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                    <a href="/pegawai" class="btn btn-default m-l-5">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>