<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterEntity extends CI_Controller {
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')==""){
			// $this->session->set_flashdata("info","<span>maaf harus login dulu</span>");
			$this->session->set_flashdata("info", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
			//redirect(base_url('login')); //sama-sama
			redirect('login');
		} 
	}


	public function index() {
		$data['side'] 			='template/side';
		$data['judul'] 			='Master Entity';
		$data['sub_judul']		='WILAYAH';
		$data['content'] 		='administrasi/masterentity/master_entity';
		$this->load->view('template/dashboard', $data);
	}

//	public function ruparupa_advsrc() {
//		$data['side'] 			='template/side';
//		$data['judul'] 			='Rupa Rupa';
//		$data['sub_judul']		='WILAYAH';
//		$data['content'] 		='nota/ruparupa/ruparupa_advsrc';
//		$this->load->view('template/dashboard', $data);
//	}

}