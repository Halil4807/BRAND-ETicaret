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
		<div class="title">Alışveriş Sepetim</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered chart">
			<thead>
				<tr>
					<th>Sil</th>
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
						
						<td width="5%"><center><a href="nedmin/netting/islem.php?sepet_id=<?php echo $sepetcek['sepet_id']; ?>&sepettensil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
						<td><img src="<?php 
						$urunresimsor=$db->prepare("SELECT * FROM urunresmi where urun_id=:urun_id");
						$urunresimsor->execute(array(
							'urun_id' => $uruncek["urun_id"]
						));
						$urunresimcek=$urunresimsor->fetch(PDO::FETCH_ASSOC);
						$urunresimsay=$urunresimsor->rowCount();
						if ($urunresimsay!=0) {
							echo $urunresimcek["urunresmi_adres"];
						}
						else{
							echo "dimg/urun-resmi-yok.png";
						}
						?>" width="100" alt=""></td>
						<td><?php echo $uruncek['urun_ad'] ?></td>
						<td><?php echo $uruncek['urun_id'] ?></td>
						<td width="100"><input type="Number" class="form-control" id="urun_adet" name="urun_adet" value="<?php echo $sepetcek['urun_adet'] ?>" min="1" max="<?php echo $uruncek['urun_stok']; ?>"></td>
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
					<a href="odeme" class="btn btn-default btn-yellow">Ödeme Sayfası</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>

	<?php include 'footer.php' ?>