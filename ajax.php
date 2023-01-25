<?php 

include 'nedmin/netting/baglan.php'; 


$ilcek=$db->query("SELECT * FROM iller")->fetchAll(PDO::FETCH_ASSOC);

$ilid=$_POST['il'];
$ilcecek=$db->query("SELECT * FROM ilceler where il_id:'".$ilid."'")fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Başlıksız Belge</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#ilce").hide();
            $("#il").change(function(){
                var ilid=$(this).val();
                alert(ilid);
                $.ajax({
                    type:"POST",
                    url:"ajax2.php",
                    data{"il":ilid},
                    success:function(e)
                    {
                        $("#ilce").show();
                        $("#ilce").html(e);

                    }
                })
            })
        });


    </script>

</head>

<body>
    <select id="il">
        <option value="0" selected>-İl Seçiniz-</option>
        <?php foreach ($ilcek as $key => $value) {
            echo '<option value"'.$value['il_id'].'">'.$value['il_ad'].'</option>';
        } ?>
    </select>

    <select id="ilce"></select>





</body>
</html>