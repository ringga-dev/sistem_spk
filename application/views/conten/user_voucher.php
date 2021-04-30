<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <form action="<?= base_url('menu/absen'); ?>" method="POST" class="col-md-12 text-right pb-3">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Voucher</a>

            </form>
            <table class="table table-hover table-dark" id="user_prin">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">nim</th>
                        <th scope="col">kode</th>
                        <th scope="col">voucher</th>
                        <th scope="col">info</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <?php foreach ($user_voucher as $m) : ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['nim'] ?></td>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['kode'] ?></td>
                            <td><?= $m['info'] ?></td>
                            <td>
                                <a href="<?= base_url() . 'akses/aksi_btn/hapus_vocher/' . $m['id']; ?>" class="btn btn-danger mb-2">hapus</a>
                            </td>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Modal -->
    <div class="modal fade-mb-0" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?= base_url('akses/user/voucher'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <select type="text" class="form-control" name="nim_siswa" id="nim_siswa">
                                <option value="">Berdasarkan Siswa</option>
                                <?php foreach ($list_user as $j) : ?>
                                    <option value="<?= $j['nim']; ?>"><?= $j['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <select type="text" class="form-control" name="nim_all" id="nim_all">
                                <option value="">Berdasarkan peringkat</option>
                                <option value="3">Top 3</option>
                                <option value="5">Top 5</option>
                                <option value="10">Top 10</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-body ">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="vocher">
                        </div>
                    </div>
                    <div class="modal-body ">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="info" name="info" placeholder="info">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>