<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- IMPORT REUIRED FILE CSS -->
    <?php include(APPPATH  . 'Views/imports/scripts/css_backend.php') ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- preloader -->
        <?php include(APPPATH . 'Views/imports/templates/backend/pre.php') ?>

        <!-- navbar -->
        <?php include(APPPATH . 'Views/imports/templates/backend/nav.php') ?>


        <!-- sidebar -->
        <?php include(APPPATH . 'Views/imports/templates/backend/sidebar.php') ?>


        <div class="content-wrapper">
            <!-- navbar -->
            <?php include(APPPATH . 'Views/imports/templates/backend/content_header.php') ?>
            <!-- Main content -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title ">
                                <i class="fas fa-users" style="font-size: 1.5rem;"></i>
                                Edit User
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('prosesedituser') ?>" method="post">
                                <input type="hidden" name="id_pengguna" maxlength="30" value="<?= $data_edit->id_pengguna?>">
                                <label for="namauser">Username</label><br>
                                <input type="text" name="username" maxlength="30" value="<?= $data_edit->username?>">
                                <br>
                                <label for="password">Password</label><br>
                                <input type="text" name="password" maxlength="8" value="<?= $data_edit->password?>"><br>
                                <label for="role">Kategori</label><br>
                                <input name="role" type="radio" value="Admin" <?php echo ($data_edit->role === 'Admin') ? 'checked' : ''; ?> required autofocus>
                                <label for="role">Admin</label>
                                <input name="role" type="radio" value="User" <?php echo ($data_edit->role === 'User') ? 'checked' : ''; ?> required autofocus>
                                <label for="role">User</label><br>

                                <label for="status_pengguna">Status Pengguna</label><br>
                                <input name="status_pengguna" type="radio" value="Aktif" <?php echo ($data_edit->status_pengguna === 'Aktif') ? 'checked' : ''; ?> required autofocus>
                                <label for="status_pengguna">Aktif</label>
                                <input name="status_pengguna" type="radio" value="Tidak Aktif" <?php echo ($data_edit->status_pengguna === 'Tidak Aktif') ? 'checked' : ''; ?> required autofocus>
                                <label for="status_pengguna">Tidak Aktif</label>

                                <a class="btn btn-sm btn-success float-right ml-1" style="color: white;" href="<?php echo site_url('user_management') ?>"> Batal</a>
                                <button type="submit" class="btn btn-sm btn-success float-right">
                                    Simpan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include(APPPATH  . 'Views/imports/templates/backend/footer.php') ?>

        <!-- control siidebar -->
        <?php include(APPPATH  . 'Views/imports/templates/backend/control_sidebar.php') ?>

    </div>
    <!-- reuired file js  -->
    <?php include(APPPATH  . 'Views/imports/scripts/js_backend.php') ?>
</body>

</html>