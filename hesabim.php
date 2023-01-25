<?php include 'header.php'; ?>
<?php 

$ilsor=$db->prepare("SELECT * FROM iller");
$ilsor->execute(array());
$ilcek=$ilsor->fetch(PDO::FETCH_ASSOC);

$ilcesor=$db->prepare("SELECT * FROM ilceler");
$ilcesor->execute(array());
$ilcecek=$ilcesor->fetch(PDO::FETCH_ASSOC);

?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Hesap Bilgilerim</div>
							<p >Kullanıcı bilgilerinizi güncelleyebilirsiniz...</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="title-bg">
				<div class="title">Kullanıcı Bilgileri</div>
			</div>
			<div class="col-md-9">

				<?php 

				if (isset($_GET['durum'])&&$_GET['durum']=="farklisifre") {?>

					<div class="alert alert-danger">
						<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
					</div>
					
				<?php } elseif (isset($_GET['durum'])&&$_GET['durum']=="eksiksifre") {?>

					<div class="alert alert-danger">
						<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
					</div>
					
				<?php } elseif (isset($_GET['durum'])&&$_GET['durum']=="hatalitc") {?>

					<div class="alert alert-danger">
						<strong>Hata!</strong> TC Kimlik Numaranızı kontrol ediniz.
					</div>
					
				<?php } elseif (isset($_GET['durum'])&&$_GET['durum']=="basarisiz") {?>

					<div class="alert alert-danger">
						<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
					</div>
				<?php } elseif (isset($_GET['durum'])&&$_GET['durum']=="ok") {?>

					<div class="alert alert-success">
						<strong>Güncelleme Başarılı!</strong> 
					</div>
				<?php } ?>
				<input type="hidden" class="form-control" name="kullanici_id"  value="<?php echo $kullanicicek['kullanici_id']; ?>">
				<?php $zaman=explode(" ", $kullanicicek['kullanici_zaman']) ?>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kayıt Tarihi <span class="required">*</span>
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="date" id="first-name" name="kullanici_zaman" value="<?php echo $zaman[0]; ?>" required="required" disabled="" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kayıt Saati <span class="required">*</span>
					</label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" id="first-name" name="kullanici_zaman" value="<?php echo $zaman[1]; ?>" required="required" disabled="" class="form-control col-md-7 col-xs-12">
					</div>
				</div>
				<div class="form-group dob">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TC Kimlik No <span class="required">*</span></label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" class="form-control"  required="" name="kullanici_tc" value="<?php echo $kullanicicek['kullanici_tc']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad <span class="required">*</span></label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" class="form-control"  required="" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
					</div>
				</div>
				<div class="form-group dob">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon No <span class="required">*</span></label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" class="form-control"  required="" name="kullanici_gsm" value="<?php echo $kullanicicek['kullanici_gsm']; ?>">
					</div>
				</div>
				<div class="form-group dob">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Açık Adres <span class="required">*</span></label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<input type="text" class="form-control"  required="" name="kullanici_adres" value="<?php echo $kullanicicek['kullanici_adres']; ?>">
					</div>
				</div>
				<div class="form-group dob">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl <span class="required">*</span></label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<select class="form-control" id="il-select" name="kullanici_il">
							
							<option value="0" selected>-İl Seçiniz-</option>
							<?php foreach ($ilcek2 as $key => $value) {
								if($value["il_ad"]==$kullanicicek['kullanici_il']){
									echo '<option  name="kullanici_il" selected="" slug="'.$value['il_id'].'">'.$value['il_ad'].'</option>';
								}
								else
								{
									echo '<option  name="kullanici_il" slug="'.$value['il_id'].'">'.$value['il_ad'].'</option>';
								}

							} ?>
						</select>
					</div>
				</div>

				<div class="form-group dob">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe <span class="required">*</span></label>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<select class="form-control" id="ilce-select" name="kullanici_ilce">
							<option selected>İlçe Seçiniz</option>
							<?php while ($ilcecek=$ilcesor->fetch(PDO::FETCH_ASSOC)) { ?> 
								<option name="kullanici_ilce" <?php if($ilcecek["ilce_ad"]==$kullanicicek['kullanici_ilce']){echo "selected=\"\"";} ?> value="<?php echo $ilcecek["ilce_ad"]; ?>" il-slug="<?php echo $ilcecek["il_id"]; ?>"><?php echo $ilcecek["ilce_ad"]; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group dob">
					<label class="col-md-6 col-sm-6 col-xs-12" for="first-name">Şifre <span class="required">*</span></label>
					<label class="col-md-6 col-sm-6 col-xs-12" for="first-name">Şifre Tekrar <span class="required">*</span></label>
				</div>
				<div class="form-group dob">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="password" class="form-control" name="kullanici_passwordone"    placeholder="Şifrenizi Giriniz...">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="password" class="form-control" name="kullanici_passwordtwo"   placeholder="Şifrenizi Tekrar Giriniz...">
					</div>
				</div>




				<button type="submit" name="hesapduzenle" class="btn btn-default btn-success">Güncelle</button>

			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>