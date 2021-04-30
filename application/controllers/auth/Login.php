<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserData', 'user');
    }



    //registrasi siswa
    public function regis()
    {
        $data['title'] = 'user register';
        $data['jurusan'] = $this->db->get('jurusan')->result_array();


        $user_login = $this->db->get_where('user_login', ['email' => $this->input->post('email')])->result_array();
        $user_login2 = $this->db->get_where('user_login', ['nim' => $this->input->post('nim')])->row_array();

        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('pass', 'pass', 'required');
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/regis', $data);
        } else {
            if ($user_login == null) {
                if ($user_login2 == null) {
                    $data = [
                        'email' => $this->input->post('email'),
                        'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
                        'nim' => $this->input->post('nim'),
                        'role' => 2
                    ];
                    $user_data = [
                        'nim' => $this->input->post('nim'),
                        'nama' => $this->input->post('nama'),
                        'kelas' => $this->input->post('kelas'),
                        'jurusan' => $this->input->post('jurusan'),
                        'image' => 'user.png'
                    ];

                    $this->db->insert('user_login', $data);
                    $this->db->insert('user_data', $user_data);
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">
                    data sudah di simpan !
                        </div>');
                    redirect('auth/login/');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">
                data sudah terdaftar!
                    </div>');
                    redirect('auth/login/regis');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning">
                email sudah terdaftar!
                    </div>');
                redirect('auth/login/regis');
            }
        }
    }

    public function loqout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nim');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        anda berhasil keluar ....!!
         </div>');
        redirect('welcome');
    }
}
