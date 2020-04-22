<div class="articleTitleBar row">
	<div class="col d-flex align-items-end">
		<div class="titleArticle display-4 ml-4 mb-3" >ARTICLE</div>
		<?php if ($_SESSION['username']!="Guest") { ?>
		<span class="inputArticle display-5 ml-4 mb-3" >
			<a class="inputArticleLink" style="text-decoration: none;" href="<?= site_url() ?>/artikel/formEditArtikel/<?= $artikel['idArtikel'] ?>">Edit Article</a>
			<a class="inputArticleLink" style="text-decoration: none;" href="<?= site_url() ?>/artikel/hapusArtikel/<?= $artikel['idArtikel'] ?>">Delete Article</a>
		</span>
		<?php } ?>
	</div>
	<div
		class="titleArticleImage col-4"	
	></div>
</div>

<!-- current page bar stuff -->

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= site_url() ?>">Homepage</a></li>
		<li class="breadcrumb-item"><a href="<?= site_url('artikel') ?>">Article</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $artikel['judul'] ?></li>
	</ol>
</nav>
<!-- page bar stuff end -->

<!-- isi -->
<div class="readArticleContainer container">
	<div class="row">
		<h1 class="display-4"><?php echo $artikel['judul'] ?></h1>
	</div>
	<div class="row">
		<h5>by <?php echo $artikel['penulis'] ?></h5>
	</div>
	<div class="row">
		<p class="lead"><?php echo $artikel['isi'] ?></p>
	</div>
</div>
<!-- end isi -->