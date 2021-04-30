<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ahp_pro', 'ahp');
        is_logged_in();
    }
    //data pada dashboard
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
        $data['banyak_user'] = $this->db->get('user_data')->num_rows();
        $data['jurusan_siswa'] = $this->db->get('jurusan')->num_rows();
        date_default_timezone_set('asia/jakarta');
        $data['tgl'] = date("Y-m-d");
        if ($this->session->userdata('role') == 2) {
            $nim_user =  $this->session->userdata('nim');
            $querySubMenu = "SELECT `user_data`.`nama`,`voucher`.*
        FROM `user_data` JOIN `voucher` 
        ON `user_data`.`nim` = `voucher`.`nim`
        WHERE  `voucher`.`nim` = $nim_user";
            $data['user_voucher'] = $this->db->query($querySubMenu)->num_rows();
        } else {
            $querySubMenu = "SELECT `user_data`.`nama`,`voucher`.*
            FROM `user_data` JOIN `voucher` 
            ON `user_data`.`nim` = `voucher`.`nim`";
            $data['user_voucher'] = $this->db->query($querySubMenu)->num_rows();
        }
        $this->load->view('tamplate/kepala', $data);
        $this->load->view('tamplate/navbar', $data);
        $this->load->view('tamplate/sidebar', $data);
        $this->load->view('tamplate/wrapper', $data);
        $this->load->view('conten/dasboar', $data);
        $this->load->view('tamplate/kaki', $data);
    }
}
