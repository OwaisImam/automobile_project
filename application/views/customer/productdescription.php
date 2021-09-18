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
				 			<a href="<?php echo site_url('customer/twowheelers')?>">Two Wheelers</a>
				 		 
				 		</li>
				 		<li>
				 			<a href="<?php echo site_url('customer#products')?>">Product Details</a>
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

<section class="single-sec">
	<div class="container">
		<div class="row">
			<!-- product gallery -->
			<div class="col-lg-6 mb-5 mb-lg-0">
				<div class="row image-thumb">
					<div class="col-md-12">
						<div id="myCarousel" class="single-product mb-4 carousel slide" data-ride="carousel">

						  <div class="product-logo"><img src="<?php echo base_url();?>assets\images\customer\hexa.png" class="img-circle" alt=""></div>
						  <div class="carousel-inner">
						    <div class="carousel-item active" data-slide-number="0">
						    	<img src="<?php echo base_url();?>assets\images\customer\p2.png" class="d-block w-100" alt="1"  data-type="image">
						      <!-- <img src="img/p2.jpg" class="d-block w-100" alt="1" data-type="image"> -->
						    </div>
						    <div class="carousel-item" data-slide-number="1">
						    	<img src="<?php echo base_url();?>assets\images\customer\p3.png" class="d-block w-100" alt="2">
						      <!-- <img src="img/p3.jpg" class="d-block w-100" alt="2" data-type="image"> -->
						    </div>
						    <div class="carousel-item" data-slide-number="2">
						    	<img src="<?php echo base_url();?>assets\images\customer\p4.png" class="d-block w-100" alt="3">
						      <!-- <img src="img/p4.jpg" class="d-block w-100" alt="3" data-type="image"> -->
						    </div>
						    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						    <i class="fas fa-chevron-left"></i>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						    <i class="fas fa-chevron-right"></i>
						    <span class="sr-only">Next</span>
						  </a>
						  </div>
						</div>

						<!-- Carousel Navigation -->
						<div id="carousel-thumbs" class="thumbails carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <div class="row mx-0">
						        <div id="carousel-selector-0" class="thumb col-2 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
						          <span class="color-box red"></span>
						        </div>
						        <div id="carousel-selector-1" class="thumb col-2 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
						          <span class="color-box green"></span>
						        </div>
						        <div id="carousel-selector-2" class="thumb col-2 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
						          <span class="color-box black"></span>
						        </div>
						        <div id="carousel-selector-0" class="thumb col-2 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="0">
						          <span class="color-box blue"></span>
						        </div>
						        <div id="carousel-selector-1" class="thumb col-2 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
						          <span class="color-box yellow"></span>
						        </div>
						        <div id="carousel-selector-2" class="thumb col-2 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
						          <span class="color-box orange"></span>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Product features -->
			<div class="col-lg-6">
				<div class="product-title mb-3">
					<h4>Product Title</h4>
				</div>
				<div class="product-features">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>	
		<div class="row mt-4">
			<div class="col-md-12">
				<div class="product-title mb-3">
					<h4>Products Features</h4>
				</div>
				<div class="product-features">
					<div class="row mb-4">
					    <div class="col-md-12">
					        <div class="product-title mb-3">
            					<h5>Features 1</h5>
            				</div>
					    </div>
						<div class="col-lg-6 order-2 order-lg-1">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="col-lg-6 vise-img order-1 order-lg-2 mb-3">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="d-block w-100" alt="">
						</div>
					</div>
					<div class="row mb-4">
					    <div class="col-md-12">
					        <div class="product-title mb-3">
            					<h5>Features 2</h5>
            				</div>
					    </div>
						<div class="col-lg-6 order-2 order-lg-1">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="col-lg-6 vise-img order-1 order-lg-2 mb-3">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="d-block w-100" alt="">
							
						</div>
					</div>
					<div class="row mb-4">
					    <div class="col-md-12">
					        <div class="product-title mb-3">
            					<h5>Features 3</h5>
            				</div>
					    </div>
						<div class="col-lg-6 order-2 order-lg-1">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="col-lg-6 vise-img order-1 order-lg-2 mb-3">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="d-block w-100" alt="">
						</div>
					</div>
					<div class="row mb-4">
					    <div class="col-md-12">
					        <div class="product-title mb-3">
            					<h5>Features 4</h5>
            				</div>
					    </div>
						<div class="col-lg-6 order-2 order-lg-1">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>
						<div class="col-lg-6 vise-img order-1 order-lg-2 mb-3">
							<img src="<?php echo base_url();?>assets\images\customer\p1.png" class="d-block w-100" alt="">
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<div class="product-title mb-3">
					<h4>FAQs</h4>
				</div>
				<div class="product-features">
					<div class="row accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
						<!-- Item -->
						<div class="col-lg-6">
							<div class="card mb-3">
								<!-- Card header -->
							    <div class="card-head">
							      <a data-toggle="collapse" href="#faq1" class="collapsed">
							        <h6 class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod life ? <i class="fal fa-chevron-circle-up"></i>
							        </h6>
							      </a>
							    </div>
								<!-- Card body -->
							    <div id="faq1" class="collapse" data-parent="#accordionEx">
							      <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
							      </div>
							    </div>
							</div>
						</div>
					   <!-- Item -->
						<div class="col-lg-6">
							<div class="card mb-3">
								<!-- Card header -->
							    <div class="card-head">
							      <a data-toggle="collapse" href="#faq2" class="collapsed">
							        <h6 class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod life ? <i class="fal fa-chevron-circle-up"></i>
							        </h6>
							      </a>
							    </div>
								<!-- Card body -->
							    <div id="faq2" class="collapse" data-parent="#accordionEx">
							      <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
							      </div>
							    </div>
							</div>
						</div>
						<!-- Item -->
						<div class="col-lg-6">
							<div class="card mb-3">
								<!-- Card header -->
							    <div class="card-head">
							      <a data-toggle="collapse" href="#faq3" class="collapsed">
							        <h6 class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod life ? <i class="fal fa-chevron-circle-up"></i>
							        </h6>
							      </a>
							    </div>
								<!-- Card body -->
							    <div id="faq3" class="collapse" data-parent="#accordionEx">
							      <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod life accusamus terry richardson ad squid.
							      </div>
							    </div>
							</div>
						</div>
						<!-- Item -->
						<div class="col-lg-6">
							<div class="card mb-3">
								<!-- Card header -->
							    <div class="card-head">
							      <a data-toggle="collapse" href="#faq4" class="collapsed">
							        <h6 class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod life ? <i class="fal fa-chevron-circle-up"></i>
							        </h6>
							      </a>
							    </div>
								<!-- Card body -->
							    <div id="faq4" class="collapse" data-parent="#accordionEx">
							      <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod life accusamus terry richardson ad squid.
							      </div>
							    </div>
							</div>
						</div>
						<!-- Item -->
						<div class="col-lg-6">
							<div class="card mb-3">
								<!-- Card header -->
							    <div class="card-head">
							      <a data-toggle="collapse" href="#faq5" class="collapsed">
							        <h6 class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod life ? <i class="fal fa-chevron-circle-up"></i>
							        </h6>
							      </a>
							    </div>
								<!-- Card body -->
							    <div id="faq5" class="collapse" data-parent="#accordionEx">
							      <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod life accusamus terry richardson ad squid.
							      </div>
							    </div>
							</div>
						</div>
						<!-- Item -->
						<div class="col-lg-6">
							<div class="card mb-3">
								<!-- Card header -->
							    <div class="card-head">
							      <a data-toggle="collapse" href="#faq6" class="collapsed">
							        <h6 class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod life ? <i class="fal fa-chevron-circle-up"></i>
							        </h6>
							      </a>
							    </div>
								<!-- Card body -->
							    <div id="faq6" class="collapse" data-parent="#accordionEx">
							      <div class="card-body">
							        Anim pariatur cliche reprehenderit, enim eiusmod life accusamus terry richardson ad squid.
							      </div>
							    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-6 mt-3">
				<div class="product-title mb-3">
					<h4>Select Scheme</h4>
				</div>
				<div class="scheme-features">
					<label>Choose from the range:-</label>
					<select id="select_box" class="form-control mb-3">
					      <option>select scheme</option>
						  <option value="a">scheme1</option>
						  <option value="b">scheme2</option>
						  <option value="c">scheme3</option>
						  <option value="d">scheme4</option>
					</select>
					<div id="a" class="hide">
					  	<p>scheme 1</p>
					  	<p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
					<div id="b" class="hide">
					  <p>scheme 2</p>
					  <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
					<div id="c" class="hide">
					  <p>scheme 3</p>
					  <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
					<div id="d" class="hide">
					  <p>scheme 4</p>
					  <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row final-btn">
			<div class="col-md-12 d-flex justify-content-center">
				
				
				<div class="mb-2 mr-3"><button type="submit" class="btn-feed">Send a Quote <i class="far fa-file-alt ml-2"></i></button></div>
				<div class="mb-2"><button type="submit" class="btn-feed">Book Now<i class="far fa-hand-point-up ml-2"></i></button></div>
				
				
			</div>
		</div>
	</div>
</section>


</body>

<?php $this->load->view('customer/footer'); ?>
