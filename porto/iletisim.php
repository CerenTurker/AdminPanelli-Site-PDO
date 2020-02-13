<?php include'header.php'; ?>

			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bize ulaşın</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg">Bize ulaşmak için aşşağıdaki iletişim formunu eksiksiz doldurakak bize gönderebilirsiniz...</p>

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>


           <form id="contact-form" action="http://www.emrahyuksel.com.tr/phpmail/index.php" method="post" enctype="multipart/form-data">

								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
								  <input type="text" name="adsoyad"  class="form-control input-lg"  placeholder="Ad Soyad">

										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											 <input type="text" name="telefon"  class="form-control input-lg"  placeholder="Telefon">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											 <input type="text" name="mail"  class="form-control input-lg"  placeholder="Mail Adresi">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											 <textarea type="text" name="mesaj" class="form-control input-lg"  maxlength="500" placeholder="Mesajınız"></textarea>
											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" name="iletisimform" class="btn btn-primary btn-lg mb-xlg"  >Mail Gönder</button>
									</div>
								</div>


								
							</form>




 

 

						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Adres& İletişim</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> <?php echo $ayarcek['ayar_adres'] ?>
                                  <br>
                                  <?php echo $ayarcek['ayar_ilce']?> / <?php echo $ayarcek['ayar_il']?>
								</li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> <?php echo $ayarcek['ayar_tel']?> </li>
								
								<li><i class="fa fa-envelope"></i> <strong>Mail:</strong> <a href="mailto:<?php echo $ayarcek['ayar_mail']?> "><?php echo $ayarcek['ayar_mail']?> </a></li>
							</ul>

							<h4 class="pt-xl mb-none">Mesai Saatleri</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<p><?php echo $ayarcek['ayar_tel']?></p>

						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				
					
        <div id="googlemaps" class="google-map google-map-footer">
		<iframe
		width="100%"
		height="100%"
		frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/place?key=<?php echo $ayarcek['ayar_googlemap']; ?>
		&q=<?php echo $ayarcek['ayar_adres']; ?>" allowfullscreen>
	</iframe>


				</div>
			</div>

			<?php include'footer.php'; ?>
