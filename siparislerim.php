<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Sipariş Bilgilerim</div>
							<p >Vermiş olduğunuz siparişlerinizi listeliyorsunuz</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="title-bg">
				<div class="title">Sipariş Bilgileri</div>
			</div>

			<div class="table-responsive">	
				<table class="table table-bordered chart">
					<thead>
						<tr>
							<th>Sipariş ID</th>
							<th>Sipariş Zaman</th>
							<th>Sipariş Tutarı</th>
							<th>Detay</th>
						</tr>
					</thead>
					<tbody>


						<?php 
						$kullanici_id=$kullanicicek['kullanici_id'];
						$siparissor=$db->prepare("SELECT * FROM siparis where kullanici_id=:id");
						$siparissor->execute(array(
							'id' => $kullanici_id
						));
						$toplam_fiyat=0;
						while($sipariscek=$siparissor->fetch(PDO::FETCH_ASSOC)) {?>
							<tr>
								<td><?php echo $sipariscek['siparis_id'] ?></td>
								<td><?php echo $sipariscek['siparis_zaman'] ?></td>
								<td><?php echo $sipariscek['siparis_toplam'] ?></td>
								<td width="5%"><center><a href="siparis-detay.php?siparis_id=<?php echo $sipariscek['siparis_id']; ?>"><button class="btn btn-primary btn-xs">Detay</button></a></center></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>