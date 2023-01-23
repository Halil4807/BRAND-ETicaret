<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$slidersor=$db->prepare("SELECT * FROM slider");
$slidersor->execute();

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Slider Listeleme <small>

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
                <a href="slider-ekle.php"><button class="btn btn-success btn-xs">slider Ekle</button></a>
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
                  <th>Slider No</th>
                  <th>Resim</th>
                  <th>Ad</th>
                  <th>URL</th>
                  <th>Sıra</th>
                  <th>Durumu</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {?>
                <tr>
                  <td width="5%"><?php echo $slidercek['slider_id'] ?></td>
                  <td width="15%"><img width="200" src="../../<?php echo $slidercek['slider_resimyol'] ?>"></td>
                  <td><?php echo $slidercek['slider_ad'] ?></td>
                  <td><?php echo $slidercek['slider_link'] ?></td>
                  <td><?php echo $slidercek['slider_sira'] ?></td>
                  <td><?php echo ($slidercek['slider_durum'])=='1'?"Aktif":"Pasif" ?></td>
                  <td width="5%"><center><a href="slider-duzenle.php?slider_id=<?php echo $slidercek['slider_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                  <td width="5%"><center><a href="../netting/islem.php?slider_id=<?php echo $slidercek['slider_id']; ?>&slidersil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
