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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Mengelola Kategori</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Mengelola Kategori</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <!-- button add category -->
                            <a href="<?php echo site_url('') ?>">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Tambah Kategori
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <!-- Show list of category -->
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">NO</th>
                                        <th>Name Category</th>
                                        <th>Slud Category</th>
                                        <th style="width: 10%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $kategori) : ?>
                                        <?php $i = 1; ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $kategori->kategori_nama; ?></td>
                                            <td><?php echo $kategori->kategori_slug; ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Action buttons">
                                                    <a href="" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="btn btn-sm btn-danger" type="submit"><i class="nav-icon fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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