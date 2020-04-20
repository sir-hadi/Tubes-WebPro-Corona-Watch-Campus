<div class="articleTitleBar row">
	<div class="col d-flex align-items-end">
		<span class="titleArticle display-4 ml-4 mb-3 pr-4 border-right border-dark" >ARTICLE</span>
		<?php if ($_SESSION['username']!="Guest") { ?>
		<span class="inputArticle display-5 ml-4 mb-3" >
			<a class="inputArticleLink" style="text-decoration: none;" href="#">Input Article</a>
		</span>
		<?php } ?>
	</div>
	<div
		class="titleArticleImage col-4"	
	></div>
</div>

<!-- current page bar stuff -->

<!-- I THINK WE DONT NEED THIS OR DO WE? Probably? -->

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= site_url() ?>">Homepage</a></li>
		<li class="breadcrumb-item active" aria-current="page">Article</li>
	</ol>
</nav>
<!-- page bar stuff end -->

<div class="articleContainer">
	<!-- row 1 -->
	<div class="row align-self-center">
		<!-- contents -->
		<?php foreach (array_reverse($artikel) as $a) { ?>
		<div class="newsSec col">
			<a class="newsSec" style="text-decoration: none;" href="<?= site_url(); ?>/artikel/read/<?= $a['idArtikel'] ?>">
				<div class="newsConten">
					<h5 class="newsTitle lead"><?php echo $a['judul']; ?></h5>
				</div>
				<div class="readMoreNews d-flex">
					<p class="readMoreText mr-auto pt-2 lead">Read More</p>
					<div class="p-2">
						<img
							class="arrowRight2"
							src="img/angle-arrow-pointing-to-right.svg"
							alt=""
						/>
					</div>
				</div>
			</a>
		</div>
		<?php } ?>
	</div>
</div>
<!-- end articles -->

<!-- pagination stuff -->
<!-- <nav aria-label="page navigation bar">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
				<a class="page-link" href="#" tabindex="-1">First</a>
		</li>
		<li class="page-item disabled">
				<a class="page-link" href="#" aria-label="Previous" tabindex="-1">
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
				</a>
		</li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">4</a></li>
		<li class="page-item"><a class="page-link" href="#">5</a></li>
		<li class="page-item"><a class="page-link" href="#">6</a></li>
		<li class="page-item">
				<a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Next</span>
				</a>
		</li>
		<li class="page-item">
				<a class="page-link" href="#">Last</a>
		</li>
	</ul>
</nav> -->
<div class="col">
    <!--Tampilkan pagination-->
    <?php echo $pagination; ?>
</div>
<!-- end pagination stuff -->