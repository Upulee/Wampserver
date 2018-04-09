<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="form";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
} 
else
	echo "connection successful"."<br>";

$sql="SELECT * from info where Firstname='Dilusha'";
$result=mysqli_query($conn,$sql);

if(sizeof($result)>0){
	echo "<table border='1'>";
	while($row=$result->fetch_assoc()){
		echo "<tr><td>";
		echo $row['FirstName']."</td><td>";
		echo $row['LastName']."</td><td>";
		echo $row['Gender']."</td></tr>";
	}
	echo "</table>";
}

$conn->close();


?>