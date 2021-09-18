<body>
<?php $this->load->view('customer/scripts'); ?>
<?php $this->load->view('customer/header'); ?>

		<!-- ======= Hero Section ======= -->
  <section id="home" class="d-flex align-items-center">

    <div class="container">
      <div class="row" class="d-flex align-items-center">
        <div class="justify-content-center col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column " data-aos="fade-up" data-aos-delay="400">
          <h1 data-aos="fade-up" class="text-center mb-mb-md-0">Welcome to our <br>Digital Store</h1>
		  <br>
          <h6 data-aos="fade-up" data-aos-delay="400" class="text-center mb-mb-md-0">Vamsi Automobiles, Vijayawada</h6>
		  <h6 data-aos="fade-up" data-aos-delay="400" class="text-center mb-mb-md-0">Authorised Dealer, TVS Motor Company</h6>
		  <br>
        <div class="d-flex justify-content-center">
			<a href="<?php echo base_url('customer#about');?>" class="book-btn">Get Started  <i class="fas fa-arrow-right ml-2"></i>  </a> 
			<!-- <a href="Home.html#about" class="book-btn">Get Started  <i class="fas fa-arrow-right ml-2"></i>  </a>  -->

		 </div>
		
		 
        </div>
		
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-up" data-aos-delay="600" >
		
          <img src="<?php echo base_url();?>assets\images\customer\hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title text-center">
					<h1 class="title">
					About Us
					</h1>
				</div>
			</div>
		</div>
		<div class="row align-items-center mt-4">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<img src="<?php echo base_url();?>assets\images\customer\support.png" class="w-100">
			</div> 
			
			<!--<div class="col-lg-4" style="color:purple">
				<p><h4><i class="far fa-smile" ></i>  Happy Customers : 23 </h4></p>
				<p><h4><i class="fas fa-award" ></i>  Awards : 04 </h4></p>
				<p><h4><i class="fas fa-stopwatch" ></i>  Years in Service : 4 </h4></p>
				<p><h4><i class="fas fa-calendar-check" ></i>  Service : 1050 </h4></p>
				
			</div>-->
			<div class="col-lg-6">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			</div>
		</div>
		
		<br>
		<div class="row">
			<div class="col" class="title text-center">
				
					
					<i class="fas fa-store-alt"></i>
				<span class="ml-1">|  Business Hours : 2 Jan Sat, 10:00 PM - <span class="danger">Closed</span></span>
				<p></p>
				<i class="fas fa-walking"></i>
				<span class="ml-1">|  Pick Up & Drop Facility - <span class="danger">Not Available</span></span>
				<p></p>
				<i class="fas fa-people-carry"></i>
				<span class="ml-1">|  Home Delivery Facility - <span class="">Available</span></span>
				<p></p>
				
			</div>
		</div>
		
</section>





