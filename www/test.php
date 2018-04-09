<html>
<head>
	<title>Inline styles example</title>

</head>
<body>
	<h1>Heading1 without inline style</h1>
	<h1 style="color:red; font-style:Italic;"></h1>
		
<?php
	
	echo "<h1>My first web page</h1>";
     
     class Car 
     {
     	
     	function  Car()
     	{
     		$this->model="VW";
     	}
     }	
     	$herbie= new Car();
     	echo $herbie->model."<br>";
      
      
		$cars = array("Volvo", "BMW", "Toyota");
		$arrlength = count($cars);
		sort($cars);

		for($x = 0; $x < $arrlength; $x++) 
		{
    		echo $cars[$x]."<br>";
    		//echo "<br>";
		}

		
?>



</body>	
</html>