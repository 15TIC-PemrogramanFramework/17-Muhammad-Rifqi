<?php 
/**
* 
*/
class laundry extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('laundry_model');
	}


function index()
{
$data['data_laundry']=$this->laundry_model->ambil_data();
$this->load->view('laundry/laundry',$data);
}
public function tambah()
		{
			$data=array(
				'action' 	=> site_url('laundry/tambah_aksi'),
				'id_transaksi'		=> set_value('id_transaksi'),
				'id_customer'	=> set_value('id_customer'),
				'id_paket'	=> set_value('id_paket'),
				'tanggal_transaksi'	=> set_value('tanggal_transaksi'),
				'tanggal_selesai'	=> set_value('tanggal_selesai'),
				'biaya'	=> set_value('biaya'),
				'berat'		=> set_value('berat'),
				'keterangan'		=> set_value('keterangan'),
				'button'	=>'Tambah'
				);

			$this->load->view('laundry/laundry_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_transaksi'		=> $this->input->post('id_transaksi'),
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'		=> $this->input->post('id_paket'),
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'tanggal_selesai'		=> $this->input->post('tanggal_selesai'),
			'biaya'		=> $this->input->post('biaya'),
			'berat'		=> $this->input->post('berat'),
			'keterangan'	=> $this->input->post('keterangan')
			);
			$this->laundry_model->tambah_data($data);
			redirect(site_url('laundry'));
		}
			public function delete($id)
		{
			$this->laundry_model->hapus_data($id);
			redirect(site_url('laundry'));
		}
		function edit($id)
		{
			$mhs=$this->laundry_model->ambil_data_id($id);
			$data=array(
			'id_transaksi'		=> set_value('id_transaksi',$mhs->id_transaksi),
			'id_customer'		=> set_value('id_customer',$mhs->id_customer),
			'id_paket'	=> set_value('id_paket',$mhs->id_paket),
			'tanggal_transaksi'	=> set_value('tanggal_transaksi',$mhs->tanggal_transaksi),
			'tanggal_selesai'	=> set_value('tanggal_selesai',$mhs->tanggal_selesai),
			'biaya'	=> set_value('biaya',$mhs->biaya),
			'berat'	=> set_value('berat',$mhs->berat),
			'keterangan'	=> set_value('keterangan',$mhs->keterangan),
			'action' 	=> site_url('laundry/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('laundry/laundry_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'		=> $this->input->post('id_paket'),
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'tanggal_selesai'		=> $this->input->post('tanggal_selesai'),
			'biaya'		=> $this->input->post('biaya'),
			'berat'		=> $this->input->post('berat'),
			'keterangan'	=> $this->input->post('keterangan')
			);
			$id=$this->input->post('id_transaksi');
			$this->laundry_model->edit_data($id,$data);
			redirect(site_url('laundry'));
		}


}




 ?>