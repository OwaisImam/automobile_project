<?php $this->load->view('scripts'); ?>
<body>
<?php $this->load->view('header'); ?>
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
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
    <?php if($this->session->flashdata("addedCartInfo")){?>
    <div class="alert alert-success alert-dismissible" role="alert" id="buttonAlert">
      <strong>Success!</strong> Added to cart. <a href="<?php echo site_url('cart')?>" class="float-right">Go To Cart</a>
      <div class="clearfix"></div>
    </div>
    <?php  }?>
    	<div class="row">
			<div class="col-12">
                <div class="row shop_container grid">
                    <?php foreach($productsData as $product){?>
                    <div class="col-lg-3 col-md-4 col-6">
                        <a href="<?php echo base_url()?>products/details/<?php echo $product->productId;?>">
                            <div class="product">
                                <div class="product_img">
                                    <img src="<?php echo base_url().$product->productThumb?>" alt="product_img1">
                                </div>
                                <div class="product_info">
                                    <h6 class="product_title"><?php echo $product->productName;?></h6>
                                    <?php if($product->productPrice != $product->productSellPrice){ ?>
                                    <div class="product_price">
                                        <span class="price">&#8377;<?php echo $product->productSellPrice;?></span>
                                        <del>&#8377;<?php echo $product->productPrice;?></del>
                                        <div class="on_sale">
                                            <span><?php echo round(($product->productPrice - $product->productSellPrice) / $product->productPrice * 100) ?>% Off</span>
                                        </div>
                                    </div>
                                    <?php }else
                                    {?>
                                    <div class="product_price">
                                        <span class="price">&#8377;<?php echo $product->productSellPrice;?></span>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
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