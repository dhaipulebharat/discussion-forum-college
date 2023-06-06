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
$up="SELECT * from answer where vote_active=1";
$up1=$con->query($up);
$up2=$up1->fetch_assoc();
echo $up2['votes'];
}
?>