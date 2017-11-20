
<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom:10px;">
			<?php echo anchor(site_url('divisiadmin/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id divisi </th>
			<th>nama divisi</th>
			
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_divisi as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_divisi; ?></td>
			<td><?php echo $row->nama_divisi; ?> </td>

					<td>
				<?php echo anchor(site_url('divisiadmin/edit/'.$row->id_divisi),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('divisiadmin/delete/'.$row->id_divisi),
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

