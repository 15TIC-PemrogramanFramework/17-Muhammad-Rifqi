<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id paket</label>
		<input type="text" class="form-control" name="id_paket" required placeholder="Masukkan id paket" value="<?php echo $id_paket;?>" />
	</div>

	<div class="form-group">
		<label>nama paket</label>
		<input type="text" class="form-control" name="nama_paket" required placeholder="Masukkan nama paket" value="<?php echo $nama_paket;?>" />
	</div>

	<div class="form-group">
		<label>keterangan paket</label>
		<input type="text" class="form-control" name="keterangan_paket" required placeholder="Masukkan keterangan paket" value="<?php echo $keterangan_paket;?>" />
	</div>

	<div class="form-group">
		<label>harga paket</label>
		<input type="text" class="form-control" name="harga_paket" required placeholder="Masukkan harga paket" value="<?php echo $harga_paket;?>" />
	</div>

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('paket') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>