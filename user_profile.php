<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="user_profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montaga' rel='stylesheet'>
    <title>Quora</title>
    <!--<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--<meta http-equiv="refresh" content="3">-->
    <!--<base target="page.php"/>-->
</head>
<body>
<button id="top_button" onclick="topFunction()" class="button-post" href=''><i class='fa fa-arrow-up'></i></button>
<p id='user_container'>
<img src='images\student1.png' class='user_img' height='20%' width='18%'>
<?php
session_start();
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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_SESSION['var_name'] = $_POST["var_name"];
$_SESSION['var_name_main']=$_POST["var_name_main"];
}
$ema=$_SESSION['var_name'];
$main_ema=$_SESSION['var_name_main'];
$select = "SELECT * from register where email='$ema'";
$stm=$con->query($select);
$que="SELECT * from question where email='$ema'";
$que1=$con->query($que);
$ans="SELECT * from answer where email='$ema'";
$ans1=$con->query($ans);

//question count

$count_que="SELECT count(*) as count from question where email='$ema'";
$count_que1=$con->query($count_que);
$count_que2=$count_que1->fetch_assoc();

//answer count
$count_ans="SELECT count(*) as count,ifnull(sum(votes),0) as sum from answer where email='$ema'";
$count_ans1=$con->query($count_ans);
$count_ans2=$count_ans1->fetch_assoc();
if($stm->num_rows<1)
{
    echo "No users found";
}
else
{
$row=$stm->fetch_assoc();
$date=substr($row["login_time"],0,strpos($row["login_time"]," "));
echo "<div class='user_main_name'><br><br><span id='user_name'>".$row["first"]."&nbsp;".$row["last"]."</span><br>
<span id='user_mail'>
<i class='fa fa-envelope' aria-hidden='true'></i>&nbsp;
".$row["email"]."
</span><br><br>
</div></p>";
if($ema==$main_ema)
{
echo "<span onclick='toggle11()' style='font-size:larger;cursor:pointer'><abbr title='Edit'><i class='fa fa-pencil' aria-hidden='true'></i></abbr></span>";
}
else
{
    echo "<br>";
}
echo "<hr>
<span class='user_login'>last login at $date </span>";
}
}
?>
<br>
<button id='user_profile_button' class='user_profile_activity' onclick='changeto_profile()'>Profile</button>
<button id='user_activity_button' class='user_profile_activity' onclick='changeto_activity()'>Activity</button>
<br><br><br><br>
<?php
echo "<div id='activity_tab'><h2>Tags</h2>";
        $tag_array=array("CSE","ECE","EEE","ME","CIV","CSE RELATED","EVENTS","SPORTS","ACADEMICS","FEE","PLACEMENTS","COLLEGE");
        $temp=0;
        echo "<div class='user_ques'>";
        while($temp<count($tag_array))
        {
        $var_tag="SELECT count(*) as count from question where email='$ema' and tags like '%$tag_array[$temp]%'";
        $var_tag1=$con->query($var_tag);
        $var_tag2=$var_tag1->fetch_assoc();
        echo "<span >#$tag_array[$temp]&nbsp;(".$var_tag2["count"].")</spab>&nbsp;&nbsp;&nbsp;";
        if($temp==8)
        echo "<br>";
        $temp++;
        }
echo "</div><h2>Questions asked</h2>
<div class='user_ques'>";
if($count_que2['count']==0)
{
    echo "No questions available";
}
while($que2=$que1->fetch_assoc())
{
$goto_que=$que2["qno"];
$goto_que1=$que2["que"];
echo "<a class='user_questions' target='_blank'href='page.php#$goto_que'>Q.&nbsp;".$que2['que']."</a><br><br>";
}
echo "</div>
<br><br>
<h2>Answers given</h2>
<div class='user_ans'>";
if($count_ans2['count']==0)
{
    echo "No answers available";
}
while($ans2=$ans1->fetch_assoc())
{
$goto_ans=$ans2["qid"];
$que_to_ans="SELECT * from question where qno='$goto_ans'";
$que_to_ans1=$con->query($que_to_ans);
$que_to_ans2=$que_to_ans1->fetch_assoc();
$goto_ans3=$que_to_ans2["que"];
echo "<a class='user_questions' target='_blank' href='page.php#$goto_ans'>Q.&nbsp;".$que_to_ans2['que']." &nbsp;(".$que_to_ans2['email'].")</a><br>
<a><i class='fa fa-arrow-right'></i>&nbsp;".$ans2['ans']."</a><br><br>";
}
echo "</div>
</div>";

