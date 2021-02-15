<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Tambah Footer
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Tambah Footer
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/footers') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form method="POST" action="<?= base_url('admin/footers') ?>">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="title">Judul</label>
                <input placeholder="example : GE IN TOUCH" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input placeholder="example : lorem ipsum" required="" type="" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input required="" type="" name="address" id="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input required="" type="" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input required="" type="" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="copyright">Copyright</label>
                <input required="" type="" name="copyright" id="copyright" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->