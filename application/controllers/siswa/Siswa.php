<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserData', 'user');
    }

    public function index()
    {
        $data['title'] = 'home';
        $this->load->view('tamplate/kepala', $data);
        $this->load->view('tamplate/navbar', $data);
        $this->load->view('tamplate/sidebar', $data);
        $this->load->view('tamplate/wrapper', $data);
        $this->load->view('conten/user_print', $data);
        $this->load->view('tamplate/kaki', $data);
    }
}
