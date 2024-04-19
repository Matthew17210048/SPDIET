<?php include("config.php"); ?>
<?php

if(isset($_POST['submit'])){

  // ambil data dari formulir
  $nama_diet = $_POST['nama_diet'];
  $penjelasan = $_POST['penjelasan'];
  
    // buat query
    $sqlResponden = "INSERT INTO tbl_diet
          (nama_diet,penjelasan)
            VALUE
          ('$nama_diet','$penjelasan')";

    $queryResponden = mysqli_query($db, $sqlResponden) or die ("Gagal query update".mysqli_error($db));

  // apakah query simpan berhasil?
  if( $queryResponden ) {
    
  $_SESSION['success'] = 'Data Diet berhasil ditambahkan !';
            echo '<script>window.location="?page=datadiet"</script>';
  } else {
    // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
    $_SESSION['error'] = 'Maaf, Data Diet gagal ditambah';
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
            <h1 class="m-0">Tambah Data Diet</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Diet</li>
            </ol> -->
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
                  <form  method="post">
                    <fieldset>
                      
                      <div class="form-group mt-4">
                        <label for="nama_diet">Nama Diet</label>
                        <input type="text" class="form-control" id="nama_diet" name="nama_diet" placeholder="Masukan Nama" required>
                      </div>

                      

                      <div class="form-group">
                        <label for="penjelasan">Penjelasan</label>
                        <textarea type="text" class="form-control" id="penjelasan" name="penjelasan" placeholder="Masukan penjelasan" required></textarea>
                      </div>

                      <a href="?page=datadiet" class="next btn btn-danger mb-4">Batal</a>
                      <input type="submit" name="submit" class="submit btn btn-success mb-4" value="Simpan" />
                    </fieldset>
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
