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
                            <form action="post">
                                <label for="judul">Judul</label><br>
                                <input type="text" name="judulartikle" maxlength="90">
                                <br>
                                <label for="Kategori">Kategori</label><br>
                                <input name="kategori" type="radio" value="Kampus" required autofocus>
                            <label for="kategori">Karir</label>
                            <input name="kategori" type="radio" value="Karir"required autofocus>
                            <label for="kategori">Kampus</label><br>
                                <label for="isiartikel">Isi Artikel</label><br>
                                <textarea name="isiartikel" id="isiartikel" cols="100" rows="10"></textarea>
                                <br>
                                <input name="publikasi" type="radio" value="Publikasi" required autofocus>
                                <label for="publikasi">Publikasi</label><br>
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