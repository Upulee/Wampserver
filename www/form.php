<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="form";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if($conn->connect_error){
		die("connection_failed: ".$conn->connect_error);

	}
	else
	echo "Connection Successful";
	


	
		$sql="INSERT INTO  info (FirstName,LastName,Gender) VALUES('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["gender"]."')";
	
		
		$result=mysqli_query($conn,$sql);

		
	    

		
	
	$conn->close();
 ?>