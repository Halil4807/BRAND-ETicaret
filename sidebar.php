
<div class="col-md-3"><!--sidebar-->
	<div class="title-bg">
		<div class="title">Kategoriler</div>
	</div>
	<div class="categorybox">
		<ul>
			<?php foreach ($kategoricek as $key => $value) {
				echo "<li><a href=\"kategori-".$value["kategori_seourl"]."\">".$value["kategori_ad"]."</a></li>";
			} ?>
		</ul>
	</div>
	<div class="ads"></div>
</div><!--sidebar-->