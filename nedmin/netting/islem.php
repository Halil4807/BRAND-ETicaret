<?php
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';

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



if (isset($_POST['genelayarkaydet'])&&($_POST['ayar_title']!=null)) {
	
	//Tablo güncelleme işlemi kodları...
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
	
	//Tablo güncelleme işlemi kodları...
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
	
	//Tablo güncelleme işlemi kodları...
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
	
	//Tablo güncelleme işlemi kodları...
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
	
	//Tablo güncelleme işlemi kodları...
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
	
	//Tablo güncelleme işlemi kodları...

	/*

	copy paste işlemlerinde tablo ve işaretli satır isminin değiştirildiğinden emin olun!!!

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

if (isset($_POST['menu_sira'])&&isset($_POST['menuduzenle'])) {
	$menu_id=$_POST['menu_id'];
	$menu_seourl=seo($_POST['menu_ad']);
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

if (isset($_POST['menu_sira'])&&isset($_POST['menukaydet'])) {
	$menu_seourl=seo($_POST['menu_ad']);
	$menukaydet=$db->prepare("INSERT INTO menu SET
		menu_sira=:menu_sira,
		menu_ad=:menu_ad,
		menu_ust=:menu_ust,
		menu_url=:menu_url,
		menu_detay=:menu_detay,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum");
	$insert=$menukaydet->execute(array(
		'menu_sira' => $_POST['menu_sira'],
		'menu_ad' => $_POST['menu_ad'],
		'menu_ust' => $_POST['menu_ust'],
		'menu_url' => $_POST['menu_url'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
		));
	if ($insert) {Header("Location:../production/menu.php?durum=ok");} 
	else {Header("Location:../production/menu.php?durum=no");}
}

if (isset($_POST['gomenu'])) {
	Header("Location:../production/menu.php");
}

if ($_GET['kullanicisil']=="ok") {
	$kullanici_id=$_GET['kullanici_id'];
	$sil=$db->prepare("DELETE FROM kullanici where kullanici_id=:id");
	$kontrol=$sil->execute(array('id' => $kullanici_id));
	if ($kontrol) {Header("Location:../production/kullanici.php?sil=ok");} 
	else {Header("Location:../production/kullanici.php?sil=no");}
}

if ($_GET['menusil']=="ok") {
	$menu_id=$_GET['menu_id'];
	$sil=$db->prepare("DELETE FROM menu where menu_id=:id");
	$kontrol=$sil->execute(array('id' => $menu_id));
	if ($kontrol) {Header("Location:../production/menu.php?sil=ok");} 
	else {Header("Location:../production/menu.php?sil=no");}
}

?>