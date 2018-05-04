<?php
	class Login_model extends CI_Model{

		public function proseslogin($user,$pass){
			$this->db->where('user_username',$user);
			$this->db->where('user_password',$pass);
			return $this->db->get('user')->row();
		}
	}
?>