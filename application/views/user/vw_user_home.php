<div class="popup-container" onclick="closePopup()">
	<!-- Menambahkan event onclick -->
	<span class="popup-close" onclick="event.stopPropagation(); closePopup()">&times;</span>
	<!-- Menambahkan event onclick dan stopPropagation -->	
	<?php foreach ($iklan as $ikl) : ?>
	<img class="popup-image" src="<?= base_url('./gambar/') .  $ikl['gambar_iklan']; ?>" alt="Popup Image">	
	<?php endforeach; ?>
</div>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
							data-wow-delay="1s">
							<div class="row">
								<div class="col-lg-12">
									<h6>One Street Food</h6>
									<h2>Pusat Kuliner & Belanja Harian di Kota Pekanbaru</h2>
								</div>
								<div class="col-lg-12">
									<div class="border-first-button scroll-to-section">
										<a href="#tenants">Let's see our tenants</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
							<img src=<?php echo base_url('assets2/assets/images/home_2.png')?> alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="tenants" class="our-portfolio section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
					<h6>Our Tenants</h6>
					<h4>Lets see our <em>Tenants</em></h4>
					<div class="line-dec"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="row">
			<div class="col-lg-12">
				<div class="loop owl-carousel">
					<?php foreach ($tenants_fb as $tfb) : ?>
					<div class="item">
						<a href="#">
							<div class="portfolio-item">
								<div class="thumb">
									<img src="<?= base_url('./gambar/') .  $tfb['gambar']; ?>" alt="">
								</div>
								<div class="down-content">
									<h4><?= $tfb['nama_brand_fb']; ?></h4>
									<span><?= $tfb['kategori_fb']; ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="loop owl-carousel">
					<?php foreach ($tenants_fashion as $tfs) : ?>
					<div class="item">
						<a href="#">
							<div class="portfolio-item">
								<div class="thumb">
									<img src="<?= base_url('./gambar/') .  $tfs['gambar']; ?>" alt="">
								</div>
								<div class="down-content">
									<h4><?= $tfs['nama_brand_fashion']; ?></h4>
									<span><?= $tfs['kategori_fashion']; ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="portfolio" class="our-portfolio section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
					<h6>Our Events</h6>
					<h4>See Our Recent <em>Projects</em></h4>
					<div class="line-dec"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="row">
			<div class="col-lg-12">
				<div class="loop owl-carousel">
					<?php foreach ($event as $evt) : ?>
					<div class="item">
						<a href="#">
							<div class="portfolio-item">
								<div class="thumb">
									<img src="<?= base_url('./gambar/') .  $evt['gambar']; ?>" alt="">
								</div>
								<div class="down-content">
									<h4><?= $evt['nama_event']; ?></h4>
									<span><?= $evt['kategori']; ?></span>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">            
            <h4>Check Your <br> Members Point</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <form id="member_form">
            <div class="row">
              <div class="col-lg-7 col-sm-6">
                <fieldset>
                  <input type="text" name="member_id" id="member_id"  placeholder="Your members id" autocomplete="on" required>
                </fieldset>
              </div>             
              <div class="col-lg-5 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Check</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 <!-- Modal -->
<div class="modal fade" id="member_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title mx-auto" id="exampleModalLabel">Check Your Member Point</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          
        </button>
      </div>
      <div class="modal-body" id="member_details">
                    <!-- Detail member akan ditampilkan di sini -->
                </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>


<div id="contact" class="contact-us section">	
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
						<h6>Contact Us</h6>
						<h4>Get In Touch With Us <em>Now</em></h4>
						<div class="line-dec"></div>
					</div>
				</div>
				<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
					<div class="row">
						<div class="col-lg-12">
							<div class="contact-dec">
								<img src=<?php echo base_url('assets2/assets/images/osf/icon_1.png')?> alt="">
							</div>
						</div>
						<div class="col-lg-5">
							<div id="map">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.636022405764!2d101.37007443827179!3d0.5027061061056812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab084d959319%3A0x636fd1ad9dd3c0b3!2sOne%20Street%20Food!5e0!3m2!1sen!2sid!4v1686192516096!5m2!1sen!2sid"
									width="100%" height="636px" frameborder="0" style="border:0"
									allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="fill-form">
								<div class="row">
									<div class="col-lg-5">
										<div class="info-post">
											<div class="icon">
												<img src=<?php echo base_url('assets2/assets/images/phone-icon.png')?>
													alt="">
												<a href="#">+62 852-7193-5233</a>
											</div>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="info-post">
											<div class="icon">
												<img src=<?php echo base_url('assets2/assets/images/location-icon.png')?>
													alt="">
												<a href="#">Jl. Pemuda, Komplek Pemuda City Walk</a>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
									<?php echo form_open_multipart('User_home/send'); ?>
										<fieldset>
											<input type="name" name="name" id="name" placeholder="Name"
												autocomplete="on" required>
										</fieldset>
										<fieldset>
											<input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
												placeholder="Your Email" required="">
										</fieldset>
										<fieldset>
											<input type="subject" name="subject" id="subject" placeholder="Subject"
												autocomplete="on">
										</fieldset>
									</div>
									<div class="col-lg-6">
										<fieldset>
											<textarea name="message" type="text" class="form-control" id="message"
												placeholder="Message" required=""></textarea>
										</fieldset>
									</div>
									<div class="col-lg-12">
										<fieldset>
											<button type="submit" id="form-submit" class="main-button ">Send Message
												Now</button>
											<?php echo form_close(); ?>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
</div>
