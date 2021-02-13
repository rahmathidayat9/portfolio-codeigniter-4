<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Ubah Password
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Ubah Password
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-6">
        
        <?php $validation = \Config\Services::validation() ?>
        <?php if ($validation->getErrors()): ?>
            <div class="alert alert-danger">
                <div class="mt-3">
                    <?= $validation->listErrors() ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header text-light bg-dark">Ubah Password</div>
            <div class="card-body">
            <form method="POST" action="<?= base_url('admin/change-password') ?>">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="old_password">Password Sekarang</label>
                    <input type="hidden" value="<?= user()->password ?>" name="old_password_hidden">
                    <input name="old_password" type="" value="" class="form-control" id="old_password">
                </div>
                
                <div class="form-group">
                    <label for="new_password">Password Baru</label>
                    <input name="new_password" type="" value="" class="form-control" id="new_password">
                </div>
                
                <div class="form-group">
                    <label for="confirm_new_password">Konfirmasi Password Baru</label>
                    <input name="confirm_new_password" type="" value="" class="form-control" id="confirm_new_password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
                </div>                
            </form>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>

<!-- Content Row -->
<?= $this->endSection() ?>
<!-- CONTENT -->