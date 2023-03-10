<?php include 'header.php'; 


$slidersor=$db->prepare("SELECT * FROM slider where slider_id=:id");
$slidersor->execute(array(
  'id'=>$_GET['slider_id']
));
$say=$slidersor->rowCount();
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kullanıcı Düzenleme<small>

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
                        <ul class="dropdown-slider" role="slider">
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





                          <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="slider_id" value="<?php echo $slidercek['slider_id']; ?>">
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Slider <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">

                                <?php 
                                if (strlen($slidercek['slider_resimyol'])>0) {?>

                                  <img width="200"  src="../../<?php echo $slidercek['slider_resimyol']; ?>">

                                <?php } else {?>


                                  <img width="200"  src="../../dimg/logo-yok.png">


                                <?php } ?>


                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Seç<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="first-name"  name="slider_resim"  class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <input type="hidden" name="eski_yol" value="<?php echo $slidercek['slider_resimyol']; ?>">
                            

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Linki <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" disabled=""  value="<?php echo $ayarcek["ayar_url"].$slidercek['slider_link'];?>" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="slider_sira" value="<?php echo $slidercek['slider_sira']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Adı <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="slider_ad" value="<?php echo $slidercek['slider_ad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider URL <span class="">*</span></label>

                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="slider_link" value="<?php echo $slidercek['slider_link'] ?>"  class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="slider_durum" required>
                                  <option value="1" <?php echo $slidercek['slider_durum']=='1'?'selected=""':''; ?>>Aktif</option>
                                  <option value="0" <?php if($slidercek['slider_durum']=='0') {echo 'selected=""';} ?>>Pasif</option>
                                </select>
                              </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="sliderduzenle" class="btn btn-success">Güncelle</button>
                                <button type="button" name="gokategori" class="btn btn-secondary" onClick="geri()">Geri</button>
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