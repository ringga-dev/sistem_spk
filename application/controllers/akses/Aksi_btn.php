<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aksi_btn extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ahp_pro', 'ahp');
        is_logged_in();
    }

    public function hapus_user($nim)
    {
        //hapus user
        $this->db->where('nim', $nim);
        $this->db->delete('user_login');

        //hapus user data
        $this->db->where('nim', $nim);
        $this->db->delete('user_data');

        //hapus user di altenatif
        $this->db->where('nim', $nim);
        $this->db->delete('user_alternatif');

        //hapus user rekap
        $this->db->where('nim', $nim);
        $this->db->delete('rekap');


        $this->session->set_flashdata('message', '<div class="alert alert-danger">
        user berhasil di hapus !
            </div>');
        redirect('akses/user/data_siswa');
    }
    public function hapus_nilai($nim)
    {
        //hapus user di altenatif
        $this->db->where('nim', $nim);
        $this->db->delete('user_alternatif');

        $this->session->set_flashdata('message', '<div class="alert alert-danger">
        nilai berhasil di hapus !
            </div>');
        redirect('akses/user/user_nilai');
    }

    public function hapus_vocher($id)
    {
        //hapus user di data vaoucher oleh admin
        $this->db->where('id', $id);
        $this->db->delete('voucher');

        $this->session->set_flashdata('message', '<div class="alert alert-danger">
        nilai berhasil di hapus !
            </div>');
        redirect('akses/user/voucher');
    }
}
