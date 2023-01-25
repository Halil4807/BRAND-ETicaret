<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$urunsor=$db->prepare("SELECT * FROM urun ORDER BY kategori_id ASC");
$urunsor->execute();

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
                <a href="urun-ekle.php"><button class="btn btn-success btn-xs">urun Ekle</button></a>
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
                  <th>Ürün Kategori</th>
                  <th>Ürün Ad</th>
                  <th>Ürün Stoğu</th>
                  <th>Ürün Fiyatı</th>
                  <th>Ürün URL</th>
                  <th>Ürün Durumu</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <td width="5%"><?php echo $uruncek['kategori_id'] ?></td>
                    <td><?php echo $uruncek['urun_ad'] ?></td>
                    <td><?php echo $uruncek['urun_stok'] ?></td>
                    <td><?php echo $uruncek['urun_fiyat'] ?></td>
                    <td><?php echo $uruncek['urun_seourl'] ?></td>
                    <td><?php echo ($uruncek['urun_durum'])=='1'?"Aktif":"Pasif" ?></td>
                    <td width="5%"><center><a href="urun-duzenle.php?urun_id=<?php echo $uruncek['urun_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                    <td width="5%"><center><a href="../netting/islem.php?urun_id=<?php echo $uruncek['urun_id']; ?>&urunsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
