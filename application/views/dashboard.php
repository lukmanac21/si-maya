<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" >
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('_partials/navbar');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('_partials/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    <div class="card">
      <div class="card-header" style="margin-bottom:15px;">
        <h3 class="card-title">Dashboard</h3>
      </div>
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-secondary elevation-1"><i class="nav-icon far fa-envelope"></i></span>

              <div class="info-box-content">
              <span class="info-box-number" style="font-size:20px; padding-bottom:4px;">
                  10
                </span>
                <span class="info-box-text">Surat Masuk</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-reply"></i></span>

              <div class="info-box-content">
              <span class="info-box-number" style="font-size:20px; padding-bottom:4px;">
                  10
                </span>
                <span class="info-box-text">Dispo Masuk</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-share"></i></span>

              <div class="info-box-content">
              <span class="info-box-number" style="font-size:20px; padding-bottom:4px;">
                  10
                </span>
                <span class="info-box-text">Dispo Keluar</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
              <span class="info-box-number" style="font-size:20px; padding-bottom:4px;">
                  10
                </span>
                <span class="info-box-text">Buku Tamu</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Surat Masuk Terbaru</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No Surat / No Agenda</th>
                <th>Tanggal Surat</th>
                <th>Jenis Pengirim Klasifikasi</th>
                <th>Asal Surat</th>
                <th>Tujuan Surat</th>
                <th>Perihal</th>
                <th>Status Disposisi</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><a href="#">23523653456</td>
                <td>30-07-2020</td>
                <td>Perorangan Berita Acara</td>
                <td>Eka Kusuma (Dinas Kominfo)</td>
                <td>Bupati Kab. Bondowoso</td>
                <td>Nama Perihal<br> Dibaca Pada </td>
                <td>Diterima</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </section>
  </div>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
