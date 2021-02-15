<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Manage Skills
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Manage Skills
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/skills/new') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($skills as $skill) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $skill->name ?></td>
                        <td>
                            <div class="row ml-2">
                                <a href="<?= base_url('admin/skills/'.$skill->id.'/edit') ?>" class="btn btn-primary btn-sm">Edit</a>
                                <form method="POST" action="<?= base_url('admin/skills/'.$skill->id) ?>">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button onclick="return confirm('Yakin hapus ?')" type="submit" class="btn btn-danger btn-sm ml-1">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<!-- CONTENT -->