<?php include 'header.php'; 


$kategorisor=$db->prepare("SELECT * FROM kategori where kategori_id=:id");
$kategorisor->execute(array(
  'id'=>$_GET['kategori_id']
));
$say=$kategorisor->rowCount();
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
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
                        <ul class="dropdown-kategori" role="kategori">
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
                            <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id']; ?>">
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">kategori Linki <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" disabled=""  value="<?php 
                                if (!empty($kategoricek["kategori_url"])) {
                                  echo $ayarcek["ayar_url"].$kategoricek['kategori_url'];
                                }
                                else{echo $ayarcek["ayar_url"]."sayfa-".$kategoricek["kategori_seourl"];}
                              ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">kategori Sıra <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="kategori_sira" value="<?php echo $kategoricek['kategori_sira']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Adı <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="kategori_ad" value="<?php echo $kategoricek['kategori_ad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Üst Kategori <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="kategori_ust" value="<?php echo $kategoricek['kategori_ust'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori SeoURL <span class="">*</span></label>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="kategori_url" value="<?php echo $kategoricek['kategori_seourl'] ?>"  class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Durum <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="kategori_durum" required>
                                <option value="1" <?php echo $kategoricek['kategori_durum']=='1'?'selected=""':''; ?>>Aktif</option>
                                <option value="0" <?php if($kategoricek['kategori_durum']=='0') {echo 'selected=""';} ?>>Pasif</option>
                              </select>
                            </div>
                          </div>


                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button type="submit" name="kategoriduzenle" class="btn btn-success">Güncelle</button>
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