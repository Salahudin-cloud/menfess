<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel</title>

    <!-- IMPORT REQUIRED FILE CSS -->
    <?php include(APPPATH . 'Views/imports/scripts/css_backend.php') ?>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h1 class="card-title">
                                <i class="nav-icon fas fa-layer-group" style="font-size: 1.5rem;"></i>
                                Tambah Artikel
                            </h1>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('prosestambahartikel') ?>" method="POST" enctype="multipart/form-data">

                                <label for="artikel_judul">Judul</label><br>
                                <input type="text" id="artikel_judul" name="artikel_judul" maxlength="90" value="<?= old('artikel_judul') ?>">
                                <br>

                                <label for="artikel_tanggal">Tanggal Artikel</label><br>
                                <input type="date" id="artikel_tanggal" name="artikel_tanggal" value="<?= old('artikel_tanggal') ?>"><br>

                                <label for="artikel_cover">Gambar</label><br>
                                <input class="<?= ($validation->hasError('artikel_cover')) ? 'is-invalid' : '' ?>" type="file" id="artikel_cover" name="artikel_cover">
                                <?= $validation->getError('artikel_cover') ?>
                                <?= session()->getFlashdata('errors') ?>
                                <br>
                                <label for="artikel_slug">Slug</label><br>
                                <input type="text" id="artikel_slug" name="artikel_slug" maxlength="90" value="<?= old('artikel_slug') ?>">
                                <br>

                                <label for="artikel_konten">Isi Artikel</label><br>
                                <textarea name="artikel_konten" id="artikel_konten" cols="100" rows="10"><?= old('artikel_konten') ?></textarea>
                                <br>

                                <label for="artikel_status">Status Artikel</label><br>
                                <input name="artikel_status" id="artikel_status" type="radio" value="Publikasi" required autofocus>
                                <label for="artikel_status">Publikasi</label>
                                <input name="artikel_status" id="artikel_status" type="radio" value="Tidak Publikasi" required autofocus>
                                <label for="artikel_status">Tidak Publikasi</label><br>

                                <a class="btn btn-sm btn-success float-right ml-1" style="color: white;" href="<?= site_url('article') ?>"> Batal</a>
                                <button type="submit" class="btn btn-sm btn-success float-right">
                                    Simpan
                                </button>
                                <div>
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo session()->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include(APPPATH . 'Views/imports/templates/backend/footer.php') ?>

        <!-- control sidebar -->
        <?php include(APPPATH . 'Views/imports/templates/backend/control_sidebar.php') ?>

    </div>
    <!-- required file js -->
    <?php include(APPPATH . 'Views/imports/scripts/js_backend.php') ?>
</body>

</html>
