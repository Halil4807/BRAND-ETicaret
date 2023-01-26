<?php include 'header.php'; 


$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
$urunsor->execute(array(
  'id'=>$_GET['urun_id']
));
$say=$urunsor->rowCount();
$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);
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
                            <input type="hidden" name="urun_id" value="<?php echo $uruncek['urun_id']; ?>">
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">urun Linki <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" disabled=""  value="<?php 
                                echo $ayarcek["ayar_url"]."urun-".$uruncek["urun_seourl"];
                              ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>



                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="kategori_id" required>
                                    <option value="0" selected>Kategori Seçiniz</option>
                                    <?php foreach ($kategoricek as $key => $value) {
                                      echo $value['kategori_id']==$uruncek['kategori_id']?'<option selected=""':'<option'; echo ' value="'.$value['kategori_id'].'">'.$value['kategori_ad'].'</option>';
                                    } ?>
                                </select>
                              </div>
                            </div>
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="urun_ad" value="<?php echo $uruncek['urun_ad']; ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stoğu <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="urun_stok" value="<?php echo $uruncek['urun_stok'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyatı <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="urun_fiyat" value="<?php echo $uruncek['urun_fiyat'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Anahtar Kelime <span class="">*</span></label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" name="urun_keyboard" value="<?php echo $uruncek['urun_keyboard'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durum <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="urun_durum" required>
                                <option value="1" <?php echo $uruncek['urun_durum']=='1'?'selected=""':''; ?>>Aktif</option>
                                <option value="0" <?php if($uruncek['urun_durum']=='0') {echo 'selected=""';} ?>>Pasif</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürünü Öne Çıkar <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select class="form-control" name="urun_onecikar" required>
                                <option value="1" <?php echo $uruncek['urun_onecikar']=='1'?'selected=""':''; ?>>Aktif</option>
                                <option value="0" <?php if($uruncek['urun_onecikar']=='0') {echo 'selected=""';} ?>>Pasif</option>
                              </select>
                            </div>
                          </div>
                          <!-- Ck Editör Başlangıç -->

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detayı <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                              <textarea  class="ckeditor" id="editor1" name="urun_detay"><?php echo $uruncek['urun_detay']; ?></textarea>
                            </div>
                          </div>

                          <script type="text/javascript">

                           CKEDITOR.replace( 'editor1',

                           {

                            filebrowserBrowseUrl : 'ckfinder/ckfinder.html',

                            filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',

                            filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',

                            filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

                            filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

                            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

                            forcePasteAsPlainText: true

                          } 

                          );

                        </script>

                        <!-- Ck Editör Bitiş -->


                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="urunduzenle" class="btn btn-success">Güncelle</button>
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