<?php 
    $username = $this->session->userdata('username');
    $rGuru = $this->data->readGuru($username)->result_array();
    foreach ($rGuru as $r) {
      $img = $r['guru_img'];
      $namaLengkap = $r['guru_nama'];
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/icon.png') ?>"/>

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Guru SMP Al Azhar</title>

  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

  <style type="text/css">
    .count tr:not(.fble_htr) {
        counter-increment: rowNumber;
    }

    .count tr:not(.fble_htr) td:first-child::before {
        content: counter(rowNumber);
    }
  </style>

</head>

<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img style="width: 50px" src="<?php echo base_url('assets/img/icon.png') ?>">
        <div class="sidebar-brand-text mx-3">Halaman Guru</div>
      </a>
      <li class="nav-item <?php if($page=='profile') echo 'active' ?>">
        <a class="nav-link" href="<?php echo base_url('guru/profile') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span></a>
      </li>

      <li class="nav-item <?php if($page=='riwayat') echo 'active' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#berita" aria-expanded="true" aria-controls="berita">
          <i class="fas fa-fw fa-graduation-cap"></i>
          <span>Riwayat Pendidikan</span>
        </a>
        <div id="berita" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih pendidikan :</h6>
            <a class="collapse-item" href="<?php echo base_url('guru/riwayat-pendidikan/formal') ?>">Formal</a>
            <a class="collapse-item" href="<?php echo base_url('guru/riwayat-pendidikan/non-formal') ?>">Non Formal</a>
          </div>
        </div>
      </li>
      <li class="nav-item <?php if($page=='article') echo 'active' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#artikel" aria-expanded="true" aria-controls="berita">
          <i class="fas fa-fw fa-pencil-alt"></i>
          <span>Tulisan Saya</span>
        </a>
        <div id="artikel" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih pendidikan :</h6>
            <a class="collapse-item" href="<?php echo base_url('guru/article') ?>">Daftar Tulisan</a>
            <a class="collapse-item" href="<?php echo base_url('guru/article/tambah/2') ?>">Input Artikel</a>
            <a class="collapse-item" href="<?php echo base_url('guru/article/tambah/6') ?>">Update Pengumuman</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('en') ?>">
          <i class="fas fa-fw fa-globe"></i>
          <span>Web Utama</span></a>
      </li>
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

  <div id="content-wrapper" class="d-flex flex-column">

    <div id="content">

      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        

        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $namaLengkap ?></span>
              <div style="width: 30px; height: 30px; background: url(<?php echo base_url('uploads/guru/'.$img) ?>) center center no-repeat; background-size: cover; border-radius: 50px " ></div>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?php echo base_url('guru/profile') ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <a class="dropdown-item" target="_blank" href="<?php echo base_url('en') ?>">
                <i class="fas fa-globe fa-sm fa-fw mr-2 text-gray-400"></i>
                Go to Main Web
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>

      </nav>
      <!-- End of Topbar -->

      <!-- Begin Page Content -->