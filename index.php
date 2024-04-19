<?php include("config.php"); ?>
<?php session_start();?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html lang="en">

<!-- header -->
<?php include 'views/layouts/header.php';?>

<body class="hold-transition layout-top-nav " style="background-image:url('assets/AdminLTE/dist/img/bg2.jpg');                                                    
                                                      background-attachment: fixed;
                                                      background-position: center;
                                                      background-repeat: no-repeat;
                                                      background-size:101% 105%;
                                                      min-height: 10vh;">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'views/layouts/navbar.php';?>
  <!-- /.navbar -->

  <!-- Main content -->
  <?php
        
      
        if(isset($_GET['page'])){
          include("pages.php");
        }
        else{
          include("views/home.php");
        }
    ?>  
    <!-- /.content -->

  

<!-- REQUIRED SCRIPTS -->


</body>
</html>
