
<?php $this->load->view('templates/header2'); ?>
<div class="row">
	<div class="col-md-12 text-right">
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
				<?php echo anchor(site_url('pegawaidirektur/delete/'.$row->id_pegawai),
					'<i class="fa fa-eraser" ></i>',
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

