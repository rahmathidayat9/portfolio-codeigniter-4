<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Edit User
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Edit User
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('users') ?>" class="btn btn-success btn-sm">Kembali</a>
    </div>
    <div class="card-body">
        <form method="POST" action="<?= base_url('admin/users/'.$user->id) ?>">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label for="name">Name</label>
                <input value="<?= $user->name ?>" required="" type="" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input value="<?= $user->username ?>" required="" type="" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $user->email ?>" required="" type="" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password Baru (Opsional)</label>
                <input value="<?= $user->password ?>" required="" type="hidden" name="old_password" id="" class="form-control">
                <input type="password" name="password" id="password" class="form-control">
                <small class="text-secondary">Kosongkan kolom ini jika tidak ingin mengubah password</small>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->