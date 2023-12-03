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

  <div class="section apege">
          <div class="container-services">
            <div class="row mb-5">
              <div class="tuulis col-lg-12">
                <h1
                  class="heading text-white text-center"
                  data-aos="fade-up"
                  data-aos-delay="100"
                >
                  Artikel
                </h1>
              </div>
            </div>
        
            <div class="category">
              <div class="category-buttons">
                <button class="btnklikartik" onclick="filterArticles('all')">Semua</button>
                <button class="btnklikartik" onclick="filterArticles('kampus')">Kampus</button>
                <button class="btnklikartik" onclick="filterArticles('karir')">Karir</button>
                <!-- Tambahkan tombol untuk kategori lainnya sesuai kebutuhan -->
              </div>
              <div id="article-list">
                <div class="ctb" data-category="kampus">
                  <article class="cta" data-aos="fade-up">
                    <img class="artikelcard" src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'>
                    <div class="cta__text-column">
                      <h2 class="judulcard">Aspect ratio is great</h2>
                      <p>This image has an aspect ratio of 3/2.</p>
                      <a href="#">Read all about it</a>
                    </div>
                  </article>
                </div>
                <div class="ctb" data-category="karir">
                  <article class="cta" data-aos="fade-up">
                    <img class="artikelcard" src='https://images.unsplash.com/photo-1569762825621-2dab96140a1d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzNDkxMQ&ixlib=rb-1.2.1&q=80&w=400' alt='Small blue-grey yellow-breasted bird'>
                    <div class="cta__text-column">
                      <h2 class="judulcard">Aspect ratio is great</h2>
                      <p>This image has an aspect ratio of 3/2. But when the text is longer, the image grows too, overriding its aspect ratio. Cool!</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a href="#">Read all about it</a>
                    </div>
                  </article>
                </div>
                <!-- Artikel-artikel lainnya di sini -->
              </div>
            </div>
        
            </div>
          </div>

          <?php include(APPPATH  . 'Views/imports/templates/frontend/footers.php') ?>

          <?php include(APPPATH  . 'Views/imports/scripts/js_frontend.php') ?>
</body>
</html>