<?php 

include 'nedmin/netting/baglan.php'; 

$ilid=$_POST['il'];
$ilcecek=$db->query("SELECT * FROM ilceler where il_id:'".$ilid."'")fetchAll(PDO::FETCH_ASSOC);
echo '<option value"'.$ilid.'">'.$ilid.'</option>';
<?php foreach ($ilcek as $key => $value) {
            echo '<option value"'.$value['ilce_id'].'">'.$value['ilce_ad'].'</option>';
        } ?>

?>