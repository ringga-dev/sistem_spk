<!-- Main content -->

<section class="content">
    <div class="container-fluid">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Pembentukan Matriks Pairwise Comparison</h3>
            </div>
            <form action="<?= base_url('akses/sampel/pro_ahp') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="avg_kelas">Data pada table awal</label>
                        <div class="row">
                            <div class="col-md-7">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">C1</th>
                                            <th class="text-center">C2</th>
                                            <th class="text-center">C3</th>
                                            <th class="text-center">C4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- baris pertama -->
                                            <td class="text-center">C1</td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c1_c1']['nilai'] ?>" readonly></td>
                                            <td> <input type="text" class="form-control" value="<?= $table_awal['c1_c2']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c1_c3']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c1_c4']['nilai'] ?>" readonly></td>
                                        </tr>

                                        <!-- baris kedua -->
                                        <tr>
                                            <td class="text-center">C2</td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c2_c1']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c2_c2']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c2_c3']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c2_c4']['nilai'] ?>" readonly></td>
                                        </tr>
                                        <!-- baris tiga -->
                                        <tr>
                                            <td class="text-center">C3</td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c3_c1']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c3_c2']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c3_c3']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c3_c4']['nilai'] ?>" readonly></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">C4</td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c4_c1']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c4_c2']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c4_c3']['nilai'] ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= $table_awal['c4_c4']['nilai'] ?>" readonly></td>
                                        </tr>
                                        <tr class="btn-warning">
                                            <td class="text-center btn-warning">total</td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= $proses_ahp['c1_total'] ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= $proses_ahp['c2_total'] ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= $proses_ahp['c3_total'] ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= $proses_ahp['c4_total'] ?>" readonly></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" col-md-5">
                                <p>Keterangan kriteria : </p>
                                <ul>
                                    <li>C1 : Attitude</li>
                                    <li>C2 : Prestasi Akademik</li>
                                    <li>C3 : 4K (Kreatif, Komunikatif, Kolaboratif, Kritis)</li>
                                    <li>C4 : Prestasi non Akademik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- taber kedua -->
            <form action="<?= base_url('akses/sampel/pro_ahp') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="avg_kelas">nilai table 2</label>
                        <div class="row">
                            <div class="col-md-7">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">C1</th>
                                            <th class="text-center">C2</th>
                                            <th class="text-center">C3</th>
                                            <th class="text-center">C4</th>
                                            <th class="text-center btn-success"> Matriks (JBN) </th>
                                            <th class="text-center btn-danger">Jumlah Kriteria</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- baris pertama -->
                                            <td class="text-center">C1</td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['s_c1_c1'], 3) ?>" readonly></td>
                                            <td> <input type="text" class="form-control" value="<?= round($proses_ahp['s_c1_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c1_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c1_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jlb_baris_1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-danger" value="<?= round($proses_ahp['ea_1'], 3) ?>" readonly></td>
                                        </tr>

                                        <!-- baris kedua -->
                                        <tr>
                                            <td class="text-center">C2</td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c2_c1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['s_c2_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c2_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c2_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jlb_baris_2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-danger" value="<?= round($proses_ahp['ea_2'], 3) ?>" readonly></td>
                                        </tr>
                                        <!-- baris tiga -->
                                        <tr>
                                            <td class="text-center">C3</td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c3_c1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c3_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['s_c3_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c3_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jlb_baris_3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-danger" value="<?= round($proses_ahp['ea_3'], 3) ?>" readonly></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">C4</td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c4_c1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c4_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['s_c4_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['s_c4_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jlb_baris_4'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-danger" value="<?= round($proses_ahp['ea_4'], 3) ?>" readonly></td>
                                        </tr>
                                        <tr class="btn-warning">
                                            <td class="text-center btn-warning">total</td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= round($proses_ahp['s_c1_c1'] + $proses_ahp['s_c2_c1'] + $proses_ahp['s_c3_c1'] + $proses_ahp['s_c4_c1'], 3)  ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= round($proses_ahp['s_c1_c2'] + $proses_ahp['s_c2_c2'] + $proses_ahp['s_c3_c2'] + $proses_ahp['s_c4_c2'], 3)  ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= round($proses_ahp['s_c1_c3'] + $proses_ahp['s_c2_c3'] + $proses_ahp['s_c3_c3'] + $proses_ahp['s_c4_c3'], 3)  ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= round($proses_ahp['s_c1_c4'] + $proses_ahp['s_c2_c4'] + $proses_ahp['s_c3_c4'] + $proses_ahp['s_c4_c4'], 3)  ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-warning" value="<?= round($proses_ahp['jlb_baris_1'] + $proses_ahp['jlb_baris_2'] + $proses_ahp['jlb_baris_3'] + $proses_ahp['jlb_baris_4'], 3)  ?>" readonly></td>
                                            <td><input type="text" class="form-control btn-warning" value="<?= round($proses_ahp['ea_1'] + $proses_ahp['ea_2'] + $proses_ahp['ea_3'] + $proses_ahp['ea_4'], 3)  ?>" readonly></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" col-md-5">
                                <p>Keterangan kriteria : </p>
                                <ul>
                                    <li>C1 : Attitude</li>
                                    <li>C2 : Prestasi Akademik</li>
                                    <li>C3 : 4K (Kreatif, Komunikatif, Kolaboratif, Kritis)</li>
                                    <li>C4 : Prestasi non Akademik</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

            </form>

            <form action="<?= base_url('akses/sampel/pro_ahp') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="avg_kelas">nilai table 3</label>
                        <div class="row">
                            <div class="col-md-7">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center"></th>
                                            <th class="text-center">C1</th>
                                            <th class="text-center">C2</th>
                                            <th class="text-center">C3</th>
                                            <th class="text-center">C4</th>
                                            <th class="text-center btn-success"> Katriks K (JBK) </th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- baris pertama -->
                                            <td class="text-center">C1</td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['k_c1_c1'], 3) ?>" readonly></td>
                                            <td> <input type="text" class="form-control" value="<?= round($proses_ahp['k_c1_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c1_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c1_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jbk1'], 3) ?>" readonly></td>

                                        </tr>

                                        <!-- baris kedua -->
                                        <tr>
                                            <td class="text-center">C2</td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c2_c1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['k_c2_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c2_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c2_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jbk2'], 3) ?>" readonly></td>

                                        </tr>
                                        <!-- baris tiga -->
                                        <tr>
                                            <td class="text-center">C3</td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c3_c1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c3_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['k_c3_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c3_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jbk3'], 3) ?>" readonly></td>

                                        </tr>
                                        <tr>
                                            <td class="text-center">C4</td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c4_c1'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c4_c2'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control" value="<?= round($proses_ahp['k_c4_c3'], 3) ?>" readonly></td>
                                            <td><input type="text" class="form-control text-primary" value="<?= round($proses_ahp['k_c4_c4'], 3) ?>" readonly></td>

                                            <td><input type="text" class="form-control btn-success" value="<?= round($proses_ahp['jbk4'], 3) ?>" readonly></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class=" col-md-5">
                                <p>Keterangan kriteria : </p>
                                <ul>
                                    <li>人maks :</br>
                                        Nilai Maks= <?= round($proses_ahp['maks'], 2) ?></br>

                                    </li></br>
                                    <li>CI : <?= round($proses_ahp['ci'], 2) ?></li>
                                    <li>CR : <?= round($proses_ahp['cr'], 2) ?></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->