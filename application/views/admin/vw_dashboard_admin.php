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

<h1 class="page-title">Dashboard Admin</h1>
<?= $this->session->flashdata('message'); ?>
<div class="row my-4">
	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<small class="text-muted mb-1">Jumlah Tenants Food &
							Beverage</small>
						<h3 class="card-title mb-0"><?= $tenants_fb ?></h3>
					</div>
					<div class="col-4 text-right">
						<span class="sparkline inlineline"></span>
					</div>
				</div> <!-- /. row -->
			</div> <!-- /. card-body -->
		</div> <!-- /. card -->
	</div> <!-- /. col -->
	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<small class="text-muted mb-1">Jumlah Tenant Fashion</small>
						<h3 class="card-title mb-0"><?= $tenants_fashion ?></h3>
					</div>
					<div class="col-4 text-right">
						<span class="sparkline inlinepie"></span>
					</div>
				</div> <!-- /. row -->
			</div> <!-- /. card-body -->
		</div> <!-- /. card -->
	</div> <!-- /. col -->
	<div class="col-md-4">
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="row align-items-center">
					<div class="col">
						<small class="text-muted mb-1">Jumlah Tenant Fantasy</small>
						<h3 class="card-title mb-0"><?= $tenants_fantasy ?></h3>
					</div>
					<div class="col-4 text-right">
						<span class="sparkline inlinebar"></span>
					</div>
				</div> <!-- /. row -->
			</div> <!-- /. card-body -->
		</div> <!-- /. card -->
	</div> <!-- /. col -->	
</div> <!-- end section -->

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="row align-items-center my-4">
				<div class="col">
					<h2 class="h3 mb-0 page-title">Iklan</h2>
				</div>				
			</div>
			<!-- table -->
			<div class="card shadow">
				<div class="card-body">
					<table class="table datatables" id="dataTable-1">
						<!-- table -->
						<thead>
							<tr>
												
								<th>Gambar</th>								
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($iklan as $ikl) : ?>
							<tr>																
								<td><img src="<?= base_url('./gambar/') .  $ikl['gambar_iklan']; ?>" style="width:20%"
										class="img-thumbnail"></td>								
								<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="text-muted sr-only">Action</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal"
											data-target="#DetailModal_iklan<?= $ikl['id_iklan']; ?>">Detail</a>
										<a class="dropdown-item" href="#" data-toggle="modal"
											data-target="#editModal_iklan<?= $ikl['id_iklan']; ?>">Edit</a>										
									</div>
								</td>
								<!-- Modal -->
								<div class="modal fade" id="DetailModal_iklan<?= $ikl['id_iklan']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="DetailModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="DetailModalLabel">Detail Iklan
												</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<!-- Detail Iklan -->
												<form action="<?= base_url('Admin_Dashboard/detail') . $ikl['id_iklan']; ?> "
													method="post">
													<input type="hidden" name="id_iklan" value="<?= $ikl['id_iklan'] ?>" />
													<div class="form-group">
														<label for="gambar_iklan">Iklan</label>
														<img src="<?= base_url('./gambar/') .  $ikl['gambar_iklan']; ?>"
															style="width:200px" class="img-thumbnail">
													</div>													
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="editModal_iklan<?= $ikl['id_iklan']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="editModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="editModalLabel">Edit Data</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<!-- form edit iklan -->

												<form action="<?= base_url('Admin_Dashboard/update/') . $ikl['id_iklan']; ?>"
													method="post" enctype="multipart/form-data">
													<input type="hidden" name="id_iklan" value="<?= $ikl['id_iklan'] ?>" />																																							
													<div class="form-group">
														<label for="gambar_iklan">Detail Iklan</label>
														<img src="<?= base_url('gambar/') . $ikl['gambar_iklan']; ?>"
															style="width:200px" class="img-thumbnail">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="gambar_iklan"
																name="gambar_iklan">
															<label class="custom-file-label" for="gambar">Choose
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
		</div> <!-- .col-12 -->
	</div> <!-- .row -->
