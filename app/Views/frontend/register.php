<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>register</title>

  <?php include(APPPATH  . 'Views/imports/scripts/css_frontend.php') ?>
</head>

<body>
  <div class="section lpage">
    <a class="logo" style="margin-left: 30px;">UnveilU<span class="text-primary">.</span></a>
    <div class="register-container">
      <?php
      $session = session();
      // jiika ada salah satu form tidak diisi
      if ($session->getFlashdata('error') == 'failed') {
        echo "<div class='alert alert-danger font-weight-bold text-center'>
                    tolong isi form dengan benar
                    </div>";
      } else if ($session->getFlashdata('error') == 'exist') {
        echo "<div class='alert alert-danger font-weight-bold text-center'>
                    username telah ada! 
                    </div>";
      }
      ?>
      <form action="<?php echo base_url('registerProcess') ?>" method="post">
        <div class="register-form-group">
          <input type="text" id="usernameregister" name="usernameregister" placeholder="Buat username" required />
          <div class="register-form-group">
            <input type="password" id="passwordregister" name="passwordregister" placeholder="Buat password" required />
          </div>
        </div>
        <div class="register-form-group">
          <button type="submit" class="btnregister d-block mx-auto" name="simpan">
            DAFTAR
          </button>



        </div>
      </form>
    </div>
  </div>
  <span class="text-5">Ups, kamu belum daftar</span>
</body>

</html>