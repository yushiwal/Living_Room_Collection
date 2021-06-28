<?php
	include 'dbconnect.php';
	$umessage = $_POST["message"];
	$uname = $_POST["name"];
	$uemail = $_POST["email"];
	$usubject = $_POST["subject"];
	
	
	$sql  = "INSERT INTO contact(message,name,email,subject)  VALUES('$umessage','$uname','$uemail','$usubject')";
	$qry = mysqli_query($conn, $sql);
	
	if($qry) {
		header('location:contact.php');
	  }
	  else{
		echo"Operation Failed!!";
	  }
	  

?>