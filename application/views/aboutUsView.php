<!-- carousel cycle script -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({
		  interval: 4000;
		});
		$('.carousel').carousel('cycle');
	});
</script>

<div class="aboutUsTitleBar row">
	<div class="col d-flex align-items-center justify-content-center">
		<span class="display-4 text-white" >About Us</span>
	</div>
</div>

<!-- current page bar stuff -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= site_url() ?>">Homepage</a></li>
		<li class="breadcrumb-item active" aria-current="page">About Us</li>
	</ol>
</nav>
<!-- page bar stuff end -->

<!-- whole content -->
<div class="container">
	<!-- first paragraphs -->
	<div class="row">
		<div class="col ml-3 mr-3">
			<p class="lead">
				Cerita kami dimulai saat berita tubes Webpro sampai di telinga kami. dengan sigap kami membentuk kelompok, lalu dengan penuh kehati-hatian kami memilih topik yang ingin kami ajukan. dan betul melihat banyaknya masyarakat yang masih awam terhadapa informasi kami memiliki ide untuk membangun website tubes ini.
			</p>
			<p class="lead">
				Setelah perombakan ide kami mulai untuk membentuk satuan kerja banyak perdebatan yang telah kami lalui. Dari perdebatan itu lahirlah rencana dan solidaritas antara kami, sampai akhirnya kami menyelesaikan website ini. Menariknya banyak hal yang kami pelajari dari kegiatan ini. Banyak cerita yang kami dapat. tak hanya itu kami juga ingin berterimakasih kepada jajaran dosen yang telah mengarahkan kami selama webpro. Dan tentu tidak lupa para asprak yang telah membantu kami.
			</p>
		</div>
		<div class="col ml-3 mr-3">
			<p class="lead">
				Disini kami menggunakan website untuk menyalurkan informasi penting dan berita update mengenai Covid-19. Bersama tim kami mengembangkan web berdasarkan arahan dan ilmu yang didapat dari praktikum, dan tentu arahan dari dosen mata kuliah.
			</p>
			<p class="lead">
				Banyak hal yang telah kami lalui dalam pengembangan web ini. banyak waktu yang telah kami korbankan untuk mengupayakan menyalurkan informasi penting terkait Covid-19. Namun bukan kata lelah yang kami dapat setelah melihat hasil ini melainkan bangga. kami beranggotakan 5 orang. Ilham, Hadi, Ivan, Made, nabil itulah nama-nama kami. Memang sedikit tapi kami selalu berupaya untuk menyatukan kinerja kami. tak mudah untuk bisa membagi tugas sampai kami berdiskusi via discord
		</div>
	</div>

	<!-- carousel -->
	<div id="carouselIndicator" class="carousel slide mt-3 mb-4" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active aboutUsCarousel">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/img/carousel1.jpg'?>" alt="First slide">
		    </div>
		    <div class="carousel-item aboutUsCarousel">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/img/carousel2.jpg'?>" alt="Second slide">
		    </div>
		    <div class="carousel-item aboutUsCarousel">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/img/carousel3.jpg'?>" alt="Third slide">
		    </div>
		    <div class="carousel-item aboutUsCarousel">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/img/carousel4.jpg'?>" alt="Third slide">
		    </div>
		</div>
		<ol class="carousel-indicators">
		    <li data-target="#carouselIndicator" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselIndicator" data-slide-to="1"></li>
		    <li data-target="#carouselIndicator" data-slide-to="2"></li>
		    <li data-target="#carouselIndicator" data-slide-to="3"></li>
		</ol>
		<a class="carousel-control-prev" href="#carouselIndicator" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselIndicator" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>

	<!-- last paragraphs -->
	<div class="row">
		<div class="col ml-3 mr-3">
			<h1 class="display-5"><img src="<?php echo base_url().'assets/img/aboutUsIcon1.svg'?>" class="aboutUsIcons">Our Story</h1>
			<p class="lead">
				Cerita kami dimulai saat berita tubes Webpro sampai di telinga kami. dengan sigap kami membentuk kelompok, lalu dengan penuh kehati-hatian kami memilih topik yang ingin kami ajukan. dan betul melihat banyaknya masyarakat yang masih awam terhadapa informasi kami memiliki ide untuk membangun website tubes ini. 
			</p>
			<p class="lead">
				Setelah perombakan ide kami mulai untuk membentuk satuan kerja banyak perdebatan yang telah kami lalui. Dari perdebatan itu lahirlah rencana dan solidaritas antara kami, sampai akhirnya kami menyelesaikan website ini.
			</p>
		</div>
		<div class="col ml-3 mr-3">
			<h1 class="display-5"><img src="<?php echo base_url().'assets/img/aboutUsIcon2.svg'?>" class="aboutUsIcons">Tech to save life</h1>
			<p class="lead">
				Disini kami menggunakan website untuk menyalurkan informasi penting dan berita update mengenai Covid-19. Bersama tim kami mengembangkan web berdasarkan arahan dan ilmu yang didapat dari praktikum, dan tentu arahan dari dosen mata kuliah.
			</p>
			<p class="lead">
				Banyak hal yang telah kami lalui dalam pengembangan web ini. banyak waktu yang telah kami korbankan untuk mengupayakan menyalurkan informasi penting terkait Covid-19. Namun bukan kata lelah yang kami dapat setelah melihat hasil ini melainkan bangga.
			</p>
		</div>
		<div class="col ml-3 mr-3">
			<h1 class="display-5"><img src="<?php echo base_url().'assets/img/aboutUsIcon3.svg'?>" class="aboutUsIcons">Design & Interaction</h1>
			<p class="lead">
				kami beranggotakan 5 orang. Ilham, Hadi, Ivan, Made, nabil itulah nama-nama kami. Memang sedikit tapi kami selalu berupaya untuk menyatukan kinerja kami. tak mudah untuk bisa membagi tugas sampai kami berdiskusi via discord
			</p>
			<p class="lead">
				Menariknya banyak hal yang kami pelajari dari kegiatan ini. Banyak cerita yang kami dapat. tak hanya itu kami juga ingin berterimakasih kepada jajaran dosen yang telah mengarahkan kami selama webpro. Dan tentu tidak lupa para asprak yang telah membantu kami.
			</p>
		</div>
	</div>
</div>