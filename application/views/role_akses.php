<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('_partials/head');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php $this->load->view('_partials/navbar');?>
  <?php $this->load->view('_partials/sidebar');?>
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Hak Akses Role <span style="color:black;font-weight:bold"> <?= $role['nama_role'];?> </span></h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Menu</th>
                <th>Hak Akses</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($sub_menu as $row_menu){?>
                    <tr>
                        <td><?= $row_menu->nama_sub_menu;?></td>
                        <td>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                            <?= get_access($role['id_role'],$row_menu->id_sub_menu);?>
                            data-role="<?= $role['id_role'];?>" data-menu="<?= $row_menu->id_sub_menu;?>">
                            <div>
                        </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </section>
    </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
