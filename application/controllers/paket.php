<?php 
/**
* 
*/
class paket extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('paket_model');
	}


function index()
{
$data['data_paket']=$this->paket_model->ambil_data();
$this->load->view('paket/paket',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('paket/tambah_aksi'),
				'id_paket'	=> set_value('id_paket'),
				'nama_paket'	=> set_value('nama_paket'),
				'keterangan_paket'	=> set_value('keterangan_paket'),
				'harga_paket'	=> set_value('harga_paket'),
				'button'	=>'Tambah'
				);

			$this->load->view('paket/paket_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_paket'		=> $this->input->post('id_paket'),
			'nama_paket'		=> $this->input->post('nama_paket'),
			'keterangan_paket'		=> $this->input->post('keterangan_paket'),
			'harga_paket'	=> $this->input->post('harga_paket')
			);
			$this->paket_model->tambah_data($data);
			redirect(site_url('paket'));
		}
			public function delete($id)
		{
			$this->paket_model->hapus_data($id);
			redirect(site_url('paket'));
		}
		function edit($id)
		{
			$mhs=$this->paket_model->ambil_data_id($id);
			$data=array(
			'id_paket'		=> set_value('id_paket',$mhs->id_paket),
			'nama_paket'		=> set_value('nama_paket',$mhs->nama_paket),
			'keterangan_paket'	=> set_value('keterangan_paket',$mhs->keterangan_paket),
			'harga_paket'	=> set_value('harga_paket',$mhs->harga_paket),
			'action' 	=> site_url('paket/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('paket/paket_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'nama_paket'		=> $this->input->post('nama_paket'),
			'keterangan_paket'		=> $this->input->post('keterangan_paket'),
			'harga_paket'	=> $this->input->post('harga_paket')
			);
			$id=$this->input->post('id_paket');
			$this->paket_model->edit_data($id,$data);
			redirect(site_url('paket'));
		}

}




 ?>