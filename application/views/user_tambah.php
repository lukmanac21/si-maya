<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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
      <div class="container-fluid">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Master User</h3>
          </div>
            <div class="card-body">
              <form class="form-horizontal" user="form" action="<?= site_url('User/save_data');?>" method="post">
                  <div class="card-body">
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Nama Jabatan</label>
                      <div class="col-sm-11">
                      <select class="form-control select2" name="id_role" style="width: 100%;">
                            <?php foreach($role as $row_role){?>
                            <option value="<?= $row_role->id_role;?>"><?= $row_role->nama_role;?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Nama user</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_user" placeholder="Nama user" required>
                      <input type="hidden" class="form-control" name="id_dinas" value="<?php echo $this->session->userdata("id_dinas"); ?>">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Email</label>
                      <div class="col-sm-10">
                      <input type="email" class="form-control" name="email_user" placeholder="Nama user" required unique="true">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-1 col-form-label">Password</label>
                      <div class="col-sm-10">
                      <input type="password" class="form-control" name="password_user" placeholder="Nama user" required>
                      </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-default float-right">Reset</button>
                  </div>
                  <!-- /.card-footer -->
              </form>
            </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
