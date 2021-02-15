<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Tambah About
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Tambah About
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/about') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/about') ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="title">Judul</label>
                <input placeholder="example : About Me" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input placeholder="example : I'am a student of suchin school academy" required="" type="" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Nama Saya</label>
                <input placeholder="Nama" required="" type="" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input placeholder="email" required="" type="" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Pekerjaan</label>
                <input placeholder="example : programmer" required="" type="" name="role" id="role" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">No Hp</label>
                <input placeholder="example : student" required="" type="" name="phone" id="phone" class="form-control">
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