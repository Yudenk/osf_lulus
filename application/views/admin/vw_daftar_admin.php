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
<h1 class="page-title">Request Tenant</h1>
<div class="col-md-12 my-4">
	<h2 class="h4 mb-1">Informasi Request Tenant</h2>	
	<div class="card shadow">
		<div class="card-body">
		<table class="table datatables" id="dataTable-1">
			<!-- table -->			
				<thead>
					<tr>
						<th>No</th>
						<th>ID Request</th>                        
						<th>Nama Pemilik</th>
						<th>Nama Product</th>
						<th>Jenis Product</th>
						<th>No Hp Pemilik</th>						
						<th>Status</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($daftar as $dft) : ?>
					<tr>
						<td class="w-25"><?= $i; ?></td>
						<td class="w-25"><?= $dft['id_daftar']; ?></td>                        
						<td class="w-25"><?= $dft['nama_pemilik']; ?></td>
						<td class="w-25"><?= $dft['nama_product']; ?></td>
						<td class="w-25"><?= $dft['jenis_product']; ?></td>
						<td class="w-25"><?= $dft['no_hp']; ?></td>						
                        <td class="w-25"><?= $dft['status']; ?></td>						
						<td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="text-muted sr-only">Action</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right">								
								<a class="dropdown-item"
									href="<?= base_url('Admin_Daftar/delete/') . $dft['id_daftar']; ?>"
									class="badge badge-pill badge-warning">Delete</a>
								</a>
                                <a class="dropdown-item" href="#" data-toggle="modal"
									data-target="#editModal<?= $dft['id_daftar']; ?>">Change Status</a>
							</div>
						</td>		
                        <div class="modal fade" id="editModal<?= $dft['id_daftar']; ?>" tabindex="-1" role="dialog"
							aria-labelledby="editModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="editModalLabel">Change Status</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">										
										<!-- form edit tenant fb -->
										
										<form action="<?= base_url('Admin_Daftar/update/') . $dft['id_daftar']; ?>" method="post" >
											<input type="hidden" name="id_daftar"
												value="<?= $dft['id_daftar'] ?>" />
                                                <input type="hidden" name="nama_pemilik"
												value="<?= $dft['nama_pemilik'] ?>" />
                                                <input type="hidden" name="nama_product"
												value="<?= $dft['nama_product'] ?>" />
                                                <input type="hidden" name="jenis_product"
												value="<?= $dft['jenis_product'] ?>" />											
                                                <input type="hidden" name="no_hp"
												value="<?= $dft['no_hp'] ?>" />									
											<div class="form-group">
												<label for="status">Status</label>
												<select class="form-control" id="status" name="status">
													<option value="Pending"
														<?= ($dft['status'] == 'Pending') ? 'selected' : ''; ?>>
														Pending
													</option>
													<option value="Tolak"
														<?= ($dft['status'] == 'Tolak') ? 'selected' : ''; ?>>
														Tolak
													</option>													
                                                    <option value="Terima"
														<?= ($dft['status'] == 'Terima') ? 'selected' : ''; ?>>
														Terima
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
</div> <!-- customized table -->
</div> <!-- end section -->
