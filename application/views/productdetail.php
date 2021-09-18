<?php $this->load->view('scripts'); ?>
<body>
<?php $this->load->view('header'); ?>
<?php 
    $images = explode(',',$prodDesc->productImage);
?>
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('products')?>">Shop</a></li>
                    <li class="breadcrumb-item active"><?php echo $prodDesc->productName; ?></li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="page-title">
            		<h1>Checkout</h1>
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
		<div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
              <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img" src='<?php echo base_url()?><?php echo $images[0]; ?>' data-zoom-image="<?php echo base_url()?><?php echo $images[0]; ?>" alt="product_img1">
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                        <?php for($i=0; $i<sizeof($images); $i++){ ?>
                        <div class="item">
                            <a href="#" class="product_gallery_item <?php if($i == 0){ echo "active";}?>" data-image="<?php echo base_url()?><?php echo $images[$i]?>" data-zoom-image="<?php echo base_url()?><?php echo $images[$i]?>">
                                <img src="<?php echo base_url()?><?php echo $images[$i]?>" alt="product_small_img1">
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="pr_detail">
                    <div class="product_description">
                        <h4 class="product_title"><a href="javascript:void(0)" data-productname="<?php echo $prodDesc->productName; ?>"><?php echo $prodDesc->productName; ?></a></h4>
                        <div class="product_price">
                            <span class="price" data-productprice=<?php echo $prodDesc->productSellPrice; ?>>&#8377;<?php echo $prodDesc->productSellPrice?></span>
                            <del>&#8377;<?php echo $prodDesc->productPrice?></del>
                            <div class="on_sale">
                                <span><?php echo round(($prodDesc->productPrice - $prodDesc->productSellPrice) / $prodDesc->productPrice * 100) ?>% Off</span>
                            </div>
                        </div>
                        <div class="pr_desc">
                            <p><?php echo $prodDesc->productShortDesc; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="quantity" value="1" title="Qty" id="prod_qan" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <button class="btn btn-fill-out btn-addtocart" type="button" data-productid="<?php echo $this->uri->segment(3);?>" data-productname="<?php echo $prodDesc->productName; ?>" data-productprice="<?php echo $prodDesc->productSellPrice; ?>" data-prodimg="<?php echo $prodDesc->productThumb;?>"  onclick="javascript:void(0);"><i class="icon-basket-loaded"></i> Add to cart</button>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="large_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="tab-style3">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                      	</li>
                      	
                    </ul>
                	<div class="tab-content shop_info_tab">
                      	<div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                            <?php  echo $prodDesc->productDesc?>
                      	</div>
                	</div>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="small_divider"></div>
            	<div class="divider"></div>
                <div class="medium_divider"></div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</div>
<!-- END MAIN CONTENT -->
<?php $this->load->view('footer'); ?>
</body>
</html>