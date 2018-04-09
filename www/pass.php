<?php 
$host="localhost";
$user="root";
$pass="";
$db="test";

$con=mysqli_connect($host,$user,$pass,$db);

if($con->connect_error)
{
 echo $con->connect_error;
}

$query="insert into student(name,age,school,Address) values('".$_POST['name']."','".$_POST['age']."','".$_POST['school']."','".$_POST['address']."' )";

if($con->query($query)===true){
	echo "data entered successfully";
}
else{
	echo "Error:".$query."<br>".$con->error;
}
$con->close();
?>