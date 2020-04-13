<div class="articleTitleBar row">
	<div class="col d-flex align-items-end">
		<div class="titleArticle display-4 ml-4 mb-3" >ARTICLE</div>
	</div>
	<div
		class="titleArticleImage col-4"	
	></div>
</div>

<!-- current page bar stuff -->

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Homepage</a></li>
		<li class="breadcrumb-item"><a href="#">Article</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?= $article["judul"] ?></li>
	</ol>
</nav>
<!-- page bar stuff end -->

<!-- isi -->
<div class="readArticleContainer container">
	<div class="row">
		<h6>$<?= $article["tanggal"] ?></h6>
	</div>
	<div class="row">
		<h1 class="display-4"><?= $article["judul"] ?></h1>
	</div>
	<div class="row">
		<h5>by <?= $article["penulis"] ?></h5>
	</div>
	<div class="row">
		<p class="lead"><?= $article["isi"] ?></p>
	</div>
</div>
<!-- end isi -->