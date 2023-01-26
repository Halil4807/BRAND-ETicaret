<?php include"header.php";


$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
$urunsor->execute(array(
	'urun_id' => $_GET['urun_id']
));
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

if ($urunsor->rowCount()==0) {
	header("Location:index.php");
	exit;
}
$kategorisor3=$db->prepare("SELECT * FROM kategori where kategori_id=:kategori_id");
$kategorisor3->execute(array(
	'kategori_id' => $uruncek['kategori_id']
));
$kategoricek3=$kategorisor3->fetch(PDO::FETCH_ASSOC);

?>


<div class="container">
	<div class="row">
		<div class="col-md-9"><!--Main content-->
			<div class="title-bg">
				<div class="title"><?php echo $uruncek ['urun_ad']; ?></div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="dt-img">
						<div class="detpricetag"><div class="inner"><?php echo $uruncek['urun_fiyat']; ?><p class="fa fa-turkish-lira"></p></div></div>
						<a class="fancybox" href="images\sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
					</div>
					<div class="thumb-img">
						<a class="fancybox" href="images\sample-4.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-4.jpg" alt="" class="img-responsive"></a>
					</div>
					<div class="thumb-img">
						<a class="fancybox" href="images\sample-5.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-5.jpg" alt="" class="img-responsive"></a>
					</div>
					<div class="thumb-img">
						<a class="fancybox" href="images\sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-md-6 det-desc">
					<div class="productdata">
						<div class="infospan">Ürün Kategorisi <span><?php echo $kategoricek3['kategori_ad']; ?></span></div>
						<div class="infospan">Ürün Kodu <span><?php echo $uruncek['urun_id']; ?></span></div>
						<div class="infospan">Ürün Fiyatı <span><?php echo $uruncek['urun_fiyat']; ?> <p class="fa fa-turkish-lira"></p></span></div>

						<form class="form-horizontal ava" role="form">
							<div class="form-group">
								<label for="qty" class="col-sm-2 control-label">Qty</label>
								<div class="col-sm-4">
									<select class="form-control" id="qty">
										<option>1
											<option>2
												<option>3
													<option>4
														<option>5
														</select>
													</div>
													<div class="col-sm-4">
														<button class="btn btn-default btn-red btn-sm"><span class="addchart">Add To Chart</span></button>
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
												<div class="avatock"><span>
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
										<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
										<li class=""><a href="#rev" data-toggle="tab">Reviews (0)</a></li>
									</ul>
									<div id="myTabContent" class="tab-content shop-tab-ct">
										<div class="tab-pane fade active in" id="desc">
											<p>
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
											</p>
										</div>
										<div class="tab-pane fade" id="rev">
											<p class="dash">
												<span>Jhon Doe</span> (11/25/2012)<br><br>
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
											</p>
											<h4>Write Review</h4>
											<form role="form">
												<div class="form-group">
													<input type="text" class="form-control" id="name">
												</div>
												<div class="form-group">
													<textarea class="form-control" id="text"></textarea>
												</div>
												<div class="form-group">
													<div class="rate"><span>Rating:</span></div>
													<div class="starwrap">
														<div id="default"></div>
													</div>
													<div class="clearfix"></div>
												</div>
												<button type="submit" class="btn btn-default btn-red btn-sm">Submit</button>
											</form>

										</div>
									</div>
								</div>

								<div id="title-bg">
									<div class="title">Related Product</div>
								</div>
								<div class="row prdct"><!--Products-->
									<div class="col-md-4">
										<div class="productwrap">
											<div class="pr-img">
												<div class="hot"></div>
												<a href="product.htm"><img src="images\sample-4.jpg" alt="" class="img-responsive"></a>
												<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div></div>
											</div>
											<span class="smalltitle"><a href="product.htm">Lens</a></span>
											<span class="smalldesc">Item no.: 1000</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="productwrap">
											<div class="pr-img">
												<div class="new"></div>
												<a href="product.htm"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
												<div class="pricetag blue"><div class="inner">$199</div></div>
											</div>
											<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
											<span class="smalldesc">Item no.: 1000</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="productwrap">
											<div class="pr-img">
												<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
												<div class="pricetag"><div class="inner">$199</div></div>
											</div>
											<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
											<span class="smalldesc">Item no.: 1000</span>
										</div>
									</div>
								</div><!--Products-->
								<div class="spacer"></div>
							</div><!--Main content-->
							<?php include"sidebar.php"; ?>
						</div>
					</div>

					<?php include"footer.php"; ?>