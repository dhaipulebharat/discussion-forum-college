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
$dislikedby= $_POST["dislikedby"];
$ans_id=$_POST["disliked_ans"];
$dislikedbytotal="SELECT * from answer where ans_id='$ans_id'";
$dislikes=$con->query($dislikedbytotal);
$dislikes1=$dislikes->fetch_assoc();
if(strpos($dislikes1["votes_mails"],$dislikedby))
{
    $qid=$dislikes1["qid"];
    $dislikedby=",".$dislikedby;
    $updated_votes_mail=str_replace($dislikedby,'',$dislikes1["votes_mails"]);
    $add_votes="UPDATE answer SET votes_mails='$updated_votes_mail', votes=votes-1 where ans_id='$ans_id' ";
    $con->query($add_votes);
    //echo "<a href='page.php#refreshrate'>Click</a>";
    //header("Location:page.php#$qid");
    /* echo "<form id='form' action='page.php' method='POST'><input type='hidden' name='refresh' value=1></form>";
    echo "<script>document.getElementById('form').submit();</script>"; */
    //echo "<script>history.back();</script>";
    echo "<script>location.href='page.php#$qid';</script>";
}
}
?>