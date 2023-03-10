<?php
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';


if (isset($_POST['kullanicikaydet'])) {
	$kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']);
	$kullanici_mail=htmlspecialchars($_POST['kullanici_mail']);
	$kullanici_passwordone=($_POST['kullanici_passwordone']);
	$kullanici_passwordtwo=($_POST['kullanici_passwordtwo']);
	//echo $kullanici_adsoyad.$kullanici_mail.$kullanici_passwordone.$kullanici_passwordtwo;

	if ($kullanici_passwordone==$kullanici_passwordtwo) {
		if (strlen($kullanici_passwordone)>=6) {

			$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
			$kullanicisor->execute(array('mail' => $_POST['kullanici_mail']));
			$say=$kullanicisor->rowCount();

			if ($say==0) {
				$kullanici_password=md5($kullanici_passwordone);
				$userekle=$db->prepare("INSERT INTO kullanici SET
					kullanici_adsoyad=:kullanici_adsoyad,
					kullanici_mail=:kullanici_mail,
					kullanici_password=:kullanici_password
					");
				$insert=$userekle->execute(array(
					'kullanici_adsoyad' => $kullanici_adsoyad,
					'kullanici_mail' => $kullanici_mail,
					'kullanici_password' => $kullanici_password
				));
				if ($insert) {
					$_SESSION['kullanici_mail']=$kullanici_mail;
					Header("Location:../../index.php");
				} else {
					Header("Location:../../register.php?durum=basarisiz");
				}
			} else { header("Location:../../register.php?durum=mukerrerkayit");}	
		} else { header("Location:../../register.php?durum=eksiksifre");}
	} else  {	header("Location:../../register.php?durum=farklisifre"); }
}

if (isset($_POST['hesapduzenle'])) {
	$kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']);
	$kullanici_passwordone=htmlspecialchars($_POST['kullanici_passwordone']);
	$kullanici_passwordtwo=htmlspecialchars($_POST['kullanici_passwordtwo']);
	//echo $kullanici_adsoyad.$kullanici_mail.$kullanici_passwordone.$kullanici_passwordtwo;

	if (strlen($_POST['kullanici_passwordone'])!=0) {
		if ($kullanici_passwordone==$kullanici_passwordtwo) {
			if (strlen($kullanici_passwordone)>=6) {
				if (strlen($_POST['kullanici_tc'])==11) {
					$kullanici_password=md5($kullanici_passwordone);
					$hesapduzenle=$db->prepare("UPDATE kullanici SET
						kullanici_tc=:kullanici_tc,
						kullanici_adsoyad=:kullanici_adsoyad,
						kullanici_gsm=:kullanici_gsm,
						kullanici_adres=:kullanici_adres,
						kullanici_il=:kullanici_il,
						kullanici_ilce=:kullanici_ilce,
						kullanici_password=:kullanici_password
						WHERE kullanici_id={$_POST['kullanici_id']}");
					$update=$hesapduzenle->execute(array(
						'kullanici_tc' => $_POST['kullanici_tc'],
						'kullanici_adsoyad' => $kullanici_adsoyad,
						'kullanici_gsm' => $_POST['kullanici_gsm'],
						'kullanici_adres' => $_POST['kullanici_adres'],
						'kullanici_il' => $_POST['kullanici_il'],
						'kullanici_ilce' => $_POST['kullanici_ilce'],
						'kullanici_password' => $kullanici_password
					));
					if ($update) {
						Header("Location:../../hesabim.php?durum=ok");
					} else {
						Header("Location:../../hesabim.php?durum=basarisiz");
					}
				}else { header("Location:../../hesabim.php?durum=hatalitc");}
				
			} else { header("Location:../../hesabim.php?durum=eksiksifre");}
		} else  {	header("Location:../../hesabim.php?durum=farklisifre"); }
	}else
	{
		if (strlen($_POST['kullanici_tc'])==11) {
			$hesapduzenle=$db->prepare("UPDATE kullanici SET
				kullanici_tc=:kullanici_tc,
				kullanici_adsoyad=:kullanici_adsoyad,
				kullanici_gsm=:kullanici_gsm,
				kullanici_adres=:kullanici_adres,
				kullanici_il=:kullanici_il,
				kullanici_ilce=:kullanici_ilce
				WHERE kullanici_id={$_POST['kullanici_id']}");
			$update=$hesapduzenle->execute(array(
				'kullanici_tc' => $_POST['kullanici_tc'],
				'kullanici_adsoyad' => $kullanici_adsoyad,
				'kullanici_gsm' => $_POST['kullanici_gsm'],
				'kullanici_adres' => $_POST['kullanici_adres'],
				'kullanici_il' => $_POST['kullanici_il'],
				'kullanici_ilce' => $_POST['kullanici_ilce']
			));
			if ($update) {
				Header("Location:../../hesabim.php?durum=ok");
			} else {
				Header("Location:../../hesabim.php?durum=basarisiz");
			}
		}else { header("Location:../../hesabim.php?durum=hatalitc");}
	}
}



if (isset($_POST['admingiris'])) {
	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $_POST['kullanici_mail'],
		'password' => md5($_POST['kullanici_password']),
		'yetki' => 5
	));
	$say=$kullanicisor->rowCount();
	if ($say==1) {		
		$_SESSION['kullanici_mail']=$_POST['kullanici_mail'];
		header("Location:../production/index.php");
		exit;
	} else {
		header("Location:../production/login.php?durum=no");
		exit;
	}	
}

if (isset($_POST['kullanicigiris'])) {
	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
	$kullanicisor->execute(array(
		'mail' => $_POST['kullanici_mail'],
		'password' => md5($_POST['kullanici_password'])
	));
	$say=$kullanicisor->rowCount();
	if ($say==1) {		
		$_SESSION['kullanici_mail']=$_POST['kullanici_mail'];
		header('Location: ' . $_SERVER['HTTP_REFERER'].'?durum=');
		exit;
	} else {
		header("Location:../../index.php?durum=no");
		exit;
	}	
}


if (isset($_POST['logoduzenle'])) {
	$uploads_dir = '../../dimg';
	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];
	$time=date("dmyHis");
	$resimgyol=substr($uploads_dir, 6)."/".$time.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$time$name");

	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");

	$update=$duzenle->execute(array('logo' => $resimgyol ));
	if ($update) {
		//eski resmi sil
		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayar.php?durum=ok");
	} else {
		Header("Location:../production/genel-ayar.php?durum=no");
	}
}

