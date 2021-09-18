
<body>
<?php $this->load->view('customer/scripts'); ?>
<?php $this->load->view('customer/header'); ?>



<div class="page-bar">
	<div class="container">
		<div class="row">
			<div class="col-md-6 justify-content-center d-flex d-md-block">
				 <div class="breadcrumbs mb-3 mb-md-0">
				 	<ul>
				 		<li>
				 		  <a href="<?php echo site_url('customer#products')?>">Products</a> 
				 		</li>
				 		<li>
				 			<a href="<?php echo site_url('customer/vehicleservice')?>">Vehicle Service</a>
				 		</li>
				 	</ul>
				 </div>
			</div>
			<div class="col-md-6 justify-content-center d-flex d-md-block">
				<div class="text-right mb-3 mb-md-0">
					<a href="<?php echo site_url('customer/order')?>" class="book-btn ml-2"><i class="fal fa-shopping-cart mr-2 ml-1"></i>Shopping Cart</a> 
				</div>
			</div>
		</div>
	</div>
</div>

<section>
	<div class="container">
		<div id="prolist" class="row mt-4">
			<!-- Item -->
			<div class="col-xl-4 col-md-6">
				<div class="list-item">
					<div class="list-box">
						<div class="list-img">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="w-100" alt=""/>
			    		</div>
			    		<div class="list-content">
		    			    <!-- <a href="product-single.html"> -->
		    			    <a href="<?php echo site_url('customer/productdescription')?>">
				    			<div class="list-title mb-1">
									<span>Product Title</span>
								</div>
								<div class="list-data">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="list-more text-right">
									<span class="curreny">Rs.</span><span class="price">100</span><span class="offer">/- Onwards</span>
								</div>
								<div class="view-more text-right">
									<a class="view-btn collapsed" data-toggle="collapse" data-target="#p1"><i class="fa fa-chevron-double-up"></i></a>
								</div>
							</a>
						</div>
					</div>
					<div id="p1" class="extra-content collapse" data-parent="#prolist">
						<form>
							<div class="row align-items-center">
								<div class="col-md-6 mb-4 mb-md-0">
									<div class="list-data list-point">
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2"><a href="#" class="book-btn">Book Now <i class="fas fa-calendar-check ml-2"></i></a></div>
									<div class="mb-2"><a href="#" class="book-btn">Get a Callback <i class="fas fa-phone ml-2"></i></a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-4 col-md-6">
				<div class="list-item">
					<div class="list-box">
						<div class="list-img">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="w-100" alt=""/>
			    		</div>
			    		<div class="list-content">
			    			<a href="<?php echo site_url('customer/productdescription')?>">
		    			    <!-- <a href="product-single.html"> -->
				    			<div class="list-title mb-1">
									<span>Product Title</span>
								</div>
								<div class="list-data">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="list-more text-right">
									<span class="curreny">Rs.</span><span class="price">100</span><span class="offer">/- Onwards</span>
								</div>
								<div class="view-more text-right">
									<a class="view-btn collapsed" data-toggle="collapse" data-target="#p2"><i class="fa fa-chevron-double-up"></i></a>
								</div>
							</a>
						</div>
					</div>
					<div id="p2" class="extra-content collapse" data-parent="#prolist">
						<form>
							<div class="row align-items-center">
								<div class="col-md-6 mb-4 mb-md-0">
									<div class="list-data list-point">
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2"><a href="#" class="book-btn">Book Now <i class="fas fa-calendar-check ml-2"></i></a></div>
									<div class="mb-2"><a href="#" class="book-btn">Get a Callback <i class="fas fa-phone ml-2"></i></a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-4 col-md-6">
				<div class="list-item">
					<div class="list-box">
						<div class="list-img">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="w-100" alt=""/>
			    		</div>
			    		<div class="list-content">
			    			<a href="<?php echo site_url('customer/productdescription')?>">
		    			    <!-- <a href="product-single.html"> -->
				    			<div class="list-title mb-1">
									<span>Product Title</span>
								</div>
								<div class="list-data">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="list-more text-right">
									<span class="curreny">Rs.</span><span class="price">100</span><span class="offer">/- Onwards</span>
								</div>
								<div class="view-more text-right">
									<a class="view-btn collapsed" data-toggle="collapse" data-target="#p3"><i class="fa fa-chevron-double-up"></i></a>
								</div>
							</a>
						</div>
					</div>
					<div id="p3" class="extra-content collapse" data-parent="#prolist">
						<form>
							<div class="row align-items-center">
								<div class="col-md-6 mb-4 mb-md-0">
									<div class="list-data list-point">
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2"><a href="#" class="book-btn">Book Now <i class="fas fa-calendar-check ml-2"></i></a></div>
									<div class="mb-2"><a href="#" class="book-btn">Get a Callback <i class="fas fa-phone ml-2"></i></a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-4 col-md-6">
				<div class="list-item">
					<div class="list-box">
						<div class="list-img">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="w-100" alt=""/>
			    		</div>
			    		<div class="list-content">
			    			<a href="<?php echo site_url('customer/productdescription')?>">
		    			    <!-- <a href="product-single.html"> -->
				    			<div class="list-title mb-1">
									<span>Product Title</span>
								</div>
								<div class="list-data">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="list-more text-right">
									<span class="curreny">Rs.</span><span class="price">100</span><span class="offer">/- Onwards</span>
								</div>
								<div class="view-more text-right">
									<a class="view-btn collapsed" data-toggle="collapse" data-target="#p4"><i class="fa fa-chevron-double-up"></i></a>
								</div>
							</a>
						</div>
					</div>
					<div id="p4" class="extra-content collapse" data-parent="#prolist">
						<form>
							<div class="row align-items-center">
								<div class="col-md-6 mb-4 mb-md-0">
									<div class="list-data list-point">
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2"><a href="#" class="book-btn">Book Now <i class="fas fa-calendar-check ml-2"></i></a></div>
									<div class="mb-2"><a href="#" class="book-btn">Get a Callback <i class="fas fa-phone ml-2"></i></a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-4 col-md-6">
				<div class="list-item">
					<div class="list-box">
						<div class="list-img">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="w-100" alt=""/>
			    		</div>
			    		<div class="list-content">
			    			<a href="<?php echo site_url('customer/productdescription')?>">
		    			    <!-- <a href="product-single.html"> -->
				    			<div class="list-title mb-1">
									<span>Product Title</span>
								</div>
								<div class="list-data">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="list-more text-right">
									<span class="curreny">Rs.</span><span class="price">100</span><span class="offer">/- Onwards</span>
								</div>
								<div class="view-more text-right">
									<a class="view-btn collapsed" data-toggle="collapse" data-target="#p5"><i class="fa fa-chevron-double-up"></i></a>
								</div>
							</a>
						</div>
					</div>
					<div id="p5" class="extra-content collapse" data-parent="#prolist">
						<form>
							<div class="row align-items-center">
								<div class="col-md-6 mb-4 mb-md-0">
									<div class="list-data list-point">
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2"><a href="#" class="book-btn">Book Now <i class="fas fa-calendar-check ml-2"></i></a></div>
									<div class="mb-2"><a href="#" class="book-btn">Get a Callback <i class="fas fa-phone ml-2"></i></a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-4 col-md-6">
				<div class="list-item">
					<div class="list-box">
						<div class="list-img">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="w-100" alt=""/>
			    		</div>
			    		<div class="list-content">
		    			    <a href="<?php echo site_url('customer/productdescription')?>">
		    			    <!-- <a href="product-single.html"> -->
				    			<div class="list-title mb-1">
									<span>Product Title</span>
								</div>
								<div class="list-data">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="list-more text-right">
									<span class="curreny">Rs.</span><span class="price">100</span><span class="offer">/- Onwards</span>
								</div>
								<div class="view-more text-right">
									<a class="view-btn collapsed" data-toggle="collapse" data-target="#p6"><i class="fa fa-chevron-double-up"></i></a>
								</div>
							</a>
						</div>
					</div>
					<div id="p6" class="extra-content collapse" data-parent="#prolist">
						<form>
							<div class="row align-items-center">
								<div class="col-md-6 mb-4 mb-md-0">
									<div class="list-data list-point">
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
										<p>Sample: <span class="value">Demo</span></p>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2"><a href="#" class="book-btn">Book Now <i class="fas fa-calendar-check ml-2"></i></a></div>
									<div class="mb-2"><a href="#" class="book-btn">Get a Callback <i class="fas fa-phone ml-2"></i></a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>

<!-- Chat Box -->
<div class="chat-box">
	<div id="chat-screen" class="card collapse">
		<?php $this->load->view('customer/chat_window'); ?>
        </div>
    </div>
    <!-- Float Button -->
    <a class="float collapsed" data-toggle="collapse" data-target="#chat-screen" aria-expanded="true">
        <i class="fal fa-times my-float"></i>
	</a>
</div>

</body>
<?php $this->load->view('customer/footer'); ?>