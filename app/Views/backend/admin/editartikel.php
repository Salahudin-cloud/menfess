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
                                <i class="nav-icon fas fa-layer-group" style="font-size: 1.5rem;"></i>
                                Tambah Artikel
                            </h1>
                        </div>
                        <div class="card-body">
                        <form action="<?= base_url('proseseditartikel') ?>" method="post">
                        <input type="hidden" name="id_artikel" maxlength="30" value="<?= $artikel_edit->id_artikel?>">
                                <label for="judul">Judul</label><br>
                                <input type="text" name="judul_artikel" maxlength="90" value="<?= $artikel_edit->judul_artikel?>">
                                <br>

                                <label for="tanggal_artikel">Tanggal Artikel</label><br>
                                <input type="date" name="tanggal_artikel" value="<?= $artikel_edit->tanggal_artikel?>"><br>

                                <label for="kategori_artikel">Kategori</label><br>
                                <input name="kategori_artikel" type="radio" value="Kampus" <?php echo ($artikel_edit->kategori_artikel === 'Kampus') ? 'checked' : ''; ?> required autofocus>
                                 <label for="kategori_artikel">Kampus</label>
                                <input name="kategori_artikel" type="radio" value="Karir" <?php echo ($artikel_edit->kategori_artikel === 'Karir') ? 'checked' : ''; ?> required autofocus>
                                <label for="kategori_artikel">Karir</label><br>

                                <label for="gambar_artikel">Gambar</label>
                                <input type="file" name="gambar_artikel" value="<?= $artikel_edit->gambar_artikel?>"><br>

                                <label for="isi_artikel">Isi Artikel</label><br>
                                <textarea name="isi_artikel" id="isi_artikel" cols="100" rows="10" value="<?= $artikel_edit->isi_artikel?>"></textarea>
                                <br>

                                <label for="status_artikel">Status Artikel</label><br>
                                <input name="status_artikel" type="radio" value="Publikasi" <?php echo ($artikel_edit->status_artikel === 'Publikasi') ? 'checked' : ''; ?> required autofocus>
                                <label for="status_artikel">Publikasi</label>
                                <input name="status_artikel" type="radio" value="Tidak Publikasi" <?php echo ($artikel_edit->status_artikel === 'Tidak Publikasi') ? 'checked' : ''; ?> required autofocus required autofocus>
                                <label for="status_artikel">Tidak Publikasi</label><br>

                                <a class="btn btn-sm btn-success float-right ml-1" style="color: white;" href="<?php echo site_url('article') ?>"> Batal</a>
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