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
				 			<a href="<?php echo site_url('customer/twowaccessories')?>">2W Accessories</a>
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
			    			<div class="list-price">
								<span>Rs. <span class="amount">2000/-</span></span>
							</div>
			    		</div>
			    		<div class="list-content">
		    			    <div class="list-title mb-1">
								<span>Product Title</span>
							</div>
							<div class="list-data list-view">
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
							</div>
							<div class="view-more text-right">
								<a class="view-btn collapsed" data-toggle="collapse" data-target="#p1"><i class="fa fa-chevron-double-up"></i></a>
							</div>
						</div>
					</div>
					<div id="p1" class="extra-content collapse" data-parent="#prolist">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group d-flex align-items-center">
									  <label class="m-0 mr-2">Quantity</label>
									  <select class="form-control">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
									<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Add to Cart<i class="fas fa-cart-arrow-down ml-2"></i></a></div>
									<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a></div>
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
			    			<div class="list-price">
								<span>Rs. <span class="amount">2000/-</span></span>
							</div>
			    		</div>
			    		<div class="list-content">
		    			    <div class="list-title mb-1">
								<span>Product Title</span>
							</div>
							<div class="list-data list-view">
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
							</div>
							<div class="view-more text-right">
								<a class="view-btn collapsed" data-toggle="collapse" data-target="#p2"><i class="fa fa-chevron-double-up"></i></a>
							</div>
						</div>
					</div>
					<div id="p2" class="extra-content collapse" data-parent="#prolist">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group d-flex align-items-center">
									  <label class="m-0 mr-2">Quantity</label>
									  <select class="form-control">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
								<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Add to Cart<i class="fas fa-cart-arrow-down ml-2"></i></a></div>
									<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a></div>
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
			    			<div class="list-price">
								<span>Rs. <span class="amount">2000/-</span></span>
							</div>
			    		</div>
			    		<div class="list-content">
		    			    <div class="list-title mb-1">
								<span>Product Title</span>
							</div>
							<div class="list-data list-view">
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
							</div>
							<div class="view-more text-right">
								<a class="view-btn collapsed" data-toggle="collapse" data-target="#p3"><i class="fa fa-chevron-double-up"></i></a>
							</div>
						</div>
					</div>
					<div id="p3" class="extra-content collapse" data-parent="#prolist">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group d-flex align-items-center">
									  <label class="m-0 mr-2">Quantity</label>
									  <select class="form-control">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
								<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Add to Cart<i class="fas fa-cart-arrow-down ml-2"></i></a></div>
									<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a></div>
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
			    			<div class="list-price">
								<span>Rs. <span class="amount">2000/-</span></span>
							</div>
			    		</div>
			    		<div class="list-content">
		    			    <div class="list-title mb-1">
								<span>Product Title</span>
							</div>
							<div class="list-data list-view">
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
							</div>
							<div class="view-more text-right">
								<a class="view-btn collapsed" data-toggle="collapse" data-target="#p4"><i class="fa fa-chevron-double-up"></i></a>
							</div>
						</div>
					</div>
					<div id="p4" class="extra-content collapse" data-parent="#prolist">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group d-flex align-items-center">
									  <label class="m-0 mr-2">Quantity</label>
									  <select class="form-control">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
								<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Add to Cart<i class="fas fa-cart-arrow-down ml-2"></i></a></div>
									<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a></div>
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
			    			<div class="list-price">
								<span>Rs. <span class="amount">2000/-</span></span>
							</div>
			    		</div>
			    		<div class="list-content">
		    			    <div class="list-title mb-1">
								<span>Product Title</span>
							</div>
							<div class="list-data list-view">
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
							</div>
							<div class="view-more text-right">
								<a class="view-btn collapsed" data-toggle="collapse" data-target="#p5"><i class="fa fa-chevron-double-up"></i></a>
							</div>
						</div>
					</div>
					<div id="p5" class="extra-content collapse" data-parent="#prolist">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group d-flex align-items-center">
									  <label class="m-0 mr-2">Quantity</label>
									  <select class="form-control">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
								<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Add to Cart<i class="fas fa-cart-arrow-down ml-2"></i></a></div>
									<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a></div>
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
			    			<div class="list-price">
								<span>Rs. <span class="amount">2000/-</span></span>
							</div>
			    		</div>
			    		<div class="list-content">
		    			    <div class="list-title mb-1">
								<span>Product Title</span>
							</div>
							<div class="list-data list-view">
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
								<p>Sample: <span class="value">Demo</span></p>
							</div>
							<div class="view-more text-right">
								<a class="view-btn collapsed" data-toggle="collapse" data-target="#p6"><i class="fa fa-chevron-double-up"></i></a>
							</div>
						</div>
					</div>
					<div id="p6" class="extra-content collapse" data-parent="#prolist">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group d-flex align-items-center">
									  <label class="m-0 mr-2">Quantity</label>
									  <select class="form-control">
									    <option>1</option>
									    <option>2</option>
									    <option>3</option>
									    <option>4</option>
									  </select>
									</div>
								</div>
								<div class="col-md-6 d-flex d-md-block justify-content-center">
								<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Add to Cart<i class="fas fa-cart-arrow-down ml-2"></i></a></div>
								<div class="mb-2 mr-3 mr-md-0"><a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a></div>
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
