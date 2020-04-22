<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= site_url() ?>">Homepage</a></li>
		<li class="breadcrumb-item"><a href="<?= site_url() ?>/artikel">Article</a></li>
		<li class="breadcrumb-item active" aria-current="page">Edit Article</li>
	</ol>
</nav>

<!-- form input article -->
<div class="container containerInputArticle align-items-center">
 	<form action="<?= site_url('artikel') ?>/editArtikel/<?= $artikel['idArtikel'] ?>" method="post">

 		<!-- judul -->
 		<div class="form-group">
 			<input class="form-control form-control-lg titleInputArticle" type="text" name="judul" value="<?= $artikel['judul'] ?>">
 		</div>

 		<!-- penulis -->
 		<div class="form-group">
 			<input class="form-control penulisInputArticle" type="text" name="penulis" value="<?= $artikel['penulis'] ?>">
 		</div>

 		<!-- isi -->
 		<div class="form-group border-top border-bottom border-dark">
 			<textarea class="form-control contentInputArticle" name="isi" rows="24" value="<?= $artikel['isi'] ?>"></textarea>
 		</div>

 		<!-- submit button -->
 		<div class="col text-center">
 			<button type="submit" class="btn btn-primary">Submit</button>
 		</div>
 		
 	</form>
</div>
<!-- end form input article -->