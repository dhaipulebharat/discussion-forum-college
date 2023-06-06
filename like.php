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
$likedby= $_POST["likedby"];
$ans_id=$_POST["liked_ans"];
$likedbytotal="SELECT * from answer where ans_id='$ans_id'";
$likes=$con->query($likedbytotal);
$likes1=$likes->fetch_assoc();
if(strpos($likes1["votes_mails"],$likedby));
else
{
    $qid=$likes1["qid"];
    $updated_votes_mail=$likes1["votes_mails"].",".$likedby;
    $add_votes="UPDATE answer SET votes_mails='$updated_votes_mail', votes=votes+1 where ans_id='$ans_id' ";
    $con->query($add_votes);
    //echo "<a href='page.php#refreshrate'>Click</a>";
    //header("Location:page.php#$qid");
    /* echo "<form id='form' action='page.php' method='POST'><input type='hidden' name='refresh' value=1></form>";
    echo "<script>document.getElementById('form').submit();</script>"; */
    echo "<script>location.href='page.php#$qid';</script>";
}
}
?>