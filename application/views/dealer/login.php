<body>

<head>
<title>Login</title>

        <link href="<?php echo base_url();?>assets/css/dealer/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/dealer/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/dealer/icons.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url();?>assets/css/dealer/style.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo base_url();?>assets\images\dealer\favicon.ico">

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
                        <h5 class="font-18 text-center">Login</h5>
    
                        <form class="form-horizontal m-t-30" method="post" action="<?php echo site_url('dealer/process')?>">
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Username</label>
                                    <input class="form-control" name="username" type="text" required="" placeholder="Username">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>
    						
    						<div class="form-group">
                                <div class="col-sm-12">
                                    <label>Select Role</label> 
                                    <select class="form-control" name="role">
                                        <option>Role1</option>
                                        <option>Role2</option>
                                        <option>Role3</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme">
                                                    <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                                  </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button name="login" class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
    
                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-7">
                                    <a href="<?php echo site_url('dealer/recover')?>" class="text-muted"><i class="fal fa-lock m-r-5"></i> Forgot your password?</a>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <a href="<?php echo site_url('dealer/register')?>" class="text-muted">Create an account</a>
                                </div>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
      
    </body>

</html>