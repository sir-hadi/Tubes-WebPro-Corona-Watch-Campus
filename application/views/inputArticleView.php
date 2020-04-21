<!-- current page bar stuff -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Homepage</a></li>
		<li class="breadcrumb-item"><a href="#">Article</a></li>
		<li class="breadcrumb-item active" aria-current="page">Input Article</li>
	</ol>
</nav>
<!-- page bar stuff end -->

<!-- form input article -->
<div class="container containerInputArticle align-items-center">
 	<form action="" method="post">

 		<!-- judul -->
 		<div class="form-group">
 			<input class="form-control form-control-lg titleInputArticle" type="text" name="judul" placeholder="Add Title Here!">
 		</div>

 		<!-- isi -->
 		<div class="form-group border-top border-bottom border-dark">
 			<textarea class="form-control contentInputArticle" name="isi" rows="24" placeholder="write here!"></textarea>
 		</div>

 		<!-- submit button -->
 		<div class="col text-center">
 			<button type="submit" class="btn btn-primary">Submit</button>
 		</div>
 		
 	</form>
</div>
<!-- end form input article -->