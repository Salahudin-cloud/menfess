<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include(APPPATH  . 'Views/imports/scripts/css_frontend.php') ?>
</head>
<body>
  <!-- preloader -->
	<?php include(APPPATH . 'Views/imports/templates/frontend/preload.php') ?>
<div class="section ppage">
      <a href="<?php echo site_url('/halaman_utama')?>"><button class="btnback fa fa-solid fa-arrow-left fa-xl"></button></a>
      <div class="container">
        <div class="row text-center align-items-center justify-content-center pt-5">
          <div class="col-lg-6">
            <img
            class="img-circle img-p"
            alt="Profile Picture"
            src="https://bootdey.com/img/Content/avatar/avatar2.png"
          />
          <h1 class="heading text-white mb-3" data-aos="fade-up" >Hirumai</h1>
          <div class="col-lg-12 ps-lg-2">
            <div class="mx-auto">
              <button class="btnlogout">Log Out</button>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    </div>
  <?php include(APPPATH  . 'Views/imports/templates/frontend/footers.php') ?>
  <?php include(APPPATH  . 'Views/imports/scripts/js_frontend.php') ?>
</body>
</html>