<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Profil extends CI_Controller{


	function __construct() {
		# code...
		parent:: __construct();
	}

	function index(){
		$data['content']   = 'content/profil';
		$this->load->view('pages/template',$data);
	}
}

?>