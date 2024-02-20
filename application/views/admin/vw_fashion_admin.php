<body class="vertical  light  ">
	<div class="wrapper">
		<nav class="topnav navbar navbar-light">
			<button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
				<i class="fe fe-menu navbar-toggler-icon"></i>
			</button>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
						<i class="fe fe-sun fe-16"></i>
					</a>
				</li>
				<li class="nav-item nav-notif">
					<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
						<span class="fe fe-bell fe-16"></span>
						<span class="dot dot-md bg-success"></span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
						role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="avatar avatar-sm mt-2">
							<img src="<?php echo base_url('assets/assets/avatars/face-1.jpg')?>" alt="..."
								class="avatar-img rounded-circle">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Profile</a>						
						<a class="dropdown-item" href="<?= base_url('auth/logout');?>">Logout</a>
					</div>
				</li>
			</ul>
		</nav>
		<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
			<a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
				<i class="fe fe-x"><span class="sr-only"></span></i>
			</a>
			<nav class="vertnav navbar navbar-light">
				<!-- nav bar -->
				<div class="w-100 mb-4 d-flex">
					<a class="navbar-brand mx-auto mt-2 flex-fill text-center"
						href="<?= site_url('Admin_Dashboard/')?>">
						<img src="<?php echo base_url('assets/assets/images/logo_osf.png')?>" id="logo"
							class="navbar-brand-img brand-sm">
				</div>
				<ul class="navbar-nav flex-fill w-100 mb-2">
					<p class="text-muted nav-heading mt-4 mb-1">
						<span>Admin</span>
					</p>
					<li class="nav-item w-100">
						<a class="nav-link" href="<?= site_url('Admin_Dashboard/index')?>">
							<i class="fe fe-home fe-16"></i>
							<span class="ml-3 item-text">Dashboard</span>
						</a>
					</li>
					<li class="nav-item w-100">
						<a class="nav-link" href="<?= site_url('Admin_Daftar/index')?>">
							<i class="fe fe-inbox fe-16"></i>
							<span class="ml-3 item-text">Daftar Request</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#dashboard" data-toggle="collapse" aria-expanded="false"
							class="dropdown-toggle nav-link">
							<i class="fe fe-grid fe-16"></i>
							<span class="ml-3 item-text">Tenant</span><span class="sr-only">(current)</span>
						</a>
						<ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
							<li class="nav-item active">
								<a class="nav-link pl-3" href="<?= site_url('Admin_FB/index')?>"><span
										class="ml-1 item-text">Tenant F&B</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link pl-3" href="<?= site_url('Admin_Fashion/index')?>"><span
										class="ml-1 item-text">Tenant Fashion</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link pl-3" href="<?= site_url('Admin_Fantasy/index')?>"><span
										class="ml-1 item-text">Tenant Fantasy</span></a>
							</li>
						</ul>
					</li>
					<li class="nav-item w-100">
						<a class="nav-link" href="<?= site_url('Admin_Event/index')?>">
							<i class="fe fe-mail fe-16"></i>
							<span class="ml-3 item-text">Event & News</span>
						</a>
					</li>
					<li class="nav-item w-100">
						<a class="nav-link" href="<?= site_url('Admin_Promo/index')?>">
							<i class="fe fe-percent fe-16"></i>
							<span class="ml-3 item-text">Promo</span>
						</a>
					</li>	
					<li class="nav-item w-100">
						<a class="nav-link" href="<?= site_url('Admin_Galery')?>">
							<i class="fe fe-image fe-16"></i>
							<span class="ml-3 item-text">Galery</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#membership" data-toggle="collapse" aria-expanded="false"
							class="dropdown-toggle nav-link">
							<i class="fe fe-github fe-16"></i>
							<span class="ml-3 item-text">Membership</span><span class="sr-only">(current)</span>
						</a>
						<ul class="collapse list-unstyled pl-4 w-100" id="membership">
							<li class="nav-item active">
								<a class="nav-link pl-3" href="<?= site_url('Admin_Barang/')?>"><span
										class="ml-1 item-text">Stock Barang Reedem</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link pl-3" href="<?= site_url('Admin_Member/')?>"><span
										class="ml-1 item-text">Daftar Membership</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link pl-3" href="<?= site_url('Admin_Redeem/')?>"><span
										class="ml-1 item-text">Reedem Point</span></a>
							</li>																					
						</ul>
					</li>
				</ul>
			</nav>
		</aside>
		<main role="main" class="main-content">

