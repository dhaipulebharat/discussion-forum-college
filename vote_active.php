<?php
$host="localhost";
$user="root";
$password="";
$db="login";
$con=new mysqli($host,$user,$password,$db);

if(mysqli_connect_error())
{
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
$ans_no= $_POST["ans_id"];
$up="UPDATE answer SET vote_active = 1 where ans_id='$ans_no'";
$upnot="UPDATE answer SET vote_active = 0 where ans_id<>'$ans_no'";
$con->query($up);
$con->query($upnot);
echo "<script>history.back();</script>";
}
?>