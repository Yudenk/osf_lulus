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
									<h2>Pusat Fashion</h2>
								</div>
								<div class="col-lg-12">
									<div class="border-first-button scroll-to-section">
										<a href="#contact">Let's see our tenants</a>
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
<section class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col text-center mb-5">
				<div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
					<h6>Tenants Fashion</h6>
					<h4>Lets Define Your Style <em>Now</em></h4>
					<div class="line-dec"></div>
				</div>
			</div>
		</div>
		<div class="row">        
			<div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <?php foreach ($tenants_fashion as $tfs) : ?>
				<div class="card text-white card-has-bg click-col"
					style="background-image:url('<?= base_url('./gambar/') .  $tfs['background']; ?>');">
					<img class="card-img d-none" src="<?= base_url('./gambar/') .  $tfs['background']; ?>"
						alt="">
					<div class="card-img-overlay d-flex flex-column">
						<div class="card-body">
							<small class="card-meta mb-2"><?= $tfs['kategori_fashion']; ?></small>
							<h4 class="card-title mt-0 "><a class="text-white" herf="#"><?= $tfs['keterangan_fashion']; ?></a></h4>
							<small><i class="far fa-clock"></i><?= $tfs['area_fashion']; ?></small>
						</div>
						<div class="card-footer">
							<div class="media">
								<img class="mr-3 rounded-circle"
									src="<?= base_url('./gambar/') .  $tfs['gambar']; ?>"
									alt="Generic placeholder image" style="max-width:50px">
								<div class="media-body">
									<h6 class="my-0 text-white d-block"><?= $tfs['nama_brand_fashion']; ?></h6>
									<small><?= $tfs['tipe_fashion']; ?></small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
            <?php endforeach; ?>		
		</div>
	</div>
</section>





