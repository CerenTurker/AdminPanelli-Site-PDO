<?php 
include 'header.php';
include '../netting/baglan.php';
date_default_timezone_set('Europe/Istanbul');


$menusor=$db ->prepare("SELECT * from menu where menu_ust='0' order by menu_ad ASC ");

 $menusor->execute();
?>
<head>

    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">

  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script></head>

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
              <h2>Menu İşlemleri <small>
               </small> </h2>
                <ul class="nav navbar-right panel_toolbox">




                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">

                <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              

 <div class="form-group">
                   
   

  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Üst Menü Seç</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <select class="select2_single form-control" required="" name="menu_ust" tabindex="-1">
                          <option value="0">Üst Menü</option>


  <?php 


                   while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {?>
                            <option></option>
                            <option value="<?php echo $menucek['menu_id']; ?>"><?php echo $menucek['menu_ad']; ?></option>
                           
                           <?php } ?>


                          </select>
                        </div>
                      </div>


                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">menu Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="menu_ad" placeholder="menu adını giriniz..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>






              
                  <div class="form-group">
                        <label  class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Detay  <span class="required" >*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="menu_detay" rows="3" ></textarea>

                        </div>


                      </div>

                       <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Menü Url<span ></span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  name="menu_url" placeholder="menu rrl..." class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>

              
    <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">menu Durum<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                     <select id="heard" class="form-control" name="menu_durum" required>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                         
                          </select>
                    </div>
                  </div>

    <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">menu Sıra<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" name="menu_sira" value="0" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                  <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="menukaydet" class="btn btn-primary">Kaydet</button>
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


 <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>

    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
