<nav class="main-header navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a href="?page=home" class="navbar-brand">
        <span class="brand-text font-weight-light">Sistem Pakar</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <?php if (isset($_SESSION['username'])) { ?>
            <li class="nav-item">
              <a href="?page=datadiet" class="nav-link">Diet</a>
            </li>
            <li class="nav-item">
              <a href="?page=datakondisi" class="nav-link">Kondisi</a>
            </li>
            <a href="?page=datakonsultasi" class="nav-link">Konsultasi</a>
            </li>
            <a href="?page=data_admin" class="nav-link">Data admin</a>
            </li>
          <?php }else{ ?>
            <li class="nav-item">
              <a href="?page=datakonsultasi" class="nav-link">Konsultasi</a>
            </li>
            <li class="nav-item">
              <a href="?page=datametodediet" class="nav-link">Metode Diet</a>
            </li>
          <?php }; ?>
        </ul>
        
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <?php if (isset($_SESSION['username'])) { ?>
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                  
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-user"></i> <?php echo $_SESSION['nama_admin'] ?>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
                  <a href="logout.php" class="dropdown-item">Logout</a>
                  <div class="dropdown-divider"></div>
                </div>
            </li>

        <?php }else{ ?>
                 <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="login.php">
                    <i class="fas fa-user"></i> Login
                  </a>
                </li>
        <?php }; ?>
        
      </ul>

      </div>

    
    </div>
  </nav>