<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>

            <table class="table table-hover table-dark" id="user_prin">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama</th>
                        <th scope="col">nim</th>
                        <th scope="col">kode</th>
                        <th scope="col">voucher</th>
                        <th scope="col">info</th>
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
                                <a href="<?= base_url('akses/user/user_print_voucher/') . $m['id'] ?>" class="btn btn-outline-success">Print</a>
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

</div>
</div>