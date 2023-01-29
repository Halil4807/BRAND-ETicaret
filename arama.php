<?php 

include 'header.php'; 

if (isset($_POST['arama'])) {

$arama=$_POST['arama'];
	$urunsor=$db->prepare("SELECT * FROM urun where urun_ad LIKE ?");
	$urunsor->execute(array("%$arama%"));

	$say=$urunsor->rowCount();

} else {$say=0;}




?>



<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>
</div>

<div class="container">
	
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title">Ürünler</div>
				<div class="title-nav">
					<a href="javascripti:void(0);"><i class="fa fa-th-large"></i>grid</a>
					<a href="javascripti:void(0);"><i class="fa fa-bars"></i>List</a>
				</div>
			</div>
			<div class="row prdct"><!--Products-->


				<?php
				
				if ($say==0) {
					echo "Bu kategoride ürün bulunamadı";
				}

				while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {
					?>

					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>


								<?php 
								$urunresimsor=$db->prepare("SELECT * FROM urunresmi where urun_id=:urun_id");
								$urunresimsor->execute(array(
									'urun_id' => $uruncek["urun_id"]
								));
								$urunresimcek=$urunresimsor->fetch(PDO::FETCH_ASSOC);
								$urunresimsay=$urunresimsor->rowCount();
								if ($urunresimsay!=0) {?>
									<a href="urun-<?php echo $uruncek["urun_seourl"].'-'.$uruncek["urun_id"]?>"><img src="<?php echo $urunresimcek["urunresmi_adres"] ?>" alt="" class="img-responsive"></a>
									<?php 
								}
								else{?>


									<a href="urun-<?php echo $uruncek["urun_seourl"].'-'.$uruncek["urun_id"]?>"><img src="dimg/urun-resmi-yok.png" alt="" class="img-responsive"></a>

									<?php 
									
								}
								?>

								
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice"><?php echo $uruncek['urun_fiyat']*1.50 ?> TL</span><?php echo $uruncek['urun_fiyat'] ?> TL</span></div></div>
							</div>
							<span class="smalltitle"><a href="urun-<?php echo $uruncek["urun_seourl"].'-'.$uruncek["urun_id"]?>"><?php echo $uruncek['urun_ad'] ?></a></span>
							<span class="smalldesc">Ürün Kodu.: <?php echo $uruncek['urun_id'] ?></span>
						</div>
					</div>


				<?php } ?>





			</div><!--Products-->

<!-- 
				<ul class="pagination shop-pag">
					<li><a href="#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
				</ul> -->

			</div>

			<?php include 'sidebar.php'; ?>
		</div>
		<div class="spacer"></div>
	</div>
	
	<?php include 'footer.php'; ?>