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
                            <h1 class="m-0">Mengelola Artikel</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('article') ?>">Mengelola Artikel</a></li>
                                <li class="breadcrumb-item active">Tambah Artikel</li>
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
                            <!-- title  -->
                            <h1 class="card-title ">
                                <i class="fas fa-newspaper" style="font-size: 1.5rem;"></i>
                                <strong style="font-size: 1.5rem;">Tambah Artikel</strong>
                            </h1>
                        </div>
                        <div class="card-body">
                            <?php if (session()->has('errors')) : ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <!-- it will show error for every field -->
                                        <?php foreach (session('errors') as $error) : ?>
                                            <li><?php echo str_replace('article_', '', $error) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo site_url('prosestambahartikel') ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="article_title">Artikel Judul</label>
                                            <input type="text" class="form-control" id="artikel_judul" name="artikel_judul" placeholder="Masukan Judul">
                                        </div>

                                        <div class="form-group">
                                            <label for="artikel_konten">Konten Artikel</label>
                                            <div id="_content" name="_content"></div>
                                            <input type="hidden" id="artikel_konten" name="artikel_konten">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <!-- Left position -->
                                        <div class="form-group">
                                            <label for="kategori_id">Pilih Kategori</label>
                                            <select class="form-control" id="kategori_id" name="kategori_id">
                                                <option value="" selected disabled> -- pilih kategori --</option>
                                                <?php foreach ($kategori as $kate) : ?>
                                                    <option value="<?= $kate->kategori_id ?>">
                                                        <?= $kate->kategori_nama ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="artikel_cover">Cover</label>
                                            <input type="file" class="form-control-file" id="artikel_cover" name="artikel_cover">
                                        </div>
                                        <div class="d-flex justify-content-end flex-column">
                                            <button class="btn btn-primary mb-2" type="submit" name="artikel_status" value="draft">Draft</button>
                                            <button class="btn btn-success" type="submit" name="artikel_status" value="publikasi">Publish</button>
                                        </div>
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


    <!-- settings summer note -->
    <script>
        $(document).ready(function() {
            $('#_content').summernote({
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['color', ['forecolor', 'backcolor']],
                    ['para', ['ul', 'ol']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']]
                ],
                callbacks: {
                    onChange: function(contents) {
                        // Update nilai input tersembunyi dengan isi editor Summernote
                        $('#artikel_konten').val(contents);
                    }
                }
            });
        });
    </script>
</body>

</html>