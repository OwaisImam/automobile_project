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
    <body>
        <h2 style="margin-top:0px">Tbl_2wheelers Read</h2>
        <table class="table">
	    <tr><td>product_type</td><td><?php echo $product_type; ?></td></tr>
	    <tr><td>product_name</td><td><?php echo $product_name; ?></td></tr>
	    <tr><td>product_images</td><td><?php echo $product_images; ?></td></tr>
	    <tr><td>product_logo</td><td><?php echo $product_logo; ?></td></tr>
	    <tr><td>capacity</td><td><?php echo $capacity; ?></td></tr>
	    <tr><td>weight</td><td><?php echo $weight; ?></td></tr>
	    <tr><td>power</td><td><?php echo $power; ?></td></tr>
	    <tr><td>features</td><td><?php echo $features; ?></td></tr>
	    <tr><td>description</td><td><?php echo $description; ?></td></tr>
	    <tr><td>brochure</td><td><?php echo $brochure; ?></td></tr>
	    <tr><td>price</td><td><?php echo $price; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_2wheelers') ?>" class="btn btn-default">Cancel</button></td></tr>
	</table>
    </body>
</html>