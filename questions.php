<?php
$question=$_POST['question'];
$tags=$_POST['tags'];

if(!empty($question)||!empty($tags))
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
    $tags1="";
    foreach($tags as $tag)
    {
        $tags1 .=$tag.",";
    }
    $user_email="SELECT email from register order by login_time desc";
    $res1=$con->query($user_email);
    $row=$res1->fetch_assoc();
    $login_mail=$row['email'];
    $in_q = "INSERT into question(que,email,tags) values ('$question','$login_mail','$tags1')";
    $res2=$con->query($in_q);
    if($res1->num_rows>0)
    {
        header("Location:page.php");
        echo "$question";
    }
    else
    {
        echo "NOOO";
    }
}
}
else
{
echo "Oops";
die();
}
$con->close();
?>