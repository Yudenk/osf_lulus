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
<h1 class="page-title">Tenant Fantasy</h1>
<?= $this->session->flashdata('message'); ?>
<div class="col-md-12 my-4">
	<h2 class="h4 mb-1">Informasi Tenants Fantasy</h2>
	<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#varyModal"
		data-whatever="@mdo">Tambah Data Fantasy</button>
	

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
					<?php foreach ($tenants_fantasy as $tfn) : ?>
					<tr>
						<td class="w-25"><?= $i; ?></td>
						<td class="w-25"><?= $tfn['id_tenants_fantasy']; ?></td>
						<td class="w-25"><?= $tfn['nama_brand_fantasy']; ?></td>
						<td class="w-25"><?= $tfn['area_fantasy']; ?></td>
						<td class="w-25"><?= $tfn['kategori_fantasy']; ?></td>
						<td class="w-25"><?= $tfn['keterangan_fantasy']; ?></td>
						<td class="w-25"><?= $tfn['owner_fantasy']; ?></td>
						<td class="w-25"><?= $tfn['hp_owner']; ?></td>
						<td><img src="<?= base_url('./gambar/') .  $tfn['gambar']; ?>" style="width:100%"
								class="img-thumbnail">
							           </td>
						<td><img src="<?= base_url('./gambar/') .  $tfn['background']; ?>" style="width:100%"
								class="img-thumbnail">
							           </td>
							<td class="w-25"><?= $tfn['status']; ?></td>
						<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="text-muted sr-only">Action</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#DetailModal<?= $tfn['id_tenants_fantasy']; ?>">Detail</a>
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#editModal<?= $tfn['id_tenants_fantasy']; ?>">Edit</a>
								<a class="dropdown-item"
									href="<?= base_url('Admin_Fantasy/delete/') . $tfn['id_tenants_fantasy']; ?>"
									class="badge badge-pill badge-warning">Delete</a>
								</a>
							</div>
						</td>

						<!-- Modal -->
						<div class="modal fade" id="DetailModal<?= $tfn['id_tenants_fantasy']; ?>" tabindex="-1"
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
										<form action="<?= base_url('Admin_Fantasy/detail') . $tfn['id_tenants_fantasy']; ?> "
											method="post">
											<input type="hidden" name="id_tenants_fantasy"
												value="<?= $tfn['id_tenants_fantasy'] ?>" />
											<div class="form-group">
												<label for="nama_brand_fantasy">Nama Brand</label>
												<input type="text" class="form-control" id="nama_brand_fantasy"
													name="nama_brand_fantasy" value="<?= $tfn['nama_brand_fantasy']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="area_fantasy">Area</label>
												<input type="text" class="form-control" id="area_fantasy" name="area_fantasy"
													value="<?= $tfn['area_fantasy']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="kategori_fantasy">Kategori</label>
												<input type="text" class="form-control" id="kategori_fantasy"
													name="kategori_fantasy" value="<?= $tfn['kategori_fantasy']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="keterangan_fantasy">Keterangan</label>
												<input type="text" class="form-control" id="keterangan_fantasy"
													name="keterangan_fantasy" value="<?= $tfn['keterangan_fantasy']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="owner_fantasy">Nama Owner</label>
												<input type="text" class="form-control" id="owner_fantasy" name="owner_fantasy"
													value="<?= $tfn['owner_fantasy']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="hp_owner">HP Owner</label>
												<input type="text" class="form-control" id="hp_owner" name="hp_owner"
													value="<?= $tfn['hp_owner']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="status">Status</label>
												<select class="form-control" id="status" name="status">
													<option value="Aktif"
														<?= ($tfn['status'] == 'Aktif') ? 'selected' : ''; ?>>
														Aktif
													</option>
													<option value="NonAktif"
														<?= ($tfn['status'] == 'NonAktif') ? 'selected' : ''; ?>>
														NonAktif
													</option>
													<option value="Pending"
														<?= ($tfn['status'] == 'Pending') ? 'selected' : ''; ?>>
														Pending
													</option>
												</select>
											</div>
											<div class="form-group">
												<label for="gambar">Logo Brand</label>
												<img src="<?= base_url('./gambar/') .  $tfn['gambar']; ?>"
													style="width:200px" class="img-thumbnail">
											</div>
											<div class="form-group">
												<label for="background">Background Brand</label>
												<img src="<?= base_url('./gambar/') .  $tfn['background']; ?>"
													style="width:200px" class="img-thumbnail">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="editModal<?= $tfn['id_tenants_fantasy']; ?>" tabindex="-1" role="dialog"
							aria-labelledby="editModalLabel" aria-hidden="true">
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
										
										<form action="<?= base_url('Admin_Fantasy/update/') . $tfn['id_tenants_fantasy']; ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_tenants_fantasy"
												value="<?= $tfn['id_tenants_fantasy'] ?>" />
											<div class="form-group">
												<label for="nama_brand_fantasy">Nama Brand</label>
												<input type="text" class="form-control" id="nama_brand_fantasy"
													name="nama_brand_fantasy" value="<?= $tfn['nama_brand_fantasy']; ?>">
											</div>
											<div class="form-group">
												<label for="area_fantasy">Area</label>
												<input type="text" class="form-control" id="area_fantasy" name="area_fantasy"
													value="<?= $tfn['area_fantasy']; ?>">
											</div>
											<div class="form-group">
												<label for="kategori_fantasy">Kategori</label>
												<select class="form-control" id="kategori_fantasy" name="kategori_fantasy">
													<option value="Wahana"
														<?= ($tfn['kategori_fantasy'] == 'Wahana') ? 'selected' : ''; ?>>
														Wahana
													</option>
													<option value="Arcade"
														<?= ($tfn['kategori_fantasy'] == 'Arcade') ? 'selected' : ''; ?>>
														Arcade
													</option>													
												</select>
											</div>
											<div class="form-group">
												<label for="keterangan_fantasy">Keterangan</label>
												<input type="text" class="form-control" id="keterangan_fantasy"
													name="keterangan_fantasy" value="<?= $tfn['keterangan_fantasy']; ?>">
											</div>
											<div class="form-group">
												<label for="owner_fantasy">Nama Owner</label>
												<input type="text" class="form-control" id="owner_fantasy" name="owner_fantasy"
													value="<?= $tfn['owner_fantasy']; ?>">
											</div>
											<div class="form-group">
												<label for="hp_owner">Hp Owner</label>
												<input type="text" class="form-control" id="hp_owner" name="hp_owner"
													value="<?= $tfn['hp_owner']; ?>">
											</div>
											<div class="form-group">
												<label for="status">Status</label>
												<select class="form-control" id="status" name="status">
													<option value="Aktif"
														<?= ($tfn['status'] == 'Aktif') ? 'selected' : ''; ?>>
														Aktif
													</option>
													<option value="NonAktif"
														<?= ($tfn['status'] == 'NonAktif') ? 'selected' : ''; ?>>
														NonAktif
													</option>
													<option value="Pending"
														<?= ($tfn['status'] == 'Pending') ? 'selected' : ''; ?>>
														Pending
													</option>
												</select>
											</div>
											<div class="form-group">
												<label for="gambar">Logo Brand</label>
												<img src="<?= base_url('gambar/') . $tfn['gambar']; ?>"
													style="width:200px" class="img-thumbnail">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="gambar"
														name="gambar">
													<label class="custom-file-label" for="gambar">Choose File</label>
												</div>
											</div>
											<div class="form-group">
												<label for="background">Background Brand</label>
												<img src="<?= base_url('gambar/') . $tfn['background']; ?>"
													style="width:200px" class="img-thumbnail">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="background"
														name="background">
													<label class="custom-file-label" for="background">Choose File</label>
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
				<form action="<?= base_url('Admin_Fantasy/upload'); ?>" method="POST" enctype="multipart/form-data">
				<label for="nama_brand_fantasy">Nama Brand:</label>
				<input type="text" id="nama_brand_fantasy" name="nama_brand_fantasy" placeholder="Nama Brand" required>

				<label for="area_fantasy">Area:</label>
				<input type="text" id="area_fantasy" name="area_fantasy" placeholder="Lokasi Stands" required>

				<label for="kategori_fantasy">Kategori:</label>
				<select id="kategori_fantasy" name="kategori_fantasy" class="custom-select" required>
					<option value="">Pilih Kategori</option>
					<option value="Wahana">Wahana</option>
					<option value="Arcade">Arcade</option>					
				</select>

				<label for="keterangan_fantasy">Keterangan:</label>
				<textarea id="keterangan_fantasy" name="keterangan_fantasy" placeholder="Ketik pesan Anda di sini"
					required></textarea>

				<label for="owner_fantasy">Nama Owner:</label>
				<input type="text" id="owner_fantasy" name="owner_fantasy" placeholder="Nama Owner" required>

				<label for="hp_owner">HP Owner:</label>
				<input type="text" id="hp_owner" name="hp_owner" placeholder="HP Owner" required>

				<select id="status" name="status" class="custom-select" required>
							<option value="">Pilih Status</option>
							<option value="Aktif">Aktif</option>
							<option value="NonAktif">Non Aktif</option>
							<option value="Pending">Pending</option>
						</select>

				<label for="gambar">Logo:</label>
				<input type="file" id="gambar" name="gambar" placeholder="Masukkan Gambar">

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

