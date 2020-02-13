
<?php 

/*headerların çalışması için önemli işlemi gerçekleştirince geldiği yere göndermeye yarıyo */
ob_start();
session_start();
$ayarindex=-1;
include'baglan.php';
if(isset($_POST['loggin']))
{
 $kullanici_ad=$_POST['kullanici_ad'];
  $kullanici_pasword=md5($_POST['kullanici_pasword']);



 if($response=="kkk"){
  header('Location:login.php?login=robot');
}else{


  if($kullanici_ad&&$kullanici_pasword){

    $kullanicisor=$db-> prepare("SELECT * FROM kullanici where kullanici_ad=:ad and kullanici_pasword=:pasword");
    $kullanicisor->execute(array(
      'ad'=> $kullanici_ad,
      'pasword'=> $kullanici_pasword
    ));
    $say=$kullanicisor ->rowCount();


    if($say>0){
      $icerikcek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

      $_SESSION['kullanici_ad']=$kullanici_ad;
      $_SESSION['kullanici_id']=$icerikcek['kullanici_id'];


      header("Location:../production/index.php");


    }
    else{

      header("Location:../production/login.php?durum=no");
    }


  }
  else{

    header("Location:../production/login.php?durum=no");

  }



}

}



if(isset($_POST['genelprofilayarkaydet'])){

 $kullanici_eskisifre=$_POST['kullanici_eskisifre'];
 $kullanici_yenisifre=$_POST['kullanici_yenisifre'];
 $kullanici_yenisifretekrar=$_POST['kullanici_yenisifretekrar'];

 if((strlen($kullanici_eskisifre)>0&&strlen($kullanici_yenisifre)>0)&&strlen($kullanici_yenisifretekrar)>0){

  $kullanici_eskisifre=md5($_POST['kullanici_eskisifre']);
  $kullanici_yenisifre=md5($_POST['kullanici_yenisifre']);
  $kullanici_yenisifretekrar=md5($_POST['kullanici_yenisifretekrar']);


  if(($kullanici_eskisifre==$_POST['k_eskisifre'])&&($kullanici_yenisifre==$kullanici_yenisifretekrar))

  {


   $ayarkaydet=$db-> prepare("UPDATE kullanici SET  
    kullanici_adsoyad=:adsoyad,
    kullanici_pasword=:pasword

    where kullanici_id={$_POST['kullanici_id']}");



   $updateprofil=$ayarkaydet->execute(array(
    'adsoyad' => $_POST['kullanici_adsoyad'],
    'pasword' => $kullanici_yenisifre


  ));


   if($updateprofil){


     header("location:../production/profil_ayar.php?durum=ok");

   }else{

    header("location:../production/profil_ayar.php?durum=no");



  }


}


else{

  header("Location:../production/profil_ayar.php?durum=no");
  

}
}
else
{

  if($_POST['kullanici_adsoyad']!=$_POST['kullanici_eskiadsoyad'])
  {
   $ayarkaydet=$db-> prepare("UPDATE kullanici SET  
    kullanici_adsoyad=:adsoyad
    
    
    where kullanici_id={$_POST['kullanici_id']}");



   $updateprofil2=$ayarkaydet->execute(array(
    'adsoyad' => $_POST['kullanici_adsoyad']
    

  ));
   

   if($updateprofil2){
    

     header("location:../production/profil_ayar.php?durum=ok");

   }else{

    header("location:../production/profil_ayar.php?durum=no");

    

  }

}

else{

  header("location:../production/profil_ayar.php");

  

}


}


}



if(isset($_POST['iletisimayarlarıkaydet'])) {
  $ayarindex=1;

  $ayarkaydet=$db-> prepare("UPDATE ayar SET  
   ayar_tel=:tel,
   ayar_gsm=:gsm,
   ayar_faks=:faks,
   ayar_mail=:mail,
   ayar_adres=:adres,
   ayar_ilce=:ilce,
   ayar_il=:il,
   ayar_mesai=:mesai
   where ayar_id=0");



  $update=$ayarkaydet->execute(array(
    'tel' => $_POST['ayar_tel'],
    'gsm' => $_POST['ayar_gsm'],
    'faks' => $_POST['ayar_faks'],
    'mail' => $_POST['ayar_mail'],
    'adres' => $_POST['ayar_adres'],
    'ilce' => $_POST['ayar_ilce'],
    'il' => $_POST['ayar_il'],
    'mesai' => $_POST['ayar_mesai']

  ));


}


if(isset($_POST['genelayarkaydet'])){
  $ayarindex=0;

  $ayarkaydet=$db-> prepare("UPDATE ayar SET  
   ayar_siteurl=:siteurl,
   ayar_title=:title,
   ayar_description=:description,
   ayar_keywords=:keywords,
   ayar_author=:author
   where ayar_id=0");



  $update=$ayarkaydet->execute(array(
    'siteurl' => $_POST['ayar_siteurl'],
    'title' => $_POST['ayar_title'],
    'description' => $_POST['ayar_description'],
    'keywords' => $_POST['ayar_keywords'],
    'author' => $_POST['ayar_author']

  ));


}

if(isset($_POST['iletisimayarlarıkaydet'])) {
  $ayarindex=1;

  $ayarkaydet=$db-> prepare("UPDATE ayar SET  
   ayar_tel=:tel,
   ayar_gsm=:gsm,
   ayar_faks=:faks,
   ayar_mail=:mail,
   ayar_adres=:adres,
   ayar_ilce=:ilce,
   ayar_il=:il,
   ayar_mesai=:mesai
   where ayar_id=0");



  $update=$ayarkaydet->execute(array(
    'tel' => $_POST['ayar_tel'],
    'gsm' => $_POST['ayar_gsm'],
    'faks' => $_POST['ayar_faks'],
    'mail' => $_POST['ayar_mail'],
    'adres' => $_POST['ayar_adres'],
    'ilce' => $_POST['ayar_ilce'],
    'il' => $_POST['ayar_il'],
    'mesai' => $_POST['ayar_mesai']

  ));


}





if(isset($_POST['Apiayarlarıkaydet'])) {
  $ayarindex=2;

  $ayarkaydet=$db-> prepare("UPDATE ayar SET  
   ayar_recapctha=:recapctha,
   ayar_googlemap=:googlemap,
   ayar_analystic=:analystic

   where ayar_id=0");



  $update=$ayarkaydet->execute(array(
    'recapctha' => $_POST['ayar_recapctha'],
    'googlemap' => $_POST['ayar_googlemap'],
    'analystic' => $_POST['ayar_analystic']


  ));


}



if(isset($_POST['Sosyalayarlarıkaydet'])) {
  $ayarindex=3;

  $ayarkaydet=$db-> prepare("UPDATE ayar SET  
   ayar_facebook=:facebook,
   ayar_twiter=:twiter,
   ayar_google=:google,
   ayar_youtube=:youtube


   where ayar_id=0");



  $update=$ayarkaydet->execute(array(
    'facebook' => $_POST['ayar_facebook'],
    'twiter' => $_POST['ayar_twiter'],
    'google' => $_POST['ayar_google'],
    'youtube' => $_POST['ayar_youtube']


  ));


}


if(isset($_POST['Mailayarlarıkaydet'])) {
  $ayarindex=4;

  $ayarkaydet=$db-> prepare("UPDATE ayar SET  
   ayar_smtphost=:smtphost,
   ayar_smtpuser=:mtpuser,
   ayar_smtppasword=:smtppasword,
   ayar_smtpport=:smtpport


   where ayar_id=0");



  $update=$ayarkaydet->execute(array(
    'smtphost' => $_POST['ayar_smtphost'],
    'mtpuser' => $_POST['ayar_smtpuser'],
    'smtppasword' => $_POST['ayar_smtppasword'],
    'smtpport' => $_POST['ayar_smtpport']


  ));


}

if(isset($_POST['hakkimizdakaydet'])) {
  $ayarindex=5;

  $hakkimizdakaydet=$db-> prepare("UPDATE hakkimizda SET  
   hakkimizda_baslik=:baslik,
   hakkimizda_icerik=:icerik,
   hakkimizda_video=:video,
   hakkimizda_misyon=:misyon,

   hakkimizda_vizyon=:vizyon

   where hakkimizda_id=0");



  $update=$hakkimizdakaydet->execute(array(
    'baslik' => $_POST['hakkimizda_baslik'],
    'icerik' => $_POST['hakkimizda_icerik'],
    'video' => $_POST['hakkimizda_video'],

    'misyon' => $_POST['hakkimizda_misyon'],
    'vizyon' => $_POST['hakkimizda_vizyon']



  ));


}

if(isset($_POST['sliderkaydet'])) {
  $ayarindex=6;


  $uploads_dir = '../../dimg/slider';
  @$tmp_name = $_FILES['slider_resimurl']["tmp_name"];
  @$name = $_FILES['slider_resimurl']["name"];
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

  $kaydet=$db-> prepare("INSERT INTO slider SET
   slider_ad=:ad,
   slider_resimurl=:resimyol,
   slider_link=:link,
   slider_sira=:sira,
   slider_durum=:durum");



  $insert=$kaydet->execute(array(
    'ad' => $_POST['slider_ad'],
    'resimyol' => $refimgyol,
    'link' => $_POST['slider_link'],
    'sira' => $_POST['slider_sira'],
    'durum' => $_POST['slider_durum']

  ));


}


if($_GET['menusil']=='ok'){
 $menusor = $db->prepare("SELECT * FROM menu WHERE menu_id=:menu_id");
 $menusor->execute(array(
  "menu_id" => $_GET["menu_id"])

);


 $menucek=$menusor->fetch(PDO::FETCH_ASSOC);

 $ustmu=$menucek['menu_ust'];

 if($ustmu=='0'){



   $menaltsor = $db->prepare("SELECT * FROM menu WHERE menu_ust=:menu_ust");
   $menaltsor->execute(array(
    "menu_ust" => $_GET["menu_id"])

 );



   $ustmenusil=$db-> prepare("DELETE FROM menu where menu_id=:menu_id");
   $ustmenusil->execute(array(
    'menu_id'=> $_GET['menu_id']

  ));

   while( $altmenucek=$menaltsor->fetch(PDO::FETCH_ASSOC))
    {


      $sil=$db-> prepare("DELETE FROM menu where menu_id=:menu_id");
      $sil->execute(array(
        'menu_id'=> $altmenucek['menu_id']

      ));

    }

  }
  else{

   $sil=$db-> prepare("DELETE FROM menu where menu_id=:menu_id");
   $sil->execute(array(
    'menu_id'=> $_GET['menu_id']

  ));

 }
 if($sil){


  header("location:../production/menu.php?menusil=ok");

}else{

  header("location:../production/menu.php?menusil=no");



}

}


if(isset($_POST['ProfilResimGuncelle'])) {




  $uploads_dir = '../../dimg/admin';
  @$tmp_name = $_FILES['ayar_logoprofil']["tmp_name"];
  @$name = $_FILES['ayar_logoprofil']["name"];
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


  $logokaydet=$db-> prepare("UPDATE kullanici SET  

   kullanici_resim=:resim


   where kullanici_id={$_POST['kullanici_id']}");


  $updatelogo=$logokaydet->execute(array(

    'resim' => $refimgyol

  ));


  if($updatelogo){
   $logo_resimyol =$_POST['eski_yol'];

   unlink("../../".$logo_resimyol);
   header("location:../production/profil_ayar.php?durum=ok");

 }else{

  header("location:../production/profil_ayar.php?durum=no");



}







}





if(isset($_POST['logoGuncelle'])) {




  $uploads_dir = '../../dimg/logo';
  @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
  @$name = $_FILES['ayar_logo']["name"];
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


  $logokaydet=$db-> prepare("UPDATE ayar SET  

   ayar_logo=:logo

   where ayar_id=0");


  $updatelogo=$logokaydet->execute(array(

    'logo' => $refimgyol

  ));


  if($updatelogo){
   $logo_resimyol =$_POST['eski_yol'];

   unlink("../../".$logo_resimyol);
   header("location:../production/genel-ayar.php?durum=ok");

 }else{

  header("location:../production/genel-ayar.php?durum=no");



}







}




if($_GET['slidersil']=='ok'){
 $slideryol = $db->prepare("SELECT * FROM slider WHERE slider_id=:slider_id");
 $slideryol->execute(array("slider_id" => $_GET["slider_id"]));
 $slider_resimyol = $slideryol->fetch(PDO::FETCH_ASSOC);


 $sil=$db-> prepare("DELETE FROM slider where slider_id=:slider_id");
 $kontrol=$sil->execute(array(
  'slider_id'=> $_GET['slider_id']

));


 if($kontrol){


  unlink("../../".$slider_resimyol["slider_resimurl"]);
  header("location:../production/slider.php?slidersil=ok");

}else{

  header("location:../production/slider.php?slidersil=no");



}

}




if(isset($_POST['sliderduzenle'])) {



  if($_FILES['slider_resimurl']["size"]>0){
    $uploads_dir = '../../dimg/slider';
    @$tmp_name = $_FILES['slider_resimurl']["tmp_name"];
    @$name = $_FILES['slider_resimurl']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


    $sliderkaydet=$db-> prepare("UPDATE slider SET  
     slider_ad=:ad,
     slider_link=:link,
     slider_sira=:sira,
     slider_durum=:durum,
     slider_resimurl=:resimurl


     where slider_id={$_POST['slider_id']}");



    $update=$sliderkaydet->execute(array(
      'ad' => $_POST['slider_ad'],
      'link' => $_POST['slider_link'],
      'sira' => $_POST['slider_sira'],

      'durum' => $_POST['slider_durum'],
      'resimurl' =>$refimgyol




    ));
    $slider_id=$_POST['slider_id'];
    if($update){
     $slider_resimyol =$_POST['slider_resimurl'];

     unlink("../../".$slider_resimyol);
     header("location:../production/slider_duzenle.php?slider_id=$slider_id&durum=ok");

   }else{

    header("location:../production/slider_duzenle.php?slider_id=$slider_id&durum=no");



  }

}

else{

 $sliderkaydet=$db-> prepare("UPDATE slider SET  
   slider_ad=:ad,
   slider_link=:link,
   slider_sira=:sira,
   slider_durum=:durum


   where slider_id={$_POST['slider_id']}");



 $update=$sliderkaydet->execute(array(
  'ad' => $_POST['slider_ad'],
  'link' => $_POST['slider_link'],
  'sira' => $_POST['slider_sira'],

  'durum' => $_POST['slider_durum']



));
 $slider_id=$_POST['slider_id'];
 if($update){
  header("location:../production/slider_duzenle.php?slider_id=$slider_id&durum=ok");

}else{

  header("location:../production/slider_duzenle.php?slider_id=$slider_id&durum=no");



}

}
}




if(isset($_POST['menu_duzenle'])){




  $ayarkaydet=$db-> prepare("UPDATE menu SET  
   menu_ust=:ust,
   menu_ad=:ad,
   menu_url=:url,
   menu_detay=:detay,
   menu_durum=:durum,

   menu_sira=:sira

   where menu_id={$_POST['menu_id']}");



  $update=$ayarkaydet->execute(array(
    'ust' => $_POST['menu_ust'],
    'ad' =>$_POST['menu_ad'],
    'url' => $_POST['menu_url'],
    'detay' =>$_POST['menu_detay'],
    'durum' => $_POST['menu_durum'],
    'sira' => $_POST['menu_sira']

  ));


  if($update){
    header("location:../production/menu.php?menu_id=$menu_id&durum=ok");

  }else{

    header("location:../production/menu.php?menu_id=$menu_id&durum=no");



  }


}







if(isset($_POST['icerikduzenle'])) {



  if($_FILES['icerik_resimurl']["size"]>0){
    $uploads_dir = '../../dimg/icerik';
    @$tmp_name = $_FILES['icerik_resimurl']["tmp_name"];
    @$name = $_FILES['icerik_resimurl']["name"];
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


    $icerikkaydet=$db-> prepare("UPDATE icerik SET  
     icerik_ad=:ad,
     icerik_resimurl=:resimyol,
     icerik_detay=:detay,
     icerik_zaman=:zaman,
     icerik_keyword=:keyword,

     icerik_durum=:durum
     where icerik_id={$_POST['icerik_id']}");






    $insert=$icerikkaydet->execute(array(
      'ad' => $_POST['icerik_ad'],
      'resimyol' => $refimgyol,
      'detay' => $_POST['icerik_detay'],
      'zaman' =>$_POST['icerik_tarih'].'/'.$_POST['icerik_saat'],
      'keyword' => $_POST['icerik_keyword'],
      'durum' => $_POST['icerik_durum']




    ));

    $icerik_id=$_POST['icerik_id'];
    if($insert){
     $icerik_resimyol =$_POST['icerik_resimurl'];

     unlink("../../".$icerik_resimyol);
     header("location:../production/icerik.php?icerik_id=$icerik_id&durum=ok");

   }else{

    header("location:../production/icerik.php?icerik_id=$icerik_id&durum=no");



  }

}

else{

  $icerikkaydet=$db-> prepare("UPDATE icerik SET  
   icerik_ad=:ad,
   icerik_detay=:detay,
   icerik_zaman=:zaman,
   icerik_keyword=:keyword,

   icerik_durum=:durum
   where icerik_id={$_POST['icerik_id']}");




  $insert=$icerikkaydet->execute(array(
    'ad' => $_POST['icerik_ad'],
    'detay' => $_POST['icerik_detay'],
    'zaman' =>$_POST['icerik_tarih'].'/'.$_POST['icerik_saat'],
    'keyword' => $_POST['icerik_keyword'],
    'durum' => $_POST['icerik_durum']



  ));

  if($insert){
    header("location:../production/icerik.php?icerik_id=$icerik_id&durum=ok");

  }else{

    header("location:../production/icerik.php?icerik_id=$icerik_id&durum=no");



  }

}
}






if(isset($_POST['icerikkaydet'])) {


  $uploads_dir = '../../dimg/icerik';
  @$tmp_name = $_FILES['icerik_resimurl']["tmp_name"];
  @$name = $_FILES['icerik_resimurl']["name"];
  $benzersizsayi1=rand(20000,32000);
  $benzersizsayi2=rand(20000,32000);
  $benzersizsayi3=rand(20000,32000);
  $benzersizsayi4=rand(20000,32000);
  $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
  $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
  @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

  $kaydet=$db-> prepare("INSERT INTO icerik SET
   icerik_ad=:ad,
   icerik_resimurl=:resimyol,
   icerik_detay=:detay,
   icerik_zaman=:zaman,
   icerik_keyword=:keyword,

   icerik_durum=:durum");



  $insert=$kaydet->execute(array(
    'ad' => $_POST['icerik_ad'],
    'resimyol' => $refimgyol,
    'detay' => $_POST['icerik_detay'],
    'zaman' =>$_POST['icerik_tarih'].'/'.$_POST['icerik_saat'],
    'keyword' => $_POST['icerik_keyword'],
    'durum' => $_POST['icerik_durum']


  ));


  if($insert){
    header("location:../production/icerik.php?durum=ok");

  }else{

    header("location:../production/icerik.php?durum=no");



  }


}



if(isset($_POST['menukaydet'])) {


  $kaydet=$db-> prepare("INSERT INTO menu SET
   menu_ust=:ust,
   menu_ad=:ad,
   menu_url=:url,
   menu_detay=:detay,
   menu_durum=:durum,

   menu_sira=:sira");



  $insert=$kaydet->execute(array(
    'ust' => $_POST['menu_ust'],
    'ad' =>$_POST['menu_ad'],
    'url' => $_POST['menu_url'],
    'detay' =>$_POST['menu_detay'],
    'durum' => $_POST['menu_durum'],
    'sira' => $_POST['menu_sira']


  ));


  if($insert){
    header("location:../production/menu.php?durum=ok");

  }else{

    header("location:../production/menu.php?durum=no");



  }


}











if($update||$insert){

  if($ayarindex==0)

   Header("Location:../production/genel-ayar.php?durum=ok");
 elseif($ayarindex==1)
   Header("Location:../production/iletisim-ayar.php?durum=ok");
 elseif($ayarindex==2)
   Header("Location:../production/api-ayar.php?durum=ok");
 elseif($ayarindex==3)
   Header("Location:../production/sosyal-ayar.php?durum=ok");

 elseif($ayarindex==4)
   Header("Location:../production/mail-ayar.php?durum=ok");
 elseif($ayarindex==5)
   Header("Location:../production/hakkimizda.php?durum=ok");
 elseif($ayarindex==6)
   Header("Location:../production/slider.php?durum=ok");
}
else{
 if($ayarindex==0)

  Header("Location:../production/genel-ayar.php?durum=no");
elseif($ayarindex==1)
 Header("Location:../production/iletisim-ayar.php?durum=no");

elseif($ayarindex==2)
 Header("Location:../production/api-ayar.php?durum=no");
elseif($ayarindex==3)
 Header("Location:../production/sosyal-ayar.php?durum=no");
elseif($ayarindex==4)
 Header("Location:../production/mail-ayar.php?durum=no");
elseif($ayarindex==5)
 Header("Location:../production/hakkimizda.php?durum=no");
elseif($ayarindex==6)
 Header("Location:../production/slider.php?durum=no");



}







?>