

<?php include'header.php';


$iceriksor=$db ->prepare("SELECT * from icerik WHERE icerik_id=:icerik_id");


$iceriksor->execute( array(
	'icerik_id' =>$_GET['icerik_id']
));
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)
?>


<div role="main" class="main">
	<div class="container">
		<div class="row pt-xl">

			<div class="col-md-7">


				<h1 class="mt-xl mb-none">HABER DETAY</h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>

				<div class="row mt-xl">




					<div class="col-md-12">

						<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
							<span class="thumb-info-side-image-wrapper p-none ">
								<a title="" >
									<img src="<?php  echo $icerikcek['icerik_resimurl'] ?>" class="img-responsive" alt="" style="width: 195px; height: 150px">
								</a>
							</span>
							<span class="thumb-info-caption">
								<span class="thumb-info-caption-text">
									<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="demo-law-firm-news-detail.html"><?php echo $icerikcek['icerik_ad'] ?></a></h2>
									<span class="post-meta">
										<span><?php   echo $icerikcek['icerik_zaman'] ?><a href="#"></a></span>
									</span>
									<p class="font-size-md"><?php   echo $icerikcek['icerik_detay'] ?></p>


									<p class="font-size-md"><b>Anahtar Kelimeler:</b> 
										<?php   
                                           

										 $arrykeyword=explode(',', $icerikcek['icerik_keyword']);
 $sayi=0;
										 foreach ($arrykeyword as $etiketler) {?>
                        <a href="arama.php?aranan=<?php echo $etiketler; ?>"> <button class="
                        	<?php 
                                
if($sayi==0){
	echo "btn btn-primary";
	$sayi++;

}
elseif($sayi==1){
	echo "btn btn-success";
		$sayi++;


}
elseif($sayi==2){
   echo "btn btn-danger";
	$sayi++;

}
elseif($sayi==3){
   echo "btn btn-info";
   	$sayi++;


}
elseif($sayi==4){
   echo "btn btn-warning";
   	$sayi=0;


}



                        	 ?>"




                        	><?php echo $etiketler; ?></button>

                        	</a>
										 <?php  }?>


										 


									</p>

								</span>
							</span>
						</span>

					</div>




					





				</div>


			</div>


			<?php include'right-bar.php'; ?>


		</div>

	</div>
</div>

<?php include'footer.php'; ?>
