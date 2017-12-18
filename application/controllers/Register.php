<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//session_start();
class Register extends CI_Controller {
	
	function __construct(){
		// parent::__construct();
		// if ($this->session->userdata('username')==""){
		// 	//redirect(base_url('login')); //sama-sama
		// 	redirect('login');
		// } 

	}

	public function index() {
		// $data['side'] 			='template/side';
		// $data['judul'] 			='Dashboard';
		// $data['sub_judul']		='dashboard';
		// $data['content'] 		='template/content';
		$this->load->view('template/regis');
	}


}