<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg">

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <div class="card bg-secondary m-2 p-5 mt-0" style="max-width: 1000px;">
                    <?= form_open_multipart(); ?>
                    <input type="hidden" name="id" value="">
                    <!-- <?= $edit['id']; ?> -->
                    <div class="form-group row">
                        <div class="col-sm-2 "></div>
                        <div class="col-sm-10 ">
                            <div class="col-sm-4  ml-md-auto m-2 ">
                                <img src="<?= base_url('assets/gambar_profil/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">masukkan foto</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nim" id="nim" value="<?= $user['nim'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" value="<?= $user['nama'] ?>">
                            <?= form_error('name', '<small class"text-danger pl-4">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $user['kelas'] ?>">
                            <?= form_error('kelas', '<small class"text-danger pl-4">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" name="jurusan" id="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $user['jurusan']) : ?>
                                        <option value="<?= $j['nama']; ?>" selected><?= $j['nama']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j['nama']; ?>"><?= $j['nama']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>



                    <div class="form-group row text-lg-right">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-danger">Edit Data</button>
                        </div>
                    </div>

                    </form>

                </div>
                <!-- End of Main Content -->

            </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->