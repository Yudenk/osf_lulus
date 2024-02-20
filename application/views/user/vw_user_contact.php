<div id="contact" class="contact-us section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
					<h6>Request Tenant</h6>
					<h4>Mari bergabung bersama kami di <em>OSF</em></h4>

				</div>
			</div>
			<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
				<form id="contact" action="<?= base_url('User_Daftar/upload'); ?>" method="post">
					<div class="row">
						<div class="col-lg-12">
							<div class="contact-dec">
								<img src=<?php echo base_url('assets2/assets/images/osf/icon_1.png')?> alt="">
							</div>
						</div>
						<div class="col-lg-5">
							<div id="map">
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner ">
										<div class="carousel-item active">
											<img src="<?php echo base_url('assets2/assets/images/contact_1.jpg')?>"
												class="d-block" width="100%" height="800px" style="border:0" >
										</div>
										<div class="carousel-item">
											<img src="<?php echo base_url('assets2/assets/images/contact_2.jpg')?>"
												class="d-block" width="100%" height="800px" style="border:0">
										</div>
										<div class="carousel-item">
											<img src="<?php echo base_url('assets2/assets/images/contact_3.jpg')?>"
												class="d-block" width="100%" height="800px" style="border:0">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="fill-form">
								<div class="row">
									<div class="col-lg-4">
										<div class="info-post">
											<div class="icon">
												<img src=<?php echo base_url('assets2/assets/images/icon_coffe.png')?>
													alt="">
												<a>F&B</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="info-post">
											<div class="icon">
												<img src=<?php echo base_url('assets2/assets/images/icon_dress.png')?>
													alt="">
												<a>Fashion</a>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="info-post">
											<div class="icon">
												<img src=<?php echo base_url('assets2/assets/images/icon_dices.png')?>
													alt="">
												<a>Fantasy</a>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<fieldset>
											<input type="text" name="nama_pemilik" id="nama_pemilik"
												placeholder="Nama Pemilik" autocomplete="on" required>
										</fieldset>
										<fieldset>
											<input type="text" name="nama_product" id="nama_product"
												placeholder="Nama Product" autocomplete="on" required>
										</fieldset>
										<fieldset>
											<input type="text" name="jenis_product" id="jenis_product" placeholder="Jenis Product"
												autocomplete="on" required>
										</fieldset>
										<fieldset>
											<input type="text" name="no_hp" id="no_hp" placeholder="No Hp"
												autocomplete="on" required>
										</fieldset>                                        
									</div>

									<div class="col-lg-12">
										<fieldset>
											<button type="submit" id="form-submit" class="main-button ">Daftar
												Sekarang</button>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

