<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Edit About
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Edit About
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
        <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/about/'.$about->id) ?>">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="title">Judul</label>
                <input value="<?= $about->title ?>" placeholder="example : About Me" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input value="<?= $about->description ?>" placeholder="example : I'am a student of suchin school academy" required="" type="" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Nama Saya</label>
                <input value="<?= $about->name ?>" placeholder="Nama" required="" type="" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $about->email ?>" placeholder="email" required="" type="" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Pekerjaan</label>
                <input value="<?= $about->role ?>" placeholder="example : programmer" required="" type="" name="role" id="role" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">No Hp</label>
                <input value="<?= $about->phone ?>" placeholder="example : student" required="" type="" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->