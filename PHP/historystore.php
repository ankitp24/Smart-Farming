<?php


	 mysql_connect("localhost","root","") or die("Not connected");
	mysql_select_db("belogin") or die("No DB found");
	
	
	//for inserting values in variables
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
        $crop = $_POST['crop'];
		$production = $_POST['production'];
		$startdate = $_POST['startdate'];
		$enddate = $_POST['enddate'];
		$profit = $_POST['profit'];
		$area = $_POST['area'];
		
		
		
		$query = "INSERT INTO history (username,crop,production,startdate,enddate,profit,areacultivated) VALUES ('$username','$crop','$production','$startdate','$enddate','$profit','$area')";
		if(mysql_query($query))
		{
			echo "<script> location.href = 'login.php';
	       </script>" ;
		}
	}
	 


?>