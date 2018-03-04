<?php


	// main php script
	
	$c_number = $_POST['c'];
	
	// static shit
	$md_pass = "on_CrYp3t#";
	
	// crypt the file
	
	if($c_number ==1) // crypt file
	{
		$file = $_POST['file'];
		 
		 
		 // crypting shit here
		 // not yet //
		 // save file with new name === [ md5($file + $md_pass).exe ]
		 
		 // scan 
		 // show scan results 
		 
		 
		 
	}
	
	
	// get the file
	
	if($c_number == 2) // Use CryptKey
	{
		$key = $_POST['key'];
		$CryptFile = $_POST['file'];
		
		// check key if working =>
		// dec key count from database
		
		// pass the process to get the download link
		// get downloadlink($CryptFIle)
	
	}
	
	if($c_number == 3) // payments without cryptkey
	{

		$CryptFile = $_POST['file'];
		
		// payment shit
		// payment confirmed then
		// pass the process to get the download link
		// get downloadlink($CryptFIle)
	}
	
	
	// funcs
	
	function GetDownloadLink($FileName)
	{
		$f_name = md5($FileName . $md_pass) . ".exe";
		$Link = "http:/ .... " . $f_name;
		
		// search in database for file name then set link in the database 
		
	}
	


?>