<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller{
	public function __construct(){
		parent::__construct();
      	$this->load->helper('form');
		$this->load->model('M_login');
		$this->load->library('captcha');
		//$this->load->library('recaptcha');
	}
		
	public function index(){
		//$this->load->view('template/login');
	}

	public function create_captcha(){
		$vals = array(
        'img_path'      => './captcha/',
        //'img_url'       => 'http://example.com/captcha/'
        'img_url'       => base_url('captcha'),
        'img_width'		=> '150',
        'img_height' 	=> '130',
        'expiration'	=> 720
		);

		$cap = create_captcha($vals);
		$image = $cap['image'];
		$this->session->user_data('captchaword', $cap['word']);

		return $image;
	}

}