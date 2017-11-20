<?php 
/**
* 
*/
class barangdirektur extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("DirekturLogin"));
		}
		$this->load->model('barang_model');
	}


function index()
{
$data['data_barang']=$this->barang_model->ambil_data();
$this->load->view('viewdirektur/barang/barang',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('barangdirektur/tambah_aksi'),
				'id_barang'		=> set_value('id_barang'),
				'id_divisi'	=> set_value('id_divisi'),
				'nama_barang'		=> set_value('nama_barang'),
				'stok'		=> set_value('stok'),
				'button'	=>'Tambah'
				);

			$this->load->view('viewdirektur/barang/barang_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_barang'		=> $this->input->post('id_barang'),
			'id_divisi'		=> $this->input->post('id_divisi'),
			'nama_barang'	=> $this->input->post('nama_barang'),
			'stok'	=> $this->input->post('stok')
			);
			$this->barang_model->tambah_data($data);
			redirect(site_url('barangdirektur'));
		}
			public function delete($id)
		{
			$this->barang_model->hapus_data($id);
			redirect(site_url('barangdirektur'));
		}
		function edit($id)
		{
			$mhs=$this->barang_model->ambil_data_id($id);
			$data=array(
			'id_barang'		=> set_value('id_barang',$mhs->id_barang),
			'id_divisi'		=> set_value('id_divisi',$mhs->id_divisi),
			'nama_barang'	=> set_value('nama_barang',$mhs->nama_barang),
			'stok'	=> set_value('stok',$mhs->stok),
			'action' 	=> site_url('barangdirektur/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('viewdirektur/barang/barang_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'id_barang'		=> $this->input->post('id_barang'),
			'id_divisi'		=> $this->input->post('id_divisi'),
			'nama_barang'	=> $this->input->post('nama_barang'),
			'stok'	=> $this->input->post('stok')
			);
			$id=$this->input->post('id_barang');
			$this->barang_model->edit_data($id,$data);
			redirect(site_url('barangdirektur'));
		}


}




 ?>