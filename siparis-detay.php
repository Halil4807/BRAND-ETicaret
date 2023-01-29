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
				$sepetsor=$db->prepare("SELECT * FROM siparis_detay where siparis_id=:id");
				$sepetsor->execute(array(
					'id' => $_GET['siparis_id']
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
						<td><form><input disabled type="text" class="form-control quantity" value="<?php echo $sepetcek['urun_adet'] ?>"></form></td>
						<td><?php echo $uruncek['urun_fiyat'] ?></td>
						<td><?php echo $uruncek['urun_fiyat']*$sepetcek['urun_adet'] ?></td>
					</tr>
				<?php } ?>

			</tbody>
		</table>
	</div>
</div>
<?php include 'footer.php' ?>