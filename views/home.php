<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <!-- <h1 class="m-0">Dashboard</h1> -->
        </div><!-- /.col -->
       
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid bg-transparent">
        <!-- Small boxes (Stat box) -->
        <div class="row bg-transparent">
          <div class="col-lg-12 bg-transparent">
            <div class="card card-primary shadow-none bg-transparent">
                  <div class="card-body text-center  rounded">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <h1 class="mb-4"> <b>SISTEM PAKAR PEMILIHAN METODE DIET <br>
                                  BERBASIS WEB <b>    
                </h1>
                <?php if(isset($_SESSION['username'])){ ?>
                  <a href="?page=datadiet" class="btn btn-primary btn-lg mt-4 mb-4">Data Diet</a>
                  <a href="?page=datakondisi" class="btn btn-primary btn-lg mt-4 mb-4">Data Kondisi</a>
                  <a href="?page=datakonsultasi" class="btn btn-primary btn-lg mt-4 mb-4">Tes Konsultasi</a>
                <a href="?page=data_admin" class="btn btn-primary btn-lg mt-4 mb-4">Data Admin</a>
                <?php }else{ ?>
                  <a href="?page=datakonsultasi" class="btn btn-primary btn-lg mt-4 mb-4">Mulai Konsultasi</a>
                  <a href="?page=viewdatadiet" class="btn btn-primary btn-lg mt-4 mb-4">Metode Diet</a>
                <?php }; ?>
                <br><br><br><br><br><br>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->

    <!-- /.content-wrapper -->
  <?php include 'views/layouts/footer.php';?>