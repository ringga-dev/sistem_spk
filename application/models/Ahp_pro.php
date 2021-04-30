<?php

class Ahp_pro extends CI_Model
{
    //baris 1
    public function data_awal()
    {

        $data = [
            'c1_c1' => $this->db->get_where('s_data', ['nama' => 'c1_c1'])->row_array(),
            'c2_c1' => $this->db->get_where('s_data', ['nama' => 'c2_c1'])->row_array(),
            'c3_c1' => $this->db->get_where('s_data', ['nama' => 'c3_c1'])->row_array(),
            'c4_c1' => $this->db->get_where('s_data', ['nama' => 'c4_c1'])->row_array(),
            //baris 2
            'c1_c2' => $this->db->get_where('s_data', ['nama' => 'c1_c2'])->row_array(),
            'c2_c2' => $this->db->get_where('s_data', ['nama' => 'c2_c2'])->row_array(),
            'c3_c2' => $this->db->get_where('s_data', ['nama' => 'c3_c2'])->row_array(),
            'c4_c2' => $this->db->get_where('s_data', ['nama' => 'c4_c2'])->row_array(),
            //baris 3
            'c1_c3' => $this->db->get_where('s_data', ['nama' => 'c1_c3'])->row_array(),
            'c2_c3' => $this->db->get_where('s_data', ['nama' => 'c2_c3'])->row_array(),
            'c3_c3' => $this->db->get_where('s_data', ['nama' => 'c3_c3'])->row_array(),
            'c4_c3' => $this->db->get_where('s_data', ['nama' => 'c4_c3'])->row_array(),
            //baris 4
            'c1_c4' => $this->db->get_where('s_data', ['nama' => 'c1_c4'])->row_array(),
            'c2_c4' => $this->db->get_where('s_data', ['nama' => 'c2_c4'])->row_array(),
            'c3_c4' => $this->db->get_where('s_data', ['nama' => 'c3_c4'])->row_array(),
            'c4_c4' => $this->db->get_where('s_data', ['nama' => 'c4_c4'])->row_array()
        ];
        return $data;
    }



