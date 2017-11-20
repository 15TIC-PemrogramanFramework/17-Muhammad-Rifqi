<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>ID Barang</label>
		<input type="text" class="form-control" name="id_barang" required placeholder="Masukkan ID Barang" value="<?php echo $id_barang;?>" />
	</div>

	<div class="form-group">
		<label>ID Divisi</label>
		<select name="id_divisi">
		<?php
		$this->db->select('id_divisi');
		$id_divisi = $this->db->get('divisi');

		foreach($id_divisi->result() as $row){
		echo "<option value='".$row->id_divisi."'>".$row->id_divisi."</option>";
}
?></select>
	</div>

	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" class="form-control" name="nama_barang" required placeholder="Masukkan Nama Barang" value="<?php echo $nama_barang;?>" />
	</div>

	<div class="form-group">
		<label>Stok</label>
		<select name="stok" >

		<option value="ada">ada</option>
		<option value="kosong">kosong</option>
	</select>
	</div>

	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('barangadmin') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>