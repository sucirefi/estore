<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Pegawai extends CI_Controller{


	function __construct() {
		# code...
		parent:: __construct();
			if ($this->session->userdata('status')!='login') {
		redirect('login');
		}
	}

	function index(){
		$data['content']   = 'content/pegawai/pegawai';
		$this->load->view('pages/template',$data);
	}
	
	public function add(){
		$data['content']   = 'content/pegawai/pegawai_add';
		$this->load->view('pages/template',$data);
	}
	public function save(){
		$napeg=$this->input->post('namapeg');
		$telpeg=$this->input->post('telpeg');
		$jk=$this->input->post('jk');
		$alamat=$this->input->post('alamat');
		$tgl=$this->input->post('tgl');
		$tmp=$this->input->post('tmp');
		
		$config = array(
			'upload_path' => './assets/dist/img/pegawai',
			'allowed_types' => 'png|jpg|gif'
		);

		$this->load->library('upload',$config);

		if ($this->upload->do_upload('foto')) {
			$data  = array(
					'pegawai_nama'        => $napeg,
					'pegawai_jk'          => $jk,
					'pegawai_tgl_lahir'   => $tgl,
					'pegawai_tmp_lahir'   => $tmp ,
					'pegawai_alamat'        => $alamat,
					'pegawai_notel'          => $telpeg,
					'pegawai_foto'=>$this->upload->data('file_name')
				);	

			$this->db->insert('pegawai',$data);
			redirect("pegawai");
		}
		else{
			echo "gagal";
		} 

	}
	public function edit($id){
		$data['pegawai'] = $this->db->get_where('pegawai', ['pegawai_id' => $id])->row();
		$data['content']   = 'content/pegawai/pegawai_edit';
		$this->load->view('pages/template',$data);
	}
	public function update(){
		$id=$this->input->post('id');
		$napeg=$this->input->post('namapeg');
		$telpeg=$this->input->post('telpeg');
		$jk=$this->input->post('jk');
		$alamat=$this->input->post('alamat');
		$tgl=$this->input->post('tgl');
		$tmp=$this->input->post('tmp');
		
		$config = array(
			'upload_path' => './assets/dist/img/pegawai',
			'allowed_types' => 'png|jpg|gif'
		);

		$this->load->library('upload',$config);
		if ($_FILES['foto']['name']!=null) {
		if ($this->upload->do_upload('foto')) {
			$data  = array(
					'pegawai_nama'        => $napeg,
					'pegawai_jk'          => $jk,
					'pegawai_tgl_lahir'   => $tgl,
					'pegawai_tmp_lahir'   => $tmp ,
					'pegawai_alamat'        => $alamat,
					'pegawai_notel'          => $telpeg,
					'pegawai_foto'=>$this->upload->data('file_name')
				);	
			$this->db->where('pegawai_id',$id);
			$this->db->update('pegawai',$data);
			redirect("pegawai");
		}
		else{echo "gagal";} 
	  }else{
	  	$data  = array(
					'pegawai_nama'        => $napeg,
					'pegawai_jk'          => $jk,
					'pegawai_tgl_lahir'   => $tgl,
					'pegawai_tmp_lahir'   => $tmp ,
					'pegawai_alamat'        => $alamat,
					'pegawai_notel'          => $telpeg,
					'pegawai_foto'=>$this->input->post('foto_id')
				);	
			$this->db->where('pegawai_id',$id);
			$this->db->update('pegawai',$data);
			redirect("pegawai");
		
	  }
	}

	public function delete($id){
			$this->db->delete('pegawai',['pegawai_id'=>$id]);
			$this->db->delete('user',['user_pegawai_id'=>$id]);
			redirect("pegawai");
	}
	

}

?>