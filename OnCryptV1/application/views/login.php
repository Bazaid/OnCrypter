<?php

	$loged;
	if($loged == "0" or $loged == "4")
	{
	}
	else
	{
		echo $loged;
		echo "Username : " . $user;
		echo "\nPass : " . $pass;
	}

?>
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

      <div class="page-header" id="banner">
        <div class="row">

          <center>

		  <h1>< <font color="#2c3e50">On</font><font color="#2980b9">Crypt</font> ></h1>
		  <p class="lead"> Your way to get over the anti's </p>

		  <div class="alert alert-dismissable alert-info">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>OnCrypt !</strong> This <a href="#" class="alert-link">project is at it's beta release </a>, any error you come across or any advice please contact us.

		  </div>

           <!-- <h1>OnCrypt</h1>
            <p class="lead">The furikock8934lrldjikeoik project to crypt </p>-->
          </center>


        </div>
      </div>



      <!-- Body
      ================================================== -->


     <div class="bs-docs-section clearfix">


	<div class="page-header">
		<h1 id="navbar">Login</h1>
	</div>

	<?php if($loged == "2") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> <a href="#" class="alert-link">Password or username</a> is incorrect.
		</div>

	<?php } ?>

	<?php if($loged == "3") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> <a href="#" class="alert-link"> Your IP is not the same as the last updated IP. Please make sure that you updated it using the OnCryptConnector.</a>
		</div>

	<?php } ?>
	
	<?php if($loged == "4") { ?>

		<div class="alert alert-dismissable alert-info">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Well Done</strong> <a href="#" class="alert-link"> You can start using your trial account now.</a> Please login.
		</div>

	<?php } ?>
	
	<?php if($loged == "5") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> <a href="#" class="alert-link"> Sorry your account</a> haven't been activated yet.
		</div>

	<?php } ?>
	
		<?php if($loged == "6") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> <a href="#" class="alert-link"> Sorry your account</a> has been closed due to expiring.
		</div>

	<?php } ?>
	
	<?php if($loged == "7") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> <a href="#" class="alert-link"> Sorry your account</a> has been baned. Please contact us for more information
		</div>

	<?php } ?>

		</br>

		<!-- register form -->


		 <div class="row">

			<div class="col-lg-3"></div>

          <div class="col-lg-6">

            <div class="well">

		<center>
			<?php echo form_open('home/login/');?>
                <fieldset>

                  <div class="form-group">
                    <label for="inputUser" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="inputUser" id="inputUser" placeholder="Username">
                    </div>
				  </div>

				 <p></br></p>

                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                   </div>
				   </div>

					<p>&nbsp;</p>
                      <button type="submit" class="btn btn-primary">Login</button>



                </fieldset>
             </form>
		</center>

            </div>

			</div>
          </div>




		</center>
	 </div>

	</center>

	  <!-- End of page | bottom -- footer |
      ================================================== -->


	  <div class="page-header"></div>


      <div id="source-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Source Code</h4>
            </div>
            <div class="modal-body">
              <pre></pre>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="row">
          <div class="col-lg-12">

            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li>
				<a href="http://feeds.feedburner.com/bootswatch">About</a>&nbsp;&nbsp;
				<a href="https://twitter.com/thomashpark">Help</a>&nbsp;&nbsp;
				<a href="https://github.com/thomaspark/bootswatch/">Contact</a>&nbsp;&nbsp;
				<a href="#">API</a>&nbsp;&nbsp;
			  </li>
            </ul>
			<p>Coded by <a href="#">unCoder</a> and <a href="#">People i'm waiting to put there names here</a>.
            <p>Based on <a href="http://getbootstrap.com" rel="nofollow">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts" rel="nofollow">Google</a>.</p>

          </div>
        </div>

      </footer>


    </div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url();?>assest/js/less-1.js"></script>
    <script src="<?php echo base_url();?>assest/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assest/js/bootswatch.js"></script>
    <script src="<?php echo base_url();?>assest/js/flat.js"></script>
  </body>
</html>
