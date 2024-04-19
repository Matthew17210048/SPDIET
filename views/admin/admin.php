<?php include("config.php"); ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Admin</h1>
      </div>
      <div class="col-sm-6">
        <!-- <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Tabel Admin</li>
        </ol> -->
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
    <!-- /.content-header -->


<!-- Main content -->
<section class="content">
      <div class="container-fluid">

      <!-- alert -->
      <?php
      if (isset($_SESSION['success']) && $_SESSION['success'] <> ''){
          echo '<div class="alert alert-success" role="alert">'. $_SESSION['success'].'</div>';
          $_SESSION['success'] = '';
      }elseif(isset($_SESSION['error']) && $_SESSION['error'] <> ''){
          echo '<div class="alert alert-danger" role="alert">'. $_SESSION['error'].'</div>';
          $_SESSION['error'] = '';
      } 
      ?>

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6">
                  <!-- <h3 class="card-title">Data Admin</h3> -->
                  </div>
                  <div class="col-lg-6">
                    <a href="?page=tambah_admin" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php

                        $sql = "SELECT * FROM tbl_admin";
                        $query = mysqli_query($db, $sql);
                        
                        while($user = mysqli_fetch_array($query)){
                          echo "<tr>";
                          
                          echo "<td>".$user['id_admin']."</td>";
                          echo "<td>".$user['nama_admin']."</td>";
                          echo "<td>".$user['username']."</td>";
                          if ($user['status_admin'] == 1) {
                            echo "<td>Aktif</td>";
                          }else{
                            echo "<td>Tidak Aktif</td>";
                          }
                          echo "<td>";
                          echo "<a class='btn btn-primary' href='?page=edit_admin&id=".$user['id_admin']."'><i class='fa fa-edit'></i> Edit</a> ";
                          echo "<a class='btn btn-danger' href='?page=hapus_admin&id=".$user['id_admin']."' onclick='return confirm('')' ><i class='fa fa-trash'></i> Hapus</a>";
                          
                          echo "</td>";
                          
                          echo "</tr>";
                        }		
                    ?>
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

  <!-- /.content-wrapper -->
  <?php include 'views/layouts/footer.php';?> 

    <!-- /.content -->
<!-- DataTables  & Plugins -->
<script src="assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="assets/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });
  });
</script>