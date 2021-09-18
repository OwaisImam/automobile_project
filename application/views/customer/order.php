
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
				 		  <a href="<?php echo site_url('customer')?>">Home</a> 
				 		</li>
				 		<li>
				 			<a href="<?php echo site_url('customer/order')?>">Order Summery</a>
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




<section class="product6">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-6 order-1 order-lg-1">
				<h5 class="theme-color mb-3">Order Summary</h5>
				<div class="summary-card">
					<div class="total mb-5">
						<ul>
							<li><div class="title">Product1</div><div class="value">Rs.100.00/-</div></li>
							<li><div class="title">Product2</div><div class="value">Rs.100.00/-</div></li>
							<li><div class="title">Product3</div><div class="value">Rs.100.00/-</div></li>
							<li><div class="title">Tax</div><div class="value">Rs.30.00/-</div></li>
							<li><div class="title">PromoCode</div><div class="value">- Rs.50.00/-</div></li>
							<li class="total-amount"><div class="title">Total</div><div class="value">Rs.280.00/-</div></li>
						</ul>
						<div class="buy text-right mt-4">
							<a href="#" class="book-btn">Buy Now<i class="fas fa-arrow-circle-right ml-2"></i></a>
						</div>
					</div>
					<div class="terms">
						<h6>Terms & Conditions</h6>
						<ol class="pl-3">
							<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
							<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
							<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
							<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
							<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 order-2 order-lg-2">
				<h5 class="theme-color mb-3">Payment Method</h5>
				<div class="summary-card text-center">
				    <p class="mt-5 mb-5">Please Integrate paytm Payment</p>
				</div>
			</div>
		</div>
	</div>
</section>
</body>

<?php $this->load->view('customer/footer'); ?>

