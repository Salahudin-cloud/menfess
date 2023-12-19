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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Mengelola Artikel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Mengelola Artikel</li>
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
                            <a href="<?php echo site_url('tambahartikel') ?>">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-plus"></i> Tambah Artikel
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <!-- Show list of category -->
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">NO</th>
                                        <th>Tanggal</th>
                                        <th>Judul Artikel</th>
                                        <th>Kategori Artikel</th>
                                        <th style="width: 10%;">Cover</th>
                                        <th>Status</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($artickel as $artikel) : ?>
                                        <?php $i = 1; ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo date('d/m/y', strtotime($artikel->artikel_tanggal)) ?></td>
                                            <td><?php echo $artikel->artikel_judul ?></td>
                                            <td><?php echo $artikel->kategori_nama ?></td>
                                            <td><img width="100%" class="img-responsive" src="<?php echo base_url() . 'assets/images/' . $artikel->artikel_cover; ?>"></td>
                                            <td>
                                                <?php if ($artikel->artikel_status === "publikasi") : ?>
                                                    <span class="badge badge-success">Publikasi</span>
                                                <?php else : ?>
                                                    <span class="badge badge-danger">Draft</span>
                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                <div class="btn-group " role="group" aria-label="Action buttons">
                                                    <a href="" class="btn btn-sm btn-success mr-1" target="_blank"><i class="nav-icon fas fa-eye"></i></a>
                                                    <a href="<?php echo site_url('editartikel/' . $artikel->artikel_id) ?>" class="btn btn-sm btn-warning mr-1"><i class="nav-icon fas fa-edit"></i></a>
                                                    <form action="<?php echo site_url('hapusartikel/' . $artikel->artikel_id) ?>" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-sm btn-danger mr-1" onclick="return confirm('Are sure delete this article ? ')"><i class="nav-icon fas fa-trash"></i></button>
                                                    </form>
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