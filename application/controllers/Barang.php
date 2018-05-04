<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Barang extends CI_Controller{


	function __construct() {
		# code...
		parent:: __construct();
		$this->load->model('Estore_model');
			if ($this->session->userdata('status')!='login') {
		redirect('login');
		}
	}

	function index(){
		$data['content']   = 'content/barang/barang';
		$this->load->view('pages/template',$data);
	}
	
	public function add(){
		$data['content']   = 'content/barang/barang_add';
		$this->load->view('pages/template',$data);
	}
	public function save(){
		$kodebar=$this->input->post('kodebar');
		$namabar=$this->input->post('namabar');
		$entri=$this->input->post('entri');
		$harga=$this->input->post('harga');
		
		
			$data  = array(
					'barang_kode' => $kodebar ,
					'barang_nama'        => $namabar,
					'barang_entri'    => $entri,
					'barang_harga'        => $harga
				);	

			$this->db->insert('barang',$data);
			redirect("barang");
		
	}
	public function edit($id){
		$data['edit'] = $this->db->get_where('barang', ['barang_id' => $id])->row();
		$data['content']   = 'content/barang/barang_edit';
		$this->load->view('pages/template',$data);
	}
	public function update(){
		$id=$this->input->post('id');
		$kodebar=$this->input->post('kodebar');
		$namabar=$this->input->post('namabar');
		$entri=$this->input->post('entri');
		$harga=$this->input->post('harga');
		
		
			$data  = array(
					'barang_kode' => $kodebar ,
					'barang_nama'        => $namabar,
					'barang_entri'    => $entri,
					'barang_harga'        => $harga
				);	
			$this->db->where('barang_id',$id);
			$this->db->update('barang',$data);
			redirect("barang");

	}

	public function delete($id){
			$this->db->delete('barang',['barang_id'=>$id]);
			redirect("barang");
	}

}

?>