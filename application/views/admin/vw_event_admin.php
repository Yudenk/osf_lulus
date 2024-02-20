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
<h1 class="page-title">Event</h1>
<div class="col-md-12 my-4">
	<h2 class="h4 mb-1">Informasi Event</h2>
	<button id="openModal">Tambah Event</button>
	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<h2>Form Input</h2>
			<form action="<?= base_url('Admin_Event/upload'); ?>" method="POST" enctype="multipart/form-data">
				<label for="nama_event">Nama Event:</label>
				<input type="text" id="nama_event" name="nama_event" placeholder="Nama Event" required>

				<label for="tanggal_awal">Tanggal Awal:</label>
				<input type="date" id="tanggal_awal" name="tanggal_awal" placeholder="Tanggal Event Berlangsung" required>

				<label for="tanggal_akhir">Tanggal Akhir:</label>
				<input type="date" id="tanggal_akhir" name="tanggal_akhir" placeholder="Tanggal Event Berlangsung" required>

				<label for="keterangan">Keterangan:</label>
				<textarea id="keterangan" name="keterangan" placeholder="Ketik pesan Anda di sini" required></textarea>

				<label for="kategori">Kategori:</label>
				<select id="kategori" name="kategori" class="custom-select" required>
					<option value="">Pilih Kategori</option>
					<option value="Lomba">Lomba</option>
					<option value="Konser">Konser</option>
					<option value="Tanding">Tanding</option>
					<option value="Talkhosw">Talkshow</option>
					<option value="Bazar">Bazar</option>
					<option value="Festival">Festival</option>
					<option value="Workshop">Workshop</option>
				</select>

				<label for="gambar">Poster Event</label>
				<input type="file" id="gambar" name="gambar" placeholder="Masukkan Gambar">

				<input type="submit" value="Submit">
			</form>
		</div>
	</div>

	<div class="card shadow">
		<div class="card-body">
		<table class="table datatables" id="dataTable-1">
			<!-- table -->
			
				<thead>
					<tr>
						<th>No</th>
						<th>ID Event</th>
						<th>Nama Event</th>
						<th>Tanggal Awal</th>
						<th>Tanggal Akhir</th>
						<th>Keterangan</th>
						<th>Kategori</th>
						<th>Poster</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($event as $evt) : ?>
					<tr>
						<td class="w-25"><?= $i; ?></td>
						<td class="w-25"><?= $evt['id_event']; ?></td>
						<td class="w-25"><?= $evt['nama_event']; ?></td>
						<td class="w-25"><?= $evt['tanggal_awal']; ?></td>
						<td class="w-25"><?= $evt['tanggal_akhir']; ?></td>
						<td class="w-25"><?= $evt['keterangan']; ?></td>
						<td class="w-25"><?= $evt['kategori']; ?></td>
						<td><img src="<?= base_url('./gambar/') .  $evt['gambar']; ?>" style="width:100%"
								class="img-thumbnail">
							           </td>
						<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="text-muted sr-only">Action</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#DetailModal<?= $evt['id_event']; ?>">Detail</a>
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#editModal<?= $evt['id_event']; ?>">Edit</a>
								<a class="dropdown-item"
									href="<?= base_url('Admin_Event/delete/') . $evt['id_event']; ?>"
									class="badge badge-pill badge-warning">Delete</a>
								</a>
							</div>
						</td>

						<!-- Modal -->
						<div class="modal fade" id="DetailModal<?= $evt['id_event']; ?>" tabindex="-1" role="dialog"
							aria-labelledby="DetailModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="DetailModalLabel">Detail Event
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- Detail Detail tenant fb -->
										<form action="<?= base_url('Admin_Event/detail') . $evt['id_event']; ?> "
											method="post">
											<input type="hidden" name="id_event" value="<?= $evt['id_event'] ?>" />
											<div class="form-group">
												<label for="nama_event">Nama Event</label>
												<input type="text" class="form-control" id="nama_event"
													name="nama_event" value="<?= $evt['nama_event']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="tanggal_awal">Tanggal Awal</label>
												<input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal"
													value="<?= $evt['tanggal_awal']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="tanggal_akhir">Tanggal Akhir</label>
												<input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
													value="<?= $evt['tanggal_akhir']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="keterangan">Keterangan</label>
												<input type="text" class="form-control" id="keterangan"
													name="keterangan" value="<?= $evt['keterangan']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="kategori">Kategori</label>
												<input type="text" class="form-control" id="kategori" name="kategori"
													value="<?= $evt['kategori']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="gambar">Poster Event</label>
												<img src="<?= base_url('./gambar/') .  $evt['gambar']; ?>"
													style="width:200px" class="img-thumbnail">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="editModal<?= $evt['id_event']; ?>" tabindex="-1" role="dialog"
							aria-labelledby="editModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="editModalLabel">Edit Event</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- form edit tenant fb -->

										<form action="<?= base_url('Admin_Event/update/') . $evt['id_event']; ?>"
											method="post" enctype="multipart/form-data">
											<input type="hidden" name="id_event" value="<?= $evt['id_event'] ?>" />
											<div class="form-group">
												<label for="nama_event">Nama Event</label>
												<input type="text" class="form-control" id="nama_event"
													name="nama_event" value="<?= $evt['nama_event']; ?>">
											</div>
											<div class="form-group">
												<label for="tanggal_awal">Tanggal Awal</label>
												<input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal"
													value="<?= $evt['tanggal_awal']; ?>">
											</div>
											<div class="form-group">
												<label for="tanggal_akhir">Tanggal Akhir</label>
												<input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
													value="<?= $evt['tanggal_akhir']; ?>">
											</div>
											<div class="form-group">
												<label for="keterangan">Keterangan</label>
												<input type="text" class="form-control" id="keterangan"
													name="keterangan" value="<?= $evt['keterangan']; ?>">
											</div>
											<div class="form-group">
												<label for="kategori">Kategori</label>
												<select class="form-control" id="kategori" name="kategori">
													<option value="Lomba"
														<?= ($evt['kategori'] == 'Lomba') ? 'selected' : ''; ?>>
														Lomba
													</option>
													<option value="Konser"
														<?= ($evt['kategori'] == 'Konser') ? 'selected' : ''; ?>>
														Konser
													</option>
													<option value="Tanding"
														<?= ($evt['kategori'] == 'Tanding') ? 'selected' : ''; ?>>
														Tanding
													</option>
													<option value="Talkshow"
														<?= ($evt['kategori'] == 'Talkshow') ? 'selected' : ''; ?>>
														Talkshow
													</option>
													<option value="Bazar"
														<?= ($evt['kategori'] == 'Bazar') ? 'selected' : ''; ?>>
														Bazar
													</option>
													<option value="Festival"
														<?= ($evt['kategori'] == 'Festival') ? 'selected' : ''; ?>>
														Festival
													</option>
													<option value="Workshop"
														<?= ($evt['kategori'] == 'Workshop') ? 'selected' : ''; ?>>
														Workshop
													</option>
												</select>
											</div>
											<div class="form-group">
												<label for="gambar">Poster Event</label>
												<img src="<?= base_url('gambar/') . $evt['gambar']; ?>"
													style="width:200px" class="img-thumbnail">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="gambar"
														name="gambar">
													<label class="custom-file-label" for="gambar">Choose File</label>
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
