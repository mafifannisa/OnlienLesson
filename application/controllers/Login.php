<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model(array('m_user'));
			if ($this->session->userdata('username')) {
					redirect('dashboard');
			}
	}
	public function index()
	{

			  $this->load->view('login');

	}
	function proses() {
					$usr = $this->input->post('username');
					$psw = $this->input->post('password');
					$u = $usr;
					$p = $psw;
					$cek = $this->m_user->cek($u, $p);
					if ($cek->num_rows() > 0) {
							//login berhasil, buat session
							foreach ($cek->result() as $qad) {
									$sess_data['id'] = $qad->id;
									$sess_data['nama'] = $qad->nama;
									$sess_data['username'] = $qad->username;
									$sess_data['gambar'] = $qad->gambar;
									$this->session->set_userdata($sess_data);
							}
							redirect('dashboard');
					} else {
							$this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
							redirect('login');
					}

	}

	function logout() {
			$this->session->sess_destroy();
			redirect('login');
	}
}
