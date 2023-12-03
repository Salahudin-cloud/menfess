<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <?php include(APPPATH  . 'Views/imports/scripts/css_frontend.php') ?>
  </head>
  <body>
    <div class="section lpage">
    <a class="logo" style="margin-left: 30px;"
					>UnveilU<span class="text-primary">.</span></a>
        <div class="login-container">
          <form action="post">
          <div class="login-form-group">
            <input
              type="text"
              id="usernamelogin"
              name="usernamelogin"
              placeholder="Masukkan Username"
              required
            />
          <div class="login-form-group">
            <input
              type="password"
              id="passwordlogin"
              name="passwordlogin"
              placeholder="Masukkan Password"
              required
            />
          </div>
          </div>
          <div class="login-form-group">
            <button
              type="submit"
              class="btnlogin d-block mx-auto"
              name="simpan"
            >
              MASUK
            </button>
          </div>
          <span class="text-black" style="margin-left: 50px;">Jika Belum Memiliki Akun, Klik <a href="<?php echo site_url('/register')?>"><span style="color: white;">Disini</span></a></span>
        </form>
        </div>
    </div>
    <span class="text-4">Selamat Datang di UnveilU<br> Yuk, masuk dulu >.< </span>
  </body>
</html>
