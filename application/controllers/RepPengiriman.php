<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RepPengiriman extends CI_Controller {
	function __construct(){
		parent::__construct();
		// if ($this->session->userdata('username')==""){
		// 	$this->session->set_flashdata("info", "<div class='alert alert-info alert-dismissible' role='alert'>
		// 		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
		// 		<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
		// 		</div>");
		// 	redirect('login');
		// } 
	}

	public function index() {
		$data['side'] 			='template/side';
		$data['judul'] 			='Reporting > Laporan Pengiriman Nota';
		$data['sub_judul']		='WILAYAH';
		$data['content'] 		='laporan/nota';
		$this->load->view('template/dashboard', $data);
	}

	// public function advanced(){
	// 	$data['side'] 			='template/side';
	// 	$data['judul'] 			='Payment > Payment Cash';
	// 	$data['sub_judul']		='WILAYAH';
	// 	$data['content'] 		='payment/adv_search';
	// 	$this->load->view('template/dashboard', $data);
	// }



}