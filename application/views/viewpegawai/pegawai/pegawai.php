
<?php $this->load->view('templates/header3'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom:10px;">
			<?php echo anchor(site_url('pegawai/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id Pegawai</th>
			<th>id Divisi</th>
			<th>Nama Pegawai</th>
				<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_pegawai as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_pegawai; ?></td>
			<td><?php echo $row->id_divisi; ?> </td>
			<td><?php echo $row->nama_pegawai; ?> </td>
				<td>
				<?php echo anchor(site_url('pegawai/edit/'.$row->id_pegawai),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('pegawai/delete/'.$row->id_pegawai),
					'<i class="fa fa-trash" ></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
<?php } ?>

	</tbody>
</table>
<?php $this->load->view('templates/footer');  ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>

