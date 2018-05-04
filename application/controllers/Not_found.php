<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Not_found extends CI_Controller{



	public function index(){
		$data['content']='content/nf';
		$this->load->view('pages/template',$data);

	}
}
?>