</div> <!-- .container-fluid -->

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-12">
			<div class="row align-items-center my-4">
				<div class="col">
					<h2 class="h3 mb-0 page-title">Daftar Admin</h2>
				</div>
				<div class="col-auto">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#varyModal"
		data-whatever="@mdo"><span
							class="fe fe-filter fe-12 mr-2"></span>Create</button>
				</div>
			</div>
			<!-- table -->
			<div class="card shadow">
				<div class="card-body">
					<table class="table datatables" id="dataTable-1">
						<!-- table -->
						<thead>
							<tr>
								<th>No</th>
								<th>id</th>
								<th>Profil</th>
								<th>Nama User</th>
								<th>Email User</th>
								<th>Role</th>								
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($user as $usr) : ?>
							<tr>
								<td class="w-25"><?= $i; ?></td>
								<td class="w-25"><?= $usr['id']; ?></td>
								<td><img src="<?= base_url('./gambar/') .  $usr['gambar']; ?>" style="width:100%"
										class="img-thumbnail"></td>
								<td class="w-25"><?= $usr['nama']; ?></td>
								<td class="w-25"><?= $usr['email']; ?></td>
								<td class="w-25"><?= $usr['role']; ?></td>								
								<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="text-muted sr-only">Action</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-toggle="modal"
											data-target="#DetailModal<?= $usr['id']; ?>">Detail</a>
										<a class="dropdown-item" href="#" data-toggle="modal"
											data-target="#editModal<?= $usr['id']; ?>">Edit</a>
										<a class="dropdown-item" href="<?= base_url('Auth/delete/') . $usr['id']; ?>"
											class="badge badge-pill badge-warning">Delete</a>
										</a>
									</div>
								</td>
								<!-- Modal -->
								<div class="modal fade" id="DetailModal<?= $usr['id']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="DetailModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="DetailModalLabel">Detail User
												</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<!-- Detail Detail tenant fb -->
												<form action="<?= base_url('Auth/detail') . $usr['id']; ?> "
													method="post">
													<input type="hidden" name="id_event" value="<?= $usr['id'] ?>" />
													<div class="form-group">
														<label for="gambar">Profil User</label>
														<img src="<?= base_url('./gambar/') .  $usr['gambar']; ?>"
															style="width:200px" class="img-thumbnail">
													</div>
													<div class="form-group">
														<label for="id">ID User</label>
														<input type="text" class="form-control" id="id" name="id"
															value="<?= $usr['id']; ?>" readonly>
													</div>
													<div class="form-group">
														<label for="nama">Nama User</label>
														<input type="nama" class="form-control" id="nama" name="nama"
															value="<?= $usr['nama']; ?>" readonly>
													</div>
													<div class="form-group">
														<label for="email">Email User</label>
														<input type="email" class="form-control" id="email" name="email"
															value="<?= $usr['email']; ?>" readonly>
													</div>
													<div class="form-group">
														<label for="role">Role User</label>
														<input type="text" class="form-control" id="role" name="role"
															value="<?= $usr['role']; ?>" readonly>
													</div>
													

												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="editModal<?= $usr['id']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="editModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<!-- form edit admin -->

												<form action="<?= base_url('Auth/update/') . $usr['id']; ?>"
													method="post" enctype="multipart/form-data">
													<input type="hidden" name="id" value="<?= $usr['id'] ?>" />													
													<div class="form-group">
														<label for="nama">Nama User</label>
														<input type="text" class="form-control" id="nama" name="nama"
															value="<?= $usr['nama']; ?>">
													</div>
													<div class="form-group">
														<label for="email">Email User</label>
														<input type="text" class="form-control" id="email" name="email"
															value="<?= $usr['email']; ?>">
													</div>
													<div class="form-group">
														<label for="gambar">Profil</label>
														<img src="<?= base_url('gambar/') . $usr['gambar']; ?>"
															style="width:200px" class="img-thumbnail">
														<div class="custom-file">
															<input type="file" class="custom-file-input" id="gambar"
																name="gambar">
															<label class="custom-file-label" for="gambar">Choose
																File</label>
														</div>
													</div>
													<div class="form-group">
														<label for="role">Role User</label>
														<select class="form-control" id="role" name="role">
															<option value="Admin"
																<?= ($usr['role'] == 'Admin') ? 'selected' : ''; ?>>
																Admin
															</option>
															<option value="Admin_Master"
																<?= ($usr['role'] == 'Admin_Master') ? 'selected' : ''; ?>>
																Admin Master
															</option>
														</select>
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
		</div> <!-- .col-12 -->
	</div> <!-- .row -->
</div> <!-- .container-fluid -->

<div class="card-body">
	<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel"	aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="varyModalLabel">Tambah Data F&B</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?= base_url('auth/cek_regis'); ?>" enctype="multipart/form-data">
						<label for="nama">Nama Admin</label>
						<input type="text" id="nama" name="nama" placeholder="Nama Admin" required>

						<label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="Email Admin" required>

						<label for="password">Password</label>
						<br>
						<input type="password" id="password" name="password" placeholder="Password Admin" required>											
						
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
