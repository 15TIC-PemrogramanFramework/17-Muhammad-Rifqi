<?php 
/**
* 
*/
class divisiadmin extends CI_controller
{
	
	function __construct()
	{
	parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("AdminLogin"));
		}
		$this->load->model('divisi_model');
	}


function index()
{
$data['data_divisi']=$this->divisi_model->ambil_data();
$this->load->view('viewadmin/divisi/divisi',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('divisiadmin/tambah_aksi'),
				'id_divisi'	=> set_value('id_divisi'),
				'nama_divisi'	=> set_value('nama_divisi'),
				'button'	=>'Tambah'
				);

			$this->load->view('viewadmin/divisi/divisi_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_divisi'		=> $this->input->post('id_divisi'),
			'nama_divisi'		=> $this->input->post('nama_divisi')
			);
			$this->divisi_model->tambah_data($data);
			redirect(site_url('divisiadmin'));
		}
			public function delete($id)
		{
			$this->divisi_model->hapus_data($id);
			redirect(site_url('divisiadmin'));
		}
		function edit($id)
		{
			$mhs=$this->divisi_model->ambil_data_id($id);
			$data=array(
			'action' 	=> site_url('divisiadmin/edit_aksi'),	
			'id_divisi'			=> set_value('id_divisi',$mhs->id_divisi),
			'nama_divisi'		=> set_value('nama_divisi',$mhs->nama_divisi),
			'button'	=>'Edit'
			);
			$this->load->view('viewadmin/divisi/divisi_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'id_divisi'			=> $this->input->post('id_divisi'),
			'nama_divisi'		=> $this->input->post('nama_divisi'),
			);
			$id=$this->input->post('id_divisi');
			$this->divisi_model->edit_data($id,$data);
			redirect(site_url('divisiadmin'));
		}

}




 ?>