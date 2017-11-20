<?php 
/**
* 
*/
class pegawai extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("AdminLogin"));
		}
		$this->load->model('pegawai_model');
	}


function index()
{
$data['data_pegawai']=$this->pegawai_model->ambil_data();
$this->load->view('pegawai/pegawai',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('pegawai/tambah_aksi'),
				'id_pegawai'	=> set_value('id_pegawai'),
				'id_divisi'	=> set_value('id_divisi'),
				'nama_pegawai'	=> set_value('nama_pegawai'),
				'password'	=> set_value('password'),
				'button'	=>'Tambah'
				);

			$this->load->view('pegawai/pegawai_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_pegawai'		=> $this->input->post('id_pegawai'),
			'id_divisi'		=> $this->input->post('id_divisi'),
			'nama_pegawai'		=> $this->input->post('nama_pegawai'),
			'password'	=> $this->input->post('password')
			);
			$this->pegawai_model->tambah_data($data);
			redirect(site_url('pegawai'));
		}
			public function delete($id)
		{
			$this->pegawai_model->hapus_data($id);
			redirect(site_url('pegawai'));
		}
		function edit($id)
		{
			$mhs=$this->pegawai_model->ambil_data_id($id);
			$data=array(
			'id_pegawai'		=> set_value('id_pegawai',$mhs->id_pegawai),
			'id_divisi'		=> set_value('id_divisi',$mhs->id_divisi),
			'nama_pegawai'	=> set_value('nama_pegawai',$mhs->nama_pegawai),
			'action' 	=> site_url('pegawai/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('pegawai/pegawai_form_edit',$data);
		}	
		function edit_aksi()
		{
			$data=array(			
			'nama_pegawai'		=> $this->input->post('nama_pegawai'),
			);
			$id=$this->input->post('id_pegawai');
			$this->pegawai_model->edit_data($id,$data);
			redirect(site_url('pegawai'));
		}

}




 ?>