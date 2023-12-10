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
                <?php foreach($artikel_data as $articles):?>
                <div class="ctb" data-category="kampus">
                  <article class="cta" data-aos="fade-up">
                    <div class="kiri">
                      <img class="artikelcard" src="<?= base_url().'assets/images/'.$articles->gambar_artikel?>" alt='Bluetit' width="50%">
                    </div>
                    <div class="cta__text-column">
                      <h2 class="judulcard"><?= $articles->judul_artikel?></h2>
                      <p><?= $articles->penjelasan_singkatartikel?></p>
                      <a href="<?php site_url('isiartikel').'/'.$articles->id_artikel?>">Read all about it</a>
                    </div>
                  </article>
                </div>
                <div class="ctb" data-category="karir">
                  <article class="cta" data-aos="fade-up">
                    <div class="kiri">
                    <img class="artikelcard" src='<?= base_url().'assets/images/'.$articles->gambar_artikel?>' alt='Small blue-grey yellow-breasted bird'>
                    </div>
                    <div class="cta__text-column">
                      <h2 class="judulcard"><?= $articles->judul_artikel?></h2>
                      <p><?= $articles->penjelasan_singkatartikel?></p>
                      <a href="<?php site_url('isiartikel').'/'.$articles->id_artikel?>">Read all about it</a>
                    </div>
                  </article>
                </div>
                <?php endforeach?>
              </div>
            </div>
        
            </div>
          </div>

          <?php include(APPPATH  . 'Views/imports/templates/frontend/footers.php') ?>

          <?php include(APPPATH  . 'Views/imports/scripts/js_frontend.php') ?>
</body>
</html>