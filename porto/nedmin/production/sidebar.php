<?php 


if(isset($_SESSION['kullanici_ad'])){


  }
  else{
header("Location:login.php");
exit;


  }


 ?>


            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>

               
                <ul class="nav side-menu">

<li><a href="index.php"><i class="fa fa-laptop"></i> Anasayfa <span class="label label-success pull-right">Coming Soon</span></a></li>


<li><a href="hakkimizda.php"><i class="fa fa-info"></i> Hakkımızda <span class="label label-success pull-right"></span></a></li>

<li><a href="slider.php"><i class="fa fa-image"></i> Slider İşlemleri <span class="label label-success pull-right"></span></a></li>

<li><a href="menu.php"><i class="fa fa-list"></i> Menu İşlemleri <span class="label label-success pull-right"></span></a></li>

<li><a href="icerik.php"><i class="fa fa-file-text-o"></i> İcerik İşlemleri <span class="label label-success pull-right"></span></a></li>

                  <li><a><i class="fa fa-cog"></i> Ayarlar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
                      <li><a href="iletisim-ayar.php">İletişim Ayarları</a></li>
                      <li><a href="api-ayar.php">Api Ayarları</a></li>
                      <li><a href="sosyal-ayar.php">Sosyal Ayarları</a></li>
                      <li><a href="mail-ayar.php">Mail Ayarları</a></li>

                    </ul>
                  </li>
                
                </ul>

              </div>
          

            </div>
            <!-- /sidebar menu -->