<?php include 'header.php'; 


$bankasor=$db->prepare("SELECT * FROM banka where banka_id=:id");
$bankasor->execute(array(
  'id'=>$_GET['banka_id']
));
$say=$bankasor->rowCount();
$bankacek=$bankasor->fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Banka Düzenleme<small>

                      <!-- 
                        isset($_GET['durum'])&& eklenme sebebi aşağıdaki hatayı vermemesi
                        Warning: Undefined array key "durum" in C:\xampp\htdocs\BRAND-ETicaret\nedmin\production\genel-ayar.php on line 
                      -->
                      <?php 
                      if(isset($_GET['durum'])&&$_GET['durum']=="ok"){?>
                        <b style="color: green;">Güncelleme başarılı</b>
                        <?php  
                      }
                      elseif(isset($_GET['durum'])&&$_GET['durum']=="no"){
                        ?>
                        <b style="color: red;">Güncelleme başarısız</b>
                        <?php 
                      } 
                      ?>


                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      <!-- 
                              / Kök dizine çık
                            ../ Bir üst dizine çık 
                          -->
                          <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                          <input type="hidden" name="banka_id" value="<?php echo $bankacek['banka_id']; ?>">
                           
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Adı <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="banka_ad" value="<?php echo $bankacek['banka_ad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Hesap AdSoyad<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="banka_hesapadsoyad" value="<?php echo $bankacek['banka_hesapadsoyad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka IBAN <span class="">*</span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="banka_iban" value="<?php echo $bankacek['banka_iban'] ?>"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Durum <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="banka_durum" required>
                                <option value="1" <?php echo $bankacek['banka_durum']=='1'?'selected=""':''; ?>>Aktif</option>
                                <option value="0" <?php if($bankacek['banka_durum']=='0') {echo 'selected=""';} ?>>Pasif</option>
                              </select>
                            </div>
                          </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="bankaduzenle" class="btn btn-success">Güncelle</button>
                            <button type="button" class="btn btn-secondary" onClick="geri()">Geri</button>
                          </div>
                        </div>

                      </form>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- /page content -->
          <?php include 'footer.php'; ?>