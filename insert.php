<?php

$first=$_POST['first'];
$last=$_POST['last'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$passwords=$_POST['password'];

if(!empty($first)||!empty($last)||!empty($gender)||!empty($email)||!empty($passwords))
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
$SELECT = "SELECT email From register Where email = ? Limit 1";
$INSERT ="INSERT Into register(first,last,gender,email,passwords)Values(?,?,?,?,?)";

$st=$con->prepare($SELECT);
$st->bind_param("s",$email);
$st->execute();
$st->bind_result($email);
$st->store_result();
$no=$st->num_rows;

if($no==0)
{
$st->close();
$st=$con->prepare($INSERT);
$st->bind_param("sssss",$first,$last,$gender,$email,$passwords);
$st->execute();
header("Location:page.php");
echo '<script>alert("NEW RECORD INSERTED SUCCESSFULLY")</script>';
echo $passwords;
echo $email;
}
else
{
echo "<script>
window.location.href='register.php';
alert('SOMEONE REGISTERED ALREADY WITH THIS MAIL');
</script>";
}
$st->close();
$con->close();
}
}
else
{
echo "Oops";
die(); 
}
?>