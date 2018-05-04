<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller{


	function __construct() {
		# code...
		parent:: __construct();
		$this->load->model('Login_model');
		$this->load->model('Estore_model');
			}

	public function index(){
		$data['result']=null;
		$this->load->view('content/login',$data);
		if ($this->session->userdata('status')=='login') {
		redirect('Not_found');
		}


	}
	public function cek_login(){
		if (isset($_POST['submit'])) {
			$user=$this->input->post('user',TRUE);
			$pass=$this->input->post('pass',TRUE);
			$cek=$this->Estore_model->login($user,$pass);
			$hasil=count($cek);
			if ($hasil>0) {
				$data=array(
					'nama' =>$cek->pegawai_nama ,
					'name' =>$cek->user_username,
					'level'=>$cek->user_level,
					'foto'=>$cek->pegawai_foto,
					'user'=>$cek->user_kode,
					'status'=>'login' );
				$this->session->set_userdata($data);
				redirect();
			}else{
				// $this->session->set_flashdata('error',$tampil);
				redirect('login');

				
			}

		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>