if (isset($_POST['urunresmi_ekle'])) {
	$uploads_dir = '../../dimg';
	@$tmp_name = $_FILES['urunresmi']["tmp_name"];
	@$name = $_FILES['urunresmi']["name"];
	$time=date("dmyHis");
	$resimgyol=substr($uploads_dir, 6)."/".$time.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$time$name");

	$urunresmi_ekle=$db->prepare("INSERT INTO urunresmi SET
		urunresmi_adres=:urunresmi_adres,
		urun_id=:urun_id");

	$insert=$urunresmi_ekle->execute(array('urunresmi_adres' => $resimgyol,'urun_id' => $_POST['urun_id'] ));
	if ($insert) {
		Header("Location:../production/urun-duzenle.php?urun_id=".$_POST['urun_id']."&durum=ok");
	} else {
		Header("Location:../production/urun-duzenle.php?urun_id=".$_POST['urun_id']."&durum=no");
	}
}

if (isset($_POST['genelayarkaydet'])&&($_POST['ayar_title']!=null)) {
	
	//Tablo g??ncelleme i??lemi kodlar??...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author']
	));
	if ($update) {
		header("Location:../production/genel-ayar.php?durum=ok");
	} else {
		header("Location:../production/genel-ayar.php?durum=no");
	}
	
}



if (isset($_POST['iletisimayarkaydet'])&&($_POST['ayar_tel']!=null)) {
	
	//Tablo g??ncelleme i??lemi kodlar??...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_telefon,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_ilce=:ayar_ilce,
		ayar_il=:ayar_il,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_telefon' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai']
	));



	if ($update) {

		header("Location:../production/iletisim-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}
	
}


if (isset($_POST['apiayarkaydet'])&&($_POST['ayar_analystic']!=null)) {
	
	//Tablo g??ncelleme i??lemi kodlar??...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		
		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_zopim=:ayar_zopim
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(

		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim']
	));


	if ($update) {

		header("Location:../production/api-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/api-ayarlar.php?durum=no");
	}
	
}
else
{
	
}

