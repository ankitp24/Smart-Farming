<?php


	 mysql_connect("localhost","root","") or die("Not connected");
	mysql_select_db("belogin") or die("No DB found");
	
	
	//for inserting values in variables
	if(isset($_POST['submit']))
	{
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		
		
		$query = "INSERT INTO farmquery (subject,message) VALUES ('$subject','$message')";
		if(mysql_query($query))
		{
			echo "<script> location.href = 'submitquery.php';
	       </script>
		   <h4> Succefull </h4>" ;
		}
	}
	
	 


?>