<section id="products">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title text-center">
					<h1 class="title">
					Products & Services
					</h1>
					<p>Explore the different types of office space availableto rentand discover which is right for your business.</p>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-2 col-6 mb-3 mb-lg-0">
				<a href="<?php echo site_url('customer/twowheelers')?>">
					<!-- <a href="TwoWheelers.html"> -->
						<div class="category">
							<div class="cat-box">
								<h1><i class="fas fa-motorcycle" style="color: #ffbb2c;"></i></h1>
							    <h6>Two Wheelers</h6>
							</div>
						</div>
					</a>
			</div>
			<div class="col-lg-2 col-6 mb-3 mb-lg-0">
				<a href="<?php echo site_url('customer/vehicleservice')?>">
				<!-- <a href="VehicleService.html"> -->
					<div class="category">
					<div class="cat-box">
					<h1><i class="fas fa-tools" style="color: #ffbb2c;"></i></h1>
					<h6>Vehicle Service</h6>
					</div>
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-6 mb-3 mb-lg-0">
				<a href="<?php echo site_url('customer/twowaccessories')?>">
				<!-- <a href="2WAccessories.html"> -->
					<div class="category">
						<div class="cat-box">
							<h1><i class="fas fa-toolbox" style="color: #ffbb2c;"></i></h1>
							    <h6>2W Accessories</h6>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-6 mb-3 mb-lg-0">
				<a href="<?php echo site_url('customer/twowwspareparts')?>">
				<!-- <a href="2WSpareParts.html"> -->
					<div class="category">
						<div class="cat-box">
							<h1><i class="fas fa-cogs" style="color: #ffbb2c;"></i></h1>
							    <h6>2W Spare Parts</h6>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-6 mb-3 mb-lg-0">
				<a href="<?php echo site_url('customer/preownedvehicles')?>">
				<!-- <a href="PreOwnedVehicles.html"> -->
					<div class="category">
						<div class="cat-box">
							<h1><i class="fas fa-user-check" style="color: #ffbb2c;"></i></h1>
							<h6>Pre-Owned Vehicles</h6>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-2 col-6 mb-3 mb-lg-0">
				<a href="<?php echo site_url('customer/twowinsurance')?>">
				<!-- <a href="2WInsurance.html"> -->
					<div class="category">
						<div class="cat-box">
							<h1><i class="fas fa-shield-alt" style="color: #ffbb2c;"></i></h1>
							<h6>2W Insurance</h6>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>



<!-- .testimonial-section -->
<section id="testimonial" class="testimonial-section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="title text-center">
					<h1 class="title">
					Testimonials
					</h1>
				</div>
            </div>
            <div class="col-md-10 mt-4 offset-md-1">
                <div class="success-slide">
                	<div class="owl-carousel owl-theme">
	                	<!-- Item -->
	                    <div class="item"> 
	                        <div class="testi-content text-center">
	                            <span class="quote-top"><i class="fas fa-quote-left"></i></span>
	                            <div class="desc">
	                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>
	                                <img src="<?php echo base_url();?>assets\images\customer\user.png" alt="client-img" class="img-fluid" />
	                                <h5>Harshad Mehta</h5>
	                                <p>Developer</p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Item -->
	                    <div class="item"> 
	                        <div class="testi-content text-center">
	                            <span class="quote-top"><i class="fas fa-quote-left"></i></span>
	                            <div class="desc">
	                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>
	                                <img src="<?php echo base_url();?>assets\images\customer\user.png" alt="client-img" class="img-fluid" />
	                                <h5>Harshad Mehta</h5>
	                                <p>Developer</p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Item -->
	                    <div class="item"> 
	                        <div class="testi-content text-center">
	                            <span class="quote-top"><i class="fas fa-quote-left"></i></span>
	                            <div class="desc">
	                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>
	                                <img src="<?php echo base_url();?>assets\images\customer\user.png" alt="client-img" class="img-fluid" />
	                                <h5>Harshad Mehta</h5>
	                                <p>Developer</p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Item -->
	                    <div class="item"> 
	                        <div class="testi-content text-center">
	                            <span class="quote-top"><i class="fas fa-quote-left"></i></span>
	                            <div class="desc">
	                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>
	                                <img src="<?php echo base_url();?>assets\images\customer\user.png" alt="client-img" class="img-fluid" />
	                                <h5>Harshad Mehta</h5>
	                                <p>Developer</p>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Item -->
	                    <div class="item"> 
	                        <div class="testi-content text-center">
	                            <span class="quote-top"><i class="fas fa-quote-left"></i></span>
	                            <div class="desc">
	                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p>
	                                <img src="<?php echo base_url();?>assets\images\customer\user.png" alt="client-img" class="img-fluid" />
	                                <h5>Harshad Mehta</h5>
	                                <p>Developer</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
        </div>
    </div>                
</section>
<!-- ./testimonial-section -->

