<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <form action="<?= base_url('akses/Beasiswa'); ?>" method="POST" class="col-md-12 text-right pb-4">

            <div class="btn-group">
                <div class="col-sm">
                    <select type="text" class="form-control" name="tampil" id="tampil">
                        <option value="1">all</option>
                        <option value="3">top 3</option>
                        <option value="5">top 5</option>
                        <option value="10">top 10</option>
                    </select>
                </div>
            </div>


            <div class="btn-group">
                <button type="submit" class="btn btn-outline-success">tampil</button>
            </div>

        </form>

        <table class="table table-hover table-secondary" id="example">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Attitude</th>
                    <th scope="col">PA</th>
                    <th scope="col">4K</th>
                    <th scope="col">PNA</th>
                    <th scope="col">Total</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($rekap as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $r['nim'] ?></td>
                        <td><?= $r['nama'] ?></td>
                        <td><?= $r['kelas'] ?></td>
                        <td><?= round($r['attitude'], 2) ?></td>
                        <td><?= round($r['pa'], 2) ?></td>
                        <td><?= round($r['4k'], 2) ?></td>
                        <td><?= round($r['pna'], 2) ?></td>
                        <td><?= round($r['total'], 2) ?></td>

                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>

            </tbody>
        </table>

    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->