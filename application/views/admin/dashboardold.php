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
                        <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false"><i class="ti-layout-grid2"></i>Dashboard</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#team" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-user"></i>Users</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('admin/orders')?>"><i class="ti-shopping-cart-full"></i>My Orders</a>
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
                  	<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                  	</div>
                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="dashboard-tab">
                            <table id="users-table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Joined On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users as $userdata){?>
                                    <tr>
                                        <td><?php echo $userdata->user_name;?></td>
                                        <td><?php echo $userdata->user_email;?></td>
                                        <td><?php echo $userdata->user_mobile;?></td>
                                        <td><?php echo date('d/m/Y',strtotime($userdata->createdon));?></td>
                                    </td>
                                    <?php }?>
                                </tbody>
                            </table>
                  	</div>
                  	<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                  	</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
					</div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
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
        $('#users-table').DataTable();
    });
</script>
<style>
    #users-table_wrapper .row{width:100%;}
</style>
</body>
</html>