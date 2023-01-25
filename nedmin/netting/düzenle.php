<?php 



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





?>