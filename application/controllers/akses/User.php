<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ahp_pro', 'ahp');
        $this->load->model('Aksi', 'aksi');
        is_logged_in();
    }

    //data profil untuk user
    public function index()
    {
        if ($this->session->userdata('role') == 2) {

            $data['title'] = 'User Profile';
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();


            $this->load->view('tamplate/kepala', $data);
            $this->load->view('tamplate/navbar', $data);
            $this->load->view('tamplate/sidebar', $data);
            $this->load->view('tamplate/wrapper', $data);
            $this->load->view('conten/profile', $data);
            $this->load->view('tamplate/kaki', $data);
        } else {
            redirect('akses/dashboard');
        }
    }

    public function data_user()
    {
        if ($this->session->userdata('role') == 2) {

            $data['title'] = 'User Data';
            $data['title'] = 'Edit Data Mahasiswa';
            $data['jurusan'] = $this->db->get('jurusan')->result_array();
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();


            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('kelas', 'kelas', 'required');
            $this->form_validation->set_rules('jurusan', 'jurusan', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('tamplate/kepala', $data);
                $this->load->view('tamplate/navbar', $data);
                $this->load->view('tamplate/sidebar', $data);
                $this->load->view('tamplate/wrapper', $data);
                $this->load->view('conten/user_data', $data);
                $this->load->view('tamplate/kaki', $data);
            } else {

                $this->aksi->edit();
                $this->session->set_flashdata('message', '<div class="alert alert-warning">
            data sudah di simpan !
            </div>');
                redirect('akses/user/data_user');
            }
        } else {
            redirect('akses/dashboard');
        }
    }

    public function data_siswa()
    {
        if ($this->session->userdata('role') == 1) {


            $data['title'] = 'Data Siswa';
            $data['jurusan'] = $this->db->get('jurusan')->result_array();

            $querySubMenu = "SELECT `user_login`.`email`,`user_data`.*
            FROM `user_login` JOIN `user_data` 
            ON `user_login`.`nim` = `user_data`.`nim` 
            ";

            $data['user_list'] = $this->db->query($querySubMenu)->result_array();
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();


            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('nim', 'nim', 'required');
            $this->form_validation->set_rules('jurusan', 'jurusan', 'required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('tamplate/kepala', $data);
                $this->load->view('tamplate/navbar', $data);
                $this->load->view('tamplate/sidebar', $data);
                $this->load->view('tamplate/wrapper', $data);
                $this->load->view('conten/data_siswa', $data);
                $this->load->view('tamplate/kaki', $data);
            } else {
                $user_login = $this->db->get_where('user_login', ['email' => $this->input->post('email')])->result_array();
                $user_login2 = $this->db->get_where('user_login', ['nim' => $this->input->post('nim')])->row_array();
                if ($user_login == null) {
                    if ($user_login2 == null) {

                        $datalogin = [
                            'email' => $this->input->post('email'),
                            'pass' => password_hash(123456, PASSWORD_DEFAULT),
                            'nim' => $this->input->post('nim'),
                            'role' => 2,
                        ];
                        $dataUser = [
                            'nim' => $this->input->post('nim'),
                            'nama' => $this->input->post('name'),
                            'jurusan' => $this->input->post('jurusan'),
                            'kelas' => $this->input->post('kelas'),
                            'image' => 'user.jpg',
                        ];


                        $this->db->insert('user_login', $datalogin);
                        $this->db->insert('user_data', $dataUser);
                        $this->session->set_flashdata('message', '<div class="alert alert-warning">
                                     data sudah di simpan !
                                     </div>');
                        redirect('akses/user/data_siswa');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">
                            data nim sudah terdaftar !
                        </div>');
                        redirect('akses/user/data_siswa');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    data email sudah terdaftar !
                        </div>');
                    redirect('akses/user/data_siswa');
                }
            }
        } else {
            redirect('akses/dashboard');
        }
    }
    public function user_nilai()
    {
        if ($this->session->userdata('role') == 1) {


            $data['title'] = 'Data Siswa';
            $data['jurusan'] = $this->db->get('jurusan')->result_array();

            $querySubMenu = "SELECT `user_data`.`nama`,`user_alternatif`.*
            FROM `user_data` JOIN `user_alternatif` 
            ON `user_data`.`nim` = `user_alternatif`.`nim`";
            $data['user_nilai'] = $this->db->query($querySubMenu)->result_array();
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
            $data['list_user'] = $this->db->get('user_data')->result_array();


            $this->form_validation->set_rules('attitude', 'attitude', 'required');
            $this->form_validation->set_rules('pa', 'pa', 'required');
            $this->form_validation->set_rules('4k', '4k', 'required');
            $this->form_validation->set_rules('pna', 'pna', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('tamplate/kepala', $data);
                $this->load->view('tamplate/navbar', $data);
                $this->load->view('tamplate/sidebar', $data);
                $this->load->view('tamplate/wrapper', $data);
                $this->load->view('conten/user_nilai', $data);
                $this->load->view('tamplate/kaki', $data);
            } else {

                $user_login2 = $this->db->get_where('user_alternatif', ['nim' => $this->input->post('nim')])->row_array();

                if ($user_login2 == null) {

                    $datalogin = [
                        'nim' => $this->input->post('nim'),
                        'attitude' => $this->input->post('attitude'),
                        'pa' => $this->input->post('pa'),
                        '4k' => $this->input->post('4k'),
                        'pna' => $this->input->post('pna'),
                    ];

                    $this->db->insert('user_alternatif', $datalogin);
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">
                                     data sudah di simpan !
                                     </div>');
                    redirect('akses/user/user_nilai');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                            data nim sudah terdaftar !
                        </div>');
                    redirect('akses/user/user_nilai');
                }
            }
        } else {
            redirect('akses/dashboard');
        }
    }

    public function voucher()
    {
        if ($this->session->userdata('role') == 1) {


            $data['title'] = 'Voucher Siswa';
            $data['jurusan'] = $this->db->get('jurusan')->result_array();

            $querySubMenu = "SELECT `user_data`.`nama`,`voucher`.*
            FROM `user_data` JOIN `voucher` 
            ON `user_data`.`nim` = `voucher`.`nim`";
            $data['user_voucher'] = $this->db->query($querySubMenu)->result_array();
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
            $data['list_user'] = $this->db->get('user_data')->result_array();
            date_default_timezone_set('asia/jakarta');


            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('info', 'info', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('tamplate/kepala', $data);
                $this->load->view('tamplate/navbar', $data);
                $this->load->view('tamplate/sidebar', $data);
                $this->load->view('tamplate/wrapper', $data);
                $this->load->view('conten/user_voucher', $data);
                $this->load->view('tamplate/kaki', $data);
            } else {

                $nim_siswa = $this->input->post('nim_siswa');
                $tampil = $this->input->post('nim_all');
                if ($tampil != null) {

                    $data['insert'] = $this->ahp->data_mfep_top($tampil);
                    foreach ($data['insert'] as $sm) {

                        $datauser[] = [
                            'nim' => $sm['nim'],
                            'kode' =>  date("Y-m-d") . '=>' . date("H:i:s") . '=>' . $sm['nim'],
                            'nama' =>  $this->input->post('nama'),
                            'info' =>  $this->input->post('info'),
                        ];
                    }

                    $this->db->insert_batch('voucher', $datauser);
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">
                                     data sudah di simpan !
                                     </div>');
                    redirect('akses/user/voucher');
                } elseif ($nim_siswa != null) {
                    $datauser = [
                        'nim' => $nim_siswa,
                        'kode' =>  date("Y-m-d") . '=>' . date("H:i:s") . '=>' . $nim_siswa,
                        'nama' =>  $this->input->post('nama'),
                        'info' =>  $this->input->post('info'),
                    ];
                    $this->db->insert('voucher', $datauser);
                    $this->session->set_flashdata('message', '<div class="alert alert-warning">
                                     data sudah di simpan !
                                     </div>');
                    redirect('akses/user/voucher');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                            data pilih user berdasarkan top siswa/persiswa !
                        </div>');
                    redirect('akses/user/voucher');
                }
            }
        } else {
            redirect('akses/dashboard');
        }
    }

    public function user_voucher()
    {
        if ($this->session->userdata('role') == 2) {


            $data['title'] = 'Voucher Siswa';
            $data['jurusan'] = $this->db->get('jurusan')->result_array();
            $nim_user =  $this->session->userdata('nim');
            $querySubMenu = "SELECT `user_data`.`nama`,`voucher`.`id`,`voucher`.`nim`,`voucher`.`kode`, `voucher`.`info`
            FROM `user_data` JOIN `voucher` 
            ON `user_data`.`nim` = `voucher`.`nim`
            WHERE  `voucher`.`nim` = $nim_user";
            $data['user_voucher'] = $this->db->query($querySubMenu)->result_array();

            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();
            $data['list_user'] = $this->db->get('user_data')->result_array();
            date_default_timezone_set('asia/jakarta');

            $this->load->view('tamplate/kepala', $data);
            $this->load->view('tamplate/navbar', $data);
            $this->load->view('tamplate/sidebar', $data);
            $this->load->view('tamplate/wrapper', $data);
            $this->load->view('conten/user_voucher_tampil', $data);
            $this->load->view('tamplate/kaki', $data);
        } else {
            redirect('akses/dashboard');
        }
    }

    public function user_print()
    {
        if ($this->session->userdata('role') == 1) {


            $data['title'] = 'Data Siswa';
            $data['jurusan'] = $this->db->get('jurusan')->result_array();

            $querySubMenu = "SELECT `user_login`.`email`,`user_data`.*
            FROM `user_login` JOIN `user_data` 
            ON `user_login`.`nim` = `user_data`.`nim` 
            ";

            $data['user_list'] = $this->db->query($querySubMenu)->result_array();
            $data['user'] = $this->db->get_where('user_data', ['nim' => $this->session->userdata('nim')])->row_array();


            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('nim', 'nim', 'required');
            $this->form_validation->set_rules('jurusan', 'jurusan', 'required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('tamplate/kepala', $data);
                $this->load->view('tamplate/navbar', $data);
                $this->load->view('tamplate/sidebar', $data);
                $this->load->view('tamplate/wrapper', $data);
                $this->load->view('conten/user_print', $data);
                $this->load->view('tamplate/kaki', $data);
            } else {
                $user_login = $this->db->get_where('user_login', ['email' => $this->input->post('email')])->result_array();
                $user_login2 = $this->db->get_where('user_login', ['nim' => $this->input->post('nim')])->row_array();
                if ($user_login == null) {
                    if ($user_login2 == null) {

                        $datalogin = [
                            'email' => $this->input->post('email'),
                            'pass' => password_hash(123456, PASSWORD_DEFAULT),
                            'nim' => $this->input->post('nim'),
                            'role' => 2,
                        ];
                        $dataUser = [
                            'nim' => $this->input->post('nim'),
                            'nama' => $this->input->post('name'),
                            'jurusan' => $this->input->post('jurusan'),
                            'kelas' => $this->input->post('kelas'),
                            'image' => 'user.jpg',
                        ];


                        $this->db->insert('user_login', $datalogin);
                        $this->db->insert('user_data', $dataUser);
                        $this->session->set_flashdata('message', '<div class="alert alert-warning">
                                     data sudah di simpan !
                                     </div>');
                        redirect('akses/user/data_siswa');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">
                            data nim sudah terdaftar !
                        </div>');
                        redirect('akses/user/data_siswa');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
                    data email sudah terdaftar !
                        </div>');
                    redirect('akses/user/data_siswa');
                }
            }
        } else {
            redirect('akses/dashboard');
        }
    }

    public function user_print_voucher($id)
    {

        $data['voucher'] = $this->aksi->print($id);

        $this->load->view('conten/print_voucher', $data);
    }
}