<!-- Small table -->
<h1 class="page-title">Tenant Fashion</h1>
<?= $this->session->flashdata('message'); ?>
<div class="col-md-12 my-4">
	<h2 class="h4 mb-1">Informasi Tenants Fashion</h2>
	<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#varyModal"
		data-whatever="@mdo">Tambah Data Fashion</button>

	<div class="card shadow">
		<div class="card-body">
			<!-- table -->
			<table class="table datatables" id="dataTable-1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Tenants</th>
						<th>Nama Brand</th>
						<th>Area</th>
						<th>Kategori</th>
						<th>Keterangan</th>
						<th>Nama Owner</th>
						<th>HP Owner</th>
						<th>Logo</th>
						<th>Background</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($tenants_fashion as $tfs) : ?>
					<tr>
						<td class="w-25"><?= $i; ?></td>
						<td class="w-25"><?= $tfs['id_tenants_fashion']; ?></td>
						<td class="w-25"><?= $tfs['nama_brand_fashion']; ?></td>
						<td class="w-25"><?= $tfs['area_fashion']; ?></td>
						<td class="w-25"><?= $tfs['kategori_fashion']; ?></td>
						<td class="w-25"><?= $tfs['keterangan_fashion']; ?></td>
						<td class="w-25"><?= $tfs['owner_fashion']; ?></td>
						<td class="w-25"><?= $tfs['hp_owner']; ?></td>
						<td><img src="<?= base_url('./gambar/') .  $tfs['gambar']; ?>" style="width:100%"
								class="img-thumbnail">
							           </td>
						<td><img src="<?= base_url('./gambar/') .  $tfs['background']; ?>" style="width:100%"
								class="img-thumbnail">
							           </td>
						<td class="w-25"><?= $tfs['status']; ?></td>
						<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="text-muted sr-only">Action</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#DetailModal<?= $tfs['id_tenants_fashion']; ?>">Detail</a>
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#editModal<?= $tfs['id_tenants_fashion']; ?>">Edit</a>
								<a class="dropdown-item"
									href="<?= base_url('Admin_Fashion/delete/') . $tfs['id_tenants_fashion']; ?>"
									class="badge badge-pill badge-warning">Delete</a>
								</a>
							</div>
						</td>

						<!-- Modal -->
						<div class="modal fade" id="DetailModal<?= $tfs['id_tenants_fashion']; ?>" tabindex="-1"
							role="dialog" aria-labelledby="DetailModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="DetailModalLabel">Detail Tenant FB
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- Detail Detail tenant fb -->
										<form
											action="<?= base_url('Admin_Fashion/detail') . $tfs['id_tenants_fashion']; ?> "
											method="post">
											<input type="hidden" name="id_tenants_fashion"
												value="<?= $tfs['id_tenants_fashion'] ?>" />
											<div class="form-group">
												<label for="nama_brand_fashion">Nama Brand</label>
												<input type="text" class="form-control" id="nama_brand_fashion"
													name="nama_brand_fashion" value="<?= $tfs['nama_brand_fashion']; ?>"
													readonly>
											</div>
											<div class="form-group">
												<label for="area_fashion">Area</label>
												<input type="text" class="form-control" id="area_fashion"
													name="area_fashion" value="<?= $tfs['area_fashion']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="kategori_fashion">Kategori</label>
												<input type="text" class="form-control" id="kategori_fashion"
													name="kategori_fashion" value="<?= $tfs['kategori_fashion']; ?>"
													readonly>
											</div>
											<div class="form-group">
												<label for="keterangan_fashion">Keterangan</label>
												<input type="text" class="form-control" id="keterangan_fashion"
													name="keterangan_fashion" value="<?= $tfs['keterangan_fashion']; ?>"
													readonly>
											</div>
											<div class="form-group">
												<label for="owner_fashion">Nama Owner</label>
												<input type="text" class="form-control" id="owner_fashion"
													name="owner_fashion" value="<?= $tfs['owner_fashion']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="hp_owner">HP Owner</label>
												<input type="text" class="form-control" id="hp_owner" name="hp_owner"
													value="<?= $tfs['hp_owner']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="status">Status</label>
												<select class="form-control" id="status" name="status">
													<option value="Aktif"
														<?= ($tfs['status'] == 'Aktif') ? 'selected' : ''; ?>>
														Aktif
													</option>
													<option value="NonAktif"
														<?= ($tfs['status'] == 'NonAktif') ? 'selected' : ''; ?>>
														NonAktif
													</option>
													<option value="Pending"
														<?= ($tfs['status'] == 'Pending') ? 'selected' : ''; ?>>
														Pending
													</option>
												</select>
											</div>
											<div class="form-group">
												<label for="gambar">Logo Brand</label>
												<img src="<?= base_url('./gambar/') .  $tfs['gambar']; ?>"
													style="width:200px" class="img-thumbnail">
											</div>
											<div class="form-group">
												<label for="background">Background Brand</label>
												<img src="<?= base_url('./gambar/') .  $tfs['background']; ?>"
													style="width:200px" class="img-thumbnail">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="editModal<?= $tfs['id_tenants_fashion']; ?>" tabindex="-1"
							role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="editModalLabel">Edit Tenant FB</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- form edit tenant fb -->

										<form
											action="<?= base_url('Admin_Fashion/update/') . $tfs['id_tenants_fashion']; ?>"
											method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_tenants_fashion"
												value="<?= $tfs['id_tenants_fashion'] ?>" />
											<div class="form-group">
												<label for="nama_brand_fashion">Nama Brand</label>
												<input type="text" class="form-control" id="nama_brand_fashion"
													name="nama_brand_fashion"
													value="<?= $tfs['nama_brand_fashion']; ?>">
											</div>
											<div class="form-group">
												<label for="area_fashion">Area</label>
												<input type="text" class="form-control" id="area_fashion"
													name="area_fashion" value="<?= $tfs['area_fashion']; ?>">
											</div>
											<div class="form-group">
												<label for="kategori_fashion">Kategori</label>
												<select class="form-control" id="kategori_fashion"
													name="kategori_fashion">
													<option value="Pria"
														<?= ($tfs['kategori_fashion'] == 'Pria') ? 'selected' : ''; ?>>
														Makanan
													</option>
													<option value="Wanita"
														<?= ($tfs['kategori_fashion'] == 'Wanita') ? 'selected' : ''; ?>>
														Minuman
													</option>
													<option value="Anak Anak"
														<?= ($tfs['kategori_fashion'] == 'Anak Anak') ? 'selected' : ''; ?>>
														Street Food
													</option>
												</select>
											</div>
											<div class="form-group">
												<label for="keterangan_fashion">Keterangan</label>
												<input type="text" class="form-control" id="keterangan_fashion"
													name="keterangan_fashion"
													value="<?= $tfs['keterangan_fashion']; ?>">
											</div>
											<div class="form-group">
												<label for="owner_fashion">Nama Owner</label>
												<input type="text" class="form-control" id="owner_fashion"
													name="owner_fashion" value="<?= $tfs['owner_fashion']; ?>">
											</div>
											<div class="form-group">
												<label for="hp_owner">HP Owner</label>
												<input type="text" class="form-control" id="hp_owner" name="hp_owner"
													value="<?= $tfs['hp_owner']; ?>">
											</div>
											<div class="form-group">
												<label for="status">Status</label>
												<select class="form-control" id="status" name="status">
													<option value="Aktif"
														<?= ($tfs['status'] == 'Aktif') ? 'selected' : ''; ?>>
														Aktif
													</option>
													<option value="NonAktif"
														<?= ($tfs['status'] == 'NonAktif') ? 'selected' : ''; ?>>
														NonAktif
													</option>
													<option value="Pending"
														<?= ($tfs['status'] == 'Pending') ? 'selected' : ''; ?>>
														Pending
													</option>
												</select>
											</div>
											<div class="form-group">
												<label for="gambar">Logo Brand</label>
												<img src="<?= base_url('gambar/') . $tfs['gambar']; ?>"
													style="width:200px" class="img-thumbnail">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="gambar"
														name="gambar">
													<label class="custom-file-label" for="gambar">Choose File</label>
												</div>
											</div>
											<div class="form-group">
												<label for="background">Background Brand</label>
												<img src="<?= base_url('gambar/') . $tfs['background']; ?>"
													style="width:200px" class="img-thumbnail">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="background"
														name="background">
													<label class="custom-file-label" for="background">Choose
														File</label>
												</div>
											</div>
											<button type="submit" class="btn btn-primary">Submit</button>
										</form>

									</div>
								</div>
							</div>
						</div>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div> <!-- customized table -->
