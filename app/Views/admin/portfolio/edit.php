<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Edit Portfolio
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Edit Portfolio
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
        <form method="POST" action="<?= base_url('admin/portfolio/'.$portfolio->id) ?>">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="title">Judul</label>
                <input value="<?= $portfolio->title ?>" placeholder="example : WEB APLIKASI BLA BLA BLA" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input value="<?= $portfolio->description ?>" placeholder="example : ini adalah web .." required="" type="" name="description" id="description" class="form-control">
            </div>
            <div class="form-group">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <img width="250" height="" src="<?= base_url('uploads/portfolio/'.$portfolio->image) ?>">
                    </div>
                </div>
            </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->