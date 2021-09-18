<?php $this->load->view('scripts'); ?>

<body>

<?php //$this->load->view('header'); ?>

<?php include 'headerafterlogin.php'; ?>



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



<?php include 'left_nav.php'; ?>

 <!-- .app-main -->

      <main class="app-main" style="background: #fff">

        <!-- .wrapper -->

        <div class="wrapper">

          <!-- .page -->

          <div class="page">

            <!-- .page-inner -->

            <div class="page-inner">

              <!-- .page-title-bar -->

              <header class="page-title-bar">

                <div class="d-flex flex-column flex-md-row" >

                  

                  <p class="metric metric-bordered align-items-center" style="background: #E6E6FA">

                    <?php if(isset($this->session->user_id)){ ?>

                    <span class="font-weight-bold">Main Id : <?php echo $userData->referal_id; ?></span>

                      <?php if($userData->dealerStatus) { ?>

                      <span class="d-block text-muted" style="#000">Activated</span>

                      <?php } else { ?>

                        <span class="d-block text-muted" style="#000">Member Not Activated</span>

                      <?php } ?>    

                  <?php } ?>

                  </p>

                  

                </div>

              </header><!-- /.page-title-bar -->

              <!-- .page-section -->

              <div class="page-section">

                <!-- .section-block -->

                <div class="section-block">

                  

                  <div class="metric metric-bordered align-items-center" style="background: #fff">

                    <div>

                      <span style="width: 300px;float:left;background: #0179a8;color: #fff">

                          <!-- .metric -->

                          <a href="<?php echo base_url();?>products" class="metric metric-bordered align-items-center">

                            

                            <h2 class="metric-label" style="color: #fff"> Buy Product </h2>

                           

                          </a> <!-- /.metric -->

                        </span><!-- /metric column -->

                        <span style="width: 300px;float:right;margin-left: 15px;background: #0179a8;">

                          <!-- .metric -->

                          <a href="<?php echo base_url();?>users/becameadealer" class="metric metric-bordered align-items-center">

                            <h2 class="metric-label" style="color: #fff"> Become a Dealer </h2>

                          </a> <!-- /.metric -->

                        </span><!-- /metric column -->

                      </div>

                  </div>



                  <div class="metric metric-bordered " style="margin-top: 10px;background: #E6E6FA">

                  <p style="margin-left: 15px">
                    Your Referal Link<br />
                    <?php echo base_url();?>users/register?reference_id=<?php echo $userData->referal_id; ?>
                    <a href="whatsapp://send?text=<?php echo base_url();?>users/register?reference_id=<?php echo $userData->referal_id; ?>" data-action="share/whatsapp/share" target="_blank">
                    <img src="<?php echo base_url();?>assets\whatsapp_share.png" alt="logo">
                    </a>

                  </p>

                  </div>

                  <div class="metric metric-bordered align-items-center" style="margin-top: 10px;background: #E6E6FA">

                    <p>

                    For Bookings contact (or) whatsapp : +91 7675873076<br>

                    DRV Mart Customer Care No : +91 7675873076

                    </p>

                  </div>

                </div><!-- /.section-block -->

                <!-- grid row -->

                

                    <!-- .card-footer -->

                    

                  </div><!-- /.card -->

                </div><!-- /section-deck -->

              </div><!-- /.page-section -->

            </div><!-- /.page-inner -->

          </div><!-- /.page -->

        </div><!-- .app-footer -->

<!-- END MAIN CONTENT -->

<?php //$this->load->view('footer'); ?>

<?php include 'footernew.php'; ?>



</body>

</html>