if (isset($_POST['mailayarkaydet'])&&($_POST['ayar_smtphost']!=null)) {
	
	//Tablo g??ncelleme i??lemi kodlar??...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:ayar_smtphost,
		ayar_smtpuser=:ayar_smtpuser,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_smtphost' => $_POST['ayar_smtphost'],
		'ayar_smtpuser' => $_POST['ayar_smtpuser'],
		'ayar_smtppassword' => $_POST['ayar_smtppassword'],
		'ayar_smtpport' => $_POST['ayar_smtpport']
	));


	if ($update) {

		header("Location:../production/mail-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/mail-ayarlar.php?durum=no");
	}
	
}

if (isset($_POST['sosyalayarkaydet'])&&($_POST['ayar_facebook']!=null)) {
	
	//Tablo g??ncelleme i??lemi kodlar??...
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube
		WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_google' => $_POST['ayar_google'],
		'ayar_youtube' => $_POST['ayar_youtube']
	));


	if ($update) {

		header("Location:../production/sosyal-ayarlar.php?durum=ok");

	} else {

		header("Location:../production/sosyal-ayarlar.php?durum=no");
	}
	
}

if (isset($_POST['hakkimizdakaydet'])&&($_POST['hakkimizda_baslik']!=null)) {
	
	//Tablo g??ncelleme i??lemi kodlar??...

	/*

	copy paste i??lemlerinde tablo ve i??aretli sat??r isminin de??i??tirildi??inden emin olun!!!

	*/
	$hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon
		WHERE hakkimizda_id=0");

	$update=$hakkimizdakaydet->execute(array(
		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
		'hakkimizda_video' => $_POST['hakkimizda_video'],
		'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
		'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
	));


	if ($update) {

		header("Location:../production/hakkimizda.php?durum=ok");

	} else {

		header("Location:../production/hakkimizda.php?durum=no");
	}
	
}

if (isset($_POST['kullanici_tc'])&&isset($_POST['kullaniciduzenle'])) {

	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_tc=:kullanici_tc,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_yetki=:kullanici_yetki,
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_yetki' => $_POST['kullanici_yetki'],
		'kullanici_durum' => $_POST['kullanici_durum']
	));

	if ($update) {

		Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
	}
}

//Sipari?? ????lemleri

