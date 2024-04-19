<?php include("config.php");

if(isset($_POST['tambah'])){
	
	// ambil data dari formulir
	$nama_admin = $_POST['nama_admin'];
	$username = $_POST['username'];
	$password_user = $_POST['password'];
	$status_user = $_POST['status_admin'];
	
	// buat query
	$sql = "INSERT INTO tbl_admin (nama_admin,username,password,status_admin) VALUE ('$nama_admin','$username','".md5($password_user)."','$status_user')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		$_SESSION['success'] = 'Data admin berhasil ditambah';
            echo '<script>window.location="?page=data_admin"</script>';
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		$_SESSION['error'] = 'Data admin gagal ditambah';
            echo '<script>window.location="?page=data_admin"</script>';
	}
	
	
} 

?>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Admin</h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Admin</h3>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_admin">Nama</label>
                                <input type="text" class="form-control" name="nama_admin" id="nama_admin"  placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username"  placeholder="Masukan username">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Masukan password">
                            </div>
                            <div class="form-group">
                                <label for="status_admin">status</label>
                                <select name="status_admin" class="form-control">
                                    <option value="1" >Aktif</option>
                                    <option value="0" >Tidak Aktif</option>
                                </select>
                            </div>
                            <a href="?page=data_admin" class="next btn btn-danger mb-4">Batal</a>
                            <button type="submit" class="btn btn-success mb-4" type="submit" value="tambah" name="tambah">Simpan</button>
                        </div>
                        <div class="card-footer">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
</section>

<!-- /.content-wrapper -->
<?php include 'views/layouts/footer.php';?>

<!-- /.content -->
