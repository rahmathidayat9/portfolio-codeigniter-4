<?= $this->extend('layout/backend/header') ?>
<?= $this->extend('layouts/backend/app') ?>

<!-- PAGE TITLE -->
<?= $this->section('title') ?>
	Manage About Layout
<?= $this->endSection() ?>
<!-- PAGE TITLE -->

<!-- CONTENT TITLE -->
<?= $this->section('contentTitle') ?>
	Manage About Layout
<?= $this->endSection() ?>
<!-- CONTENT TITLE -->

<!-- CONTENT -->
<?= $this->section('content') ?>
<div class="row">
	<?php foreach($abouts as $about) : ?>
	<div class="col-md-6 mb-2">
		<div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">
		    <div class="col-md-4">
		      <img src="<?= base_url('uploads/about/'.$about['image']) ?>" width="100%" style="height: 270px; object-fit: cover; object-position: center;" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">

		      	<?php
					if($about['is_active']==1){
						$checked = "checked";
					}else{
						$checked = "";
					}
				?>
				<div class="custom-control custom-switch float-right">
				  <input type="checkbox" <?= $checked ?> value="<?= $about['is_active'] ?>" class="custom-control-input activate" data-id="<?= $about['id'] ?>" id="<?= $about['id'] ?>">
				  <label class="custom-control-label switch" for="<?= $about['id'] ?>"></label>
				</div>
		        
		        <h5 class="card-title"><?= $about['title'] ?></h5>
		        <p class="card-text"><?= $about['name'] ?> , <?= $about['description'] ?></p>
		        <p class="card-text"><small class="text-muted"><?= $about['email'] ?></small></p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<div class="pagination justify-content-center">
	<?= $pager->links('about','bootstrap_pagination') ?>
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
				url: '<?= base_url('admin/layout/setabout') ?>',
				type: 'POST',
				data: {
					status : status,
					id : id
				},
				success:function(){
					document.location.href='<?= base_url("admin/layout/about") ?>'
				},
			});
	
	});
</script>
<?= $this->endSection() ?>