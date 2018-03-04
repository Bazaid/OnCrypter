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

<div id="connection" class="alert alert-warning"><strong>Oh snap!</strong> the server is <strong>down</strong> try again later..</div>
		<!-- crypter -->

		<div class="panel panel-default">
		<div class="panel-heading">Crypter</div>
			<div class="panel-body">

				<div class="row">
					<div class="col-lg-12">


<div class="panel panel-default">
  <div class="panel-heading">Select Binary</div>
  <div class="panel-body">
   <input type="file" name="files" id="files"></input>
   </p>

  </div>
</div>

</div>

				</div>


		<div class="row">

				<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Select Crypt</h3>
						</div>
						<div class="panel-body">
			<select class="form-control" id="select" onchange="Changed()">
							<?php foreach ($crypts as $crypt) { ?>
								<option><?php echo $crypt['cryptname']; ?></option>
							<?php } ?>
			</select>
							<?php foreach ($crypts as $crypt) { ?>
								<input type="hidden" id="<?php echo $crypt['cryptname']; ?>1" value="<?php echo $crypt['cryptType']; ?>"></input>
								<input type="hidden" id="<?php echo $crypt['cryptname']; ?>2" value="<?php echo $crypt['addedsize']; ?>"></input>
								<input type="hidden" id="<?php echo $crypt['cryptname']; ?>3" value="<?php echo $crypt['dotnet']; ?>"></input>
								<input type="hidden" id="<?php echo $crypt['cryptname']; ?>4" value="<?php echo $crypt['ratio']; ?>"></input>
								<input type="hidden" id="<?php echo $crypt['cryptname']; ?>5" value="<?php echo $crypt['ratioscan']; ?>"></input>
								<input type="hidden" id="<?php echo $crypt['cryptname']; ?>6" value="<?php echo $crypt['addtional']; ?>"></input>
							<?php } ?>
				</div>


					</div>

					</br>

					<div class="progress">
						<div id="progress_bar" class="progress-bar" style="width: 0%;"></div>
					</div>

					<button type="button" id="crypt" class="btn btn-default btn-lg btn-block"><i class="glyphicon glyphicon-chevron-right"></i> Crypt</button>

					</br>
				  <p id="status"> <font color="#2980b9">Status :</font> Idle ..</p>

				</div>



					<div class="col-lg-3">
					<div class="well well-lg">
						<h4>File information</h4>
						<p id='filename'>File name :</p>
						<p id='filesize'>File size :</p>
					</div>
					</div>

						<div class="col-lg-3">
					<div class="well well-lg">
						<h4>Stub information</h4>
						<p id="CryptType"  value="" >Stub type : </p>
						<p id="AddedSize"  value ="">Stub added size : </p>
						<p id="DotNet"     value="" >.Net Included : </p>
						<p id="Ratio"      value="" >Undetection ratio : </p>
						<p id="Additional" value="">Additional : </p>
					</div>
				</div>

		</div>


    <div class="modal fade" id="fileinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body" id="modal-body">
      </div>
      <div class="modal-footer">
	   <a href="<?php echo base_url();?>dashboard/myfiles"><button type="button" class="btn btn-info">Files</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>








			</div>
		</div>



			</div>






    <?php $this->load->view('footer'); ?>
    <script src="http://cdn.binaryjs.com/0/binary.js"></script>


      <script>
    var client = new BinaryClient('ws://localhost:8080');
    var file;
     function readSingleFile(evt) {
      file = evt.target.files[0];
      document.getElementById("filename").innerHTML = "File name : " + file.name;
      document.getElementById("filesize").innerHTML = "File size : " + file.size;
      }


    document.getElementById('files').addEventListener('change', readSingleFile, false);
    client.on('open', function(){
     console.log('connected');
     var div = document.getElementById("connection");
     div.parentNode.removeChild(div);
    $('#crypt').click(function(e){
     var stream = client.send(file, {c:'file',name: file.name, size: file.size,stub: document.getElementById("select").value,user_hwid: <?php echo $user_info['hwid']; ?>,user_id: <?php echo $user_info['id']; ?>});
     var tx = 0;
       stream.on('data', function(data){
           $('#progress_bar').css('width', Math.round(tx+=data.rx*100) + "%");
           document.getElementById("status").innerHTML = '<font color="#2980b9">Status :</font> '+data.c;
           if (data.c == "Done.")
           {
             document.getElementById("myModalLabel").innerHTML = data.name;

             document.getElementById("modal-body").innerHTML = "<p>Your file has been crypted successfuly.</p>"+
			 "<p>Crypt type : SomeType </p>"+
			 "<p>New size : 00 Bytes</p>"+
			 "<p>Ratio : <a href='#'>0/40</a></p>"+
			 "<p>Direct download : <a href='http://localhost/download/"+data.hash+"'>Download</a></p>"+
			 "</br><p>You can manage your crypts by going to your files.</p>";
             $('#fileinfo').modal('show');
           }
      });


    });


});



function Changed()
{


		$CurrCrypt = document.getElementById("select").value;
		// get curr crypt info
		$CryptType = document.getElementById($CurrCrypt + "1").value;
		$CurrAddedSize = document.getElementById($CurrCrypt + "2").value;
		$CurrDotNet = document.getElementById($CurrCrypt + "3").value;
		$CurrRatio = document.getElementById($CurrCrypt + "4").value;
		$CurrRatioScan = document.getElementById($CurrCrypt + "5").value;
		$CurrAdditional = document.getElementById($CurrCrypt + "6").value;

		// changing info values
		document.getElementById("CryptType").innerHTML = "Stub type : " + $CryptType;
		document.getElementById("AddedSize").innerHTML = "Stub added size : " + $CurrAddedSize;
		document.getElementById("DotNet").innerHTML = ".Net Included : " + $CurrDotNet;
		document.getElementById("Ratio").innerHTML = "Undetection ratio : " + "<a href=" + '"' + $CurrRatioScan + '"' + ">" + $CurrRatio + "</a>";
		document.getElementById("Additional").innerHTML = "Additional : " + $CurrAdditional;

}

     </script>
