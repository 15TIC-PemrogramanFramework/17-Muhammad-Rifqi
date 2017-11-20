<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id divisi</label>
		<input type="text" class="form-control" name="id_divisi" required placeholder="Masukkan id divisi"  value="<?php echo $id_divisi;?>" />
	</div>

	<div class="form-group">
		<label>nama divisi</label>
		<input type="text" class="form-control" name="nama_divisi" required placeholder="Masukkan nama divisi" value="<?php echo $nama_divisi;?>" />
	</div>



	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('divisidirektur') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>