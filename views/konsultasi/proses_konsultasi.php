<?php include("config.php"); 

//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = mysqli_query($db,"SELECT diet.*,kr.nama_kondisi,kr.pertanyaan FROM tbl_diet AS diet
          LEFT JOIN tbl_kondisi AS kr ON diet.id_diet = kr.diet_id
          WHERE id_diet=$id");
$data = mysqli_fetch_assoc($query);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ml-2 mr-2">
          <div class="col-sm-6">
            <h1 class="m-0">Konsultasi</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Konsultasi</li>
            </ol>
          </div>/.col -->
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
                  <form  method="post" action="?page=hasilkonsultasi">
                    <fieldset>
                      <input type="hidden" name="nama_diet" value="<?= $data['nama_diet'] ?>">
                      <input type="hidden" name="penjelasan" value="<?= $data['penjelasan'] ?>">
                      <div class="form-group mt-4">
                        <h4><?php echo $data['nama_diet'] ?></h4>
                        <h5>Silakan jawab pertanyaan dibawah ini sesuai dengan kondisi anda </h5>
                      
                      <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th colspan="2">Pertanyaan</th>
                                  <th>Jawaban</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php

                                $sql = "SELECT kondisi.*,kr.nama_diet FROM tbl_kondisi AS kondisi
                                        LEFT JOIN tbl_diet AS kr ON kr.id_diet = kondisi.diet_id
                                        WHERE diet_id=$id";
                                $query = mysqli_query($db, $sql);
                                    $no = 1;
                                    while($kuesioner = mysqli_fetch_array($query)){ ?>
                                      <input type="hidden" name="count[]">
                                      <input type="hidden" name="mb<?php echo $no ?>" value="<?php echo $kuesioner['mb'] ?>">
                                      <input type="hidden" name="md<?php echo $no ?>" value="<?php echo $kuesioner['md'] ?>">
                                      <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $kuesioner['pertanyaan'] ?></td>
                                        <td>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" value="1" name="nilai<?php echo $no ?>" id="nilai<?php echo $no ?>" required>
                                              <label class="form-check-label">
                                                Ya
                                              </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                              <input class="form-check-input" type="radio" value="2" name="nilai<?php echo $no ?>" id="nilai<?php echo $no ?>" required>
                                              <label class="form-check-label">
                                                Tidak
                                              </label>
                                            </div>
                                        </td>
                                      </tr> 
                                      
                                  <?php $no++;  }	?>
                              </tbody>
                      </table>

                      <a href="?page=datakonsultasi" class="next btn btn-danger mb-4">Batal</a>
                      <input type="submit" name="submit" class="submit btn btn-success mb-4" value="Proses" />
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
<script>
  function getDiet() {
    var diet = document.getElementById("diet").value;
    <?php $diets	= mysqli_query($db,"SELECT diet.*,kr.nama_kondisi,kr.pertanyaan FROM tbl_diet AS diet
                                      LEFT JOIN tbl_kondisi AS kr ON diet.id_diet = kr.diet_id
                                      WHERE id_diet = $diet ");
                                        ?>
    document.getElementById("pertanyaan").value = pertanyaan;
  }
</script>