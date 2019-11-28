<?php
$user_arr=$_POST['ThisIsKey'];
$user_arr1=str_replace('[',' ',$user_arr);
$user_arr2=str_replace(']',' ',$user_arr1);
$trimmed=trim($user_arr2);
$myfile = fopen("newfile.txt", "w");
fwrite($myfile, $trimmed);
fclose($myfile);
ini_set('max_execution_time', 300);
$result = exec('python C:\\xampp\\htdocs\\crop\\ample-admin-lite\\html\\script.py');
echo $result;
?>
