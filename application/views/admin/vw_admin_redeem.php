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
<h1 class="page-title">Redeem Barang</h1>
<div class="col-md-12 my-4">
	<h2 class="h4 mb-1">History Barang Redeem</h2>
	<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#varyModal"
		data-whatever="@mdo">Redeem Point</button>
<?= $this->session->flashdata('message'); ?>


	<div class="card shadow">
		<div class="card-body">
			<!-- table -->
			<table class="table datatables" id="dataTable-1">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Member</th>
						<th>Nama Barang</th>
						<th>Jumlah</th>
						<th>Total</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($keranjang as $k) : ?>
					<tr>
						<td class="w-25"><?= $i; ?></td>
						<td class="w-25"><?= date('d F Y', strtotime($k['tanggal']));?></td>		
						<td class="w-25"><?php $nama = $this->adminredeem->getMemberId($k['id_member']); echo $nama['nama_member'] ?></td>
						<td class="w-25"><?php $barang = $this->adminredeem->getBarangId($k['id_barang']); echo $barang['nama_barang'] ?></td>
																	
						<td class="w-25"><?= $k['jumlah']; ?></td>					
						<td class="w-25"><?= $k['total'] . "Point" ?></td>					
						<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="text-muted sr-only">Action</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#DetailModal<?= $k['id_keranjang']; ?>">Detail</a>
										<a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#editModal<?= $k['id_keranjang']; ?>">Edit</a>
								<a class="dropdown-item"
									href="<?= base_url('Admin_Redeem/delete/') . $k['id_keranjang']; ?>"
									class="badge badge-pill badge-warning">Delete</a>
								</a>
							</div>
						</td>

					
	<!-- Modal -->
						<div class="modal fade" id="DetailModal<?= $k['id_keranjang']; ?>" tabindex="-1"
							role="dialog" aria-labelledby="DetailModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="DetailModalLabel">Detail Redeem
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- Detail Detail tenant fb -->
										<form
											action="<?= base_url('Admin_Barang/detail') . $k['id_barang']; ?> "
											method="post">
											<input type="hidden" name="id_barang"
												value="<?= $k['id_barang'] ?>" />
												<div class="form-group">
												<label for="tanggal">Tanggal</label>
												<input type="text" class="form-control" id="tanggal"
													name="tanggal" value="<?= date('d F Y', strtotime($k['tanggal']));?>"
													readonly>
											</div>
											<div class="form-group">
												<label for="nama_member">Nama Member</label>
												<input type="text" class="form-control" id="nama_member"
													name="nama_member" value="<?= $nama['nama_member']?>"
													readonly>
											</div>
											<div class="form-group">
												<label for="nama_barang">Nama Barang</label>
												<input type="text" class="form-control" id="nama_barang"
													name="nama_barang" value="<?= $barang['nama_barang']?>"
													readonly>
											</div>
											<div class="form-group">
												<label for="jumlah">Jumlah</label>
												<input type="text" class="form-control" id="jumlah"
													name="jumlah" value="<?= $k['jumlah']; ?>" readonly>
											</div>
											<div class="form-group">
												<label for="total">Total</label>
												<input type="text" class="form-control" id="total"
													name="total" value="<?= $k['total'] . " Point"; ?>"
													readonly>
											</div>																	
										</form>
									</div>
								</div>
							</div>
						</div>
							<div class="modal fade" id="editModal<?= $k['id_keranjang']; ?>" tabindex="-1"
							role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="editModalLabel">Edit Redeem
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<!-- Detail Detail tenant fb -->
										<form action="<?= base_url('Admin_Redeem/update/' .$k['id_keranjang']); ?>" method="POST" enctype="multipart/form-data">
						<label for="id_member">Nama Member:</label>
					<select name="id_member" class="form-control" required>
						<option value="">Pilih Member</option>
						<?php foreach ($member as $m):?>
							<option <?php if($k['id_member'] == $m['id_member'])  echo "selected";?> value="<?= $m['id_member']?>">
							<?php if($k['id_member'] == $m['id_member']){
								$total = $m['point'] + $k['total'];
								echo $m['id_member'] ."-" . $m['nama_member'] . " ( " . $total . " Point )";
							} else {echo $m['id_member'] ."-" . $m['nama_member'] . " ( " . $m['point'] . " Point )";}?></option>
						<?php endforeach;?>
						
						</select>

						<label for="id_barang">Nama Barang:</label>
							<select name="id_barang" class="form-control" required>
						<option value="">Pilih Barang</option>
						<?php foreach ($barangg as $ba):?>
							<option <?php if($k['id_barang'] == $ba['id_barang'])  echo "selected";?> value="<?= $ba['id_barang']?>">
							<?php  if($k['id_barang'] == $ba['id_barang']){
								$stokk = $k['jumlah'] + $ba['stok'];
								echo $ba['nama_barang'] . " - Stok " .$stokk . " (Rp ". $ba['harga'].")" ;
							} else { echo $ba['nama_barang'] . " - Stok " .$ba['stok'] . " (Rp ". $ba['harga'].")" ;}?></option>
						<?php endforeach;?>
						
						</select>

						<label for="jumlah">Jumlah</label>
						 <input type="number" name="jumlah" value="<?= $k['jumlah']?>" class="form-control" min="1" required>					

						<div class="modal-footer">
							<button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn mb-2 btn-primary">Submit Data</button>
						</div>
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
					<h5 class="modal-title" id="varyModalLabel">Tambah Redeem Point</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('Admin_Redeem/upload'); ?>" method="POST" enctype="multipart/form-data">
						<label for="id_member">Nama Member:</label>
					<select name="id_member" class="form-control" required>
						<option value="">Pilih Member</option>
						<?php foreach ($member as $m):?>
							<option value="<?= $m['id_member']?>"><?= $m['id_member'] ."-" . $m['nama_member'] . " ( " . $m['point'] . " Point )"?></option>
						<?php endforeach;?>
						
						</select>

						<label for="id_barang">Nama Barang:</label>
							<select name="id_barang" class="form-control" required>
						<option value="">Pilih Barang</option>
						<?php foreach ($barangg as $ba):?>
							<option value="<?= $ba['id_barang']?>"><?= $ba['nama_barang'] . " - Stok " .$ba['stok'] . " (Rp ". $ba['harga'].")"?></option>
						<?php endforeach;?>
						
						</select>

						<label for="jumlah">Jumlah</label>
						 <input type="number" name="jumlah" class="form-control" min="1" required>					

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

