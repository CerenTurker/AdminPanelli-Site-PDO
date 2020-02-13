<?php include'header.php';
      include'../netting/baglan.php';

    $ayarsor=$db ->prepare("select * from ayar where ayar_id=?");
 $ayarsor->execute(array(0));
 $ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

 ?>

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

                    <h3>İletişim Ayarları <small>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon  <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" value="<?php echo $ayarcek['ayar_tel']; ?>" name="ayar_tel" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gsm <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $ayarcek['ayar_gsm']; ?>"required="required" name="ayar_gsm" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Faks <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $ayarcek['ayar_faks']; ?>" required="required" name="ayar_faks" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $ayarcek['ayar_mail']; ?>" required="required" name="ayar_mail" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                    


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adres <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $ayarcek['ayar_adres']; ?>" required="required" name="ayar_adres" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $ayarcek['ayar_ilce']; ?>" required="required" name="ayar_ilce" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" value="<?php echo $ayarcek['ayar_il']; ?>" required="required" name="ayar_il" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                       <div class="form-group">
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesai <span class="required" >*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $ayarcek['ayar_mesai']; ?>" id="first-name" required="required" name="ayar_mesai" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                       <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button name="iletisimayarlarıkaydet" type="submit" class="btn btn-success">Güncelle</button>
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