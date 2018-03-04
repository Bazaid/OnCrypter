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



    <div class="container">




      <!-- Body
      ================================================== -->


     <div class="bs-docs-section clearfix">
<!-- navbar -->
    <div class="panel panel-primary">

      <div class="panel-heading">
<span class="label label-default">Account type :<?php echo $user_info['accountType']; ?></span>
<span class="label label-default">Crypts left : <?php echo $user_info['used']; ?>/<?php echo $user_info['total']; ?></span>
<span class="label label-default">Account expires : <?php echo $user_info['expires']; ?> hours</span>

      </div>




       <div class="navbar navbar-default">
 <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#"><font color="#2980b9"><?php echo $user_info['user']; ?></font></a>
 </div>
 <div class="navbar-collapse collapse navbar-responsive-collapse">
   <ul class="nav navbar-nav">
 <li class="active"><a href="<?php echo base_url();?>dashboard">Crypter</a></li>
 <li><a href="<?php echo base_url();?>dashboard/rootkits">RootKits</a></li>
 <li><a href="<?php echo base_url();?>dashboard/add">Additionals+</a></li>
   <li class="active"><a href="<?php echo base_url();?>dashboard/myfiles">My files</a></li>
 <li class="active"><a href="<?php echo base_url();?>dashboard/settings">Settings</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
     <li><a href="<?php echo base_url();?>dashboard/news">News</a></li>
	 <li><a href="<?php echo base_url();?>dashboard/logout"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
   </ul>
 </div>
 </div>
</div>



		<!-- crypter -->

		<div class="panel panel-default">
		<div class="panel-heading">News</div>
			<div class="panel-body">

				<div class="row">

					<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Account type</th>
      <th>Date</th>
      <th>News</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Trial</td>
      <td>2014/3/16</td>
      <td>Trial stubs limits downed to 3 stubs.</td>
    </tr>
    <tr>
      <td>Basic</td>
      <td>2014/3/11</td>
      <td>This is just an example and i'm tired of writting serious news message.</td>
    </tr>
    <tr class="info">
      <td>All</td>
      <td>2014/3/8</td>
      <td>Crypter section has been edited, more options added to select the crypt way.</td>
    </tr>

	<tr>
      <td>Advanced</td>
      <td>2014/3/8</td>
      <td>New stub has been added with a undetetiction ratio of (<a href="#">2/35</a>), using c++ and xor algorithm.</td>
    </tr>


	<tr class="danger">
      <td>Hacker</td>
      <td>2014/3/2</td>
      <td>.Net file hidder rootkit for 64 has been deleted and will be readded after fixing some errors soon.</td>
    </tr>

  </tbody>
</table>

				</div>

			</div>





			</div>
		</div>


<?php $this->load->view('footer'); ?>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url();?>assest/js/less-1.js"></script>
    <script src="<?php echo base_url();?>assest/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assest/js/bootswatch.js"></script>
    <script src="<?php echo base_url();?>assest/js/flat.js"></script>
  </body>
</html>
