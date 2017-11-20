<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DirekturLogin extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('mDirektur_login');
 
	}
 
	function index(){
		$this->load->view('vDirektur_login');
	}
 
	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->mDirektur_login->cek_login("direktur",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("barangdirektur"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */