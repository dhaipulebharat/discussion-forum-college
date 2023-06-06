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
$q_no= $_POST["question_no"];
$up="UPDATE question SET active = 1 where qno='$q_no'";
$upnot="UPDATE question SET active = 0 where qno<>'$q_no'";
$con->query($up);
$con->query($upnot);
echo "<script>history.back()</script>";
}
?>