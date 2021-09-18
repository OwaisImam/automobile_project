<?php $this->load->view('customer/scripts'); ?>
<?php $this->load->view('customer/header'); ?>

<body>



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
							<a href="<?php echo site_url('customer/help')?>">Help</a>
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
		<div class="row">
			<div class="col-md-12 mb-4">
            	<div class="text-center">
					<h3 class="font-weight-bold theme-color mb-3">
					Need some help?
					</h3>
					<form class="search-form">
						<div class="position-relative">
							<input type="text" name="Name" value="" class="form-control" placeholder="Searching">
							<button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
            </div>
		</div>
		<div class="row mt-4 accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
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
</section>


</body>

<?php $this->load->view('customer/footer'); ?>