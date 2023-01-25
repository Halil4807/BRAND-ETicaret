<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$kategorisor=$db->prepare("SELECT * FROM kategori ORDER BY kategori_sira ASC");
$kategorisor->execute();

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kategori Listeleme <small>

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
                <a href="kategori-ekle.php"><button class="btn btn-success btn-xs">kategori Ekle</button></a>
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
                  <th>Kategori Sıra</th>
                  <th>Kategori Ad</th>
                  <th>Üst Kategori</th>
                  <th>Kategori SeoURL</th>
                  <th>Kategori Durumu</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) {?>
                <tr>
                  <td width="5%"><?php echo $kategoricek['kategori_sira'] ?></td>
                  <td><?php echo $kategoricek['kategori_ad'] ?></td>
                  <td><?php echo $kategoricek['kategori_ust'] ?></td>
                  <td><?php echo $kategoricek['kategori_seourl'] ?></td>
                  <td><?php echo ($kategoricek['kategori_durum'])=='1'?"Aktif":"Pasif" ?></td>
                  <td width="5%"><center><a href="kategori-duzenle.php?kategori_id=<?php echo $kategoricek['kategori_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                  <td width="5%"><center><a href="../netting/islem.php?kategori_id=<?php echo $kategoricek['kategori_id']; ?>&kategorisil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
