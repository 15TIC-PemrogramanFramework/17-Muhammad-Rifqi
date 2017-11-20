<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id pegawai</label>
		<input type="text" class="form-control" name="id_pegawai" required placeholder="Masukkan id divisi" value="<?php echo $id_pegawai;?>" />
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
		<label>nama pegawai</label>
		<input type="text" class="form-control" name="nama_pegawai" required placeholder="Masukkan keterangan pegawai" value="<?php echo $nama_pegawai;?>" />
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('pegawaiadmin') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>