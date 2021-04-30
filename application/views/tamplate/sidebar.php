        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <?php
            if ($this->session->userdata('role') == 1) {
                $dataProfile = "assets/gaya/dist/img/avatar.png";
                $url = "akses/dashboard";
                $name = $this->session->userdata('email');
                $role = "ADMIN";
            } else {
                $dataProfile = "assets/gambar_profil/" . $user['image'];
                $url = "akses/user";
                $name = $user['nama'];
                $role = "Siswa";
            }
            ?>

            <a href="<?= base_url('akses/dashboard') ?>" class="brand-link">
                <img src="<?= base_url('assets/gaya'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= $role; ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                        <img src="<?= base_url() . $dataProfile; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?= base_url() . $url; ?>" class="d-block"><?= $name; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="<?= base_url('akses/dashboard') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <?php
                        $role_id =  $this->session->userdata('role');

                        $queryMenu = "SELECT `user_menu`.`id`, `nama`,`logo`,`logo2` 
                        FROM `user_menu` JOIN `user_akses_menu` 
                        ON `user_menu`.`id` = `user_akses_menu`.`menu_id` 
                        WHERE `user_akses_menu`.`user_role` = $role_id 
                        ORDER BY `user_akses_menu`.`menu_id` ASC";
                        $menu = $this->db->query($queryMenu)->result_array();
                        ?>
                        <?php foreach ($menu as $m) : ?>

                            <li class='nav-item has-treeview'>
                                <a href='#' class='nav-link'>
                                    <i class='<?= $m['logo']; ?>'></i>
                                    <p>
                                        <?= $m['nama']; ?>
                                        <i class='<?= $m['logo2']; ?>'></i>
                                    </p>
                                </a>
                                <?php
                                $menuid = $m['id'];
                                $querySubMenu = "SELECT `user_sub_menu`.`nama`,`user_sub_menu`.`logo`,`user_sub_menu`.`url`
                                FROM `user_sub_menu` JOIN `user_menu` 
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
                                WHERE `user_sub_menu`.`menu_id` = $menuid 
                                AND `user_sub_menu`.`aksi` = 1";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>


                                <ul class='nav nav-treeview'>
                                    <?php foreach ($subMenu as $sm) : ?>
                                        <li class='nav-item'>
                                            <a href='<?= base_url($sm['url']); ?>' class='nav-link'>
                                                <i class='<?= $sm['logo']; ?>'></i>
                                                <p><?= $sm['nama']; ?></p>

                                            </a>
                                        </li>

                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endforeach; ?>

                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                            <a href="<?= base_url('auth/login/loqout') ?>" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Log out</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>