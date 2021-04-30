<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sampel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ahp_pro', 'ahp');
        is_logged_in();
    }
    public function index()
    {
        if ($this->session->userdata('role') == 1) {
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
            $data['title'] = 'implemen data';
            $data['number'] = [1, 2, 3, 4, 5, 6, 7, 8, 9];

            $this->load->view('tamplate/kepala', $data);
            $this->load->view('tamplate/navbar', $data);
            $this->load->view('tamplate/sidebar', $data);
            $this->load->view('tamplate/wrapper', $data);
            $this->load->view('conten/sampel', $data);
            $this->load->view('tamplate/kaki', $data);
        } else {
            redirect('akses/dashboard');
        }
    }

    public function pro_ahp()
    {
        if ($this->session->userdata('role') == 1) {

            $data['title'] = 'implemen data';
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
            $this->db->truncate('s_data');

            //baris satu secara horizontal
            $c1_c1 = $this->input->post('c1_c1');
            $this->db->insert('s_data', ['nama' => 'c1_c1', 'nilai' => $c1_c1]);
            $c1_c2 = $this->input->post('c1_c2');
            $this->db->insert('s_data', ['nama' => 'c1_c2', 'nilai' => $c1_c2]);
            $c1_c3 = $this->input->post('c1_c3');
            $this->db->insert('s_data', ['nama' => 'c1_c3', 'nilai' => $c1_c3]);
            $c1_c4 = $this->input->post('c1_c4');
            $this->db->insert('s_data', ['nama' => 'c1_c4', 'nilai' => $c1_c4]);
            //baris dua secara horizontal
            $c2_c1 = $this->input->post('c2_c1');
            $this->db->insert('s_data', ['nama' => 'c2_c1', 'nilai' => $c2_c1]);
            $c2_c2 = $this->input->post('c2_c2');
            $this->db->insert('s_data', ['nama' => 'c2_c2', 'nilai' => $c2_c2]);
            $c2_c3 = $this->input->post('c2_c3');
            $this->db->insert('s_data', ['nama' => 'c2_c3', 'nilai' => $c2_c3]);
            $c2_c4 = $this->input->post('c2_c4');
            $this->db->insert('s_data', ['nama' => 'c2_c4', 'nilai' => $c2_c4]);
            //baris tiga secara horizontal
            $c3_c1 = $this->input->post('c3_c1');
            $this->db->insert('s_data', ['nama' => 'c3_c1', 'nilai' => $c3_c1]);
            $c3_c2 = $this->input->post('c3_c2');
            $this->db->insert('s_data', ['nama' => 'c3_c2', 'nilai' => $c3_c2]);
            $c3_c3 = $this->input->post('c3_c3');
            $this->db->insert('s_data', ['nama' => 'c3_c3', 'nilai' => $c3_c3]);
            $c3_c4 = $this->input->post('c3_c4');
            $this->db->insert('s_data', ['nama' => 'c3_c4', 'nilai' => $c3_c4]);
            //baris empat secara horizontal
            $c4_c1 = $this->input->post('c4_c1');
            $this->db->insert('s_data', ['nama' => 'c4_c1', 'nilai' => $c4_c1]);
            $c4_c2 = $this->input->post('c4_c2');
            $this->db->insert('s_data', ['nama' => 'c4_c2', 'nilai' => $c4_c2]);
            $c4_c3 = $this->input->post('c4_c3');
            $this->db->insert('s_data', ['nama' => 'c4_c3', 'nilai' => $c4_c3]);
            $c4_c4 = $this->input->post('c4_c4');
            $this->db->insert('s_data', ['nama' => 'c4_c4', 'nilai' => $c4_c4]);

            redirect(base_url('akses/sampel/ahp_tampil'));
        } else {
            redirect('akses/dashboard');
        }
    }

    public function test()
    {
        $data = $this->ahp->get_data();
        var_dump($data);
    }

    //menampilkan data ahp
    public function ahp_tampil()
    {
        $data['title'] = 'implemen data';
        $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
        $data['table_awal'] = $this->ahp->data_awal();
        $data['proses_ahp'] = $this->ahp->get_data();
        // var_dump($data['proses_ahp']);
        // die;
        $this->load->view('tamplate/kepala', $data);
        $this->load->view('tamplate/navbar', $data);
        $this->load->view('tamplate/sidebar', $data);
        $this->load->view('tamplate/wrapper', $data);
        $this->load->view('conten/pro_ahp', $data);
        $this->load->view('tamplate/kaki', $data);
    }
    //proses mfep
    public function mfep_proses()
    {
        $data['title'] = 'implemen ';
        $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
        $data['table_awal'] = $this->ahp->data_awal();
        $data['proses_ahp'] = $this->ahp->get_data();
        $data['mfep'] = $this->ahp->get_mfep($data['proses_ahp']);
        $data['rekap'] = $this->ahp->data_mfep(); //megurutkan data 


        $this->load->view('tamplate/kepala', $data);
        $this->load->view('tamplate/navbar', $data);
        $this->load->view('tamplate/sidebar', $data);
        $this->load->view('tamplate/wrapper', $data);
        $this->load->view('conten/pro_ahp', $data);
        $this->load->view('tamplate/kaki', $data);
    }
}
