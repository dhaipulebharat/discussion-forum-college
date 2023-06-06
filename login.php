
<?php
$email=$_POST['email'];
$passwords=$_POST['password'];
/* function session_email(){
	$ses_email=$email;
	return $ses_email;
} */
if(!empty($email)||!empty($passwords))
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
$SELECT = "SELECT * From register Where email = '$email' and passwords = '$passwords' ";
/*$st=$con->prepare($SELECT);
$st->bind_param("ss",$email,$passwords);
if($st->execute())
{
$res=$st->get_result();
$no=$res->num_rows;
*/
$stmt=$con->query($SELECT);
if($stmt->num_rows<1)
{
echo "<script>
window.location.href='login1.php';
alert('ENTER CORRECT DETAILS');
</script>";
}
else
{
	/* function session_email(){
	$ses_email=$email;
	return $ses_email;
} */
/* echo "<script type='text/javascript'>
window.open('page.php','_blank');
</script>"; */
if($email==="bharat.dhaipule@gmail.com")
{
	echo "<script>window.location.href='http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=login&table=register&pos=0'</script>";
}
else
{
$update_log="UPDATE register SET login_time=CURRENT_TIMESTAMP where email='$email' ";
$up=$con->query($update_log);
header("Location:page.php");
}
echo "Success";
}
//}
//$st->close();
$con->close();
}
}
else
{
echo "Oops";
die(); 
}
?>