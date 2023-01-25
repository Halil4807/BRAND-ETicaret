<?php 

include 'nedmin/netting/baglan.php'; 

$ilsor=$db->prepare("SELECT * FROM iller");
$ilsor->execute(array());
$ilcek=$ilsor->fetch(PDO::FETCH_ASSOC);

$ilcesor=$db->prepare("SELECT * FROM ilceler");
$ilcesor->execute(array());
$ilcecek=$ilcesor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Başlıksız Belge</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $(function(){
            $("#ilce-select option").hide();
            $("#il-select").change(function(){
                $("#ilce-select option").hide();
                var slug = $("#il-select option:selected").attr("slug");
                if(slug){
                    $("#ilce-select option[il-slug='"+0+"']").show();
                    $("#ilce-select option[il-slug='"+slug+"']").show();
                }
            });
        });

        $(function secim(){
                var slug = $("#il-select option:selected").attr("slug");
                if(slug){
                    $("#ilce-select option[il-slug='"+slug+"']").show();
                }
        });

    </script>
</head>

<body>
    <select id="il-select">
        <option selected>-İl Seçiniz-</option>
        <?php while ($ilcek=$ilsor->fetch(PDO::FETCH_ASSOC)) { ?> 
            <option <?php echo $ilcek["il_id"]=='7'?'selected=""':''; ?> value="<?php echo $ilcek["il_ad"]; ?>" slug="<?php echo $ilcek["il_id"]; ?>"><?php echo $ilcek["il_ad"]; ?></option>
        <?php } ?>
    </select>

    <select id="ilce-select">
        <option name="ilcedefault" il-slug="0" selected>-İlçe Seçiniz-</option>
        <?php while ($ilcecek=$ilcesor->fetch(PDO::FETCH_ASSOC)) { ?> 
            <option value="<?php echo $ilcecek["ilce_ad"]; ?>" il-slug="<?php echo $ilcecek["il_id"]; ?>"><?php echo $ilcecek["ilce_ad"]; ?></option>
        <?php } ?>
    </select>
</body>
</html>