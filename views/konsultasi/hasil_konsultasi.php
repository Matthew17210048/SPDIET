<?php include("config.php");
if(isset($_POST['submit'])){

  
  //get nilai
  $nilai = $totalMb = $totalMd = 0;
  $namanya = $namaMb = $namaMd = '';
  $totalPertanyaan = count($_POST['count']);

  for ($i = 1; $i <= $totalPertanyaan;  $i++) {
    {
      $namaMb = 'mb'.$i;
      $namaMd = 'md'.$i;
      $namaNilai = 'nilai'.$i;
      if ($_POST[$namaNilai] == 1) {
        $totalMb += $_POST[$namaMb];
      } else {
        $totalMd += $_POST[$namaMd];
      }
      
    }
  
  }

  $hasil = $totalMb - $totalMd;
  $hasil *= 100;
  $nama_diet = $_POST['nama_diet'];
  $penjelasan = $_POST['penjelasan'];
  
} 
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ml-2 mr-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hasil Konsultasi</h1>

                </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Hasil Konsultasi</li>
            </ol> -->
         </div> <!-- /.col -->
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
              <div class="card-body p-0">
                <div class="row ml-4 mr-4 mt-4">
                  <div class="col-md-12">
                    <h3><?php echo $nama_diet ?></h3>
                    <h4>Kecocokan Pengguna dengan Metode Diet: 
                      <!-- <?php echo $totalMb ?> <?php echo $totalMd ?>  -->
                       <?php echo $hasil ?>% </h4>
                       <?php if($hasil >=89) : ?>
                        <h4 class="text-success">Anda cocok dengan diet ini</h4>
                        <?php elseif ($hasil >=80) : ?>
                          <h4 class="text-warning">Anda mungkin cocok dengan diet ini</h4>
                          <?php else : ?>
                          <h4 class="text-danger">Anda tidak cocok dengan diet ini</h4>
                          <?php endif ?>
                        <table class="table table-bordered">
                          <tbody>
                            <td>
                              <h5 class="text-start text-justify"><?php echo $penjelasan ?></h5>
                            </td>
                          </tbody>
                        </table>
                        <h4 class="text-danger text-justify"> Penting untuk diingat bahwa setiap orang mungkin memiliki kebutuhan nutrisi yang berbeda
                           dan tergantung pada kondisi kesehatan individu, tingkat aktivitas, dan tujuan pribadi.
                            Sebaiknya konsultasikan dengan dokter atau ahli gizi sebelum memulai diet atau mengubah pola makan untuk memastikan keamanan dan efektivitasnya.</h4>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              <a href="?page=datakonsultasi" class="next btn btn-secondary mb-4 mt-4"><i class="fa fa-arrow-left"></i> Konsultasi Lagi</a>
              <a href="?page=home" class="next btn btn-secondary mb-4 mt-4"><i class="fa fa-home"></i> Kembali kehalaman utama</a>
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

