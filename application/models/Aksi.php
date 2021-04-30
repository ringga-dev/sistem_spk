<?php

class Aksi extends CI_Model
{
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mhs');
    }

    public function hapus_dosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('user_data', ['nim' => $this->input->post('nim')])->row_array();
        //cek gamar kalo ada
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path'] = './assets/gambar_profil/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '10000';

            $this->load->library('upload', $config);

            $old_image = $data['user']['image'];
            if ($old_image != 'user.jpg') {
                unlink(FCPATH . 'assets/gambar_profil/' . $old_image);
            }

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('name'),
            'kelas' => $this->input->post('kelas'),
            'jurusan' => $this->input->post('jurusan'),
            'image' => $new_image
        ];
        $this->db->where('nim', $this->input->post('nim'));
        $this->db->update('user_data', $data);
    }

    public function edit_dosen()
    {
        $data = [
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama'),
            'nrp' => $this->input->post('prodi'),
            'jabatan' => $this->input->post('jabatan'),
            'Keterangan' => $this->input->post('thn'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('dosen', $data);
    }

    public function hapus_class($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('class');
    }

    public function edit_class()
    {
        $data = [
            'name' => $this->input->post('name'),
            'thn' => $this->input->post('thn'),
            'jmlh_mhs' => $this->input->post('jmlh_mhs'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('class', $data);
    }

    public function hapus_makul($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mata_kuliah');
    }
    public function edit_makul()
    {
        $data = [
            'mata_kuliah' => $this->input->post('mata_kuliah'),
            'prodi' => $this->input->post('prodi'),
            'id_class' => $this->input->post('id_clas')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mata_kuliah', $data);
    }

    public function print($id)
    {
        $querySubMenu = "SELECT `user_data`.`nama`,`voucher`.`nim`,`voucher`.`kode`, `voucher`.`info`
        FROM `user_data` JOIN `voucher` 
        ON `user_data`.`nim` = `voucher`.`nim`
        WHERE  `voucher`.`id` = $id";
        return $this->db->query($querySubMenu)->row_array();
    }
}
