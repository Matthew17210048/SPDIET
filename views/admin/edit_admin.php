<?php include("config.php");

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_admin WHERE id_admin  =$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

if(isset($_POST['submit'])){
	
	// ambil data dari formulir
	$nama = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = $_POST['status'];
	
	// buat query update
	$sql = "UPDATE tbl_admin SET nama_admin='$nama',username='$username',password='".md5($password)."',status_admin='$status' WHERE id_admin=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
        
		$_SESSION['success'] = 'Data User berhasil diperbaharui';
            echo '<script>window.location="?page=data_admin"</script>';
	} else {
		// kalau gagal tampilkan pesan
		$_SESSION['error'] = 'Data User berhasil diperbaharui';
            echo '<script>window.location="?page=data_admin"</script>';
	}
	
	
} 


?>

<div class="content-wrapper">
 <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <H1>Edit Admin</H1>
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
                        <h3 class="card-title">Data Admin</h3>
                    </div>

                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $data['nama_admin'] ?>" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $data['username'] ?>" placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" name="password" id="password" value="<?php echo $data['password_admin'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="status">status</label>
                                <select name="status" class="form-control">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="1" <?php if($data['status_admin'] == 1){echo 'selected';} ?>>Aktif</option>
                                    <option value="0" <?php if($data['status_admin'] == null){echo 'selected';} ?>>Tidak Aktif</option>
                                </select>
                            </div>
                            <a href="?page=data_admin" class="next btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary" type="submit" value="submit" name="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
 </section>
</div>


<!-- /.content-wrapper -->
<?php include 'views/layouts/footer.php';?>

<!-- /.content -->
