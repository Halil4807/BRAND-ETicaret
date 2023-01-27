<?php include 'header.php' ?>

<div class="container">

	<div class="clearfix"></div>
	<div class="lines"></div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	<div class="title-bg">
		<div class="title">Ödeme Sayfası</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered chart">
			<thead>
				<tr>
					<th>Ürün Resim</th>
					<th>Ürün ad</th>
					<th>Ürün Kodu</th>
					<th>Adet</th>
					<th>Adet Fiyat</th>
					<th>Toplam Fiyat</th>
				</tr>
			</thead>
			<tbody>


				<?php 
				$kullanici_id=$kullanicicek['kullanici_id'];
				$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
				$sepetsor->execute(array(
					'id' => $kullanici_id
				));
				$toplam_fiyat=0;
				while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

					$urun_id=$sepetcek['urun_id'];
					$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id");
					$urunsor->execute(array(
						'urun_id' => $urun_id
					));

					$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
					$toplam_fiyat+=$uruncek['urun_fiyat']*$sepetcek['urun_adet'];
					?>

					<tr>
						
						<td><img src="images\demo-img.jpg" width="100" alt=""></td>
						<td><?php echo $uruncek['urun_ad'] ?></td>
						<td><?php echo $uruncek['urun_id'] ?></td>
						<td><form><input disabled type="text" class="form-control quantity" value="<?php echo $sepetcek['urun_adet'] ?>"></form></td>
						<td><?php echo $uruncek['urun_fiyat'] ?></td>
						<td><?php echo $uruncek['urun_fiyat']*$sepetcek['urun_adet'] ?></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
	<div class="row">
		<div class="col-md-6">


		</div>
		<div class="col-md-3 col-md-offset-3">
			<div class="subtotal-wrap">
					<!--<div class="subtotal">
						<<p>Toplam Fiyat : $26.00</p>
						<p>Vat 17% : $54.00</p>
					</div>-->
					<div class="total">Toplam Fiyat : <span class="bigprice"><?php echo $toplam_fiyat ?> TL</span></div>
					<div class="clearfix"></div>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="tab-review"> <!-- Ödeme Alanı -->
			<ul id="myTab" class="nav nav-tabs shop-tab">
				<li class="active"><a href="#kredikarti" data-toggle="tab">Kredi Kartı</a></li>
				<li><a href="#bankahavalesi" data-toggle="tab">Banka Havalesi</a></li>
			</ul>
			<div id="myTabContent" class="tab-content shop-tab-ct">
				<div class="tab-pane fade active in" id="kredikarti">
					<p>
						Kredi Kartıile ödeme
					</p>
				</div>
				<div class="tab-pane fade" id="bankahavalesi">
					<p>
						Banka Havalesile ödeme
					</p>
				</div>
			</div>
		</div><!-- Ödeme Alanı -->
		

		<div class="spacer"></div>
	</div>

	<?php include 'footer.php' ?>