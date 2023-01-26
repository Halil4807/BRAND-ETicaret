<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$yorumsor=$db->prepare("SELECT * FROM yorumlar");
$yorumsor->execute();

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün Listeleme <small>

              <?php 

              if (isset($_GET['durum'])&&$_GET['durum']=="ok") {?>

                <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (isset ($_GET['durum'])&&$_GET['durum']=="no") {?>

                <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a href="yorum-ekle.php"><button class="btn btn-success btn-xs">yorum Ekle</button></a>
              </li>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
              </li>
            </ul>
            <div class="clearfix"></div>
            
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Yorum Zamanı</th>
                  <th>Yorum ID</th>
                  <th>Kullanıcı ID</th>
                  <th>Ürün ID</th>
                  <th>Yorum Detayı</th>
                  <th>Yorum Durumu</th>
                  <th hidden>Yorum Düzenle</th>
                  <th>Yorum Sil</th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <td width="5%"><?php echo $yorumcek['yorum_zaman'] ?></td>
                    <td><?php echo $yorumcek['yorum_id'] ?></td>
                    <td><?php echo $yorumcek['kullanici_id'] ?></td>
                    <td><?php echo $yorumcek['urun_id'] ?></td>
                    <td><?php echo $yorumcek['yorum_detay'] ?></td>
                    <td width="5%"><center><a href="../netting/islem.php?yorum_id=<?php echo $yorumcek['yorum_id']; ?>&yorum_durum=<?php echo $yorumcek['yorum_durum']; ?>&yorumchange=ok"><button class="btn btn-<?php echo ($yorumcek['yorum_durum'])=='1'?"success":"danger" ?> btn-xs"><?php echo ($yorumcek['yorum_durum'])=='1'?"Aktif":"Pasif" ?></button></a></center></td>
                    <td hidden width="5%"><center><a href="yorum-duzenle.php?yorum_id=<?php echo $yorumcek['yorum_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                    <td width="5%"><center><a href="../netting/islem.php?yorum_id=<?php echo $yorumcek['yorum_id']; ?>&yorumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                  </tr>
                <?php  }

                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
