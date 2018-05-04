<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User extends CI_Controller{


	function __construct() {
		# code...
		parent:: __construct();	
		$this->load->model('Estore_model');
		if ($this->session->userdata('status')!='login') {
		redirect('login');
		}
	}

	function index(){
		$data['query']=$this->Estore_model->user();
		$data['content']   = 'content/user/user';
		$this->load->view('pages/template',$data);
	}
	
	public function add(){
		$data['content']   = 'content/user/user_add';
		$this->load->view('pages/template',$data);
	}
	public function save(){
		$kode=$this->input->post('kodeus');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$napeg=$this->input->post('napeg');
		$level=$this->input->post('level');
		
			$data  = array(
					'user_kode' => $kode ,
					'user_pegawai_id' => $napeg,
					'user_username'    => $username,
					'user_password'        => $password,
					'user_level'=>$level
				);	

			$this->db->insert('user',$data);
			redirect("user");

	}
	public function edit($id){
		$data['user'] = $this->db->get_where('user', ['user_id' => $id])->row();
		$data['content']   = 'content/user/user_edit';
		$this->load->view('pages/template',$data);
	}
	public function update(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
	
			$data  = array(
					'user_username'    => $username,
					'user_password'        => $password,
					'user_level'=>$level
				);	
			$this->db->where('user_id',$id);
			$this->db->update('user',$data);
			redirect("user");
		


	}

	public function delete($id){
		$this->db->delete('user',['user_id'=>$id]);
		redirect("user");
	}
	public function profil(){
		$id=$this->input->post('id');
		$user=$this->input->post('user');
		$pass=$this->input->post('pass');
		$data=array(
			'user_username'=>$user,
			'user_password'=>$pass
		);
		$this->db->where('user_id',$id);
		if ($this->db->update('user',$data)) {
			redirect('profil');
		}
	}

}

?>