    public function get_data()
    {
        //baris 1
        $data_c1_c1 = $this->db->get_where('s_data', ['nama' => 'c1_c1'])->row_array();
        $data_c2_c1 = $this->db->get_where('s_data', ['nama' => 'c2_c1'])->row_array();
        $data_c3_c1 = $this->db->get_where('s_data', ['nama' => 'c3_c1'])->row_array();
        $data_c4_c1 = $this->db->get_where('s_data', ['nama' => 'c4_c1'])->row_array();
        //baris 2
        $data_c1_c2 = $this->db->get_where('s_data', ['nama' => 'c1_c2'])->row_array();
        $data_c2_c2 = $this->db->get_where('s_data', ['nama' => 'c2_c2'])->row_array();
        $data_c3_c2 = $this->db->get_where('s_data', ['nama' => 'c3_c2'])->row_array();
        $data_c4_c2 = $this->db->get_where('s_data', ['nama' => 'c4_c2'])->row_array();
        //baris 3
        $data_c1_c3 = $this->db->get_where('s_data', ['nama' => 'c1_c3'])->row_array();
        $data_c2_c3 = $this->db->get_where('s_data', ['nama' => 'c2_c3'])->row_array();
        $data_c3_c3 = $this->db->get_where('s_data', ['nama' => 'c3_c3'])->row_array();
        $data_c4_c3 = $this->db->get_where('s_data', ['nama' => 'c4_c3'])->row_array();
        //baris 4
        $data_c1_c4 = $this->db->get_where('s_data', ['nama' => 'c1_c4'])->row_array();
        $data_c2_c4 = $this->db->get_where('s_data', ['nama' => 'c2_c4'])->row_array();
        $data_c3_c4 = $this->db->get_where('s_data', ['nama' => 'c3_c4'])->row_array();
        $data_c4_c4 = $this->db->get_where('s_data', ['nama' => 'c4_c4'])->row_array();
        //secara vertikal

        //secara vertikal
        $c1_tota = $data_c1_c1['nilai'] + $data_c2_c1['nilai'] + $data_c3_c1['nilai'] + $data_c4_c1['nilai'];
        $c2_tota = $data_c1_c2['nilai'] + $data_c2_c2['nilai'] + $data_c3_c2['nilai'] + $data_c4_c2['nilai'];
        $c3_tota = $data_c1_c3['nilai'] + $data_c2_c3['nilai'] + $data_c3_c3['nilai'] + $data_c4_c3['nilai'];
        $c4_tota = $data_c1_c4['nilai'] + $data_c2_c4['nilai'] + $data_c3_c4['nilai'] + $data_c4_c4['nilai'];


        //sederhanakan data secara horizontal
        //dan memasukkan data ke data base setelah di sederhanakan
        //baris 1
        $s_c1_c1 = $data_c1_c1['nilai'] / $c1_tota;
        $s_c1_c2 = $data_c1_c2['nilai'] / $c2_tota;
        $s_c1_c3 = $data_c1_c3['nilai'] / $c3_tota;
        $s_c1_c4 = $data_c1_c4['nilai'] / $c4_tota;
        //baris 2
        $s_c2_c1 = $data_c2_c1['nilai'] / $c1_tota;
        $s_c2_c2 = $data_c2_c2['nilai'] / $c2_tota;
        $s_c2_c3 = $data_c2_c3['nilai'] / $c3_tota;
        $s_c2_c4 = $data_c2_c4['nilai'] / $c4_tota;
        //baris 3
        $s_c3_c1 = $data_c3_c1['nilai'] / $c1_tota;
        $s_c3_c2 = $data_c3_c2['nilai'] / $c2_tota;
        $s_c3_c3 = $data_c3_c3['nilai'] / $c3_tota;
        $s_c3_c4 = $data_c3_c4['nilai'] / $c4_tota;
        //baris 4
        $s_c4_c1 = $data_c4_c1['nilai'] / $c1_tota;
        $s_c4_c2 = $data_c4_c2['nilai'] / $c2_tota;
        $s_c4_c3 = $data_c4_c3['nilai'] / $c3_tota;
        $s_c4_c4 = $data_c4_c4['nilai'] / $c4_tota;


        //totalkan data secara horizontal
        $jlb_baris_1 = $s_c1_c1 + $s_c1_c2 + $s_c1_c3 + $s_c1_c4;
        $jlb_baris_2 = $s_c2_c1 + $s_c2_c2 + $s_c2_c3 + $s_c2_c4;
        $jlb_baris_3 = $s_c3_c1 + $s_c3_c2 + $s_c3_c3 + $s_c3_c4;
        $jlb_baris_4 = $s_c4_c1 + $s_c4_c2 + $s_c4_c3 + $s_c4_c4;


        //total baris
        $ea_1 = $jlb_baris_1 / 4;
        $ea_2 = $jlb_baris_2 / 4;
        $ea_3 = $jlb_baris_3 / 4;
        $ea_4 = $jlb_baris_4 / 4;

        //人maks
        $maks_1 = $c1_tota * $ea_1;
        $maks_2 = $c2_tota * $ea_2;
        $maks_3 = $c3_tota * $ea_3;
        $maks_4 = $c4_tota * $ea_4;
        //total dari maks 
        $maks_total = $maks_1 + $maks_2 + $maks_3 + $maks_4;

        //sederhanakan data secara horizontal tahap 2
        //dan memasukkan data ke data base setelah di sederhanakan
        $k_c1_c1 = $data_c1_c1['nilai'] * $ea_1;
        $k_c1_c2 = $data_c1_c2['nilai'] * $ea_2;
        $k_c1_c3 = $data_c1_c3['nilai'] * $ea_3;
        $k_c1_c4 = $data_c1_c4['nilai'] * $ea_4;
        //baris 2
        $k_c2_c1 = $data_c2_c1['nilai'] * $ea_1;
        $k_c2_c2 = $data_c2_c2['nilai'] * $ea_2;
        $k_c2_c3 = $data_c2_c3['nilai'] * $ea_3;
        $k_c2_c4 = $data_c2_c4['nilai'] * $ea_4;
        //baris 3
        $k_c3_c1 = $data_c3_c1['nilai'] * $ea_1;
        $k_c3_c2 = $data_c3_c2['nilai'] * $ea_2;
        $k_c3_c3 = $data_c3_c3['nilai'] * $ea_3;
        $k_c3_c4 = $data_c3_c4['nilai'] * $ea_4;
        //baris 4
        $k_c4_c1 = $data_c4_c1['nilai'] * $ea_1;
        $k_c4_c2 = $data_c4_c2['nilai'] * $ea_2;
        $k_c4_c3 = $data_c4_c3['nilai'] * $ea_3;
        $k_c4_c4 = $data_c4_c4['nilai'] * $ea_4;

        $jbk1 = $k_c1_c1 + $k_c1_c2 + $k_c1_c3 + $k_c1_c4;
        $jbk2 = $k_c2_c1 + $k_c2_c2 + $k_c2_c3 + $k_c2_c4;
        $jbk3 = $k_c3_c3 + $k_c3_c2 + $k_c3_c3 + $k_c3_c4;
        $jbk4 = $k_c4_c1 + $k_c4_c2 + $k_c4_c3 + $k_c4_c4;

        $maks = (($jbk1 / $k_c1_c1) + ($jbk2 + $k_c2_c2) + ($jbk3 / $k_c3_c3) + ($jbk4 / $k_c4_c4)) / 4;

        //nilai CI
        $ci_kurang = $maks - 4;
        $ci = $ci_kurang / 3;
        //nilai CR
        $cr = $ci / 0.9;





        $data = [
            //total tabel 1
            'c1_total' => $c1_tota,
            'c2_total' => $c2_tota,
            'c3_total' => $c3_tota,
            'c4_total' => $c4_tota,


            //nilai table 2
            //baris 1
            's_c1_c1' => $s_c1_c1,
            's_c1_c2' => $s_c1_c2,
            's_c1_c3' => $s_c1_c3,
            's_c1_c4' => $s_c1_c4,

            //baris 2
            's_c2_c1' => $s_c2_c1,
            's_c2_c2' => $s_c2_c2,
            's_c2_c3' => $s_c2_c3,
            's_c2_c4' => $s_c2_c4,

            //baris 3
            's_c3_c1' => $s_c3_c1,
            's_c3_c2' => $s_c3_c2,
            's_c3_c3' => $s_c3_c3,
            's_c3_c4' => $s_c3_c4,

            //baris 3
            's_c4_c1' => $s_c4_c1,
            's_c4_c2' => $s_c4_c2,
            's_c4_c3' => $s_c4_c3,
            's_c4_c4' => $s_c4_c4,

            //total 
            'jlb_baris_1' => $jlb_baris_1,
            'jlb_baris_2' => $jlb_baris_2,
            'jlb_baris_3' => $jlb_baris_3,
            'jlb_baris_4' => $jlb_baris_4,

            // Eigen Avarage
            'ea_1' => $ea_1,
            'ea_2' => $ea_2,
            'ea_3' => $ea_3,
            'ea_4' => $ea_4,



            //table ke 3 K
            'k_c1_c1' => $k_c1_c1,
            'k_c1_c2' => $k_c1_c2,
            'k_c1_c3' => $k_c1_c3,
            'k_c1_c4' => $k_c1_c4,
            //baris 2
            'k_c2_c1' => $k_c2_c1,
            'k_c2_c2' => $k_c2_c2,
            'k_c2_c3' => $k_c2_c3,
            'k_c2_c4' => $k_c2_c4,
            //baris 3
            'k_c3_c1' =>  $k_c3_c1,
            'k_c3_c2' => $k_c3_c2,
            'k_c3_c3' => $k_c3_c3,
            'k_c3_c4' => $k_c3_c4,
            //baris 4
            'k_c4_c1' =>  $k_c4_c1,
            'k_c4_c2' =>  $k_c4_c2,
            'k_c4_c3' => $k_c4_c3,
            'k_c4_c4' => $k_c4_c4,

            'jbk1' =>   $jbk1,
            'jbk2' => $jbk2,
            'jbk3' => $jbk3,
            'jbk4' => $jbk4,

            //maks
            'maks' => $maks,



            'ci' => $ci,
            'cr' => $cr
        ];


        return $data;
    }

