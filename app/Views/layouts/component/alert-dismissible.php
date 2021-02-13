<?php if ($flashdata=session()->getFlashData('success')) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<?= $flashdata; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif; ?>

<?php if ($flashdata=session()->getFlashData('info')) : ?>
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		<?= $flashdata; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif; ?>

<?php if ($flashdata=session()->getFlashData('warning')) : ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<?= $flashdata; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif; ?>

<?php if ($flashdata=session()->getFlashData('error')) : ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<?= $flashdata; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif; ?>