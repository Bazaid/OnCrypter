<?php $this->load->view('header'); 

	$loged;
	if($loged == "0")
	{
	}


?>


      <!-- Body
      ================================================== -->


     <div class="bs-docs-section clearfix">


	<div class="page-header">
		<h1 id="navbar">Start <?php echo $acType; ?> account</h1>
	</div>
	
	
	<?php if($loged == "2") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> <a href="#" class="alert-link">Username</a> is already used.
		</div>

	<?php } ?>

	<?php if($loged == "3") { ?>

		<div class="alert alert-dismissable alert-danger">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Error!</strong> Password aren't equal, try again.
		</div>

	<?php } ?>

		</br>

		<?php if($loged == "1") { ?>
		
		
		<div class="alert alert-dismissable alert-info">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Well Done</strong> Your account has been created. Please continue the payment to get your account ready to work.
		</div>
		
		<div class="row">
          <div class="col-lg-6">
			<center>
            <div class="well">
			
			<h3>Paypal</h3>
			<p>Using paypal as a payment method will get your account activated in 24 hours. if your account didn't activate after 24 hours please contact us.</p>
			</br></br>
			
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="payments@OnCrypt.com">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->

<?php if($acType == "Ultimate") { ?>
<input type="hidden" name="item_name" value="Ultimate">
<input type="hidden" name="amount" value="45">
<?php } ?>
<?php if($acType == "Basic") { ?>
<input type="hidden" name="item_name" value="Basic">
<input type="hidden" name="amount" value="20">
<?php } ?>


<input type="hidden" name="currency_code" value="USD">

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">

<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
</br></br>
				
			
			</div>
			</center>
		  </div>
		  
		  	<div class="col-lg-6">
				<center>
				<div class="well">
				<h3>Bitcoin</h3>
				<p>Using Bitcoin as a payment method is safer and faster. your account will be activated dirctly after the payment</p>
<?php 
	$my_callback_url = urlencode("http://www.OnCrypt.com/home/acActiveON?user=" . $user . "&actype=" . $acType . "&secret=unC0der_Baz4id#OnCrypt");
	$response = file_get_contents("https://blockchain.info/api/receive?method=create&address=1B3GKxdXQ1yzpAZvUoEgLkLZyrvRmg8vdF&callback=" . $my_callback_url);
	$object = json_decode($response);
	echo '<p>Send Payment To : ' . $object->input_address; 
?>

<?php if($acType == "Basic") { ?> <p>Payment value : 20$(0.03140 BTC)</p> <?php } ?>
<?php if($acType == "Ultimate") { ?> <p>Payment value : 45$(0.07066 BTC)</p> <?php } ?>

    </br>
					<img  src="<?php echo base_url();?>assest/img/BitCoin.png"/>
					</br></br>
				</div>
				</center>
			</div>
			
		</div>
		
		<?php } else { ?>

		<!-- register form -->
		 <div class="row">
          <div class="col-lg-6">
            <div class="well">
              <?php echo form_open('home/register/');?>
                <fieldset>
                  <legend>Information</legend>
				  <input type="hidden" name="AccountType" value="<?php echo $acType; ?>">
                  <div class="form-group">
                    <label for="inputUser" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Username">
                    </div>
				  </div>

				  <div class="form-group">
					<label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
					  <p>* Confirmation will be send to this email</p>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                   </div>
				   </div>

				  <div class="form-group">
                    <label for="inputcPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                      <input type="password" class="form-control" id="inputcPassword" name="inputPasswordc" placeholder="Password">
					  <p>Please retype your password</p>
                   </div>
				   </div>


				  <div class="form-group">
                    <label for="inputCap" class="col-lg-2 control-label">Capatcha</label>
                    <div class="col-lg-5">
                      <img  src="<?php echo base_url();?>assest/img/Cap.png" id="inputCap"/>

					 <input type="text" class="form-control" id="inputcCap" placeholder="Capatcha">
                   </div>
				   </div>

				   <div class="form-group">


                    <div class="col-lg-10 col-lg-offset-2">
					<p> * By starting this account you're accepting onCrypt rules and policy </p>

                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                  </div>


                </fieldset>
              </form>
			  
            </div>
          </div>


		  <!-- rules -->

		  <div class="col-lg-6" style="padding: 15px 15px 0 15px;">

		  <h2>Rules & Policy</h2>
			<p>OnCrypt is a project that allows you to get undetected by the anit's, And this is illegal in a list of countries.</p>
			<p>using it is not a responsibility of OnCrypt team. and you have to take the risks of using it your self.</p>
			<p>do not give any of your personal information and register as a forbbiden person.</p>
			<p>for the paid account, OnCrypt doesn't save any of your personal information or credits cards/paypal information</p>
			<p>make sure to be aware of the risks and read the policy of your country on using such a website.</p>
			<p>the rules of OnCrypt are very simple, just don't scan on distribution sites :)</p>
			<p>Thank you. OnCrypt team</p>
			</div>


		</div>

	 <?php } ?>
		
<?php $this->load->view('footer'); ?>
