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
		<h1 id="navbar">Start trial account</h1>
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


		<!-- register form -->
		 <div class="row">
          <div class="col-lg-6">
            <div class="well">
              <?php echo form_open('home/trial/');?>
                <fieldset>
                  <legend>Information</legend>
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
					<p> * By starting this trial you're accepting onCrypt rules and policy </p>

                      <button type="submit" class="btn btn-primary">Start trial</button>
                    </div>
                  </div>


                </fieldset>
              </form>
			  
			  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Hacker account">
<input type="hidden" name="amount" value="150">
<input type="hidden" name="currency_code" value="USD">

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">

<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

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


<?php $this->load->view('footer'); ?>
