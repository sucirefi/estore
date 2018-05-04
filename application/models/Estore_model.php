<?php
	class Estore_model extends CI_Model{

		public function barang(){
			$query = $this->db->get("barang");	
			return $query;			
		}
		public function pegawai(){
			$query = $this->db->get("pegawai");	
			return $query;			
		}
		public function transaksi(){
			$query = $this->db->get("transaksi");	
			return $query;			
		}
		public function user(){
			$this->db->select('user.*,pegawai.pegawai_nama,pegawai.pegawai_foto');
			$this->db->from('user');
			$this->db->join('pegawai','pegawai.pegawai_id=user.user_pegawai_id','left');
			$query = $this->db->get();	
			return $query;			
		}
		
		public function login($user,$pass){
			$this->db->select('user.*,pegawai.pegawai_nama,pegawai.pegawai_foto');
			$this->db->from('user');
			$this->db->join('pegawai','pegawai.pegawai_id=user.user_pegawai_id','left');
			$this->db->where('user_username',$user);
			$this->db->where('user_password',$pass);
			$query = $this->db->get();	
			return $query->row();			
		}
	}
?>