<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_datapasien');
		$this->load->helper('url');
		// if ($this->session->userdata('username')==""){
		// 	$this->session->set_flashdata("info", "<div class='alert alert-info alert-dismissible' role='alert'>
		// 		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
		// 		<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
		// 		</div>");
		// 	redirect('login');
		// } 
	}

	function index() {
		$data['side'] 			='template/side';
		$data['judul'] 			='Data Pasien';
		$data['sub_judul']		='WILAYAH';
		$data['content'] 		='datapasien/datapasien';
		$data['data_pasien']	= $this->M_datapasien->tampil_data()->result();
		$this->load->view('template/dashboard', $data);
	}


	function tambah(){
		$this->load->view('datapasien');
	}

	function tambah_aksi(){
		$pasien_rm = $this->input->post('pasien_rm');
		$pasien_name = $this->input->post('pasien_name');
		$pasien_identitas = $this->input->post('pasien_identitas');
		$pasien_kelamin = $this->input->post('pasien_kelamin');
		$pasien_tmlahir = $this->input->post('pasien_tmlahir');
		$pasien_tglahir= $this->input->post('pasien_tglahir');
		$pasien_umur = $this->input->post('pasien_umur');
		$pasien_goldarah = $this->input->post('pasien_goldarah');
		$pasien_telp = $this->input->post('pasien_telp');
		$pasien_almt = $this->input->post('pasien_almt');
		$pasien_stkawin = $this->input->post('pasien_stkawin');
		$pasien_tbadan = $this->input->post('pasien_tbadan');
		$pasien_bbadan = $this->input->post('pasien_bbadan');
		$pasien_operasi = $this->input->post('pasien_operasi');
		$pasien_rwalergi = $this->input->post('pasien_rwalergi');
		$pasien_rwkeluarga = $this->input->post('pasien_rwkeluarga');
		$pasien_jenis = $this->input->post('pasien_jenis');
	
		$data = array(
			'pasien_rm' => $pasien_rm,
			'pasien_name' => $pasien_name,
			'pasien_identitas' => $pasien_identitas,
			'pasien_kelamin' => $pasien_kelamin,
			'pasien_tmlahir' => $pasien_tmlahir,
			'pasien_tglahir' => $pasien_tglahir,
			'pasien_umur' => $pasien_umur,
			'pasien_goldarah' => $pasien_goldarah,
			'pasien_telp' => $pasien_telp,
			'pasien_almt' => $pasien_almt,
			'pasien_stkawin' => $pasien_stkawin,
			'pasien_tbadan' => $pasien_tbadan,
			'pasien_bbadan' => $pasien_bbadan,
			'pasien_operasi' => $pasien_operasi,
			'pasien_rwalergi' => $pasien_rwalergi,
			'pasien_rwkeluarga' => $pasien_rwkeluarga,
			'pasien_jenis' => $pasien_jenis

		);

		$this->M_datapasien->input_data($data,'data_pasien');
		redirect('datapasien/dashboard');

	}

}