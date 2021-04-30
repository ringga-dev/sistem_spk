<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card bg-secondary mb-8 p-2" style="max-width: 1000px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="<?= base_url('assets/gambar_profil/') . $user['image']; ?>" class="img-thumbnail">
                </div>

                <div class="col-md-6">
                    <div class="card-header">Name : <?= $user['nama'] ?></div>
                    <div class="card-header">Nim : <?= $user['nim'] ?></div>
                    <div class="card-header">Kelas : <?= $user['kelas'] ?></div>
                    <div class="card-header">Jurusan : <?= $user['jurusan'] ?></div>
                    <div class="card-header">Akses Sebagai : <?php if ($this->session->userdata('role') == 1) {
                                                                    echo "Admin";
                                                                } else {
                                                                    echo "Siswa";
                                                                }
                                                                ?></div>
                    <div class="card-header">Email : <?= $this->session->userdata('email') ?></div>
                    <!-- <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div> -->

                    <!-- <button type="button" class="btn btn-danger ml-2 mt-5 ">edit Password</button> -->

                    <a href="<?= base_url('akses/user/data_user') ?>" class="btn btn-success ml-2 mt-5 ">edit profile</a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->