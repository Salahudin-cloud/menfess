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

<!-- navbar -->
<?php include(APPPATH . 'Views/imports/templates/frontend/navbar.php') ?>
<div class="section apage">
        <div class="container-services">
          <div class="row mb-5">
          </div>
          <section class="paneli col-md-12">
            <div class="panel">
              <div class="panel-body">
                <span class="text-start text-black">Artikel>Kampus</span>
                <h2 class="judulcard text-center text-white">Aspect ratio is great</h2>
                <div class="artikelcardisi">
                 <img src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'>
                </div>
            <div class="cta__text-column text-white">
              <p>This image has an aspect ratio of 3/2.
                Sed diam nonummy nibh euismod tincidunt ut laoreet
                dolore magna aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation ullamcorper
                suscipit lobortis nisl ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
          
              </div>
            </div>
      </section>
          </div>
        </div>
      </div>
      <?php include(APPPATH  . 'Views/imports/templates/frontend/footers.php') ?>

<?php include(APPPATH  . 'Views/imports/scripts/js_frontend.php') ?>
</body>
</html>