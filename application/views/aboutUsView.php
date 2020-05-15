<!-- carousel cycle script -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.carousel').carousel({
		  interval: 4000
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa. Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla. In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat. Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat. Aliquam a tempor ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa.
			</p>
			<p class="lead">
				Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla. In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat. Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat.
			</p>
		</div>
		<div class="col ml-3 mr-3">
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa. Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla. In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat. Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat. Aliquam a tempor ipsum.
			</p>
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa.Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla. In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat. Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat.
		</div>
	</div>

	<!-- carousel -->
	<div id="carouselIndicator" class="carousel slide mt-3 mb-4">
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
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa. Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla. In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat. 
			</p>
			<p class="lead">
				Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat. Aliquam a tempor ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
		</div>
		<div class="col ml-3 mr-3">
			<h1 class="display-5"><img src="<?php echo base_url().'assets/img/aboutUsIcon2.svg'?>" class="aboutUsIcons">Tech to save life</h1>
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa. Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla.
			</p>
			<p class="lead">
				In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat. Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat. Aliquam a tempor ipsum.
			</p>
		</div>
		<div class="col ml-3 mr-3">
			<h1 class="display-5"><img src="<?php echo base_url().'assets/img/aboutUsIcon3.svg'?>" class="aboutUsIcons">Design & Interaction</h1>
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa. Sed et nisl laoreet, euismod mauris sed, dignissim massa. Nunc velit urna, vulputate at ante in, tincidunt efficitur nulla. In egestas scelerisque leo, at tempus tellus consequat sit amet. Nam vel sapien id metus sagittis placerat ac vel erat.
			</p>
			<p class="lead">
				Mauris dictum ac sapien vitae fringilla. Quisque a elementum orci. Aliquam erat volutpat. Aliquam a tempor ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in fringilla massa.
			</p>
		</div>
	</div>
</div>