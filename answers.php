<?php
$answer=$_POST['answer'];

if(!empty($answer))
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
    $answer_mail=$_POST["ans_mail"];
    $ans="SELECT * from question where active=1 ";
    $res1=$con->query($ans);
    $row=$res1->fetch_assoc();
    $q_no=$row["qno"];
    $login_mail=$row['email'];
    $in_q = "INSERT into answer(qid,email,ans) values ('$q_no','$answer_mail','$answer')";
    $res2=$con->query($in_q);
    if($res1->num_rows>0)
    {
        header("Location:page.php#$q_no");
        //echo "<script>history.go(0);</script>";
        echo $answer;
        echo $q_no;
        echo $answer_mail;
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