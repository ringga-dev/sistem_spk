<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserData', 'user');
	}

	public function index()
	{
		$data['title'] = 'user login';

		if ($this->session->userdata('email')) {
			redirect('akses/dashboard');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('pass', 'Pass', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}

	public function about()
	{
		$data['title'] = 'home';
		$this->load->view('ui', $data);
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$user = $this->db->get_where('user_login', ['email' => $email])->row_array();

		if ($user) {
			if (password_verify($pass, $user['pass'])) {
				$data = [
					'email' => $user['email'],
					'role' => $user['role'],
					'nim' => $user['nim']
				];
				$this->session->set_userdata($data);
				redirect('akses/dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
            password salah !
            </div>');
				redirect('welcome');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
                    akun tidak ada!
                    </div>');
			redirect('welcome');
		}
	}

	
}
