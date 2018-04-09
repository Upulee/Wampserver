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

echo '<div><p><h3>Student List</h3></p></div>';

$query="select name from student";	
$result = $con->query($query);

if($con->error){
			echo "Error:".$con->error;
		}
		else{
			while($row=$result->fetch_assoc())
				{
		
					echo $row['name']."<br>";
	

				}
			
			}







$con->close();
 ?>