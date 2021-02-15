<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Edit Skill
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Edit Skill
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/skills') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form method="POST" action="<?= base_url('admin/skills/'.$skill->id) ?>">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="name">Nama Skill</label>
                <input value="<?= $skill->name ?>" placeholder="example : PHP" required="" type="" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->