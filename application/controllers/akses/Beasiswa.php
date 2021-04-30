<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ahp_pro', 'ahp');
        is_logged_in();
    }
    //menampilkan data user penerima beasiswa
    public function index()
    {
        // mengambil data
        $data['title'] = 'Penerima Beasiswa';
        $tampil = $this->input->post('tampil');
        $data['table_awal'] = $this->ahp->data_awal();
        $data['proses_ahp'] = $this->ahp->get_data();
        $data['mfep'] = $this->ahp->get_mfep($data['proses_ahp']);
        $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
        if ($tampil == null) {
            $data['rekap'] = $this->ahp->data_mfep();
        } else {
            $data['rekap'] = $this->ahp->data_mfep_top($tampil);
        }

        //menampilkan 
        $this->load->view('tamplate/kepala', $data);
        $this->load->view('tamplate/navbar', $data);
        $this->load->view('tamplate/sidebar', $data);
        $this->load->view('tamplate/wrapper', $data);
        $this->load->view('conten/beasiswa', $data);
        $this->load->view('tamplate/kaki', $data);
    }
}
