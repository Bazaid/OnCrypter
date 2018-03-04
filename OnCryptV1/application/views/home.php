<?php $this->load->view('header'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>OnCrypt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>assest/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>assest/css/bootswatch.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->


		<!--<link href="css/demo.css" rel="stylesheet">-->

		<!-- Flat Pricing table -->
		<link href="<?php echo base_url();?>assest/css/pricing-table-global.css" rel="stylesheet">

  </head>
  <body>



      <!-- Body
      ================================================== -->


     <div class="bs-docs-section clearfix">


		<!-- Intruction
		================================================ -->
		<div class="jumbotron">
			<h1>OnCrypt</h1>
<p>This is a paid online crtyping project. it's powerful and great way to get undetected and manage your files with a nice coded panel,
this website gives you everything you need to get past the anti's. a lot of alogrithms and crypt ways with amazing rootkit's and bypasses.
you can start with the trial account right now for free.</p>
			<p><a href="<?php echo base_url();?>home/trial" class="btn btn-primary btn-lg">Start Trial</a>
			<a href="<?php echo base_url();?>home/login" class="btn btn-default btn-lg">Login in</a></p>

		</div>

		    <div class="page-header">
              <h1 id="navbar">Get started now</h1>
            </div>


		<!-- Pricing table
		================================================ -->
			<div class="row">
					<div class="row">
						<div class="col-md-3 pricing-table midnight-blue bordered">
							<ul>
								<li class="title">
									Trial
								</li>
								<li class="price">
									<span class="currency-symbol">$</span>
									<strong>Free</strong>
									<sup>0</sup>
									<em>1 Day</em>
								</li>
								<li>
									<span class="pull-right">1 Per day</span>Crypts
								</li>
								<li>
									<span class="pull-right">Poor</span>Crypts quality
								</li>
								<li>
									<span class="pull-right">Limited</span>Stubs
								</li>
								<li>
									<span class="pull-right">Not included</span>Private Crypt
								</li>
								<li>
									<span class="pull-right">Not included</span>RootKit's
								</li>
								<li>
									<span class="pull-right">Not included</span>Contact
								</li>
								<li>
									<span class="pull-right">Not included</span>Additional+
								</li>
								<a href="<?php echo base_url();?>home/trial">
								<li class="button colored">
									<button class="btn btn-large">
										<i class="icon-shopping-cart"></i>&nbsp;&nbsp;Start Trial
									</button>
								</li>
								</a>
								
							</ul>

						</div>

						<div class="col-md-3 pricing-table midnight-blue bordered">
							<ul>
								<li class="title">
									Basic
								</li>
								<li class="price">
									<span class="currency-symbol">$</span>
									<strong>20</strong>
									<sup>0</sup>
									<em>1 month</em>
								</li>
								<li>
									<span class="pull-right">5 Per day</span>Crypts
								</li>
								<li>
									<span class="pull-right">Good</span>Crypts quality
								</li>
								<li>
									<span class="pull-right">Limited</span>Stubs
								</li>
								<li>
									<span class="pull-right">Not included</span>Private Crypt
								</li>
								<li>
									<span class="pull-right">Not included</span>RootKit's
								</li>
								<li>
									<span class="pull-right">Not included</span>Contact
								</li>
								<li>
									<span class="pull-right">Not included</span>Additional+
								</li>
								<?php echo form_open('home/register/');?>
									<fieldset>
										<input type="hidden" name="AccountType" value="Basic">
								<li class="button colored">
									<button type="submit" class="btn btn-large">
										<i class="icon-shopping-cart"></i>&nbsp;&nbsp;Sign Up
									</button>
								</li>
									</fieldset>
								</form>
							</ul>

						</div>


						<div class="col-md-3 pricing-table midnight-blue bordered">
							<ul>
								<li class="title">
									Ultimate
								</li>
								<li class="price">
									<span class="currency-symbol">$</span>
									<strong>45</strong>
									<sup>0</sup>
									<em>1 month</em>
								</li>
								<li>
									<span class="pull-right">15 Per day</span>Crypts
								</li>
								<li>
									<span class="pull-right">Undetected</span>Crypts quality
								</li>
								<li>
									<span class="pull-right">Unlimted</span>Stubs
								</li>
								<li>
									<span class="pull-right">Not included</span>Private Crypt
								</li>
								<li>
									<span class="pull-right">Not included</span>RootKit's
								</li>
								<li>
									<span class="pull-right">Not included</span>Contact
								</li>
								<li>
									<span class="pull-right">included</span>Additional+
								</li>
								<?php echo form_open('home/register/');?>
									<fieldset>
										<input type="hidden" name="AccountType" value="Ultimate">
								<li class="button colored">
									<button type="submit" class="btn btn-large">
										<i class="icon-shopping-cart"></i>&nbsp;&nbsp;Sign Up
									</button>
								</li>
									</fieldset>
								</form>
							</ul>
						</div>
						<div class="col-md-3 pricing-table midnight-blue bordered">
							<ul class="alt-dark">
								<li class="title">
									Additional features
								</li>
								<li class="price">
									<span class="currency-symbol">$</span>
									<strong>?</strong>
									<sup>0</sup>
									<em>2 months</em></br>
									<em>+ Account extend</em></br>
									<em>For ultimate accounts only</em>
								</li>
								<li>
									<span class="pull-right">Unlimted</span>Crypts
								</li>
								<li>
									<span class="pull-right">included</span>Private Crypt
								</li>
								<li>
									<span class="pull-right">included</span>RootKit's
								</li>
								<li>
									<span class="pull-right">included</span>Additional+
								</li>
	
								<li>
									<span class="pull-right">included</span>Contact
								</li>

										<!--<input type="hidden" name="AccountType" value="Hacker">-->
								<li class="button colored">
									<button type="submit" class="btn btn-large">
										<i class="icon-shopping-cart"></i>&nbsp;&nbsp;SOON
									</button>
								</li>

							</ul>
						</div>
					</div>

			</div>


     </div>



<?php $this->load->view('footer'); ?>
