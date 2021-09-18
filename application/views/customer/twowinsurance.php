
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
				 			 <a href="<?php echo site_url('customer/twowinsurance')?>">2W Insurance</a>
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
			<div class="col-lg-6">
				<div class="product-content">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="product-table">
					<div class="table-responsive">          
						<table class="table">
						    <thead>
						      <tr>
						        <th>Sr.no</th>
						        <th>col1</th>
						        <th>col2</th>
						        <th>col3</th>
						        <th>col4</th>
						        <th>col5</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						        <td>USA</td>
						      </tr>
						      <tr>
						        <td>2</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						        <td>USA</td>
						      </tr>
						      <tr>
						        <td>3</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						        <td>USA</td>
						      </tr>
						      <tr>
						        <td>4</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						        <td>USA</td>
						      </tr>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				 <label class="m-0 mr-2">Enter Details Below</label>
				 <p></p>
				<form >
				
					<div class="row align-items-center mb-3">
						
						<div class="col-md-8">
						    <input type="text" class="form-control" placeholder="Sample Text Here">
						</div>
					</div>
					<div class="row align-items-center mb-3">
						
						<div class="col-md-8">
						    <input type="text" class="form-control" placeholder="Sample Text Here">
						</div>
					</div>
					<div class="row align-items-center mb-3">
						
						<div class="col-md-8">
						    <input type="text" class="form-control" placeholder="Sample Text Here">
						</div>
					</div>
					<div class="row align-items-center mb-3">
						
						<div class="col-md-8">
						    <input type="text" class="form-control" placeholder="Sample Text Here">
						</div>
					</div>
					<div class="row align-items-center mb-3">
						
						<div class="col-md-8">
						    <input type="text" class="form-control" placeholder="Sample Text Here">
						</div>
					</div>
					<div class="row align-items-center mb-3">
						<div class="col-md-8">
						    <input type="text" class="form-control" placeholder="Sample Text Here">
						</div>
					</div>
					<div >
						<div class="col-md-12 d-flex justify-content-center">
							<button type="submit" class="btn-feed">Get a Callback <i class="fas fa-phone ml-2"></i></button>
							</div>
					</div>
				</form>
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