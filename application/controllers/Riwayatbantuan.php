<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiwayatBantuan extends CI_Controller {
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
		$data['judul'] 			='RIWAYAT BANTUAN';
		$data['sub_judul']		='WILAYAH';
		$data['content'] 		='Allert/riwayatbantuan/riwayatbantuan';
		$this->load->view('template/dashboard', $data);
	}

	// public function peti_advsrc(){
	// 	$data['side'] 			='template/side';
	// 	$data['judul'] 			='Nota > Peti Kemas';
	// 	$data['sub_judul']		='WILAYAH';
	// 	$data['content'] 		='nota/petikemas/peti_advsrc';
	// 	$this->load->view('template/dashboard', $data);
	// }



}