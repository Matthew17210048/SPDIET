<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <?php
            if (isset($_SESSION['username'])){
                echo '<h5><a href="index.php" class="d-block">'.$_SESSION['username'].'</a></h5>';
                echo '<a href="logout.php" class="d-block btn btn-sm btn-danger">Logout</a>';
            }else{
                echo '<a href="login.php" class="d-block">Login</a>';  
            } 
        ?>
          
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/') {echo 'active';} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php
            if (isset($_SESSION['username'])){ ?>

            <li class="nav-item">
              <a href="?page=datadosen" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/?page=datadosen') {echo 'active';} ?>">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Dosen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=datamatkul" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/?page=datamatkul') {echo 'active';} ?>">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Mata Kuliah
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=datakriteria" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/?page=datakriteria') {echo 'active';} ?>">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                Kriteria
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=datakuesioner" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/?page=datakuesioner') {echo 'active';} ?>">
                <i class="nav-icon fa fa-file"></i>
                <p>
                Kuesioner
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=hasilsurvey" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/?page=hasilsurvey') {echo 'active';} ?>">
              <i class="nav-icon fa fa-id-card" aria-hidden="true"></i>
                <p>
                Hasil Survey
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=data_admin" class="nav-link <?php if ($_SERVER['REQUEST_URI'] == '/?page=data_admin') {echo 'active';} ?>">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                Users
                </p>
              </a>
            </li>

          <?php } ?>
          

          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>