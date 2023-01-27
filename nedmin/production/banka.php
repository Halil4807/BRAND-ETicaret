<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$bankasor=$db->prepare("SELECT * FROM banka ORDER BY banka_id ASC");
$bankasor->execute();

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Banka Listeleme <small>

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
                <a href="banka-ekle.php"><button class="btn btn-success btn-xs">banka Ekle</button></a>
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
                  <th>Banka Sıra</th>
                  <th>Banka Ad</th>
                  <th>Banka Hesap AdSoyad</th>
                  <th>Banka IBAN</th>
                  <th>Banka Durumu</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($bankacek=$bankasor->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <td width="5%"><?php echo $bankacek['banka_id'] ?></td>
                    <td><?php echo $bankacek['banka_ad'] ?></td>
                    <td><?php echo $bankacek['banka_hesapadsoyad'] ?></td>
                    <td><?php echo $bankacek['banka_iban'] ?></td>
                    <td><?php echo ($bankacek['banka_durum'])=='1'?"Aktif":"Pasif" ?></td>
                    <td width="5%"><center><a href="banka-duzenle.php?banka_id=<?php echo $bankacek['banka_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                    <td width="5%"><center><a href="../netting/islem.php?banka_id=<?php echo $bankacek['banka_id']; ?>&bankasil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
