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
                            <h1 class="m-0 font-weight-bold">Data Article</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <a href="<?php echo site_url('/article') ?>">
                                <button class="btn btn-sm btn-success">
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                            </a>
                        </div>
                        <!-- /.col -->
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
                                <strong style="font-size: 1.5rem;">Data Article</strong> <span style="font-size: 1rem;">New Article</span>
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="article_title">Artikel Judul</label>
                                            <input type="text" class="form-control" id="artikel_judul" name="artikel_judul" placeholder="Masukan Judul" value="<?php echo $data->artikel_judul ?>">
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
                                            <label for="artikel_kategori">Pilih Kategori</label>
                                            <select class="form-control" id="artikel_kategori" name="artikel_kategori">
                                                <option value="" selected disabled> -- pilih kategori --</option>
                                                <?php foreach ($kategori as $kate) : ?>
                                                    <option value="<?= $kate->kategori_id ?>" <?php echo ($kate->kategori_id == $data->kategori_id) ? 'selected' : ''; ?>><?= $kate->kategori_nama ?>
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
            var initialValue = <?php echo json_encode($data->artikel_konten); ?>;

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
                        $('#artikel_konten').val(contents);
                    }
                }
            });

            // Set initial value
            $('#_content').summernote('code', initialValue);
        });
    </script>
</body>

</html>