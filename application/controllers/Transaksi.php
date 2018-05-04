<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Transaksi extends CI_Controller{


	function __construct() {
		# code...
		parent:: __construct();
		if ($this->session->userdata('status')!='login') {
		redirect('login');
		}
	}

	function index(){
		$data['content']   = 'content/transaksi/transaksi';
		$this->load->view('pages/template',$data);
	}
	function detail($id){
		$data['transaksi']=$this->db->get_where('transaksi',['transaksi_id'=>$id])->row();
		$data['content']   = 'content/transaksi/detail/transaksi';
		$this->load->view('pages/template',$data);
	}
	function add_detail(){
		$id=$this->input->post('id');
		$brg=$this->input->post('brg');
		$total=$this->input->post('total');
		$status=$this->input->post('status');
		$data=array(
			'transaksi_brg_transaksi_id' =>$id ,
			'transaksi_kodebar' =>$brg ,
			'transaksi_total' => $total,
			'transaksi_status'=>$status );
		if ($this->db->insert('transaksi_brg',$data)) {
			echo'<script>alert("Data Berhasil Disimpan ");</script>';
			redirect('transaksi/detail/'.$id);
		}else {
			echo'<script>alert("Data Gagal Disimpan ");</script>';
		}

	}
	function add(){
		$data['content']   = 'content/transaksi/transaksi_add';
		$this->load->view('pages/template',$data);

	}
	function save(){
		$kodeus=$this->input->post('kodeus');
		$pembeli=$this->input->post('pembeli');
		$entri=$this->input->post('entri');
		$data=array(
			'transaksi_kode_user' =>$kodeus ,
			'transaksi_pembeli' => $pembeli,
			'transaksi_entri'=>$entri );
		if ($this->db->insert('transaksi',$data)) {
			echo'<script>alert("Data Berhasil Disimpan ");</script>';
			redirect('transaksi');
		}else {
			echo'<script>alert("Data Gagal Disimpan ");</script>';
		}
	}
	public function edit($id){
		$data['transaksi'] = $this->db->get_where('transaksi', ['transaksi_id' => $id])->row();
		$data['content']   = 'content/transaksi/transaksi_edit';
		$this->load->view('pages/template',$data);
	}
	public function update(){
		$id=$this->input->post('id');
		$kodeus=$this->input->post('kodeus');
		$pembeli=$this->input->post('pembeli');
		$entri=$this->input->post('entri');
		$data=array(
			'transaksi_kode_user' =>$kodeus ,
			'transaksi_pembeli' => $pembeli,
			'transaksi_entri'=>$entri );
		$this->db->where('transaksi_id',$id);
		if ($this->db->update('transaksi',$data)) {
			echo'<script>alert("Data Berhasil Diubah ");</script>';
			redirect('transaksi');
		}else {
			echo'<script>alert("Data Gagal Diubah ");</script>';
		}
	}

	public function delete($id){
			$this->db->delete('transaksi',['transaksi_id'=>$id]);
			$this->db->delete('transaksi_brg',['transaksi_brg_transaksi_id'=>$id]);
			redirect("transaksi");
	}
	public function detail_delete($iid, $id){ 

			$this->db->delete('transaksi_brg',['transaksi_brg_id'=>$iid]);
			redirect("transaksi/detail/".$id);
	}
	public function getharga(){
		$id=$this->input->post('id');
		$query=$this->db->get_where('barang',['barang_kode'=>$id]);
		$brg_harga = $query->row()->barang_harga;
		echo json_encode(['hrga' => $brg_harga]);
	}
}

?>