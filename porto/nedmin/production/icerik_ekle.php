<?php 
include 'header.php';
include '../netting/baglan.php';
date_default_timezone_set('Europe/Istanbul');
?>
<head><script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script></head>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar</h3>
      </div>

    <!--  <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Anahtar Kelimeniz...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ara!</button>
            </span>
          </div>
        </div>
      </div>-->
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>içerik İşlemleri <small>
                <?php 
                if ($_GET['durum']=='ok') {?> 
                
                <b style="color:green;">Güncelleme başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                <b style="color:red;">Güncelleme yapılamadı...</b>

                <?php } ?></small> </h2>
                <ul class="nav navbar-right panel_toolbox">




                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="file" id="first-name" required="required" name="icerik_resimurl"  class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

 <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">icerik Tarih<span class="required">*</span>
                    </label>

    <div class="col-md-3">
       <input type="date" id="first-name" required="required" name="icerik_tarih" placeholder="icerik tarih" 

       value="<?php echo date('Y-m-d'); ?>" class="form-control col-md-7 col-xs-12">
                   
    </div>
      <div class="col-md-3">
         <input type="time" id="first-name" required="required" name="icerik_saat" value="<?php echo date('H:i:s'); ?>"class="form-control col-md-7 col-xs-12">
                   
      </div>
              
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">icerik Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="icerik_ad" placeholder="icerik adını giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

                
                 

              


 <div class="form-group">
                        <label  class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">İçerik Detay  <span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="icerik_detay" rows="3" ></textarea>

                        </div>


                      </div>

                       <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">icerik Keyword<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="icerik_keyword" placeholder="icerik Keywors" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


    <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">icerik Durum<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     <select id="heard" class="form-control" name="icerik_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                         
                          </select>
                    </div>
                  </div>
                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="icerikkaydet" class="btn btn-primary">Kaydet</button>
                  </div>

                </form>



              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->



  <?php include 'footer.php'; ?>
