<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Kantin Kampus</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/Politeknik-Negeri-Padang.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<!-- <img src="img/Politeknik-Negeri-Padang.jpg" alt="Logo" class="tm-site-logo" />  -->
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Kantin Kampus</h1>
								<h6 class="tm-site-description">Politeknik Negeri Padang</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="index.php?p=mhs" class="tm-nav-link">Mahasiswa</a></li>
								<li class="tm-nav-li"><a href="index.php?p=menu" class="tm-nav-link">Menu</a></li>
								<li class="tm-nav-li"><a href="index.php?p=pegawai" class="tm-nav-link">Pegawai</a></li>
								<li class="tm-nav-li"><a href="index.php?p=supplier" class="tm-nav-link">Supplier</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to Kantin Kampus</h2>
				<p class="col-12 text-center">Kantin kampus Politeknik Negeri Padang adalah tempat di kampus universitas atau institusi pendidikan lainnya yang menyediakan makanan dan minuman untuk mahasiswa.kantin kampus dapat menjadi tempat populer bagi anggota komunitas kampus untuk bersosialisasi,makan siang,atau sekedar mengambil cemilan.menu kantin kampus bisa bervariasi,mencakup berbagai jenis makanan dan minuman untuk memenuhi selera beragam.</p>
			</header>
			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
				<?php
                           include("../koneksi.php");
						   $tampil = mysqli_query($db, "select * from menu");
						   $no = 1;

						   while ($data = mysqli_fetch_array($tampil)) {
						   ?>

					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar2.jpeg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title"><?= $data['nama']?></h4>
								<p class="tm-gallery-description">Nasi goreng merupakan sajian nasi yang digoreng dalam sebuah wajan atau penggorengan yang menghasilkan cita rasa berbeda karena dicampur dengan bumbu-bumbu </p>
								<p class="tm-gallery-price">Rp. 10.000</p>
							</figcaption>
						</figure>
					</article>
					<?php
                            $no++;
                            }
                            ?>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar3.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Ayam Penyet</h4>
								<p class="tm-gallery-description">Ayam penyet adalah hidangan Ayam goreng Indonesia, serta disajikan dengan sambal, potongan-potongan timun, tahu goreng dan tempe.</p>
								<p class="tm-gallery-price">Rp. 15.000 </p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar5.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Mie Goreng</h4>
								<p class="tm-gallery-description">Mie goreng berarti "mi yang digoreng" adalah hidangan mie yang dimasak dengan digoreng tumis khas Indonesia.</p>
								<p class="tm-gallery-price">Rp. 8.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar6.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Ayam Bakar</h4>
								<p class="tm-gallery-description">	Ayam yang dibumbui dengan kunyit, bawang putih, bawang merah dan rempah-rempah lainnya, dipanggang di atas arang</p>
								<p class="tm-gallery-price">Rp. 16.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar1.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pecel Ayam</h4>
								<p class="tm-gallery-description">Pecel ayam atau pecek ayam di Indonesia adalah nama sebuah makanan khas Jawa yang terdiri dari ayam ungkep dan sambal tomat.</p>
								<p class="tm-gallery-price">Rp. 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar4.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Pecel Lele</h4>
								<p class="tm-gallery-description">Pecel lele atau pecek lele atau penyetan adalah makanan khas Jawa Timur, yang terdiri dari ikan lele dan sambal tomat.</p>
								<p class="tm-gallery-price">Rp. 15.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar7.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Lontong Sayur</h4>
								<p class="tm-gallery-description">Lontong ini identik dengan kuah santan yang memiliki bumbu kental khas masakan Minang. </p>
								<p class="tm-gallery-price">Rp. 8.000</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/gambar9.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Makanan Ampera</h4>
								<p class="tm-gallery-description">Ampera menyajikan menu-menu khas Sunda seperti nasi liwet, nasi timbel, gepuk, ayam bakar, ayam kecap, bacem, aneka pepes, dan lainnya. </p>
								<p class="tm-gallery-price">Rp. 13.000</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
				</div> <!-- gallery page 3 -->
			</div>
		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2024 Kantin Kampus 
            
            | Design: <a rel="nofollow" href="https://templatemo.com">Fitri Sakinah</a></p>
		</footer>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>