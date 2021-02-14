<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Edit Header
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Edit Header
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/headers') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/headers/'.$header->id) ?>">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="title">Title</label>
                <input value="<?= $header->title ?>" placeholder="example : MyPortfolioWebsite" required="" type="" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="navbar_title">Navbar Title</label>
                <input value="<?= $header->navbar_title ?>" placeholder="example : myPortfolioWebsite" required="" type="" name="navbar_title" id="navbar_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="up_text">Up Text</label>
                <input value="<?= $header->up_text ?>" placeholder="I'M Pandora" required="" type="" name="up_text" id="up_text" class="form-control">
            </div>
            <div class="form-group">
                <label for="down_text">Down Text</label>
                <input value="<?= $header->down_text ?>" placeholder="I'm a student,gamer,web developer" required="" type="" name="down_text" id="down_text" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->