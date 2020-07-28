<!doctype html>
<html lang="en">
<?php $this->load->view('_partials/head.php'); ?>
    <style>
        body {background-color: #d6d4dd;}
    </style>
<body>
    <div style="padding-top:150px;">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">SI-Maya</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" action="<?= site_url('login/login_action');?>" method="post">
                    <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" name="email_user" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="password_user" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label">Remember me</label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>