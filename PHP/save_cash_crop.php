<?php


session_start();
$username = $_SESSION["username"] ;


//connect to the database
 mysql_connect("localhost","root","");
 mysql_select_db("belogin");
 
 $sql = "SELECT * FROM `user` WHERE username like '$username'";
 
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);

$user_selection=$_POST['KeyHai'];
$user_arr1=str_replace('[',' ',$user_selection);
$user_arr2=str_replace(']',' ',$user_arr1);
$user_arr3=str_replace('"',' ',$user_arr2);
$trimmed=trim($user_arr3);
$split=explode(",",$trimmed);

$demo_query  = mysql_query("SELECT * FROM cropsheet where username like '$username'");
$count=mysql_num_rows($demo_query);
if($count == 0)
{
$query = mysql_query("INSERT INTO cropsheet (username,cash,cereals,oilseeds,pulses,minor) VALUES ('$username','$split[0]','$split[1]','$split[2]','$split[3]','$split[4]')");
}
else 
{
    $query = mysql_query ("UPDATE cropsheet SET cash='$split[0]', cereals='$split[1]', oilseeds='$split[2]', pulses='$split[3]', minor='$split[4]' WHERE username like '$username'");
}
if(mysql_query($query))
{
    echo "Done";
}


?>
