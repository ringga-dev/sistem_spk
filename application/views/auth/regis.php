<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/gaya') ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/gaya') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/gaya') ?>/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page bg-secondary">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url('assets/gaya') ?>/index2.html"><b>Admin</b>WEB</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign up to start your session</p>

                <form action="<?= base_url('auth/login/regis') ?>" method="post">
                    <?= form_error('email', '<small class"text-warning pl-3">', '</small>'); ?>
                    <div class="input-group mb-2">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('nim', '<small class"text-warning pl-3">', '</small>'); ?>
                    <div class="input-group mb-2">
                        <input type="number" class="form-control" placeholder="Nim" name="nim">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('pass', '<small class"text-warning pl-3">', '</small>'); ?>
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" placeholder="Password" name="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <?= form_error('nama', '<small class"text-warning pl-3">', '</small>'); ?>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Nama" name="nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('kelas', '<small class"text-warning pl-3">', '</small>'); ?>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('jurusan', '<small class"text-warning pl-3">', '</small>'); ?>
                    <div class="input-group mb-2">
                        <label for="name" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select type="text" class="form-control" name="jurusan" id="jurusan">
                                <option selected>Jurusan</option>
                                <?php foreach ($jurusan as $j) : ?>
                                    <option value="<?= $j['nama']; ?>"><?= $j['nama']; ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0 m-2">
                    <a href="<?= base_url('auth/login') ?>" class="text-center">Login member</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/gaya'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/gaya'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/gaya'); ?>/dist/js/adminlte.min.js"></script>

</body>

</html>