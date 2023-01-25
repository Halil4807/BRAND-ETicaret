<?php include 'header.php'; 


?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün Ekleme<small>

                      <!-- 
                        isset($_GET['durum'])&& eklenme sebebi aşağıdaki hatayı vermemesi
                        Warning: Undefined array key "durum" in C:\xampp\htdocs\BRAND-ETicaret\nedmin\production\genel-ayar.php on line 
                      -->
                      
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



                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="kategori_id" required>
                                    <option value="0" selected>Kategori Seçiniz</option>
                                    <?php foreach ($kategoricek as $key => $value) {
                                      echo '<option value="'.$value['kategori_id'].'">'.$value['kategori_ad'].'</option>';
                                    } ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="urun_ad" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Stok Adeti<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="urun_stok" required="required" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyatı <span class="">*</span></label>
                              
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="urun_fiyat"  class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Anahtar Kelime <span class="">*</span></label>
                              
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="first-name" name="urun_keyboard"  class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Durum <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="urun_durum" required>
                                  <option value="1"  selected="">Aktif</option>
                                  <option value="0" >Pasif</option>
                                </select>
                              </div>
                            </div>
                            <!-- Ck Editör Başlangıç -->

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Detayı <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">

                                <textarea  class="ckeditor" id="editor1" name="urun_detay"></textarea>
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
                              <button type="submit" name="urunkaydet" class="btn btn-success">Kaydet</button>
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