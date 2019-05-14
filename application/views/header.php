<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/icon.png') ?>"/>

  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Page SMP Al Azhar</title>

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

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin') ?>">
        <img style="width: 50px" src="<?php echo base_url('assets/') ?>img/icon.png">
        <div class="sidebar-brand-text mx-3">Admin Page</div>
      </a>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Konten Website
      </div>
      <li class="nav-item <?php if($page=='input') echo 'active' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#input" aria-expanded="true" aria-controls="berita">
          <i class="fas fa-fw fa-pencil-alt"></i>
          <span>Input Konten</span>
        </a>
        <div id="input" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih menu :</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/berita/tulis/4') ?>">Input Berita</a>
            <a class="collapse-item" href="<?php echo base_url('admin/berita/tulis/5') ?>">Input Event</a>
            <a class="collapse-item" href="<?php echo base_url('admin/berita/tulis/1') ?>">Input Prestasi</a>
            <a class="collapse-item" href="<?php echo base_url('admin/berita/tulis/3') ?>">Input Pengumuman Sekolah</a>
          </div>
        </div>
      </li>
      <li class="nav-item <?php if($page=='berita') echo 'active' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#berita" aria-expanded="true" aria-controls="berita">
          <i class="fas fa-fw fa-list"></i>
          <span>Daftar Konten</span>
        </a>
        <div id="berita" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih menu :</h6>
            <a class="collapse-item" href="<?php echo base_url('admin/berita/4') ?>">List Berita</a>
            <a class="collapse-item" href="<?php echo base_url('admin/berita/5') ?>">List Event</a>            
            <a class="collapse-item" href="<?php echo base_url('admin/berita/1') ?>">List Prestasi</a>      
            <a class="collapse-item" href="<?php echo base_url('admin/berita/3') ?>">List Pengumuman Sekolah</a>
          </div>
        </div>
      </li>
      <li class="nav-item <?php if($page=='pendaftar') echo 'active' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/pendaftar') ?>">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Data Pendaftar</span></a>
      </li>
      <li class="nav-item <?php if($page=='gallery') echo 'active' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/gallery') ?>">
          <i class="fas fa-fw fa-images"></i>
          <span>Gallery</span></a>
      </li>
      <li class="nav-item <?php if($page=='guru') echo 'active' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/guru') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Civitas Akademik</span></a>
      </li>
      <li class="nav-item <?php if($page=='fasilitas') echo 'active' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/fasilitas') ?>">
          <i class="fas fa-fw fa-building"></i>
          <span>Data Fasilitas</span></a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Setting Info
      </div>

      <li class="nav-item <?php if($page=='bg') echo 'active' ?>">
        <a class="nav-link" href="<?php echo base_url('admin/background-setting') ?>">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Background Setting</span></a>
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
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username') ?></span>
              <span class="fas fa-user" ></span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <!--<a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
              </a>-->
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