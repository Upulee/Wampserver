	


	<?php
		//echo '<link rel="stylesheet"  href="test.css">';
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="form";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

		if($conn->connect_error){
			die("connection_failed: ".$conn->connect_error);
	
		}
		else
		echo "Connection Successful"."<br>";
	

		$sql1="SELECT * from info";
        $result1=mysqli_query($conn,$sql1);

        //echo "$result1";

        if(sizeOf($result1)>0){
        	echo '<table border="1">';
        	while($row=$result1->fetch_assoc()){
        		    echo "<tr><td>";
                    echo $row['FirstName']."</td><td>";
                    echo $row['LastName']."</td><td>";
        			echo $row['Gender']."</td>";
        		    echo "</tr>";
        	}
        	echo "</table>";
        }

		?>