<?php 

ob_start();
session_start();

include 'baglan.php';

if (!empty($_FILES)) {
	$uploads_dir = '../../dimg/urun';
	@$tmp_name = $_FILES['file']["tmp_name"];
	@$name = $_FILES['file']["name"];
	$benzersizad=date("dmyHis");//Tarih ve saat alma
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$urun_id=$_POST['urun_id'];

	$kaydet=$db->prepare("INSERT INTO urunresmi SET
		urunresmi_adres=:resimyol,
		urun_id=:urun_id");
	$insert=$kaydet->execute(array(
		'resimyol' => $refimgyol,
		'urun_id' => $urun_id
	));
}

?>