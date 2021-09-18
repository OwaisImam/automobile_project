<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Register</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description">
        <meta content="Themesdesign" name="author">
        <link rel="shortcut icon" href="assets\images\favicon.ico">

        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\style.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="<?php echo site_url('dealer/home')?>" class="logo logo-admin"><img src="<?php echo base_url();?>assets\images\dealer\logo-dark.png" alt="" height="80"></a>
                        </div>
                        <h5 class="font-18 text-center">Register</h5>
    
                        <form class="form-horizontal m-t-30" method="post" action="<?php echo site_url('dealer/register')?>">

                            <div class="form-group">
                                <div class="col-12">
                                        <label>Name</label>
                                    <input class="form-control" name="name" type="text" required="" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Contact Number</label>
                                    <input class="form-control" name="mobile" type="text" required="" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Business Type</label>
                                    <select class="form-control" name="business_type">
                                        <option>Authorized</option>
                                        <option>Un Authorized</option>
                                        <option>Type3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" name="password" type="password" required="" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Email</label>
                                    <input class="form-control" name="email" type="email" required="" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Confirm Password</label>
                                    <input class="form-control" name="confirm_password" type="password" required="" placeholder="Enter Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                            </div>
                                </div>
                            </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button name="register" class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
    
                            <div class="form-group mb-0 row">
                                    <div class="col-12 m-t-10 text-center">
                                        <a href="<?php echo site_url('dealer/login')?>" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <!-- <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.bundle.min.js"></script>
        <script src="assets\js\metismenu.min.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\waves.min.js"></script> -->

        <!-- App js -->
        <!-- <script src="assets\js\app.js"></script> -->
        <?php $this->load->view('dealer/scripts'); ?>
        
    </body>

</html>