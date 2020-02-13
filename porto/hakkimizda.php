
			<?php include'header.php';
                $hakkimizdasor=$db ->prepare("select * from hakkimizda where hakkimizda_id=?");
 $hakkimizdasor->execute(array(0));
 $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
              

			 ?>
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none"><?php echo $hakkimizdacek['hakkimizda_baslik']; ?></h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg"><?php echo $hakkimizdacek['hakkimizda_icerik']; ?></p>

							

						</div>


						<?php include'right-bar.php'; ?>
						
					</div>
				</div>
			</div>

			<?php include'footer.php'; ?>