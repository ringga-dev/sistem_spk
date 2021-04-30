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
                        <label for="avg_kelas">Lakukan penilaian perbandingan dari kriteria-kriteria berikut</label>
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
                                            <td><input type="text" class="form-control" value="1" name="c1_c1" id="c1_c1" readonly></td>

                                            <td> <select class="form-control" name="c1_c2" id="c1_c2">
                                                    <?php foreach ($number as $n) : ?>
                                                        <option value="<?= $n ?>"><?= $n ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </td>

                                            <td> <select class="form-control" name="c1_c3" id="c1_c3">
                                                    <?php foreach ($number as $n) : ?>
                                                        <option value="<?= $n ?>"><?= $n ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </td>

                                            <td> <select class="form-control" name="c1_c4" id="c1_c4">
                                                    <?php foreach ($number as $n) : ?>
                                                        <option value="<?= $n ?>"><?= $n ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <!-- baris kedua -->
                                        <tr>
                                            <td class="text-center">C2</td>
                                            <td><input type="text" class="form-control" value="0" name="c2_c1" id="c2_c1"></td>
                                            <td><input type="text" class="form-control" value="1" name="c2_c2" id="c2_c2" readonly></td>

                                            <td> <select class="form-control" name="c2_c3" id="c2_c3">
                                                    <?php foreach ($number as $n) : ?>
                                                        <option value="<?= $n ?>"><?= $n ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </td>

                                            <td> <select class="form-control" name="c2_c4" id="c2_c4">
                                                    <?php foreach ($number as $n) : ?>
                                                        <option value="<?= $n ?>"><?= $n ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">C3</td>
                                            <td><input type="text" class="form-control" value="0" name="c3_c1" id="c3_c1"></td>
                                            <td><input type="text" class="form-control" value="0" name="c3_c2" id="c3_c2"></td>
                                            <td><input type="text" class="form-control" value="1" name="c3_c3" id="c3_c3" readonly></td>
                                            <td> <select class="form-control" name="c3_c4" id="c3_c4">
                                                    <?php foreach ($number as $n) : ?>
                                                        <option value="<?= $n ?>"><?= $n ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">C4</td>
                                            <td><input type="text" class="form-control" value="0" name="c4_c1" id="c4_c1"></td>
                                            <td><input type="text" class="form-control" value="0" name="c4_c2" id="c4_c2"></td>
                                            <td><input type="text" class="form-control" value="0" name="c4_c3" id="c4_c3"></td>
                                            <td><input type="text" class="form-control" value="1" name="c4_c4" id="c4_c4" readonly></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" col-md-5">
                                <p>Keterangan kriteria : </p>
                                <ul>
                                    <li>C1 : Attitude</li>
                                    <li>C2 : PA</li>
                                    <li>C3 : 4K</li>
                                    <li>C4 : PNA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="http://localhost/ahp1/isi_nilai" class="btn btn-default">Kembali</a>
                    <input type="submit" class="btn btn-info pull-right" value="Simpan" />
                </div>
            </form>


        </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->