<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dashboard extends CI_Controller{


	function __construct(){
		# code...
		parent:: __construct();
	if ($this->session->userdata('status')!='login') {
		redirect('login');
		}
	}

	function index(){
		$data['content'] = 'content/home';
		$this->load->view('pages/template',$data);
	}
	function about(){
		$data['content']='content/about';
		$this->load->view('pages/template',$data);
	}
}

?>