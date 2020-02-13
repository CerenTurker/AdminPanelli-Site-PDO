<?php include'header.php';
      include'../netting/baglan.php';

    $hakkimizdasor=$db ->prepare("select * from hakkimizda where hakkimizda_id=?");
 $hakkimizdasor->execute(array(0));
 $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

 ?>

<head><script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script></head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar </h3>


              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    <div class="x_title">

                    <h3>Hakkımızda Ayarları <small>
            <?php 
            error_reporting(E_ERROR | E_PARSE);

            if($_GET ['durum'] =='ok' ){ 
              
              ?>
           <b style="color:green;" > Güncelleme Başarılı.</b>
              <?php  } 
              ?> </small></h3>

                    <ul class="nav navbar-right panel_toolbox">
                     
                   
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>



 <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                       
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda Başlık<span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" value="<?php echo $hakkimizdacek['hakkimizda_baslik']; ?>" id="first-name" required="required" name="hakkimizda_baslik" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                         <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda İçerik  <span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="hakkimizda_icerik" rows="3" > <?php echo $hakkimizdacek['hakkimizda_icerik'] ?></textarea>

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
                    
                      
                       <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tanıtım Videosu <span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $hakkimizdacek['hakkimizda_video']; ?>"required="required" name="hakkimizda_video" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Misyonumuz<span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $hakkimizdacek['hakkimizda_misyon']; ?>" required="required" name="hakkimizda_misyon" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Vizyonumuz<span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $hakkimizdacek['hakkimizda_vizyon']; ?>" required="required" name="hakkimizda_vizyon" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                       <div align="right" class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button name="hakkimizdakaydet" type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                    </form>


               
              </div>

<!--   tablo son-->
                </div>
              </div>
            </div>
          </div>
        </div>
                



                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->






       <?php  include'footer.php'; ?>