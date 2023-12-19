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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Mengelola Kategori</h1>
                            <div class="mt-2">
                                <a href="<?php echo site_url('user_management') ?>">
                                    <button class="btn btn-sm btn-success">
                                        <i class="fas fa-arrow-left"></i> Kembali
                                    </button>
                                </a>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('kategori') ?>">Mengelola Kategori</a></li>
                                <li class="breadcrumb-item active">Tambah Kategori</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title ">
                                <i class="fas fa-user" style="font-size: 1.5rem;"></i>
                                Tambah Kategori
                            </h1>
                        </div>
                        <div class="card-body">
                            <?php if (session()->getFlashdata('errors')) : ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                            <li><?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <!-- Form add new user accoiunt -->
                            <form action="<?php echo site_url('prosesTambahKategori') ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <input type="text" class="form-control" id="kategori" name="kategori" value="">
                                    </div>
                                    <button type="submit" class="btn btn-success form-control">Tambah</button>
                                </div>
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