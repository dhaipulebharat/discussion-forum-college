<?php

$first=$_POST['first'];
$last=$_POST['last'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$main_user=$_POST['main_user'];

if(!empty($first)||!empty($last)||!empty($gender)||!empty($email))
{
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
$upd ="UPDATE register SET first='$first',last='$last',gender='$gender',email='$email' where email='$main_user' ";

$st=$con->query($upd);
echo $main_user;
header("Location:user_profile.php");
echo '<script>alert("NEW RECORD INSERTED SUCCESSFULLY")</script>';
echo $first;
}
}
else
{
echo "Oops";
die(); 
}
?>