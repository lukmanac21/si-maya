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
    <section class="content">
        <div class="container-fluid">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Surat Masuk</h3>
          </div>
                <div class="card-body">
                    <div class="card-body p-0">
                        <div class="mailbox-controls">
                            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i></button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                            </div>
                            <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                            <div class="float-right"></div>
                        </div>
                        <table id="example1" class="table table-hover table-striped ">
                            <tbody>
                            <tr>
                                <td>
                                <div class="icheck-primary">
                                    <input type="checkbox" value="" id="check1">
                                    <label for="check1"></label>
                                </div>
                                </td>
                                <td class="mailbox-name"><a href="<?= site_url('Surat/read_surat');?>">Eka Kusuma (Dinas Kominfo)</a></td>
                                <td class="mailbox-subject"><b>Perihal</b>
                                </td>
                                <td class="mailbox-attachment"></td>
                                <td class="mailbox-date">30-07-2020</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark"></aside>
  <?php $this->load->view('_partials/footer');?>
</body>
</html>
