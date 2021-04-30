<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <form action="<?= base_url('menu/absen'); ?>" method="POST" class="col-md-12 text-right pb-3">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New User</a>
                <!-- <div class="btn-group ">
                    <a class="btn btn-outline-warning " href="<?= base_url('menu/absen/cari_mhs'); ?>" role="button">Cari Mahasiswa</a>
                </div> -->
            </form>
            <table class="table table-hover table-dark p-2" id="user_prin">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user_list as $m) : ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <td>
                                <img src="<?= base_url('assets/gambar_profil/') . $m['image']; ?>" class="img-thumbnail" width="100px">
                            </td>
                            <td><?= $m['email'] ?></td>
                            <td><?= $m['nama'] ?></td>
                            <td><?= $m['jurusan'] ?></td>
                            <td><?= $m['kelas'] ?></td>
                            <td>
                                <!-- <a href="<?= base_url() . 'akses/aksi_btn/edit/' . $m['id']; ?>" class="btn btn-warning mb-2">edit</a> -->
                                <a href="<?= base_url() . 'akses/aksi_btn/hapus_user/' . $m['nim']; ?>" class="btn btn-danger mb-2">hapus</a>
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

                <form action="<?= base_url('akses/user/data_siswa'); ?>" method="POST">

                    <div class="modal-body ">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                        </div>
                    </div>
                    <div class="modal-body ">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <select type="text" class="form-control" name="jurusan" id="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <option value="<?= $j['nama']; ?>"><?= $j['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                        </div>
                    </div>
                    <div class="modal-body mt-0">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="nim">
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