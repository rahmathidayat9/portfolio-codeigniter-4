<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Tambah Portfolio
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Tambah Portfolio
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/portfolio') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/portfolio') ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="title">Judul</label>
                <input placeholder="example : WEB APLIKASI BLA BLA BLA" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input placeholder="example : ini adalah web .." required="" type="" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="customFile">Foto</label>
                <div class="custom-file">
                  <input required="" type="file" name="file" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->