echo "<div id='profile_tab'>
<div>
<div class='tag_container'><img class='tag_image' src='images/tag.jpg' width='150' height='50'><span class='info_tag'>Info</span></div>
<div class='user_details'>
    <table>
        <tr>
            <td class='heading'>First Name</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$row['first']."</td>
        </tr>
        <tr>
            <td class='heading'>Last Name</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$row['last']."</td>
        </tr>
        <tr>
            <td class='heading'>Gender</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$row['gender']."</td>
        </tr>
        <tr>
            <td class='heading'>Mail</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$row['email']."</td>
        </tr>
    </table>
</div>";
echo "<div class='tag_container'><img class='tag_image2' src='images/tag.jpg' width='150' height='50'><span class='info_tag2'>Stats</span></div>
<div class='user_details2'>
    <table>
        <tr>
            <td class='heading'>Questions</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$count_que2['count']."</td>
        </tr>
        <tr>
            <td class='heading'>Answers</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$count_ans2['count']."</td>
        </tr>
        <tr>
            <td class='heading'>Votes reach</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$count_ans2['sum']."</td>
        </tr>
        <tr>
            <td class='heading'>Mail</td>
            <td>&nbsp;:&nbsp;</td>
            <td>".$row['email']."</td>
        </tr>
    </table>
</div>
<br><br><br><br><br><br><br><br><br>
<br><br>
<a class='view_all' onclick='changeto_activity()'>view all questions and answers.</a></div>";
?>
<div id='light1' class='white_content1'>
            <span onclick='toggle21()' id='close_but' class='close_button_transform'><i class='fa fa-times' aria-hidden='true'></i></span>
            <h2>Edit Profile...</h2>
            <div class="square">
        <form action="insert_update.php" method="POST">
        <input name="main_user" type="hidden" value="<?php echo $main_ema ?>">
            <label for="first">First Name:</label>
            <input name="first" id="first" type="text" placeholder="Bharat" required><br><br>
            <label for="last">Last Name:</label>
            <input name="last" id="last" type="text" placeholder="Dhaipule" required>

            <br><br>
            <label>Gender:</label>
            <input name="gender" id="male" type="radio" value="male">
            <label for="male">Male</label>
            <input name="gender" id="female" type="radio" value="female">
            <label for="female">Female</label>
            <input name="gender" id="other" type="radio" value="other">
            <label for="other">Other</label>

            <br><br>
            <label>Email:   
<input name="email" type="email" id="mail" placeholder="bharat@gmail.com"required>
</label><br>
            <div id="er">

            </div>
            <br><br>
            <input type="submit" class="sub" value="Update">
        </form>
</div>
</div>
            <div id='fade1' class='black_overlay'></div>
<script>
    var profile=document.getElementById('profile_tab');
    var activity=document.getElementById('activity_tab');
    var profile_button=document.getElementById('user_profile_button');
    var activity_button=document.getElementById('user_activity_button');
    var mybutton = document.getElementById("top_button");
    activity.style.display="none";
    function changeto_profile(){
            profile.style.display="block";
            activity.style.display="none";
            profile_button.style.backgroundColor="rgb(76, 153, 225)";
            activity_button.style.backgroundColor="white";
    }
    function changeto_activity(){
            activity.style.display="block";
            profile.style.display="none";
            activity_button.style.backgroundColor="rgb(76, 153, 225)";
            profile_button.style.backgroundColor="white";
    }

    function toggle11(){
        document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block';
    }

    function toggle21(){
        document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none';
    }

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    
</script>
</body>
</html>