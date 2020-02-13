<?php include'header.php';
include'../netting/baglan.php';








?>

<head>
  
<script type="text/javascript" language="JavaScript">
<!--
//--------------------------------
// This code compares two fields in a form and submit it
// if they're the same, or not if they're different.
//--------------------------------
function checkEmail(theForm) {
    if (theForm.kullanici_yenisifre.value != theForm.kullanici_yenisifretekrar.value)
    {
        alert('Yeni şifreler eşleşmiyor');
        return false;
    } else {
        return true;
    }
}
//-->
</script> 

</head>

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

              <h3>Profil Ayarlar <small>
                <?php 
                error_reporting(E_ERROR | E_PARSE);

                if($_GET ['durum'] =='ok' ){ 

                  ?>
                  <b style="color:green;" > Güncelleme Başarılı.</b>
                  <?php  } elseif($_GET ['durum'] =='no'){
                  ?> 

 <b style="color:red;" > Güncelleme Başarısız.</b>

<?php } ?>

                </small></h3>

                  <ul class="nav navbar-right panel_toolbox">



                  </ul>
                  <div class="clearfix"></div>
                </div>


 <div class="x_content">


 <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

 <input type="hidden" name="kullanici_id" value="<?php echo $profilayarcek['kullanici_id']; ?>"  method="POST" >        



  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Profil<br>313x103 px<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">

                    <?php 
                    if (strlen($profilayarcek['kullanici_resim'])>0) {?>

                    <img width="200"  src="../../<?php echo $profilayarcek['kullanici_resim']; ?>">

                    <?php } else {?>


                    <img width="200"  src="../../dimg/admin/resim-yok.png">


                    <?php } ?>

                    
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="ayar_logoprofil"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <input type="hidden" name="eski_yol" value="<?php echo $profilayarcek['kullanici_resim']; ?>">

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="ProfilResimGuncelle" class="btn btn-primary">Güncelle</button>
                </div>

              </form>




              
              <!-- ######################################## -->








              <form action="../netting/islem.php" onsubmit="return checkEmail(this);"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <input type="hidden" name="k_eskisifre" method="POST" value="<?php  echo $profilayarcek['kullanici_pasword'] ?>">
                <input type="hidden" name="kullanici_id" value="<?php echo $profilayarcek['kullanici_id']; ?>"  method="POST" > 

                <input type="hidden" name="kullanici_eskiadsoyad" value="<?php echo $profilayarcek['kullanici_adsoyad']; ?>"  method="POST" > 

                <div class="form-group">


                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanici Adı <span class="required" >*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" disabled="" value="<?php echo $profilayarcek['kullanici_ad']; ?>" id="first-name" required="required" name="kullanici_ad" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad <span class="required" >*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" value="<?php echo $profilayarcek['kullanici_adsoyad']; ?>" name="kullanici_adsoyad" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>



                 <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eski Şifre<span  >*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" id="first-name" value="" name="kullanici_eskisifre" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Yeni Şifre<span class="required" >*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" id="id1"  value="" name="kullanici_yenisifre" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>


                  <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Yeni Şifre Tekrar<span class="required" >*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" id="id2" value="" name="kullanici_yenisifretekrar" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>


                     

          

                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button name="genelprofilayarkaydet" type="submit" class="btn btn-success">Güncelle</button>
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