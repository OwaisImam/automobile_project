<?php $this->load->view('scripts'); ?>
<body>
<?php $this->load->view('header'); ?>
<!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="breadcrumb-item active">My Account</li>
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
<div class="section">
	<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="dashboard_menu">
                    <ul class="nav nav-tabs flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin/dashboard')?>"><i class="ti-user"></i>Users</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0)"><i class="ti-shopping-cart-full"></i>My Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>My Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin/logout')?>"><i class="ti-lock"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content dashboard_content">
                  	<div class="tab-pane fade  active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                      <table id="orders-table" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                            <th>OrderId</th>
                            
                            <th>Ordered By</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Ordered ON</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($orders  as $orderDetails){?>
                            <tr>
                                <td><?php echo $orderDetails->orderId?></td>
                                
                                <td><?php echo $orderDetails->user_name?>(<?php echo $orderDetails->user_mobile?>)</td>
                                <td><?php echo $orderDetails->orderAmount?></td>
                                <td><?php echo $orderDetails->orderStatus?></td>
                                <td><?php echo date('d/m/Y',strtotime($orderDetails->orderDate))?></td>
                            </tr>
                        <?php }?>
                        </tbody>
                      </table>
                  	</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END MAIN CONTENT -->
<?php $this->load->view('footer'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#orders-table').DataTable();
    });
</script>
<style>
    #orders-table_wrapper .row{width:100%;}
</style>
</body>
</html>