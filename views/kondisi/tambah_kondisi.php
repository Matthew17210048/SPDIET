<?php include("config.php"); 

if(isset($_POST['submit'])){

  // ambil data dari formulir
  $nama_kondisi = $_POST['nama_kondisi'];
  $pertanyaan = $_POST['pertanyaan'];
  $diet_id = $_POST['diet_id'];
  $mb = $_POST['mb'];
  $md = $_POST['md'];
  
    // buat query
    $sql = "INSERT INTO tbl_kondisi
          (nama_kondisi,pertanyaan,diet_id,mb,md)
            VALUE
          ('$nama_kondisi','$pertanyaan','$diet_id','$mb','$md')";

    $query = mysqli_query($db, $sql) or die ("Gagal query update".mysqli_error($db));
    
  // apakah query simpan berhasil?
  if( $query ) {
    
    $_SESSION['success'] = 'Data kondisi berhasil ditambahkan !';
    echo '<script>window.location="?page=datakondisi"</script>';
  } else {
    // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
    $_SESSION['error'] = 'Maaf, Data kondisi gagal ditambah';
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
            <h1 class="m-0">Tambah Data kondisi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data kondisi</li>
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
                  <form action="" method="post">
                    <fieldset>

                    <div class="form-group mt-4">
                        <label for="diet_id">Diet</label>
                        <select class="form-control select2" data-placeholder="Pilih diet" name="diet_id" required>
                            <option value="">-- Pilih diet --</option>
                            <?php
                            $diets	= mysqli_query($db,"SELECT * FROM tbl_diet");
                            while ($diet = mysqli_fetch_array($diets)) {
                                echo "<option value='$diet[id_diet]'>$diet[nama_diet]</option>";
                            }
                            ?>
                        </select>
                      </div>

                      <div class="form-group mt-4">
                        <label for="nama_kondisi">kondisi</label>
                        <input type="text" class="form-control" id="nama_kondisi" name="nama_kondisi" placeholder="Masukan Kondisi" required>
                      </div>

                      <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Masukan Pertanyaan" required>
                      </div>

                      <div class="form-group">
                        <label for="mb">Nilai MB</label>
                        <input type="text" class="form-control" id="mb" name="mb" placeholder="Masukan Nilai MB" required>
                      </div>

                      <div class="form-group">
                        <label for="md">Nilai MD</label>
                        <input type="text" class="form-control" id="md" name="md" placeholder="Masukan Nilai MD" required>
                      </div>

                      <a href="?page=datakondisi" class="next btn btn-danger mb-4">Batal</a>
                      <input type="submit" name="submit" class="submit btn btn-success mb-4" value="simpan" />
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
