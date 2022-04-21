<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Peminatan SMK N 2 Kuningan">
    <meta name="author" content="Oya Suryana, SMK Negeri 2 Kuningan">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>


    

    <!-- Bootstrap core CSS -->
<link href="<?=base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=base_url('/assets/css/dashboard.css');?>" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Peminatan PPDB</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?=site_url('/logout');?>">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setting</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=site_url('/program-keahlian');?>">
              <span data-feather="home"></span>
              Program Keahlian
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('/setting-aplikasi');?>">
              <span data-feather="file"></span>
              Aplikasi
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('/data-pengguna');?>">
              <span data-feather="users"></span>
              Pengguna
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('/data-peminatan');?>">
              <span data-feather="file-text"></span>
              Data Peminatan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('/rekapitulasi-peminatan');?>">
              <span data-feather="file-text"></span>
              Rekapitulasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('/grafik-peminatan');?>">
              <span data-feather="file-text"></span>
              Grafik
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?=isset($judulHalaman) ? $judulHalaman:  'Dashboard';?></h1>
      </div>

      <?php if(isset($judulHalaman)) : ?> 
        <?=$this->renderSection('konten');?>
      <?php else: ?>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      <?php endif ?>  
    </main>
  </div>
</div>


    <script src="<?=base_url('/assets/js/bootstrap.bundle.min.js');?>" ></script>

      <script src="<?=base_url('/assets/js/feather.min.js');?>"></script>
      <script src="<?=base_url('/assets/js/Chart.min.js');?>"></script>
      <script src="<?=base_url('/assets/js/dashboard.js');?>"></script>
  </body>
</html>