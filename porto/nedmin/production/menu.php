<?php include'header.php';


if (isset($_POST['arama'])) {

  $aranan=$_POST['aranan'];

  $menusor=$db ->prepare("select * from menu where menu_ad LIKE '%$aranan%' order by menu_id DESC limit 25");

  $menusor->execute();

  $say=$menusor->rowCount();
}
else{
  $menusor=$db ->prepare("select * from menu where menu_ust='0' order by  menu_sira ASC limit 25");

  $menusor->execute();
  $say=$menusor->rowCount();

}



?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
     <div class="title_left">
      <h3> </h3>


    </div>
    
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
       <form action="" method="POST">
        <div class="input-group">




          <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelimeniz...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name="arama">Ara</button>
          </span>

        </form>

      </div>
    </div>
  </div>



</div>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      

     <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_title">
        <div align="left" class="col-md-6" >
         <h2 class="col-md-12"> Menü İşlemleri<small>Custom design</small></h2>

         <?php echo $say." kayıt listelendi.." ?>

       </div>

       <div align="right" class="col-md-6">
        <a href="menu_ekle.php">
         <button style="width: 80px;" class="btn btn-success btn-xs"><i class="success fa fa-plus"></i>Ekle</button></a>
       </div>
       <div class="clearfix"></div>
     </div>
     

     <div class="x_content">

       

      <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
             
             
              <th width="180" class="column-title">Ad </th>

              <th class="column-title"> Sira </th>
              <th class="column-title"> Üst Menü </th>

              <th class="column-title"> Durum </th>
              <th width="80" class="column-title"> </th>
              <th width="80" class="column-title"> </th>
              
            </tr>
          </thead>

          <tbody>
            
            <?php 


            while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) {

              $menu_id=$menucek['menu_id'];

              ?>

              


              <tr class="even pointer">
               
               
                <td  align="left" class="column-title text"> <?php echo $menucek['menu_ad'];  ?></td>
                <td class="column-title  text-center"><?php echo $menucek['menu_sira'];  ?></td>
                <td class="column-title   text-center">
                  <?php


                   if($menucek['menu_ust']==0)
                  echo "Ana Menu";
                else
                  echo "Alt Menu";


                ?> 


                  </td>
                
                <td class="column-title   text-center"><?php 
                if($menucek['menu_durum']==1)
                  echo "Aktif";
                else
                  echo "Pasif";


                ?></td>
                <td class="column-title "> <a href="menu_duzenle.php?menu_id=<?php echo $menucek['menu_id'];  ?>"><button style="width: 80px;" class="btn btn-primary btn-xs"><i class="success fa fa-pencil"></i>Düzenle</button></a></td>

                <td class=""> <a href="../netting/islem.php?menusil=ok&menu_id=<?php echo $menucek['menu_id']; ?>"><button style="width: 80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Sil</button>
                </a> </td>
              </tr>
              

              <?php


              $altmenusor=$db ->prepare("select * from menu where menu_ust=:menu_id order by  menu_sira ASC");
              $altmenusor->execute( array(
                'menu_id' =>$menu_id
              ));


              $altmenusor->execute();
              
              while ($altmenucek=$altmenusor->fetch(PDO::FETCH_ASSOC)) {?>





              <tr class="even pointer">
               
               
                <td class="column-title text-center"> ----- ><?php echo $altmenucek['menu_ad'];  ?></td>
                <td class="column-title  text-center"><?php echo $altmenucek['menu_sira'];  ?></td>
                <td class="column-title   text-center"><?php 



                   if($altmenucek['menu_ust']==0)
                  echo "Ana Menu";
                else
                  echo "Alt Menu";


                ?> 



                </td>
                
                <td class="column-title   text-center"><?php 
                if($altmenucek['menu_durum']==1)
                  echo "Aktif";
                else
                  echo "Pasif";


                ?></td>
                <td class="column-title "> <a href="menu_duzenle.php?menu_id=<?php echo $altmenucek['menu_id'];  ?>"><button style="width: 80px;" class="btn btn-primary btn-xs"><i class="success fa fa-pencil"></i>Düzenle</button></a></td>

                <td class=""> <a href="../netting/islem.php?menusil=ok&menu_id=<?php echo $altmenucek['menu_id']; ?>"><button style="width: 80px;" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Sil</button>
                </a> </td>
              </tr>
              



              



              <?php 
            }
          }
          ?>


          
          
          


        </tbody>
      </table>
    </div>
  </div>
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