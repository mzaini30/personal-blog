<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->masuk();
	}

	public function masuk($pesan = ''){
		return view('login.login', array(
			'pesan' => $pesan
		));
	}

	public function masuk_do(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('login', array(
			'username' => $username,
			'password' => $password
		))->num_rows();
		if ($cek > 0){
			$this->session->set_userdata(array(
				'status' => 'login'
			));
			redirect(base_url());
		} else {
			redirect(base_url() . 'index.php/login/masuk/error');
		}
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url() . 'index.php/login');
	}
}
