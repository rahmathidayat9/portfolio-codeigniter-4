<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Edit Footer
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Edit Footer
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
        <form method="POST" action="<?= base_url('admin/footers/'.$footer->id) ?>">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PATCH">  
            <div class="form-group">
                <label for="title">Judul</label>
                <input value="<?= $footer->title ?>" placeholder="example : GE IN TOUCH" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input value="<?= $footer->description ?>" placeholder="example : lorem ipsum" required="" type="" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input value="<?= $footer->address ?>" required="" type="" name="address" id="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input value="<?= $footer->phone ?>" required="" type="" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $footer->email ?>" required="" type="" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="copyright">Copyright</label>
                <input value="<?= $footer->copyright ?>" required="" type="" name="copyright" id="copyright" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->