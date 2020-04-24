<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?= site_url() ?>">Homepage</a></li>
		<li class="breadcrumb-item"><a href="<?= site_url() ?>/artikel">Article</a></li>
		<li class="breadcrumb-item active" aria-current="page">Input Article</li>
	</ol>
</nav>

<!-- form input article -->
<div class="container containerInputArticle align-items-center">
 	<form action="<?= site_url('artikel') ?>/tulisArtikel" method="post">

 		<!-- judul -->
 		<div class="form-group">
 			<input class="form-control form-control-lg titleInputArticle rounded-0" type="text" name="judul" placeholder="Add Title Here!">
 		</div>

 		<!-- penulis -->
 		<div class="form-group">
 			<input class="form-control penulisInputArticle rounded-0" type="text" name="penulis" placeholder="Add Writer Here!">
 		</div>

 		<!-- isi -->
 		<div class="form-group border-top border-bottom border-dark rounded-0">
 			<textarea class="form-control contentInputArticle" name="isi" rows="24" placeholder="write here!"></textarea>
 		</div>

 		<!-- submit button -->
 		<div class="col text-center">
 			<button type="submit" class="btn btn-primary rounded-0">Submit</button>
 		</div>
 		
 	</form>
</div>
<!-- end form input article -->