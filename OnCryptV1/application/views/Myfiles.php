<?php $this->load->view('header'); ?>



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
		<div class="panel-heading">My files</div>
			<div class="panel-body">

				<div class="row">


		<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>File</th>
      <th>Crypt date</th>
	  <th>Crypt type</th>
      <th>Detection ratio</th>
	  <th>Options</th>
    </tr>
  </thead>
  <tbody>


	<?php foreach ($files as $file) { ?>

    <tr id="<?php echo str_replace('.exe', '', $file['name']); ?>" >
      <td><strong><?php echo $file['name']; ?></strong></td>
	  <td><?php echo $file['date']; ?></td>
      <td><?php echo $file['type']; ?></td>
      <td><button type="button" class="btn btn-link"><?php echo $file['ratio']; ?></button></td>
	  <td>
		<div class="btn-group">
			<button type="button" href="#" class="btn btn-default"><i class="glyphicon glyphicon-stats"></i></button>
		<a href="<?php echo base_url();?>download/<?php echo $file['hash']; ?>"><button type="button" class="btn btn-info"><i class="glyphicon glyphicon-globe"></i></button></a>
			<button type="button" onclick="DeleteFile('<?php echo $file['name']; ?>');" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
		</div>
	  </td>
    </tr>

	<?php } ?>


  </tbody>
</table>

				</div>

			</div>





			</div>
		</div>










<?php $this->load->view('footer'); ?>
    <script src="http://cdn.binaryjs.com/0/binary.js"></script>


<script>


	var client = new BinaryClient('ws://localhost:8080');
	function DeleteFile(name){

	  $("#" + name.replace(".exe","")).fadeOut(700, function(){
            $("#" + name.replace(".exe","")).remove();
        });


     client.send(null,{c: 'deletefile', filename: name});
	  }

	 client.on('open', function(){



	 });
</script>
