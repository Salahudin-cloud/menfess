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
            <!-- Main content -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title ">
                                <i class="nav-icon fas fa-layer-group" style="font-size: 1.5rem;"></i>
                                Mengelola Artikel
                            </h1>
                        </div>
                        <div class="card-body">
                            <!-- add userr btn  -->
                            <a href="<?php echo site_url('tambahartikel') ?>">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Add Artikel
                                </button>
                            </a>
                            <!-- Show list of user -->
                            <table class="table table-bordered table-hover mt-2">
                                <thead>
                                    <tr>
                                        <th>Judul Artikel</th>
                                        <th>Tanggal Artikel</th>
                                        <th>Kategori Artikel</th>
                                        <th>Status Artikel</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data_artikel as $pengelolaanartikel): ?>
                                    <tr>
                                        <td><?= $pengelolaanartikel->judul_artikel?></td>
                                        <td><?= $pengelolaanartikel->tanggal_artikel?></td>
                                        <td><?= $pengelolaanartikel->kategori_artikel?></td>
                                        <td><?= $pengelolaanartikel->status_artikel?></td>
                                        <td>
                                            <div class="btn-group " role="group" aria-label="Action buttons">
                                                <a href="<?php echo site_url('editartikel').'/'.$pengelolaanartikel->id_artikel ?>" class="btn btn-sm btn-warning mr-1"><i class="nav-icon fas fa-edit"></i></a>
                                                <a href="<?php echo site_url('hapusartikel').'/'.$pengelolaanartikel->id_artikel ?>" onclick="alert('Do you want to delete this user ? ')" class="btn btn-sm btn-danger mr-1"><i class="nav-icon fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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