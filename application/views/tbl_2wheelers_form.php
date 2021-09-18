<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body><h2 style="margin-top:0px">Tbl_2wheelers <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
                <label for="varchar">type <?php echo form_error('product_type') ?></label>
                <input type="text" class="form-control" name="product_type" id="product_type" placeholder="type" value="<?php echo $product_type; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">name <?php echo form_error('product_name') ?></label>
                <input type="text" class="form-control" name="product_name" id="product_name" placeholder="name" value="<?php echo $product_name; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">images <?php echo form_error('product_images') ?></label>
                <input type="file" class="form-control" name="product_images[]" id="product_images" placeholder="images" multiple="multiple" value="<?php echo $product_images; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar">logo <?php echo form_error('product_logo') ?></label>
                <input type="file" class="form-control" name="product_logo" id="product_logo" placeholder="logo" value="<?php echo $product_logo; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('capacity') ?></label>
                <input type="text" class="form-control" name="capacity" id="capacity" placeholder="" value="<?php echo $capacity; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('weight') ?></label>
                <input type="text" class="form-control" name="weight" id="weight" placeholder="" value="<?php echo $weight; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('power') ?></label>
                <input type="text" class="form-control" name="power" id="power" placeholder="" value="<?php echo $power; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('features') ?></label>
                <input type="text" class="form-control" name="features" id="features" placeholder="" value="<?php echo $features; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('description') ?></label>
                <input type="text" class="form-control" name="description" id="description" placeholder="" value="<?php echo $description; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('brochure') ?></label>
                <input type="file" class="form-control" name="brochure" id="brochure" placeholder="" value="<?php echo $brochure; ?>" />
            </div>
	    <div class="form-group">
                <label for="varchar"> <?php echo form_error('price') ?></label>
                <input type="text" class="form-control" name="price" id="price" placeholder="" value="<?php echo $price; ?>" />
            </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_2wheelers') ?>" class="btn btn-default">Cancel</a>
	</form>