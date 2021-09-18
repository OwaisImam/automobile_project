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
        <h2 style="margin-top:0px">Tbl_2wheelers List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tbl_2wheelers/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <form action="<?php echo site_url('tbl_2wheelers/search'); ?>" class="form-inline" method="post">
                    <input name="keyword" class="form-control" value="<?php echo $keyword; ?>" />
                    <?php 
                    if ($keyword <> '')
                    {
                        ?>
                        <a href="<?php echo site_url('tbl_2wheelers'); ?>" class="btn btn-default">Reset</a>
                        <?php
                    }
                    ?>
                    <input type="submit" value="Search" class="btn btn-primary" />
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>type</th>
		<th>name</th>
		<th>images</th>
		<th>logo</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th>Action</th>
            </tr><?php
            foreach ($tbl_2wheelers_data as $tbl_2wheelers)
            {
                ?>
                <tr>
			<td><?php echo ++$start ?></td>
			<td><?php echo $tbl_2wheelers->product_type ?></td>
			<td><?php echo $tbl_2wheelers->product_name ?></td>
			<td><?php echo $tbl_2wheelers->product_images ?></td>
			<td><?php echo $tbl_2wheelers->product_logo ?></td>
			<td><?php echo $tbl_2wheelers->capacity ?></td>
			<td><?php echo $tbl_2wheelers->weight ?></td>
			<td><?php echo $tbl_2wheelers->power ?></td>
			<td><?php echo $tbl_2wheelers->features ?></td>
			<td><?php echo $tbl_2wheelers->description ?></td>
			<td><?php echo $tbl_2wheelers->brochure ?></td>
			<td><?php echo $tbl_2wheelers->price ?></td>
			<td style="text-align:center">
				<?php 
				echo anchor(site_url('tbl_2wheelers/read/'.$tbl_2wheelers->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tbl_2wheelers/update/'.$tbl_2wheelers->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tbl_2wheelers/delete/'.$tbl_2wheelers->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>