
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
$email=$_POST['email'];
if(!empty($email))
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
$SELECT = "SELECT * From register Where email = '$email'";

$stmt=$con->query($SELECT);
if($stmt->num_rows<1)
{
echo "<script> window.location.href='password_recovery.php';
alert('Mail is not registered');
</script>";
}
else
{
$otp=rand(100000,999999);
$upd ="UPDATE register SET otp='$otp' where email='$email' ";
$st=$con->query($upd);

	$mail = new PHPMAiler(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'bharat.dhaipule@gmail.com';
	$mail->Password = 'fsxqblsgtjsvwyno';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;

	$mail->setFrom('bharat.dhaipule@gmail.com');

	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = "Verification Code (OTP) from *Q&A*";
	$mail->Body = "One Time Password to change password\nOTP: $otp";

	$mail->send();

echo "<script>
window.location.href='set_password.php';
alert('OTP sent Successfully');
</script>";
echo "Success";
}
$con->close();
}
}
?>