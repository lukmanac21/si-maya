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
            <h3 class="card-title">Data Master Status Surat</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <button type="button" class="btn btn-primary" onclick="window.location.href='<?= site_url();?>/Statussurat/add_data';">Tambah</button>
              <br>
                <br>
              <thead>
              <tr>
                <th>Nama status_surat</th>
                <th style="text-align:center;">Ubah</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach($status_surat as $row_status_surat){?>
                    <tr>
                        <td><?= $row_status_surat->nama_status_surat;?></td>
                        <td style="text-align:center;"><a style="color:white;" type="button" href="<?= site_url('Statussurat/edit_data/').$row_status_surat->id_status_surat ;?>" class="btn btn-info" > Ubah</a</td>
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
