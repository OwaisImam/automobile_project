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
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#team" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-user"></i>My Team</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="ti-shopping-cart-full"></i>My Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>My Address</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>My Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('users/logout')?>"><i class="ti-lock"></i>Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content dashboard_content">
                  	<div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    	<div class="row">
                            <div class="col-md-6">
                                <h3>Dashboard</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <h3>Referal Code: <?php echo $yourData->referalCode;?></h3>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                        <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Level</th>
                                                <th>Achieved On</th>
                                                <th>mAgent commission</th>
                                                <th>withdrawl Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                                <td>1</td>
                                                <td>Level 1</td>
                                                <td><?php echo $achlevel1;?></td>
                                                <td><?php echo $agentCom1;?></td>
                                                <td></td>
                                           </tr>
                                           <tr>
                                                <td>2</td>
                                                <td>Level 2</td>
                                                <td><?php echo $achlevel2;?></td>
                                                <td><?php echo $agentCom2;?></td>
                                                <td></td>
                                           </tr>
                                           <tr>
                                                <td>3</td>
                                                <td>Level 3</td>
                                                <td><?php echo $achlevel3;?></td>
                                                <td><?php echo $agentCom3;?></td>
                                                <td></td>
                                           </tr>
                                           <tr>
                                                <td>4</td>
                                                <td>Leve 4</td>
                                                <td><?php echo $achlevel4;?></td>
                                                <td><?php echo $agentCom4;?></td>
                                                <td></td>
                                           </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                  	</div>
                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="dashboard-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>My Team</h3>
                            </div>
                            <div class="card-body">
                    			
                                <div class="just-padding">
                                    <div class="list-group list-group-root well">
                                        <?php foreach($teams as $teamMember){?>
                                      <a href="#item-<?php echo $teamMember->team_id?>" class="list-group-item" data-toggle="collapse">
                                        <i class="ti-arrow-circle-right"></i><?php echo $teamMember->user_name;?>
                                      </a>
                                      <div class="list-group collapse" id="item-<?php echo $teamMember->team_id?>">
                                        <?php $teamLev2 = $this->usermodel->getTeamMemByLev($teamMember->user_id);?>
                                        <?php foreach($teamLev2 as $teammemlev2){?>
                                        <a href="#item-<?php echo $teammemlev2->team_id?>-1" class="list-group-item" data-toggle="collapse">
                                          <i class="ti-arrow-right"></i><?php echo $teammemlev2->user_name?>
                                        </a>
                                        <div class="list-group collapse" id="item-<?php echo $teammemlev2->team_id?>-1">
                                          <?php $teamLev3 = $this->usermodel->getTeamMemByLev($teammemlev2->user_id);?>
                                          <?php foreach($teamLev3 as $teamlevmem3){?>
                                            <a href="item-<?php echo $teamlevmem3->team_id?>-2" class="list-group-item" data-toggle="collapse"><i class="ti-star"></i><?php echo $teamlevmem3->user_name?></a>
                                            <div class="list-group collapse" id="item-<?php echo $teamlevmem3->team_id?>-2">
                                            <?php $teamLev4 = $this->usermodel->getTeamMemByLev($teamlevmem3->user_id);?>
                                             <?php foreach($teamLev4 as $teamlevmem4){?>
                                                <a href="#" class="list-group-item"><i class="ti-star"></i><?php echo $teamlevmem4->user_name?></a>
                                             <?php } ?>
                                            </div>
                                          <?php } ?>
                                        </div>
                                        <?php } ?>
                                      </div>
                                        <?php }?>
                                    </div>
                                    </div>
                            </div>
                        </div>
                  	</div>
                  	<div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    	<div class="card">
                        	<div class="card-header">
                                <h3>Orders</h3>
                            </div>
                            <div class="card-body">
                    			<div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1234</td>
                                                <td>March 15, 2020</td>
                                                <td>Processing</td>
                                                <td>$78.00 for 1 item</td>
                                                <td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#2366</td>
                                                <td>June 20, 2020</td>
                                                <td>Completed</td>
                                                <td>$81.00 for 1 item</td>
                                                <td><a href="#" class="btn btn-fill-out btn-sm">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                  	</div>
					<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                    	<div class="row">
                        	<div class="col-lg-6">
                                <div class="card mb-3 mb-lg-0">
                                    <div class="card-header">
                                        <h3>Billing Address</h3>
                                    </div>
                                    <div class="card-body">
                                        <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href="#" class="btn btn-fill-out">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Shipping Address</h3>
                                    </div>
                                    <div class="card-body">
                                        <address>House #15<br>Road #1<br>Block #C <br>Angali <br> Vedora <br>1212</address>
                                        <p>New York</p>
                                        <a href="#" class="btn btn-fill-out">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
						<div class="card">
                        	<div class="card-header">
                                <h3>Account Details</h3>
                            </div>
                            <div class="card-body">
                    			<p>Already have an account? <a href="#">Log in instead!</a></p>
                                <form method="post" name="enq">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                        	<label>First Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="name" type="text">
                                         </div>
                                         <div class="form-group col-md-6">
                                        	<label>Last Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="phone">
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>Display Name <span class="required">*</span></label>
                                            <input required="" class="form-control" name="dname" type="text">
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>Email Address <span class="required">*</span></label>
                                            <input required="" class="form-control" name="email" type="email">
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>Current Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="password" type="password">
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>New Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="npassword" type="password">
                                        </div>
                                        <div class="form-group col-md-12">
                                        	<label>Confirm Password <span class="required">*</span></label>
                                            <input required="" class="form-control" name="cpassword" type="password">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END MAIN CONTENT -->
<?php $this->load->view('footer'); ?>
</body>
</html>