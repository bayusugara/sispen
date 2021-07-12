<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title"><?= $title; ?></h4><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <form class="form-horizontal group-border-dashed" method="post" enctype="multipart/form-data" action="/pegawai/update/<?= $edit['nik']; ?>">
            <?= csrf_field(); ?>
            <input type="hidden" name="fotoLama" value="<?= $edit['foto']; ?>">
            <div class="form-group">
                <label class="col-sm-3 control-label">Nik</label>
                <div class="col-sm-6">
                    <input data-parsley-type="number" readonly type="text" name="nik" class="form-control" required placeholder="Nik" value="<?= (old('nik')) ? old('nik') : $edit['nik']; ?>" />
                    <?= $valid->getError('nik'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Pegawai</label>
                <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control" value="<?= (old('nama')) ? old('nama') : $edit['nama']; ?>" required placeholder="Nama Pegawai" />
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
                        <input type="text" value="<?= (old('tanggal_lahir')) ? date('m/d/Y', strtotime(old('tanggal_lahir'))) : date('m/d/Y', strtotime($edit['tanggal_lahir'])); ?>" name="tanggal_lahir" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                        <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                    </div><!-- input-group -->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">No Hp</label>
                <div class="col-sm-6">
                    <input data-parsley-type="number" name="nohp" type="text" class="form-control" value="<?= (old('nohp')) ? old('nohp') : $edit['nohp']; ?>" required placeholder="Diawali dengan 62, Contoh: 621365687774" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">E-Mail</label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" value="<?= (old('email')) ? old('email') : $edit['email']; ?>" required parsley-type="email" placeholder="Masukkan Email yang Valid" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-6">
                    <textarea name="alamat" required class="form-control"><?= (old('alamat')) ? old('alamat') : $edit['alamat']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Foto</label>
                <div class="col-sm-2">
                    <img src="/img/<?= $edit['foto']; ?>" class="img-thumbnail img-preview">
                </div>
                <div class="col-sm-4">
                    <input type="file" class="filestyle" id="foto" name="foto" data-buttonname="btn-white" onchange="previewImg()">
                    <?= $valid->getError('foto'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 m-t-15">
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                    <a href="/pegawai/detail/<?= $edit['nik']; ?>" class="btn btn-default m-l-5">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>