</div> <!-- end section -->
<div class="card-body">
	<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="varyModalLabel">Tambah Data F&B</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin_Fashion/upload'); ?>" method="POST" enctype="multipart/form-data">
						<label for="nama_brand_fashion">Nama Brand:</label>
						<input type="text" id="nama_brand_fashion" name="nama_brand_fashion" placeholder="Nama Brand"
							required>

						<label for="area_fashion">Area:</label>
						<input type="text" id="area_fashion" name="area_fashion" placeholder="Lokasi Stands" required>

						<label for="kategori_fashion">Kategori:</label>
						<select id="kategori_fashion" name="kategori_fashion" class="custom-select" required>
							<option value="">Pilih Kategori</option>
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
							<option value="Anak Anak">Anak Anak</option>
						</select>

						<label for="keterangan_fashion">Keterangan:</label>
						<textarea id="keterangan_fashion" name="keterangan_fashion"
							placeholder="Ketik pesan Anda di sini" required></textarea>

						<label for="owner_fashion">Nama Owner:</label>
						<input type="text" id="owner_fashion" name="owner_fashion" placeholder="Nama Owner" required>

						<label for="hp_owner">Hp Owner:</label>
						<input type="text" id="hp_owner" name="hp_owner" placeholder="Hp Owner" required>

						<div class="form-group">
							<label for="status">Status</label>
							<select class="form-control" id="status" name="status">
								<option value="Aktif" <?= ($tfs['status'] == 'Aktif') ? 'selected' : ''; ?>>
									Aktif
								</option>
								<option value="NonAktif" <?= ($tfs['status'] == 'NonAktif') ? 'selected' : ''; ?>>
									NonAktif
								</option>
								<option value="Pending" <?= ($tfs['status'] == 'Pending') ? 'selected' : ''; ?>>
									Pending
								</option>
							</select>
						</div>

						<label for="gambar">Logo:</label>
						<input type="file" id="gambar" name="gambar" placeholder="URL Logo">

						<label for="gambar">Background:</label>
						<input type="file" id="background" name="background" placeholder="Masukkan Gambar">

						<div class="modal-footer">
							<button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn mb-2 btn-primary">Submit Data</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
