<?php include"header.php";


$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
$urunsor->execute(array(
	'urun_id' => $_GET['urun_id']
));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);


$benzerurunsor=$db->prepare("SELECT * FROM urun where kategori_id=:kategori_id ORDER BY rand() LIMIT 3");
$benzerurunsor->execute(array(
	'kategori_id' => $uruncek['kategori_id']
));

$urunresimsor=$db->prepare("SELECT * FROM urunresmi where urun_id=:urun_id");
$urunresimsor->execute(array(
	'urun_id' => $_GET['urun_id']
));

if ($urunsor->rowCount()==0) {
	header("Location:index.php");
	exit;
}
$kategorisor3=$db->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$kategorisor3->execute(array(
	'kategori_id' => $uruncek['kategori_id']
));
$kategoricek3=$kategorisor3->fetch(PDO::FETCH_ASSOC);

$yorumsor=$db->prepare("SELECT * FROM yorumlar where urun_id=:urun_id AND yorum_durum=:yorum_durum");
$yorumsor->execute(array(
	'urun_id' => $uruncek['urun_id'],
	'yorum_durum' => '1'
));
$yorumsay=$yorumsor->rowCount();




?>


<div class="container">
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title"><?php echo $uruncek ['urun_ad']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-6">

					<?php  $sayac=0; 
					while ($urunresimcek=$urunresimsor->fetch(PDO::FETCH_ASSOC)) {
						if ($sayac==0) {  ?>
							<div class="dt-img">
								<div class="detpricetag"><div class="inner"><?php echo $uruncek['urun_fiyat']; ?><p class="fa fa-turkish-lira"></p></div></div>
								<a class="fancybox" href="<?php echo $urunresimcek['urunresmi_adres']; ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $urunresimcek['urunresmi_adres']; ?>" alt="" class="img-responsive"></a>
							</div>
						<?php } else{?>
							<div class="thumb-img">
								<a class="fancybox" href="<?php echo $urunresimcek['urunresmi_adres']; ?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="<?php echo $urunresimcek['urunresmi_adres']; ?>" alt="" class="img-responsive"></a>
							</div>
						<?php }
						$sayac++;
					} ?>

				</div>
				<div class="col-md-6 det-desc">
					<div class="productdata">
						<div class="infospan">Ürün Kategorisi <span><?php echo $kategoricek3['kategori_ad']; ?></span></div>
						<div class="infospan">Ürün Kodu <span><?php echo $uruncek['urun_id']; ?></span></div>
						<div class="infospan">Ürün Fiyatı <span><?php echo $uruncek['urun_fiyat']; ?> <p class="fa fa-turkish-lira"></p></span></div>
						<br>
						<form action="nedmin/netting/islem.php" method="POST">
							<div class="form-group">
								<input type="text" hidden name="urun_id" required="required" value="<?php echo $uruncek['urun_id'];?>">
								<input type="text" hidden name="urun_seourl" required="required" value="<?php echo $uruncek['urun_seourl'];?>">
								<input type="text" hidden name="kullanici_id" required="required" value="<?php echo $kullanicicek['kullanici_id'];?>">
								<label for="qty" class="col-sm-2 control-label">Adet</label>
								<div class="col-sm-4">
									<input type="Number" class="form-control" id="urun_adet" name="urun_adet" value="1" min="1" max="<?php echo $uruncek['urun_stok']; ?>">
								</div>
								<div class="col-sm-4">
									<button type="submit" name="sepeteekle" class="btn btn-default btn-red btn-sm"<?php if ($uruncek['urun_stok']==0){ echo "disabled";} ?>><span class="addchart">Sepete Ekle</span></button>
								</div>
								<div class="clearfix"></div>
							</div>
						</form>

						<div class="sharing">
							<div class="share-bt">
								<div class="addthis_toolbox addthis_default_style ">
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
								<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f0d0827271d1c3b"></script>
								<div class="clearfix"></div>
							</div>
							<div class="avatock">Stok Durumu: <span>
								<?php 
								if ($uruncek['urun_stok']>0) {
									echo $uruncek['urun_stok'];
								}else{
									echo "Ürün stokta yok!";
								}

								?>

							</span></div>
						</div>

					</div>
				</div>
			</div>

			<div class="tab-review">
				<ul id="myTab" class="nav nav-tabs shop-tab">
					<li class="active"><a href="#desc" data-toggle="tab">Açıklama</a></li>
					<li class=""><a href="#rev" data-toggle="tab">Yorum (<?php echo $yorumsay; ?>)</a></li>
				</ul>
				<div id="myTabContent" class="tab-content shop-tab-ct">
					<div class="tab-pane fade active in" id="desc">
						<p>
							<?php echo $uruncek['urun_detay']; ?>
						</p>
					</div>
					<div class="tab-pane fade" id="rev">

						<h4>Yorum yazın <small align="right">
							<?php 

							if (isset($_GET['durum'])&&$_GET['durum']=="ok") {?>
								<b style="color:green;">İşlem Başarılı...</b>
							<?php } elseif (isset ($_GET['durum'])&&$_GET['durum']=="no") {?>
								<b style="color:red;">İşlem Başarısız...</b>
							<?php }
						?></small>
					</h4>

					<?php if (isset($_SESSION['kullanici_mail'])) { ?>
						<form action="nedmin/netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
							<input type="text" hidden name="urun_id" required="required" value="<?php echo $uruncek['urun_id'];?>">
							<input type="text" hidden name="urun_seourl" required="required" value="<?php echo $uruncek['urun_seourl'];?>">
							<input type="text" hidden name="kullanici_id" required="required" value="<?php echo $kullanicicek['kullanici_id'];?>">
							<div class="form-group">
								<textarea class="form-control" id="text" name="yorum_detay"></textarea>
							</div>
							<button type="submit" name="yorumekle" class="btn btn-default btn-red btn-sm">Yorum Ekle</button>
						</form>

					<?php } else {echo "Yorum yazmak için login olun!";} ?>
					<p class="dash"></p>

					<?php 
					while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {
						$yorumkullanicisisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
						$yorumkullanicisisor->execute(array('kullanici_id' => $yorumcek['kullanici_id']));
						$yorumkullanicisicek=$yorumkullanicisisor->fetch(PDO::FETCH_ASSOC);
						?>
						<p class="dash">
							<span> <?php echo $yorumkullanicisicek['kullanici_adsoyad']; ?>		</span> 
							(<?php echo $yorumcek['yorum_zaman']; ?>)<br><br>
							<?php echo $yorumcek['yorum_detay']; ?>
						</p>
					<?php } ?>


				</div>
			</div>
		</div>

		<div id="title-bg">
			<div class="title">Related Product</div>
		</div>
		<div class="row prdct"><!--Products-->

			<?php while($benzeruruncek=$benzerurunsor->fetch(PDO::FETCH_ASSOC)){ ?>
				<div class="col-md-4">
					<div class="productwrap">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="urun-<?php echo $benzeruruncek["urun_seourl"].'-'.$benzeruruncek["urun_id"]?>"><img src="images\sample-4.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><?php echo $benzeruruncek['urun_fiyat']; ?></span></div></div>
						</div>
						<span class="smalltitle"><a href="urun-<?php echo $benzeruruncek["urun_seourl"].'-'.$benzeruruncek["urun_id"]?>"><?php echo $benzeruruncek['urun_ad']; ?></a></span>
						<span class="smalldesc">Ürün Kodu: <?php echo $benzeruruncek['urun_id']; ?></span>
					</div>
				</div>
			<?php } ?>



		</div><!--Products-->
		<div class="spacer"></div>
	</div><!--Main content-->
	<?php include"sidebar.php"; ?>
</div>
</div>

<?php include"footer.php"; ?>