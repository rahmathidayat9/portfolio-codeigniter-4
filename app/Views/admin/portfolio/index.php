<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Manage Portfolio
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Manage Portfolio
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/portfolio/new') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($portfolio as $pf) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <img src="<?= base_url('uploads/portfolio/'.$pf->image) ?>" width="50" height="50">
                        </td>
                        <td><?= $pf->title ?></td>
                        <td><?= $pf->description ?></td>
                        <td>
                            <div class="row ml-2">
                                <a href="<?= base_url('admin/portfolio/'.$pf->id.'/edit') ?>" id="<?= $pf->id ?>" class="btn btn-primary btn-sm btn-edit">Edit</a>
                                <form method="POST" action="<?= base_url('admin/portfolio/'.$pf->id) ?>">
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