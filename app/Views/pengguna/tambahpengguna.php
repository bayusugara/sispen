<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">

        <h4 class="page-title"><?= $title; ?></h4><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <form class="form-horizontal group-border-dashed" method="post" action="/pengguna/simpan" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label">Nama Pengguna</label>
                <div class="col-sm-6">
                    <input type="text" name="nama" class="form-control" required placeholder="Nama Pengguna" value="<?= old('nama'); ?>" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" name="username" class="form-control" value="<?= old('username'); ?>" required placeholder="Username" />
                    <?= $valid->getError('username'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" value="<?= old('password'); ?>" required placeholder="Password" />
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Level</label>
                <div class="col-sm-6">
                    <select name="level" class="selectpicker" data-style="btn-success btn-custom">
                        <option value="superadmin" <?= (old('level') == "superadmin") ? "selected" : ""; ?>>Super Admin</option>
                        <option value="admin" <?= (old('level') == "admin") ? "selected" : ""; ?>>Admin</option>
                    </select>
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
                    <a href="/pengguna" class="btn btn-default m-l-5">
                        Kembali
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>