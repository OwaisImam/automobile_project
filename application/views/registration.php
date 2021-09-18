<?php $this->load->view('scripts'); ?>
<script type="text/javascript">

    function resetValues() {
        //alert('hi');
        document.getElementById('username').value='';
        document.getElementById('password').value='';

        var reference_id = "<?php if (isset($_GET['reference_id'])) echo $_GET['reference_id']; else '';?>";
        //alert(reference_id);
        if(reference_id != "") {
            referalCodevalidation();
        }
    }
</script>
<body onload="resetValues()">
<?php $this->load->view('header'); ?>
<style type="text/css">
    .reg_error {
        color: red;
    }

</style>
<script type="text/javascript">

    var msg = "<?php echo $_GET['msg'];?>";
    if (msg !='') {
        alert(msg);
    }
</script>
<script type="text/javascript">
    

    function checkUsernameExist() {
       /* alert('fn called');
        
        if (username.length > 2) {
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('users/checkUsernameExist')?>",
                data : {
                 username : username
                },
                dataType:"JSON",
               success : function(response){
                 alert(response);
                 if(response){
                    //alert('Username Already Existed. Please choose another');
                    $(".reg_error").html("Username Already Existed. Please choose another");
                    document.getElementById('username').value='';
                 } else {
                    
                    
                 }
               },
              error : function(e){
                console.log(e);
              },
              failure : function(e){
                console.log(e);
              }
            });
        }*/
    }

  function referalCodevalidation()
  {
    referalCode = document.getElementById('referalCode').value;
    //alert(referalCode);
    if (referalCode.length > 2) {
        $.ajax({
        type : "POST",
        url  : "<?php echo site_url('users/isReferalCodeavailable')?>",
        data : {
         referalCode : referalCode
        },
        dataType:"JSON",
       success : function(response){
         //alert(response);
         if(response){
            //alert('Valid Referal Id');
            //console.log(response);
            //console.log(response.user_name);
            document.getElementById('referalCode').disabled="disabled";
            document.getElementById('refererName').value=response.user_name;
            document.getElementById('refererName1').value=response.user_name;
            
            document.getElementById('refererName').disabled="disabled";
         } else {
           // alert('Invalid Referal Id');
           $(".reg_error").html("Invalid Referal Id");
            document.getElementById('referalCode').value='';
            document.getElementById('refererName').value='';
         }
       },
      error : function(e){
        console.log(e);
      },
      failure : function(e){
        console.log(e);
      }
    });    
    }
    
  }
</script>

<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Registration</li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="page-title">
            		<h1>Login</h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START LOGIN SECTION -->
<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
            		<div class="padding_eight_all bg-white">
                        <p class="reg_error"></p>
                        <div class="heading_s1">
                            <h3>Create an Account</h3>
                        </div>
                        <form method="post" name="register_form">
                            <div class="form-group">
                                <label class="form-label" for="referalCode">Reference Id</label>
                                <?php if (isset($_GET['reference_id'])) { ?>
                                    <input type="text" class="form-control" id="referalCode" value="<?php echo $_GET['reference_id']; ?>" disabled>

                                    <input type="hidden" class="form-control" name="referalCode" value="<?php echo $_GET['reference_id']; ?>">

                                <?php } else { ?>
                                    <input type="text" class="form-control" id="referalCode" name="referalCode" onblur="referalCodevalidation()">
                                <?php } ?>
                                
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="refererName">Reference Name</label>
                                <?php if (isset($_GET['reference_id'])) { ?>
                                <input type="text" class="form-control" id="refererName" disabled>

                                <input type="hidden" class="form-control" id="refererName1" name="refererName">
                                 <?php } else { ?>
                                    <input type="text" class="form-control" name="refererName">
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name*</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="username">Username*</label>
                                <input type="text" class="form-control" id="username" name="username" onblur="checkUsernameExist()">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="password">Password*</label>
                                <input class="form-control" type="password" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="confirm_password">Confirm Password*</label>
                                <input class="form-control" type="password" name="confirm_password">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="mobile">Mobile*</label>
                                <input type="text" class="form-control numInput" name="mobile">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Email*</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="addessline1">Address Line1*</label>
                                <input type="text" class="form-control" name="addessline1" placeholder="Flat, House no, Building, Apartment">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="addessline2">Address Line2*</label>
                                <input type="text" class="form-control" name="addessline2" placeholder="Area, Colony, Street, Sector, Village">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="landmark">Landmark</label>
                                <input type="text" class="form-control" name="landmark">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="city">Town / City*</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="state">State*</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="pincode">PIN Code*</label>
                                <input type="text" class="form-control" name="pincode">
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="true" disabled="" checked>
                                        <label class="form-check-label"><span style="color:#000000">I agree to terms &amp; Policy.</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                            </div>
                        </form>
                        <div class="different_login">
                            <span> or</span>
                        </div>
                        <div class="form-note text-center">Already have an account? <a href="<?php echo base_url()?>login">Log in</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END LOGIN SECTION -->
</div>
<!-- END MAIN CONTENT -->
<?php $this->load->view('footer'); ?>
</body>
</html>