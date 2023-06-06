
<?php
$otp=$_POST['otp'];
$pass=$_POST['password'];
$confirm=$_POST['confirm'];

if(!empty($otp)||!empty($password)||!empty($confirm))
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
    $user_email="SELECT email from register order by login_time desc";
    $res1=$con->query($user_email);
    $row=$res1->fetch_assoc();
    $mainuser_mail=$row['email'];
    $main_otp = "SELECT otp from register where email='$mainuser_mail'";
    $main_otp1 = $con->query($main_otp);
    $main_otp2 = $main_otp1->fetch_assoc();
    $main_otp3=$main_otp2['otp'];
    if($pass!==$confirm)
    {
        echo "<script> 
        window.location.href='set_password.php';
        alert('Passwords do not match');
        </script>";
    }
    else if($main_otp3!==$otp)
    {
        echo "<script> 
        window.location.href='set_password.php';
        alert('Incorrect OTP');
        </script>";
    }
    else
    {
    $upd ="UPDATE register SET passwords='$pass' where email='$mainuser_mail' ";
    $up=$con->query($upd);
    echo "<script>window.location.href='login1.php';alert('Password updated succesfully');</script>";
    }
}
}
?>