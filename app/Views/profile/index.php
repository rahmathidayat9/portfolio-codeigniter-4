<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Profile
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Profile
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>

<?php $validation = \Config\Services::validation() ?>
<?php if ($validation->getErrors()): ?>
    <div class="alert alert-danger">
        <div class="mt-3">
            <?= $validation->listErrors() ?>
        </div>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-6">
        <div class="card mb-3">
            <div class="card-header">My Profile</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="" value="<?= user()->name ?>" class="form-control" id="" disabled>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="" value="<?= user()->username ?>" class="form-control" id="" disabled>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="" value="<?= user()->email ?>" class="form-control" id="" disabled>
                </div>
                <hr>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header text-light bg-dark">Edit Profile</div>
            <div class="card-body">
            <form method="POST" action="<?= base_url('admin/profile') ?>">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required="" name="name" type="" value="<?= user()->name ?>" class="form-control" id="name">
                </div>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input required="" name="username" type="" value="<?= user()->username ?>" class="form-control" id="username">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input required="" name="email" type="" value="<?= user()->email ?>" class="form-control" id="email">
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