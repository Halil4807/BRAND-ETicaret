<?php 



if (isset($_POST['urun_id'])&&isset($_POST['urunuzenle'])) {
	$urun_id=$_POST['urun_id'];
	$urun_ad=$_POST['urun_ad'];
	//$urun_seourl=seo($_POST['urun_ad']);

	$urun_seourl=SEOLink($_POST['urun_ad']);

	$ayarkaydet=$db->prepare("UPDATE urun SET
		kategori_id=:kategori_id,
		urun_ad=:urun_ad,
		urun_stok=:urun_stok,
		urun_fiyat=:urun_fiyat,
		urun_detay=:urun_detay,
		urun_seourl=:urun_seourl,
		urun_durum=:urun_durum
		WHERE urun_id={$_POST['urun_id']}");
	$update=$ayarkaydet->execute(array(
		'kategori_id' => $_POST['kategori_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_stok' => $_POST['urun_stok'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_seourl' => $urun_seourl,
		'urun_durum' => $_POST['urun_durum']
	));
	if ($update) {Header("Location:../production/urun-duzenle.php?urun_id=$urun_id&durum=ok&$urun_ad");} 
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
		urun_durum=:urun_durum
		");
	$insert=$ayarekle->execute(array(
		'kategori_id' => $_POST['kategori_id'],
		'urun_ad' => $_POST['urun_ad'],
		'urun_stok' => $_POST['urun_stok'],
		'urun_fiyat' => $_POST['urun_fiyat'],
		'urun_detay' => $_POST['urun_detay'],
		'urun_seourl' => $urun_seourl,
		'urun_durum' => $_POST['urun_durum']
	));
	if ($insert) {
		
		Header("Location:../production/urun.php?durum=ok");
	} else {

		Header("Location:../production/urun.php?durum=no");
	}
}





?>