    public function get_mfep($proses_ahp)
    {

        $data = $this->db->get('user_alternatif')->result_array();

        $attitude = $proses_ahp['k_c1_c1'];
        $pa = $proses_ahp['k_c2_c2'];
        $k4 = $proses_ahp['k_c3_c3'];
        $pna = $proses_ahp['k_c4_c4'];
        if ($data == null) {
            return 0;
        } else {
            foreach ($data as $sm) {

                $datauser[] = [
                    'nim' => $sm['nim'],
                    'attitude' => $sm['attitude'] * $attitude,
                    'pa' => $sm['pa'] * $pa,
                    '4k' => $sm['4k'] * $k4,
                    'pna' => $sm['pna'] * $pna,
                    'total' => ($sm['attitude'] * $attitude) + ($sm['pa'] * $pa) + ($sm['4k'] * $k4) + ($sm['pna'] * $pna)
                ];
            }
            $this->db->truncate('rekap');
            $this->db->insert_batch('rekap', $datauser);
            return $datauser;
        }
    }

    public function data_mfep()
    {
        $queryMenu = "SELECT `user_data`.`nama`,`user_data`.`kelas`,`rekap`.*
        FROM `user_data` JOIN `rekap` ON `user_data`.`nim` = `rekap`.`nim` 
        ";

        $menu = $this->db->query($queryMenu)->result_array();
        return $menu;
    }

    public function data_mfep_top($tampil)
    {

        if ($tampil == 1) {
            $queryMenu = "SELECT `user_data`.`nama`,`user_data`.`kelas`,`rekap`.*
            FROM `user_data` JOIN `rekap` 
            ON `user_data`.`nim` = `rekap`.`nim` 
            ";
        } else {
            $queryMenu = "SELECT `user_data`.`nama`,`user_data`.`kelas`,`rekap`.*
            FROM `user_data` JOIN `rekap` 
            ON `user_data`.`nim` = `rekap`.`nim` 
             ORDER BY `total` DESC LIMIT $tampil";
        }
        $menu = $this->db->query($queryMenu)->result_array();
        // $data = $this->db->get('rekap')->result_array();

        return $menu;
    }
}
