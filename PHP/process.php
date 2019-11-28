<?php

session_start();


  // get values passe from form in login.php file
 $username = $_POST['username'];
 $password = $_POST['password'];

 //to prevent mysql injection
 $username = stripcslashes($username);
 $password = stripcslashes($password);
 $username = mysql_real_escape_string($username);
 $password = mysql_real_escape_string($password);

 //connect to the server and select database
 mysql_connect("localhost","root","");
 mysql_select_db("belogin");


  $_SESSION["username"] = $username;


 //query the database for user
 $result = mysql_query("select * from user where username = '$username' and password = '$password'")
			or die("Failed to query database".mysql_error());

 $row = mysql_fetch_array($result);
 if($row['username'] == $username && $row['password'] == $password)
 {
	 echo "<script> location.href = 'index.php';
	       </script>" ;
 }
 else
 {
	 echo"Failed";
 }


?>
