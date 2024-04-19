<?php include("config.php");

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tbl_kondisi WHERE id_kondisi=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

if(isset($_POST['submit'])){
	
	// ambil data dari formulir
    $nama = $_POST['nama_kondisi'];
    $pertanyaan = $_POST['pertanyaan'];
    $diet_id = $_POST['diet_id'];
    $mb = $_POST['mb'];
    $md = $_POST['md'];
	
	// buat query update
	$sql = "UPDATE tbl_kondisi SET nama_kondisi = '$nama',pertanyaan = '$pertanyaan',
                              diet_id='$diet_id',mb='$mb',
                              md='$md' WHERE id_kondisi=$id";
	$query = mysqli_query($db, $sql) or die ("Gagal query update".mysqli_error($db));
	
	// apakah query update berhasil?
	if( $query ) {
        
		$_SESSION['success'] = 'Data kondisi berhasil diperbaharui';
            echo '<script>window.location="?page=datakondisi"</script>';
	} else {
		// kalau gagal tampilkan pesan
		$_SESSION['error'] = 'Data kondisi berhasil diperbaharui';
            echo '<script>window.location="?page=datakondisi"</script>';
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
            <h1 class="m-0">Edit Data kondisi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
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
                      
                    <div class="form-group">
                        <label for="diet_id">Diet</label>
                        <select class="form-control select2" data-placeholder="Pilih diet" name="diet_id" required>
                            <option value="">-- Pilih Diet --</option>
                            <?php
                            $diets	= mysqli_query($db,"SELECT * FROM tbl_diet");
                            while ($diet = mysqli_fetch_array($diets)) {
                                if($data['diet_id'] == $diet['id_diet'] ){$cek="selected";}else { $cek = ""; }
                                        echo "<option value='$diet[id_diet]' $cek> $diet[nama_diet]</option>";
                            }
                            ?>
                        </select>
                    </div>

                      <div class="form-group mt-4">
                        <label for="nama_kondisi">Kondisi</label>
                        <input type="text" class="form-control" id="nama_kondisi" name="nama_kondisi" value="<?php echo $data['nama_kondisi'] ?>" placeholder="Masukan Kondisi" required>
                      </div>

                      <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="<?php echo $data['pertanyaan'] ?>" placeholder="Masukan Pertanyaan" required>
                      </div>

                      <div class="form-group">
                          <label for="mb">Nili MB</label>
                          <input type="text" class="form-control" id="mb" name="mb" value="<?php echo $data['mb'] ?>" placeholder="Masukan Nilai MB" required>
                      </div>

                      <div class="form-group">
                          <label for="md">Nilai MD</label>
                          <input type="text" class="form-control" id="md" name="md" value="<?php echo $data['md'] ?>" placeholder="Masukan Nilai MD" required>
                      </div>

                      <a href="?page=datakondisi" class="next btn btn-danger">Batal</a>
                      <button type="submit" class="btn btn-primary" type="submit" value="submit" name="submit">Simpan</button>
                    
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
