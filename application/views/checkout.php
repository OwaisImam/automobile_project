<?php $this->load->view('scripts'); ?>
<body>
<?php $this->load->view('header'); ?>
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Login</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">
<!-- START SECTION SHOP -->
<form method="post" name="checkoutForm" id="checkoutForm" action="<?php echo base_url().'cart/processcheckout'?>">
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if($this->session->user_name == NULL){?>
            	<div class="toggle_info">
                	<span><i class="fas fa-user"></i>Returning customer? <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                </div>
                <div class="panel-collapse collapse login_form" id="loginform">
                    <div class="panel-body">
                    	<p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                    	
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Username Or Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="userpassword" placeholder="Password">
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                        <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                    </div>
                                </div>
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in</button>
                            </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="col-lg-6">
            	<div class="toggle_info">
            		<span><i class="fas fa-tag"></i>Have a coupon? <a href="#coupon" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                </div>
                <div class="panel-collapse collapse coupon_form" id="coupon">
                    <div class="panel-body">
                    	<p>If you have a coupon code, please apply it below.</p>
                        <div class="coupon field_form input-group">
                            <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                            <div class="input-group-append">
                                <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="linearicons-credit-card"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
            	<div class="heading_s1">
            		<h4>Billing Details</h4>
                </div>

                    <div class="form-group">
                        <input type="text" required=""  class="form-control" name="fname" value="<?php echo $userData->user_name;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" required="" class="form-control" name="billing_address"  value="<?php echo $userData->addessline1;?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="billing_address2" value="<?php echo $userData->addessline2;?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required=""  type="text" name="city" value="<?php echo $userData->city;?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required=""  type="text" name="state" value="<?php echo $userData->state;?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required=""  type="text" name="zipcode" value="<?php echo $userData->pincode;?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required=""  type="text" name="phone" value="<?php echo $userData->user_mobile;?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required=""  type="text" name="email" value="<?php echo $userData->user_email;?>">
                    </div> 
                    <div class="ship_detail">
                    	<div class="form-group">
                    	<div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                <label class="form-check-label label_info" for="differentaddress"><span>Ship to a different address?</span></label>
                            </div>
                        </div>
                    </div>
                    	<div class="different_address">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="fname1" placeholder="First name *">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="lname1" placeholder="Last name *">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="billing_address1" placeholder="Address *">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="billing_address21" placeholder="Address line2">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="city1" placeholder="City / Town *">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="state1" placeholder="State / County *">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="zipcode1" placeholder="Postcode / ZIP *">
                        </div> 
                         <!-- <div class="form-group">
                        <input class="form-control" required=""  type="text" name="phone1" placeholder="Mobile No *">
                    </div>
                    <div class="form-group">
                        <input class="form-control" required=""  type="text" name="email1" placeholder="Email *"> -->
                    </div> 
                    </div>
                    </div>
                    <div class="heading_s1">
                        <h4>Additional information</h4>
                    </div>
                    <div class="form-group mb-0">
                        <textarea rows="5" class="form-control" placeholder="Order notes"></textarea>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="order_review">
                    <div class="heading_s1">
                        <h4>Your Orders</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cartProducts as $product) { ?>
                                <tr>
                                    <td><?php echo $product['name']?><span class="product-qty"> x <?php echo $product['quantity']?></span></td>
                                    <td>&#x20B9;<?php echo $product['quantity']*$product['price']?><td>
                                </tr>
                            <?php }  ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SubTotal</th>
                                    <td class="product-subtotal">&#x20B9;<?php echo $total;?></td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>&#x20B9;<?php echo $shippingCost?></td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td class="product-subtotal">&#x20B9;<?php echo $total+$shippingCost;?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- <div class="payment_method">
                        <div class="heading_s1">
                            <h4>Payment</h4>
                        </div>
                        <div class="payment_option">
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="">
                                <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                <p data-method="option3" class="payment-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                <p data-method="option4" class="payment-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                            </div>
                        </div>
                    </div> -->
                    <?php if($this->session->user_id != false){
                        $loginCheck='true';
                        }else{
                            $loginCheck='false';
                        }?>
                    <input type="hidden"  name="loginCheck" value="<?php echo $loginCheck; ?>">
                    <button type="submit" class="btn btn-fill-out btn-block">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- END SECTION SHOP -->
</div>
<!-- END MAIN CONTENT -->
<?php $this->load->view('footer'); ?>
</body>
</html>