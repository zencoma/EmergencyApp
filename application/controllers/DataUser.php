<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUser extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_datauser');
		$this->load->helper('url');
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
		$data['judul'] 			='Data User';
		$data['sub_judul']		='WILAYAH';
		$data['content'] 		='allert/datauser/datauser';
		$data['data_user']	= $this->M_datauser->tampil_user()->result();
		$this->load->view('template/dashboard', $data);
	}

//	public function advanced(){
//		$data['side'] 			='template/side';
//		$data['judul'] 			='Nota > Peti Kemas';
//		$data['sub_judul']		='WILAYAH';
//		$data['content'] 		='barang/adv_search';
//		$this->load->view('template/dashboard', $data);
//	}

	function tambah(){
		$this->load->view('datauser');
	}

	function tambah_aksi(){
		$user_name = $this->input->post('user_name');
		$user_kelamin = $this->input->post('user_kelamin');
		$user_tglahir = $this->input->post('user_tglahir');
		$user_identitas = $this->input->post('user_identitas');
		$user_alamat = $this->input->post('user_alamat');
		$user_telp = $this->input->post('user_telp');
		$user_lokasi = $this->input->post('user_lokasi');
		
	
		$data = array(
			'user_name' => $user_name,
			'user_kelamin' => $user_kelamin,
			'user_tglahir' => $user_tglahir,
			'user_identitas' => $user_identitas,
			'user_alamat' => $user_alamat,
			'user_telp' => $user_telp,
			'pasien_lokasi' => $pasien_lokasi

		);

		$this->M_datauser->input_data($data,'data_user');
		redirect('DataUser/dashboard');

	}




}