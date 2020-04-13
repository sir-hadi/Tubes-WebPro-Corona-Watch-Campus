<div class="articleTitleBar row">
	<div class="col d-flex align-items-end">
		<div class="titleArticle display-4 ml-4 mb-3" >ARTICLE</div>
	</div>
	<div
		class="titleArticleImage col-4"	
	></div>
</div>

<!-- current page bar stuff -->

<!-- I THINK WE DONT NEED THIS OR DO WE? Probably? -->

<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Homepage</a></li>
		<li class="breadcrumb-item active" aria-current="page">Article</li>
	</ol>
</nav>
<!-- page bar stuff end -->

<!-- articles -->
<!-- 
	Now here's the thing
	this will call articles from array 0 to 7 (exactly 8) if its page 1
	the thing is, if it's not exactly 8
	I'm still confused
	HELP
	also not sure If this is correct so please fix whatever is weird
 -->
<div class="articleContainer">
	<?php for ($i=0; $i < 2; $i++) { ?>
		<!-- row -->
		<div class="row align-self-center">
			<!-- content -->
			<?php for ($j=((0+4*$i)+8*($page-1)); $j <= ((3+4*$i)+8*($page-1)) ; $j++) { ?>
				<!-- 
					example: row 1(i=0) page 1 , from (0+4*0)+8*(1-1)=0 to (3+4*0)+8(1-1)=3
						     row 2(i=2) page 1 , from (0+4*1)+8*(1-1)=4 to (3+4*1)+8(1-1)=7
					sepparate them just in case we need to send out like 4 to 7 only?
				 -->
				<a class="newsSec" style="text-decoration: none;" href="">
					<div class="newsConten">
						<p class="newsDate lead"><?= $article[$j]["newsDate"] ?></p>
						<h5 class="newsTitle lead"><?= $article[$j]["newsTitle"] ?></h5>
						<!-- wait, do we need descriptions here? -->
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
			<?php } ?>
		</div>
	<?php } ?>
</div>
<!-- end articles -->

<!-- pagination stuff -->
<nav aria-label="page navigation bar">
	<ul class="pagination justify-content-center">
		<li class="page-item <?php if ($page==1) echo "disabled"; ?>">
				<a class="page-link" href="#" <?php if ($page==1) echo "tabindex='-1'"; ?>>First</a>
		</li>
		<li class="page-item <?php if ($page==1) echo "disabled"; ?>">
				<a class="page-link" href="#" aria-label="Previous" <?php if ($page==1) echo "tabindex='-1'"; ?>>
				<span aria-hidden="true">&laquo;</span>
				<span class="sr-only">Previous</span>
				</a>
		</li>
		<!-- page count in the model or? -->
		<?php 

			for ($i=0; $i < $pagecount; $i++) { ?>
			<li class="page-item <?php if ($i==$page) echo "active"; ?>"><a class="page-link" href="#"><?= ($i+1) ?></a></li>
			
		<?php } ?>
		<li class="page-item <?php if ($page==$pagecount) echo "disabled"; ?>">
				<a class="page-link" href="#" aria-label="Next" <?php if ($page==$pagecount) echo "tabindex='-1"; ?>>
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Next</span>
				</a>
		</li>
		<li class="page-item <?php if ($page==$pagecount) echo "disabled"; ?>">
				<a class="page-link" href="#" <?php if ($page==$pagecount) echo "tabindex='-1"; ?>>Last</a>
		</li>
	</ul>
</nav>
<!-- end pagination stuff -->