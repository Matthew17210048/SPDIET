<?php include("config.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ml-2 mr-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Diet</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
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
      <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
              <div class="col-lg-12 col-12">
                  <a href="?page=tambah_diet" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah</a>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="row ml-4 mr-4">
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Diet</th>
                          <th>Penjelasan</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php

                              $sql = $sql = "SELECT * FROM tbl_diet";
                              $query = mysqli_query($db, $sql);
                              $no=1;
                              while($diet = mysqli_fetch_array($query)){
                                echo "<tr>";
                                
                                echo "<td>".$no++."</td>";
                                echo "<td>".$diet['nama_diet']."</td>";
                                echo "<td>".$diet['penjelasan']."</td>";
                                
                                echo "<td>";
                                echo "<a class='btn btn-primary btn-sm' href='?page=editdiet&id=".$diet['id_diet']."'><i class='fa fa-edit'></i> Edit</a> ";
                                echo "<a class='btn btn-danger btn-sm' href='?page=hapusdiet&id=".$diet['id_diet']."' onclick='return confirm(\'Anda yakin ingin menghapus data ini ?\')' ><i class='fa fa-trash'></i> Hapus</a>";
                                
                                echo "</td>";
                                
                                echo "</tr>";
                              }		
                          ?>
                      
                        </tbody>
                    </table>
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
