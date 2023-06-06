<?php
$answer_id=$_POST['ans_id'];

if(!empty($answer_id))
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
    $in_q = "UPDATE answer SET report=report+1 where ans_id='$answer_id' ";
    $res2=$con->query($in_q);
    echo "<script>history.back();</script>";
}
}
else
{
echo "Oops";
die();
}
$con->close();
?>