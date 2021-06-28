<?php
	include 'dbconnect.php';
	$ufname = $_POST["fname"];
	$ulname = $_POST["lname"];
	$ucompany = $_POST["company"];
	$unumber = $_POST["number"];
    $uemail = $_POST["email"];
	$ucountry = $_POST["country"];
	$uadd1 = $_POST["add1"];
	$uadd2 = $_POST["add2"];
    $ucity = $_POST["city"];
	$udistrict = $_POST["district"];
	$uczip = $_POST["zip"];

	
	
	$sql  = "INSERT INTO checkout(fname,lname,company,number,email,country,add1,add2,city,district,zip) VALUES('$ufname','$ulname','$ucompany','$unumber','$uemail','$ucountry','$uadd1','$uadd2','$ucity','$udistrict','$uczip')";
	$qry = mysqli_query($conn, $sql);
	
	if($qry) {
		header('location:checkout.php');
	  }
	  else{
		echo"Operation Failed!!";
	  }
	  

?>