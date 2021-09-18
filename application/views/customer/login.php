
<body>
<?php $this->load->view('customer/scripts'); ?>
<?php $this->load->view('customer/header'); ?>

<section class="login-page pt-4 pt-md-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-4 col-lg-4 col-md-10 col-10">
			    <div class="text-center theme-color">
			    	<span>Welcome to our</span>
			        <h3 class="font-weight-bold">Digital Stores</h3>
			        <div class="box-data">
			        	<h5 class="m-0 font-weight-bold">Sandeep Automobiles</h5>
			        	<p class="m-0">Authorised Dealer<br>TVS Motor Company</p>
			        </div>
			    </div>
				<div class="login-form">
					<form action="<?php echo site_url('customer')?>" method="post">
							
						<div class="row">
							<div class="col-lg-12 col-md-12 mb-3">
								<h5 class="font-weight-bold theme-color ml-3 mb-0">Login</h5>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="input-group wrap-input50">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<div class="popup-field">
										<input type="text" name="Name" value="" class="input50" placeholder="Name">
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="input-group wrap-input50">
									<span class="input-group-addon"><i class="fa fa-phone-alt"></i></span>
									<div class="popup-field">
										<input type="text" name="Name" value="" class="input50" placeholder="Number">
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 pt-1 pb-3 text-right">
								<a href="#"  class="otp-btn">Get OTP</a>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="input-group wrap-input50 mb-2">
									<span class="input-group-addon"><i class="fa fa-lock-alt" aria-hidden="true"></i></span>
									<div class="popup-field">
										<input type="password" name="pin" class="input50" placeholder="OTP" value="">
									</div> 
								</div>
								<label class="w-100 text-right"><a href="#">Resend OTP?</a></label>
							</div>
							<div class="col-lg-12 col-md-12 mb-2 text-right">
								<!-- <input type="submit" class="btn-login" name="login" href="Home.html" id="login" value="Login"> -->
								<input type="submit" class="btn-login" name="login" href="<?php echo site_url('customer')?>" id="login" value="Login">
							</div>
							<div class="col-lg-12 col-md-12 mt-2 text-center">
								<a href="<?php echo site_url('customer')?>" class="guest-btn font-weight-bold">Continue as Guest</a>
								<!-- <a href="Home.html" class="guest-btn font-weight-bold">Continue as Guest</a> -->
							</div> 
						</div>
					</form>
				</div>
				
				
			</div>
			
			
		</div>
	</div>	
</section>


</body>
