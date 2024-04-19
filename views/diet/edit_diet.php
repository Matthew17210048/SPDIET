<?php include("config.php");

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_diet WHERE id_diet=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

if(isset($_POST['submit'])){
	
	// ambil data dari formulir
    $nama_diet = $_POST['nama_diet'];
    $penjelasan = $_POST['penjelasan'];
    
	
	// buat query update
	$sql = "UPDATE tbl_diet SET nama_diet='$nama_diet',penjelasan='$penjelasan' WHERE id_diet=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
        
		$_SESSION['success'] = 'Data Diet berhasil diperbaharui';
            echo '<script>window.location="?page=datadiet"</script>';
	} else {
		// kalau gagal tampilkan pesan
		$_SESSION['error'] = 'Data Diet berhasil diperbaharui';
            echo '<script>window.location="?page=datadiet"</script>';
	}
	
	
} 


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ml-2 mr-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Diet</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <!-- <div class="card-header">
                <h3 class="card-title"></h3>
              </div> -->
              <div class="card-body p-0">
                <div class="row ml-4 mr-4">
                  <div class="col-md-12">
                  <form action="" method="post">
                      
                    <div class="form-group mt-4">
                        <label for="nama_diet">Nama Diet</label>
                        <input type="text" class="form-control"style="margin-left:10px; width:1000px;" id="nama_diet" name="nama_diet" value="<?php echo $data['nama_diet'] ?>" placeholder="Masukan Nama" required>
                    </div>

                    <div class="form-group">
                        <label for="penjelasan">Penjelasan</label>
                        <textarea type="text" class="form-control"  cols="40" style="height:300px; width:1000px; padding: 1px;" id="penjelasan" name="penjelasan" required><?php echo $data['penjelasan'] ?></textarea>
                     </div>

                    <a href="?page=datadiet" class="next btn btn-danger mb-4">Batal</a>
                    <button type="submit" class="btn btn-primary mb-4" type="submit" value="submit" name="submit">Simpan</button>
                    
                  </form>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- /.content-wrapper -->
<?php include 'views/layouts/footer.php';?>

<!-- /.content -->
