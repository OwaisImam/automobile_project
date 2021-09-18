<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Reset Password</title>
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
                        <h5 class="font-18 text-center">Reset Password</h5>
    
                        <form class="form-horizontal m-t-30" action="<?php echo site_url('dealer/login')?>">

                               <div class="form-group">
                                    <div class="col-12">
                                            <label>Register Contact Number</label>
                                        <input class="form-control" type="text" required="" name="contact" placeholder="Contact Number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <label>Security Question</label>
                                        <select class="form-control mb-3" name="question">
                                            <option>Your Last School Name</option>
                                            <option>Your Father Name</option>
                                            <option>Your Favourite Dish</option>
                                        </select>
                                        <input class="form-control" type="text" required="" name="answer" placeholder="Answer">
                                    </div>
                                </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" name="submit" type="submit">Reset Password</button>
                                </div>
                            </div>
                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-12 text-center mb-2">
                                    <span class="text-muted"><i class="fal fa-user m-r-5"></i>Register User? <a href="<?php echo site_url('dealer/login')?>">Login in</a></span>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <span class="text-muted"><i class="fal fa-user m-r-5"></i>New User? <a href="<?php echo site_url('dealer/register')?>">Signup Here</a></span>
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