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
<div class="hero overlay">
		<div class="container">
			<div class="row align-items-center justify-content-between pt-5">
				<div class="col-lg-12 text-center pe-lg-5">
					<h1 class="heading text-white mx-auto" data-aos="fade-up">Speak Freely,<br>Share Anonymously.</h1>
					<p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Embrace Your True Emotions Here</p>
				</div>
				</div>
			</div>
		</div>


	<div class="section">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-12 ps-lg-2">
					<div class="mx-auto">
						<h5 class="text-white" data-aos="fade-up">UnveilU adalah website penyedia layanan menfess (mention confess), confess dan berbagai info terakait karir dan kampus. 
							Kamu bisa mengekspresikan emosimu disini dengan bebas dan mendapatkan pengetahuan baru setiap harinya.</h5>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="tabs">
				<div class="tab-2" data-aos="fade-up">
				  <label for="tab2-1"><h3>Menfess</h3></label>
				  <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
				  <div>
					<h3 class="text-center text-white">Buat Menfess Kamu Sendiri</h3>
					<form>
    
						<textarea id="field" placeholder="Type Here" maxlength="3000" rows="10" cols="40"></textarea>
						<button type="submit" class="btnsend w-25 d-block mx-auto">Kirim</button>
						<div class="message"></div>
					 </form>
				  </div>
				</div>
				<div class="tab-2" data-aos="fade-up">
				  <label for="tab2-2"><h3>Confess</h3></label>
				  <input id="tab2-2" name="tabs-two" type="radio">
				  <div>
					<h3 class="text-center text-white">Buat Confess Kamu Sendiri</h3>
					<form>
    
						<textarea id="field" placeholder="Type Here" maxlength="3000" rows="10" cols="40"></textarea>
						<button type="submit" class="btnsend w-25 d-block mx-auto">Kirim</button>
						<div class="message"></div>
					 </form>
				  </div>
				</div>
			  </div>
		</div>
	


<div class="section sec-services">
	<div class="container-services">
		<div class="row mb-5">
			<div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
				<h1 class="text-white">Kamu Mungkin Suka</h1>
				
			</div>
		</div>

		<article class="cta" data-aos="fade-up">
			<img class="artikelcard" src='https://images.unsplash.com/photo-1600078686889-8c42747c25fe?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMzMjg5Nw&ixlib=rb-1.2.1&q=80&w=400' alt='Bluetit'>
			<div class="cta__text-column">
				<h2 class="judulcard">Aspect ratio is great</h2>
				<p>This image has an aspect ratio of 3/2.</p>
				<a href="#">Read all about it</a>
			</div>
		</article>
		
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
	</div>
</div>

<?php include(APPPATH  . 'Views/imports/templates/frontend/footers.php') ?>

<?php include(APPPATH  . 'Views/imports/scripts/js_frontend.php') ?>
</body>
</html>