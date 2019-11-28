<?php

$user_arr=$_POST['This_Key'];
$user_arr=str_replace('[',' ',$user_arr);
$user_arr=str_replace(']',' ',$user_arr);
$user_arr=str_replace('"',' ',$user_arr);
$trimmed=trim($user_arr);
$trimmed=explode(",",$trimmed);
$number=(string)$trimmed[1];
echo $number;
$message=nl2br("Congratulations! There has been a recent purchase activity on AgroConsultant. Buyer:$trimmed[0],Contact:$trimmed[1]. Seller's contact:78232321");
echo $message;
include('way2sms-api.php');
sendWay2SMS('8369845402', 'sub8896', '8369845402', $message);

?>