<section id="contact">
	<div class="container">
	<div class="row">
			<div class="col-lg-12">
				<div class="title text-center">
					<h1 class="title">
					Contact Us
					</h1>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5 mb-5 mb-lg-0">
				<div class="feed-box p-4">
					<div class="business-box">
						<div class="business-body text-center">
							<div class="person mb-3">
								<h5 class="font-weight-bold">Mr.Test</h5>
								<p class="position m-0">Director</p>
								<p class="company m-0">Test Technology</p>
							</div>
							<div class="contact mb-3">
								<p>90000 00000</p>
							</div>
							<div class="mail mb-3">
								<p>abc@gmail.com</p>
							</div>
							<div class="address mb-3">
								<p>1- 151, Street-7, Colony Vijaywada, Krishna Dt.AP</p>
							</div>
							<div class="web mb-3">
								<p>www.website.com</p>
							</div>
						</div>
						<div class="qr-code">
							<img src="<?php echo base_url();?>assets\images\customer\qr.png">
						</div>
					</div>
					
					
					<div class="d-flex mt-4">
						<a href="#" class="business-btn mr-3">Download</a>
						<a href="#" class="business-btn">Share</a>
					</div>
				</div>
			</div>
			<div id="feedback" class="col-md-6">
				<div class="feed-box row m-0 align-items-center">
					<form class="feed-form" name="contactform" id="contactform" method="post" action="<?php echo site_url('customer/contact')?>">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								    <label class="mb-3 font-weight-bold">Rate Your Experience</label>
									<div class="star-rating">
									  <!--  Star5 -->
									  <input type="radio" id="5-stars" name="rating" value="5" />
									  <label for="5-stars" class="star">&#9733;</label>
									  <!-- Star4 -->
									  <input type="radio" id="4-stars" name="rating" value="4" />
									  <label for="4-stars" class="star">&#9733;</label>
									   <!-- Star3 -->
									  <input type="radio" id="3-stars" name="rating" value="3" />
									  <label for="3-stars" class="star">&#9733;</label>
									  <!-- Star2 -->
									  <input type="radio" id="2-stars" name="rating" value="2" />
									  <label for="2-stars" class="star">&#9733;</label>
									  <!-- Star1 -->
									  <input type="radio" id="1-star" name="rating" value="1" />
									  <label for="1-star" class="star ml-0">&#9733;</label>
									</div>
								</div>
							</div>
							<div class="col-md-12 mt-2">
								<div class="form-group">
								    <label class="mb-2 font-weight-bold">Name</label>
								    <input type="text" class="form-control" placeholder="Name" name="name">
								 </div>
							</div>
							<div class="col-md-12 mt-2">
								<div class="form-group">
								    <label class="mb-2 font-weight-bold">Number</label>
								    <input type="text" class="form-control" placeholder="Number" name="contact">
								 </div>
							</div>
							<div class="col-md-12 mt-2">
								<div class="form-group">
								    <label class="mb-2 font-weight-bold">Feedback / Suggestion / Complaints</label>
								    <input type="text" class="form-control" placeholder="Subject" name="subject">
								 </div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								    <label class="mb-2 font-weight-bold">Message</label>
								  <textarea class="form-control" rows="4" placeholder="Message" name="message"></textarea>
								</div>
							</div>
							<div class="col-md-12 d-flex justify-content-end">
								<button type="submit" name="submit" class="btn-feed">Send Message <i class="fas fa-angle-double-right ml-2"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">

$("#contactform").submit(function(){
  alert("hello");
  var message = $('#message').val();
  var name = $('#name').val();
  var contact = $('#number').val();
  var subject = $('#subject').val();
  var rating = $('#rating').val();
    $.ajax({
        url: 'customer/contact',
        type: 'POST',
        data: {
            name: name,
            message:message,
            contact:contact,
            subject:subject,
			rating:rating,
            action:'submit'
        },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            alert("dndjfnjdfn");
        }
    });
});
</script>
<!-- END MAIN CONTENT -->
<?php $this->load->view('customer/footer'); ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60add8eba4114e480ad0ed95/1f6jhempr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>