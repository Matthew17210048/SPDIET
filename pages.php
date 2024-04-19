<?php
	$pg = $_GET['page'];
		if($pg=="home"){ include "views/home.php"; }
		elseif($pg=="search"){ include "modul/search.php"; }
		//  konsultasi
		elseif($pg=="datakonsultasi"){ include("views/konsultasi/konsultasi.php"); }
		elseif($pg=="hasilkonsultasi"){ include("views/konsultasi/hasil_konsultasi.php"); }
		elseif($pg=="proses_konsultasi"){ include("views/konsultasi/proses_konsultasi.php"); }
				// DATA metode diet
		elseif($pg=="datametodediet"){ include("views/diet/view_diet.php"); }
		elseif($pg=="tambah_metode_diet"){ include("views/diet/tambah_metode_diet.php"); }
		elseif($pg=="editmetode_diet"){ include("views/diet/edit_metode_diet.php"); }
		elseif($pg=="hapusmetode_diet"){ include("views/diet/hapus_metode_diet.php"); }
		// diet
		elseif($pg=="viewdatadiet"){ include("views/diet/view_diet.php"); }
		// Tampilan Admin
		elseif (isset($_SESSION['username'])){ 
			// DATA DIET
			if($pg=="datadiet"){ include("views/diet/diet.php"); }
			elseif($pg=="tambah_diet"){ include("views/diet/tambah_diet.php"); }
			elseif($pg=="editdiet"){ include("views/diet/edit_diet.php"); }
			elseif($pg=="hapusdiet"){ include("views/diet/hapus_diet.php"); }
			// DATA kondisi
			elseif($pg=="datakondisi"){ include("views/kondisi/kondisi.php"); }
			elseif($pg=="tambah_kondisi"){ include("views/kondisi/tambah_kondisi.php"); }
			elseif($pg=="editkondisi"){ include("views/kondisi/edit_kondisi.php"); }
			elseif($pg=="hapuskondisi"){ include("views/kondisi/hapus_kondisi.php"); }
			// DATA Admin
			elseif($pg=="data_admin"){ include("views/admin/admin.php"); }
			elseif($pg=="tambah_admin"){ include("views/admin/tambah_admin.php"); }
			elseif($pg=="edit_admin"){ include("views/admin/edit_admin.php"); }
			elseif($pg=="hapus_admin"){ include("views/admin/hapus_admin.php"); }
			// Data Konsultasi
		
		}
	

		else { ?>  
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Page Not Found</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Page Not Found</li>
								</ol>
							</div>
						</div>
					</div>
				</section>
				<div class='container'>
					<div class="card mt-4">
						<div class="card-body">
							<div class='row'>
								<div class='col-md-12 text-center'>
									<div class='alert alert-dismissable alert-warning'>
										<h2>
											<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>	
											404 NOT FOUND
										</h2>
										<p>YOU CAN'T ACCESS THIS PAGE !</p> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php	include 'views/layouts/footer.php';
            }
	?>