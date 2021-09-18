<?php $this->load->view('scripts'); ?>
<body>
<?php $this->load->view('header'); ?>
<div class="modal fade subscribe_popup" id="userrequest-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row no-gutters">
                    <div class="col-sm-12">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s1">
                                    <h4>Proceed to  CheckOut</h4>
                                </div>
                                <p>Please Login or Register to proceed Further</p>
                                <a href="<?php echo site_url('login')?>"><button class="btn btn-fill-line text-uppercase col-md-3 rounded-0" title="Login" type="button">Login</button></a>
                                <a href="<?php echo site_url('users/register')?>"><button class="btn btn-fill-line col-md-3 text-uppercase rounded-0" title="Register" type="button">Register</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
<div class="modal fade subscribe_popup" id="sellerpromotion-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row no-gutters">
                    <div class="col-sm-12">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s1">
                                    <h4>Become a Direct Seller</h4>
                                </div>
                                <p>You are Eligible to become a direct seller. Please enter a referal code to proceed Further</p>  
                                <p id="referalError" style="color:red"></p>
                                <div class="form-group">
                                    <input name="referalId" class="form-control col-md-8 rounded-0" style="display:inline" placeholder="Enter Referal Code">
                                    <button class="btn btn-fill-line text-uppercase col-md-3 rounded-0" id="validateReferalCode" type="button">Proceed</button>    
                                </div>
                                <button class="btn btn-fill-line col-md-6 text-uppercase rounded-0" id="adminReferalValidate" title="Login" type="button">Proceed Without Referal</button>
                                <br /><a href="<?php echo site_url('cart/checkout')?>">Not Interested</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</div>
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('products');?>">Shop</a></li>
                    <li class="breadcrumb-item active">Cart</li>
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

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        <?php if($cartProducts != NULL){?>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cartProducts as $product) { ?>
                        	<tr>
                            	<td class="product-thumbnail"><a href="#"><img src="<?php echo $product['prodimg']?>" alt="product1" style="max-width:50px;"></a></td>
                                <td class="product-name" data-title="Product"><a href="#"><?php  echo $product['name']?></a></td>
                                <td class="product-price" data-title="Price">&#x20B9;<?php echo $product['price']?></td>
                                <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                <!-- <input type="button" value="-" class="minus"> -->
                                <input type="text" name="quantity" value="<?php echo $product['quantity']?>" title="Qty" class="qty" size="4" disabled>
                                <!-- <input type="button" value="+" class="plus"> -->
                              </div></td>
                              	<td class="product-subtotal" data-title="Total">&#x20B9;<?php echo $product['quantity'] * $product['price']?></td>
                                <td class="product-remove remove-cart-item" data-title="Remove"><a href="javascript:void(0)" data-productid="<?php echo $product['id']?>"><i class="ti-close"></i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                        	<tr>
                            	<td colspan="6" class="px-0">
                                	<div class="row no-gutters align-items-center">

                                    	<div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                    	</div>
                                        <div class="col-lg-8 col-md-6 text-left text-md-right">
                                            <!--<button class="btn btn-line-fill btn-sm" type="submit">Update Cart</button>-->
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            	<div class="medium_divider"></div>
            	<div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
            	<div class="medium_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6"></div>
            <div class="col-md-6">
            	<div class="border p-3 p-md-4">
                    <div class="heading_s1 mb-3">
                        <h6>Cart Totals</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="cart_total_label">Cart Subtotal</td>
                                    <td class="cart_total_amount">&#x20B9;<?php echo $total;?></td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Shipping</td>
                                    <td class="cart_total_amount">&#x20B9;<?php echo $shippingCost; ?></td>
                                </tr>
                                <tr>
                                    <td class="cart_total_label">Total</td>
                                    <td class="cart_total_amount"><strong>&#x20B9;<?php echo $total+$shippingCost;?></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="javascript:void(0)" id="proceed_checkout" class="btn btn-fill-out">Proceed To CheckOut</a>
                </div>
            </div>
        </div>
        <?php }
        else{?>
        <div class="row">
            <div class="col-12 text-center">
                <h3>Your Cart is Empty</h3><br/>
                <a href="<?php echo site_url('products');?>"><button class="btn btn-fill-line text-uppercase rounded-0" title="Subscribe" type="button">Shop  Now</button></a>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<!-- END SECTION SHOP -->
</div>
<!-- END MAIN CONTENT -->
<?php $this->load->view('footer'); ?>
</body>
</html>