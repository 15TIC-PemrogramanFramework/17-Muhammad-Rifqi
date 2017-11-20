

<?php $this->load->view('templates/header2'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID Barang</th>
			<th>ID Divisi</th>
			<th>Nama Barang</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_barang as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_barang; ?> </td>
			<td><?php echo $row->id_divisi; ?></td>
			<td><?php echo $row->nama_barang; ?> </td>			
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

