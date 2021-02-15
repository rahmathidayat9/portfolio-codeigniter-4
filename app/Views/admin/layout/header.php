<?= $this->extend('layout/backend/header') ?>
<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Manage Header Layout
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Manage Header Layout
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<div class="row">
	<?php foreach ($headers as $header): ?>
	<div class="col-md-6 mb-2">
		<div class="card">
			<div class="card-header">
				<span class="badge badge-success"><?= $header['title'] ?></span>

				<span class="badge badge-primary ml-2"><?= $header['navbar_title'] ?></span>
				<div class="float-right">
					<?php
					if($header['is_active']==1){
						$checked = "checked";
					}else{
						$checked = "";
					}
					?>
					<div class="custom-control custom-switch">
					  <input type="checkbox" <?= $checked ?> value="<?= $header['is_active'] ?>" class="custom-control-input activate" data-id="<?= $header['id'] ?>" id="<?= $header['id'] ?>">
					  <label class="custom-control-label switch" for="<?= $header['id'] ?>"></label>
					</div>
				</div>
			</div>
			<div class="card-body">
				<img src="<?= base_url('uploads/headers/'.$header['image']) ?>" width="100%" style="height: 270px; object-fit: cover; object-position: center;">

				<div class="jumbotron mt-3">
				  <h3 class=""><?= $header['up_text'] ?></h3>
				  <p class="lead"><?= $header['down_text'] ?></p>
				</div>
			</div>
			<div class="card-footer">
				
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
	<div class="pagination justify-content-center">
		<?= $pager->links('headers','bootstrap_pagination') ?>
	</div>


<?= $this->endSection() ?>
<!-- CONTENT -->

<?= $this->section('js') ?>
<script type="text/javascript">

	if ($(".activate").val()==1) {
		$(this).attr('checked', 'checked');
	}

	$(".activate").on("click",function(){
		var status = $(this).val()
		var id = $(this).data("id")

			$.ajax({
				url: '<?= base_url('admin/layout/setheader') ?>',
				type: 'POST',
				data: {
					status : status,
					id : id
				},
				success:function(){
					document.location.href='<?= base_url("admin/layout/header") ?>'
				},
			});
	
	});
</script>
<?= $this->endSection() ?>