if (isset($_POST['bankasiparisekle'])) {
	//echo "Burdas??n";
	$siparis_tip="Banka Havalesi";
	$kaydet=$db->prepare("INSERT INTO siparis SET
		kullanici_id=:kullanici_id,
		siparis_tip=:siparis_tip,	
		siparis_banka=:siparis_banka,
		siparis_toplam=:siparis_toplam
		");
	$insert=$kaydet->execute(array(
		'kullanici_id' => $_POST['kullanici_id'],
		'siparis_tip' => $siparis_tip,
		'siparis_banka' => $_POST['siparis_banka'],
		'siparis_toplam' => $_POST['siparis_toplam']		
	));

	if ($insert) {
		//Sipari?? ba??ar??l?? kaydedilirse...
		$siparis_id = $db->lastInsertId();
		//echo "<hr>";
		$kullanici_id=$_POST['kullanici_id'];
		$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
		$sepetsor->execute(array(
			'id' => $kullanici_id
		));
		while($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {
			$urun_id=$sepetcek['urun_id']; 
			$urun_adet=$sepetcek['urun_adet'];

			$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
			$urunsor->execute(array(
				'id' => $urun_id
			));
			$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
			echo $urun_fiyat=$uruncek['urun_fiyat'];
			$kaydet=$db->prepare("INSERT INTO siparis_detay SET
				
				siparis_id=:siparis_id,
				urun_id=:urun_id,	
				urun_fiyat=:urun_fiyat,
				urun_adet=:urun_adet
				");
			$insert=$kaydet->execute(array(
				'siparis_id' => $siparis_id,
				'urun_id' => $urun_id,
				'urun_fiyat' => $urun_fiyat,
				'urun_adet' => $urun_adet
			));
			$urunstok=$uruncek['urun_fiyat']-$urun_fiyat;
			$uruneksiltme=$db->prepare("UPDATE urun SET
				urun_stok=:urun_stok
				WHERE urun_id={$urun_id}");

			$update=$uruneksiltme->execute(array(
				'urun_stok' => $urunstok
			));
		}
		if ($insert) {
			//Sipari?? detay kay??tta ba??ar??ysa sepeti bo??alt
			$sil=$db->prepare("DELETE from sepet where kullanici_id=:kullanici_id");
			$kontrol=$sil->execute(array(
				'kullanici_id' => $kullanici_id
			));
			Header("Location:../../siparislerim?durum=ok");
			exit;
		}
	} else {
		Header("Location:../production/odeme.php?durum=no");
	}
}

if (isset($_POST['menu_sira'])&&isset($_POST['menuduzenle'])) {
	$menu_id=$_POST['menu_id'];
	$menu_ad=$_POST['menu_ad'];
	//$menu_seourl=seo($_POST['menu_ad']);

	$menu_seourl=SEOLink($_POST['menu_ad']);
	$ad=$_POST['menu_ad'];

	$ayarkaydet=$db->prepare("UPDATE menu SET
		menu_sira=:menu_sira,
		menu_ad=:menu_ad,
		menu_ust=:menu_ust,
		menu_url=:menu_url,
		menu_detay=:menu_detay,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		WHERE menu_id={$_POST['menu_id']}");
	$update=$ayarkaydet->execute(array(
		'menu_sira' => $_POST['menu_sira'],
		'menu_ad' => $_POST['menu_ad'],
		'menu_ust' => $_POST['menu_ust'],
		'menu_url' => $_POST['menu_url'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
	));
	if ($update) {Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");} 
	else {Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");}
}

if (isset($_POST['menukaydet'])) {
	$menu_seourl=SEOLink($_POST['menu_ad']);
	$ayarekle=$db->prepare("INSERT INTO menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_ust=:menu_ust,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		");
	$insert=$ayarekle->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_ust' => $_POST['menu_ust'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
	));
	if ($insert) {		
		Header("Location:../production/menu.php?durum=ok");
	} else {
		Header("Location:../production/menu.php?durum=no");
	}
}

if (isset($_POST['banka_id'])&&isset($_POST['bankaduzenle'])) {

	$bankaduzenle=$db->prepare("UPDATE banka SET
		banka_ad=:banka_ad,
		banka_iban=:banka_iban,
		banka_hesapadsoyad=:banka_hesapadsoyad,
		banka_durum=:banka_durum
		WHERE banka_id={$_POST['banka_id']}");
	$update=$bankaduzenle->execute(array(
		'banka_ad' => $_POST['banka_ad'],
		'banka_iban' => $_POST['banka_iban'],
		'banka_hesapadsoyad' => $_POST['banka_hesapadsoyad'],
		'banka_durum' => $_POST['banka_durum']
	));
	if ($update) {Header("Location:../production/banka.php?durum=ok&");} 
	else {Header("Location:../production/banka.php?durum=no");}
}

if (isset($_POST['bankaekle'])) {
	$bankaekle=$db->prepare("INSERT INTO banka SET
		banka_ad=:banka_ad,
		banka_hesapadsoyad=:banka_hesapadsoyad,
		banka_iban=:banka_iban,
		banka_durum=:banka_durum
		");
	$insert=$bankaekle->execute(array(
		'banka_ad' => $_POST['banka_ad'],
		'banka_hesapadsoyad' => $_POST['banka_hesapadsoyad'],
		'banka_iban' => $_POST['banka_iban'],
		'banka_durum' => $_POST['banka_durum']
	));
	if ($insert) {		
		Header("Location:../production/banka.php?durum=ok");
	} else {
		Header("Location:../production/banka.php?durum=no");
	}
}

if (isset($_POST['yorumekle'])) {

	$yorumekle=$db->prepare("INSERT INTO yorumlar SET
		kullanici_id=:kullanici_id,
		urun_id=:urun_id,
		yorum_detay=:yorum_detay
		");
	$insert=$yorumekle->execute(array(
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id'],
		'yorum_detay' => $_POST['yorum_detay']
	));
	if ($insert) {		
		header('Location:../../urun-'.$_POST['urun_seourl'].'-'.$_POST['urun_id']."?durum=ok");
	} else {
		Header("Location:../production/menu.php?durum=no");
	}
}

if (isset($_POST['kategori_sira'])&&isset($_POST['kategoriuzenle'])) {
	$kategori_id=$_POST['kategori_id'];
	$kategori_ad=$_POST['kategori_ad'];
	//$kategori_seourl=seo($_POST['kategori_ad']);

	$kategori_seourl=SEOLink($_POST['kategori_ad']);
	$ad=$_POST['kategori_ad'];

	$ayarkaydet=$db->prepare("UPDATE kategori SET
		kategori_sira=:kategori_sira,
		kategori_ad=:kategori_ad,
		kategori_ust=:kategori_ust,
		kategori_seourl=:kategori_seourl,
		kategori_durum=:kategori_durum
		WHERE kategori_id={$_POST['kategori_id']}");
	$update=$ayarkaydet->execute(array(
		'kategori_sira' => $_POST['kategori_sira'],
		'kategori_ad' => $_POST['kategori_ad'],
		'kategori_ust' => $_POST['kategori_ust'],
		'kategori_seourl' => $kategori_seourl,
		'kategori_durum' => $_POST['kategori_durum']
	));
	if ($update) {Header("Location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=ok&$kategori_ad");} 
	else {Header("Location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=no");}
}

if (isset($_POST['kategorikaydet'])) {
	$kategori_seourl=SEOLink($_POST['kategori_ad']);
	$ayarekle=$db->prepare("INSERT INTO kategori SET
		kategori_ad=:kategori_ad,
		kategori_ust=:kategori_ust,
		kategori_sira=:kategori_sira,
		kategori_seourl=:kategori_seourl,
		kategori_durum=:kategori_durum
		");
	$insert=$ayarekle->execute(array(
		'kategori_ad' => $_POST['kategori_ad'],
		'kategori_ust' => $_POST['kategori_ust'],
		'kategori_sira' => $_POST['kategori_sira'],
		'kategori_seourl' => $kategori_seourl,
		'kategori_durum' => $_POST['kategori_durum']
	));
	if ($insert) {		
		Header("Location:../production/kategori.php?durum=ok");
	} else {
		Header("Location:../production/kategori.php?durum=no");
	}
}

if (isset($_POST['urun_id'])&&isset($_POST['urunduzenle'])) {
	$urun_id=$_POST['urun_id'];
	$urun_ad=$_POST['urun_ad'];
	//$urun_seourl=seo($_POST['urun_ad']);
	echo $_POST['urun_stok'];
	$urun_seourl=SEOLink($_POST['urun_ad']);

	$ayarkaydet=$db->prepare("UPDATE urun SET
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_stok=:urun_stok,
		urun_fiyat=:urun_fiyat,
		urun_detay=:urun_detay,
		urun_seourl=:urun_seourl,
		urun_keyboard=:urun_keyboard,
		urun_onecikar=:urun_onecikar,
		urun_durum=:urun_durum
		WHERE urun_id={$_POST['urun_id']}");
	$update=$ayarkaydet->execute(array(
		'kategori_id' => $_POST['kategori_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_stok' => (int)$_POST['urun_stok'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_keyboard' => $_POST['urun_keyboard'],
		'urun_onecikar' => $_POST['urun_onecikar'],
		'urun_seourl' => $urun_seourl,
		'urun_durum' => $_POST['urun_durum']
	));
	if ($update) {Header("Location:../production/urun-duzenle.php?urun_id=$urun_id&durum=ok");} 
	else {Header("Location:../production/urun-duzenle.php?urun_id=$urun_id&durum=no");}
}

if (isset($_POST['urunkaydet'])) {
	$urun_seourl=SEOLink($_POST['urun_ad']);
	$ayarekle=$db->prepare("INSERT INTO urun SET
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_stok=:urun_stok,
		urun_fiyat=:urun_fiyat,
		urun_detay=:urun_detay,
		urun_seourl=:urun_seourl,
		urun_keyboard=:urun_keyboard,
		urun_onecikar=:urun_onecikar,
		urun_durum=:urun_durum
		");
	$insert=$ayarekle->execute(array(
		'kategori_id' => $_POST['kategori_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_stok' => $_POST['urun_stok'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_keyboard' => $_POST['urun_keyboard'],
		'urun_onecikar' => $_POST['urun_onecikar'],
		'urun_seourl' => $urun_seourl,
		'urun_durum' => $_POST['urun_durum']
	));
	if ($insert) {
		
		Header("Location:../production/urun.php?durum=ok");
	} else {

		Header("Location:../production/urun.php?durum=no");
	}
}

if (isset($_POST['sliderkaydet'])) {

	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_resim']["tmp_name"];
	@$name = $_FILES['slider_resim']["name"];
	$time=date("dmyHis");
	$resimgyol=substr($uploads_dir, 6)."/".$time.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$time$name");

	$sliderekle=$db->prepare("INSERT INTO slider SET
		slider_resimyol=:slider_resimyol,
		slider_ad=:slider_ad,
		slider_link=:slider_link,
		slider_sira=:slider_sira,
		slider_durum=:slider_durum
		");
	$insert=$sliderekle->execute(array(
		'slider_resimyol' => $resimgyol,
		'slider_ad' => $_POST['slider_ad'],
		'slider_link' => $_POST['slider_link'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_durum' => $_POST['slider_durum']
	));
	if ($insert) {
		
		Header("Location:../production/slider.php?durum=ok");
	} else {

		Header("Location:../production/slider.php?durum=no");
	}
}
if (isset($_POST['sliderduzenle'])) {

	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_resim']["tmp_name"];
	@$name = $_FILES['slider_resim']["name"];
	$time=date("dmyHis");
	$resimgyol=substr($uploads_dir, 6)."/".$time.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$time$name");
	if (empty($name)) {
		$resimgyol=$_POST['eski_yol'];
	}
	else{
		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");
	}
	$sliderkaydet=$db->prepare("UPDATE slider SET
		slider_resimyol=:slider_resimyol,
		slider_ad=:slider_ad,
		slider_link=:slider_link,
		slider_sira=:slider_sira,
		slider_durum=:slider_durum
		WHERE slider_id={$_POST['slider_id']}");
	$update=$sliderkaydet->execute(array(
		'slider_resimyol' => $resimgyol,
		'slider_ad' => $_POST['slider_ad'],
		'slider_link' => $_POST['slider_link'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_durum' => $_POST['slider_durum']
	));
	if ($update) {
		Header("Location:../production/slider.php?durum=ok");
	} else {

		Header("Location:../production/slider.php?durum=no");
	}
}

if ($_GET['kullanicisil']=="ok") {
	$kullanici_id=$_GET['kullanici_id'];
	$sil=$db->prepare("DELETE FROM kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array('id' => $kullanici_id));
	if ($kontrol) {Header("Location:../production/kullanici.php?durum=ok");} 
	else {Header("Location:../production/kullanici.php?durum=no");}
}

if ($_GET['menusil']=="ok") {
	$menu_id=$_GET['menu_id'];
	$sil=$db->prepare("DELETE FROM menu where menu_id=:id");
	$kontrol=$sil->execute(array('id' => $menu_id));
	if ($kontrol) {Header("Location:../production/menu.php?durum=ok");} 
	else {Header("Location:../production/menu.php?durum=no");}
}
if ($_GET['kategorisil']=="ok") {
	$kategori_id=$_GET['kategori_id'];
	$sil=$db->prepare("DELETE FROM kategori where kategori_id=:id");
	$kontrol=$sil->execute(array('id' => $kategori_id));
	if ($kontrol) {Header("Location:../production/kategori.php?durum=ok");} 
	else {Header("Location:../production/kategori.php?durum=no");}
}
if ($_GET['slidersil']=="ok") {
	$slider_id=$_GET['slider_id'];
	$sil=$db->prepare("DELETE FROM slider where slider_id=:id");
	$kontrol=$sil->execute(array('id' => $slider_id));
	if ($kontrol) {Header("Location:../production/slider.php?durum=ok");} 
	else {Header("Location:../production/slider.php?durum=no");}
}
if ($_GET['urunsil']=="ok") {
	$urun_id=$_GET['urun_id'];
	$sil=$db->prepare("DELETE FROM urun where urun_id=:id");
	$kontrol=$sil->execute(array('id' => $urun_id));
	if ($kontrol) {Header("Location:../production/urun.php?durum=ok");} 
	else {Header("Location:../production/urun.php?durum=no");}
}
if ($_GET['sepettensil']=="ok") {
	$sepet_id=$_GET['sepet_id'];
	$sil=$db->prepare("DELETE FROM sepet where sepet_id=:id");
	$kontrol=$sil->execute(array('id' => $sepet_id));
	if ($kontrol) {header('Location:../../sepet?durum=ok');} 
	else {header('Location:../../sepet?durum=no');}
}
if ($_GET['urunresmisil']=="ok") {
	$urunresmi_id=$_GET['urunresmi_id'];
	$sil=$db->prepare("DELETE FROM urunresmi where urunresmi_id=:id");
	$kontrol=$sil->execute(array('id' => $urunresmi_id));
	if ($kontrol) {header('Location:../production/urun-duzenle.php?urun_id='.$_GET['urun_id'].'?durum=ok');} 
	else {header('Location:../production/urun-duzenle.php?urun_id='.$_GET['urun_id'].'?durum=no');}
}
if ($_GET['yorumsil']=="ok") {
	$yorum_id=$_GET['yorum_id'];
	$sil=$db->prepare("DELETE FROM yorumlar where yorum_id=:id");
	$kontrol=$sil->execute(array('id' => $yorum_id));
	if ($kontrol) {Header("Location:../production/yorum.php?durum=ok");} 
	else {Header("Location:../production/yorum.php?durum=no");}
}
if ($_GET['bankasil']=="ok") {
	$banka_id=$_GET['banka_id'];
	$sil=$db->prepare("DELETE FROM banka where banka_id=:id");
	$kontrol=$sil->execute(array('id' => $banka_id));
	if ($kontrol) {Header("Location:../production/banka.php?durum=ok");} 
	else {Header("Location:../production/banka.php?durum=no");}
}

if ($_GET['yorumchange']=="ok") {

	$yorumdurum=$_GET['yorum_durum']; 
	$yorum_id=$_GET['yorum_id']; 

	if ($yorumdurum=="0") {	$yeniyorumdurum="1";}
	else{$yeniyorumdurum="0";}

	$ayarkaydet=$db->prepare("UPDATE yorumlar SET
		yorum_durum=:yorum_durum
		WHERE yorum_id={$yorum_id}");
	$update=$ayarkaydet->execute(array(
		'yorum_durum' => $yeniyorumdurum
	));
	if ($update) {Header("Location:../production/yorum.php?durum=ok");} 
	else {Header("Location:../production/yorum.php?durum=no");}
}

if (isset($_POST['sepeteekle'])) {

	$sepeteekle=$db->prepare("INSERT INTO sepet SET
		kullanici_id=:kullanici_id,
		urun_id=:urun_id,
		urun_adet=:urun_adet
		");
	$insert=$sepeteekle->execute(array(
		'kullanici_id' => $_POST['kullanici_id'],
		'urun_id' => $_POST['urun_id'],
		'urun_adet' => $_POST['urun_adet']
	));
	if ($insert) {		
		header('Location:../../urun-'.$_POST['urun_seourl'].'-'.$_POST['urun_id']."?durum=ok");
	} else {
		Header("Location:../production/menu.php?durum=no");
	}
}

//echo "burdas??n";exit;
?>