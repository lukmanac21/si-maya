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
            <h3 class="card-title">Ubah Data Master Menu</h3>
          </div>
            <div class="card-body">
            <?php foreach($data_menu as $row_menu){?>
                <form class="form-horizontal" role="form" action="<?= site_url('menu/update_data');?>" method="post">
                    <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Menu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu" value="<?= $row_menu->nama_menu;?>" required>
                        <input type="hidden" class="form-control" name="id_menu" value="<?= $row_menu->id_menu;?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Icon Menu</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="icon_menu" placeholder="Icon Menu" value="<?= $row_menu->icon_menu;?>" required>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button type="reset" class="btn btn-default float-right">Reset</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            <?php } ?>
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
