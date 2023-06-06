<!DOCTYPE html>
<html lang="en" name="page">

<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montaga' rel='stylesheet'>
    <title>Quora</title>
    <!--<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!--<meta http-equiv="refresh" content="3">-->
</head>

<body>
    <button id="top_button" onclick="topFunction()" class="button-post"><i class='fa fa-arrow-up'></i></button>
    <div id="side-nav">
        <span class="active" class="nav_icon" onclick="navfunction()">☰</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="images/gprec_logo1.png" height="35" style="cursor:pointer;">
        <span class="details">
        <span onclick='toggle11()' class="button-post" style='z-index:9;position:fixed;top:1.5%;right:44%;'><i class="fa fa-question" aria-hidden="true">&nbsp;&nbsp;<span class='nav_font1'>Ask Question</span></i></span>
        </span>
        <span  class="right-sidenav">
                <div style='z-index:9;position:fixed;top:1.5%;right:7%;'>
                <!--<form action="" class="search_nav">-->
                <input style='border:none;border-radius:5px;height:30px;' id='search_bar' name='search_que' type="text" size="70%" placeholder="search...">&nbsp;<button style='padding:1.5%;border:none;border-radius:5px;' id="search_submit" onclick="search_function()"><i class="fa fa-search" aria-hidden="true"></i></button>&nbsp;&nbsp;&nbsp;
                <!--</form>-->
                </div>
                <?php
                $mainuser_mail="none";
                $host="localhost";
                $user="root";
                $password="";
                $db="login";
                $con=new mysqli($host,$user,$password,$db);
                $user_email="SELECT email from register order by login_time desc";
                $res1=$con->query($user_email);
                $row=$res1->fetch_assoc();
                $mainuser_mail=$row['email'];
                ?>
                <form  id='user_form' class="search_nav" action='user_profile.php' method='POST' target='user_iframe'>
                <input type='hidden' name='var_name' value='<?php echo $mainuser_mail ?>'>
                <input type='hidden' name='var_name_main' value='<?php echo $mainuser_mail ?>'>
                <a id="anonomous" style='text-decoration:none;' href="login1.php">
                <span class='button-post' style='border:none;'>Login</span>
                <!--<i id='user_image' class="fa fa-user" aria-hidden="true"></i>-->
                </a>

                <span class="details">
                <span onclick="user_profile_nav()" class='users_profile_button'>
                <abbr title="<?php echo $mainuser_mail ?>"><button style='border:none;background-color:crimson;'><img src="images\student1.png" height='37' width='40'></button></abbr>
                <!--<i id='user_image' class="fa fa-user" aria-hidden="true"></i>-->
                </span>
</span>
                </form>
            </span>
    </div>
    <div id="body-nav">
        <div id="nav"><h1></h1>
            <a class="nav1" onclick="home()" id="home-button"><i class="fa fa-home">&nbsp;&nbsp;<span class='nav_font'>Home<span></i></a><br><br>
            <a class="nav1" onclick="userslist()"><i class="fa fa-users" aria-hidden="true">&nbsp;&nbsp;<span class='nav_font'>Users</span></i></a><br><br>
            <details class="details">
                <summary>
                <a class="nav1" onclick=""><i class="fa fa" aria-hidden="true">&nbsp;&nbsp;&nbsp;<span class='nav_font'>Profile</span></i></a><br><br>
                </summary>
                <div style="margin-left:20%;">
                <a class="nav1" onclick="user_profile_nav()"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;<span class='nav_font'>Profile</span></i></a><br><br>
                <a class="nav1" href="landing_page.php"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;&nbsp;<span class='nav_font'>Logout</span></i></a><br><br>
                </div>
            </details>
            <a onclick="" class="nav1" href="#about"><i class="fa fa-info-circle" aria-hidden="true">&nbsp;&nbsp;&nbsp;<span class='nav_font'>About</span></i></a>
            <br><br>
        </div>
      <!--  <div id="nav-content1">
            <br><br><br>
            <button onclick='toggle11()' class='button-post'>Ask</button><br><br>
        </div> -->
            <div id='light1' class='white_content'>
            <span onclick='toggle21()' id='close_but' class='close_button_transform'><i class='fa fa-times' aria-hidden='true'></i></span>
            <h2>Ask a question...</h2>
            <div>
                <form action="questions.php" method="POST">
                    <textarea name="question" id="" cols="100" rows="18" placeholder="Write a question..." required></textarea> Select appropriate tags for the question.<br><br>
                    <input type="checkbox" id="cse" name="tags[]" value="CSE">
                    <label for="cse">CSE</label>&nbsp;&nbsp;
                    <input type="checkbox" id="ece" name="tags[]" value="ECE">
                    <label for="ece">ECE</label>&nbsp;&nbsp;
                    <input type="checkbox" id="eee" name="tags[]" value="EEE">
                    <label for="eee">EEE</label>&nbsp;&nbsp;
                    <input type="checkbox" id="me" name="tags[]" value="ME">
                    <label for="me">ME</label>&nbsp;&nbsp;
                    <input type="checkbox" id="civ" name="tags[]" value="CIV">
                    <label for="civ">CIV</label>&nbsp;&nbsp;
                    <input type="checkbox" id="cse-related" name="tags[]" value="CSE-RELATED">
                    <label for="cse-related">CSE related</label>&nbsp;&nbsp;
                    <input type="checkbox" id="events" name="tags[]" value="EVENTS">
                    <label for="events">EVENTS</label>&nbsp;&nbsp;
                    <input type="checkbox" id="sports" name="tags[]" value="SPORTS">
                    <label for="sports">SPORTS</label>&nbsp;&nbsp;
                    <input type="checkbox" id="academics" name="tags[]" value="ACADEMICS">
                    <label for="academics">ACADEMICS</label>&nbsp;&nbsp;
                    <input type="checkbox" id="fee" name="fee" value="FEE">
                    <label for="fee">FEE</label>&nbsp;&nbsp;
                    <input type="checkbox" id="placements" name="tags[]" value="PLACEMENTS">
                    <label for="placements">PLACEMENTS</label>&nbsp;&nbsp;
                    <input type="checkbox" id="college" name="tags[]" value="COLLEGE">
                    <label for="college">COLLEGE</label>
                    <br><br><br>
                    <input  type="submit" value="Post" class="button-post">&nbsp;&nbsp;&nbsp;
                    <input  type="reset" value="Reset" class="button-post">
                </form>
            </div>
            </div>
            <div id='fade1' class='black_overlay'></div>
            <?php
           /* include "login.php";
            $sess_email=session_email();
            echo $sess_email; */
            ?>
        
        <?php
        echo '<script>
            console.log("Halo");
        </script>';
        ?>
        <div id="nav-content3"><br><br>
        <?php
            $host="localhost";
            $user="root";
            $password="";
            $db="login";
            $con=new mysqli($host,$user,$password,$db);
            $que_list="SELECT * from question "; /* as q left outer join answer as a on q.qno=a.qid order by a.date_time_ans desc"; */
            $que_list1=$con->query($que_list);
            while($row=$que_list1->fetch_assoc())
            {
            $que_no=$row["qno"];
            //$datetime=$row['date'].
            $date=substr($row["date_time"],0,strpos($row["date_time"]," "));
            //$date="SELECT monthname($datetime) as month, day($datetime) as day, year($datetime) as year";
            //$date1=$con->query($date);
            //$date2=$date1->fetch_assoc();
            echo "<div id='$que_no' class='ans_div'><h3 id='body_ques'>Q.&nbsp;<search>".$row["que"]."</search></h3><span class='que_date'>-<search>".$row["email"]."</search>&nbsp;($date)</span><br><br>
            <!--<a href=''><i class='fa fa-thumbs-o-up' aria-hidden='true'></i><br></a>-->
            <span class='details'>
            <form action='active.php' method='POST'>
            <button onclick='toggle1()' class='button-post' type='submit'>Answer<span id='qno_display'>$que_no</span></button><br><br>
            <input type='hidden' name='question_no' value='$que_no'>
            </form>
            </span>
            <div id='light' class='white_content'>
            <span class='close_button_transform 'onclick='toggle2()' id='close_but'><i class='fa fa-times' aria-hidden='true'></i></span>
            <h2>Answer here...</h2>
            <form action='answers.php' method='POST'>
            <textarea name='answer' id='answer_area' cols='100' rows='22' placeholder='Give your answer...' required></textarea><br><br>
            <input id='qno_hidden' type='hidden' name='que_no' value='$que_no'>
            <input id='qno_answer' type='hidden' name='ans_mail' value='$mainuser_mail'>
            <button type='submit' value='Post' class='button-post'>Post</button>&nbsp;&nbsp;&nbsp;
            <input  type='reset' value='Reset' class='button-post'>
            </form>
  </div>
  <div id='fade' class='black_overlay'></div>";
            $ans_query="SELECT * from answer where qid='$que_no' order by date_time_ans desc";
            $ans_query1=$con->query($ans_query);
            while($list=$ans_query1->fetch_assoc())
            {
                $ans_id=$list["ans_id"];
                $date_ans=substr($list["date_time_ans"],0,strpos($list["date_time_ans"]," "));
                echo "<div class='user_div_ans'><span style='display:inline;'><search>".$list["ans"]."</search></span><span class='que_date'>- <search>".$list["email"]."</search>&nbsp;($date_ans)&nbsp;</span>
                <br><br>";
                
                $likedbytotal="SELECT * from answer where ans_id='$ans_id'";
                $likes=$con->query($likedbytotal);
                $likes1=$likes->fetch_assoc();
                if(strpos($likes1["votes_mails"],$mainuser_mail))
                {
                    if($_SERVER["QUERY_STRING"]=="user=anonomous")
                    $check="login1.php";
                    else
                    $check="dislike.php";
                    echo "<form style='display:inline;' action=$check method='POST'>
                    <button id='like-button' class='dislike' type='submit' onclick='refresh_like()'><i class='fa fa-thumbs-up' aria-hidden='true'></i></button>
                    <input type='hidden' name='dislikedby' value='$mainuser_mail'>
                    <input type='hidden' name='disliked_ans' value='$ans_id'>
                    </form>&nbsp;";
                    $count_likes="SELECT * from answer where ans_id='$ans_id' ";
                    $count=$con->query($count_likes);
                    $votes=$count->fetch_assoc();
                    echo "<span>&nbsp;".$votes['votes']."&nbsp;</span>";
                    /* <form style='display:inline;' id='votes_active_form' action='vote_active.php' method='POST'>
                    <input type='hidden' name='ans_id' value='$ans_id'>
                    <button type='submit' class='votes_link' onclick='toggle_options(document.getElementById(\"view_votes$ans_id\"))'><i class='fa fa-ellipsis-v' aria-hidden='true'></i></button>
                    </form>"; */
                    /* $voted_by="SELECT * from answer where vote_active=1";
                    $voted_by1=$con->query($voted_by);
                    $voted_by2=$voted_by1->fetch_assoc(); */
                    echo "<div id='lightt$ans_id' class='white_content1'>
                    <span class='close_button_transform 'onclick='toggle22(document.getElementById(\"lightt$ans_id\"),document.getElementById(\"fadet$ans_id\"))' id='close_but'><i class='fa fa-times' aria-hidden='true'></i></span>
                    <h2 style='display:inline;'>Liked by</h2><span class='view_votes_no'>&nbsp;&nbsp;&nbsp;(&nbsp;".$votes['votes']."&nbsp;)</span>
                    <hr>
                    ";
                    $voted_mails=$votes['votes_mails'];

                    $voted_mails1=str_replace(',',"</span><br><span id='user_tab1' class='user_div'><i class='fa fa-user' aria-hidden='true'></i>&nbsp;",$voted_mails);
                        echo "<h3 style='color:rgb(13, 118, 217);'>$voted_mails1</h3></span><br>";
                    
                echo "</div>
                <div id='fadet$ans_id' class='black_overlay'></div>
                    <div class='vote_options'>
                    <a class='votes_link' id='view_votes$ans_id'  onclick='toggle12(document.getElementById(\"lightt$ans_id\"),document.getElementById(\"fadet$ans_id\"))'>view votes</a>&nbsp;&nbsp;&nbsp;
                    <span class='more_dropdown'>
                    <a class='more_button'><i class='fa fa-ellipsis-h' aria-hidden='true'></i></a>
                    <span class='drop_report'>
                    <a ><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>&nbsp;&nbsp;Report</a>
                    </span>
                    </span>
                    </div>
                    ";


                }
                else
                {
                    if($_SERVER["QUERY_STRING"]=="user=anonomous")
                    $check="login1.php";
                    else
                    $check="like.php";
                    echo "<form style='display:inline;' action=$check method='POST'>
                    <button id='like-button' type='submit' onclick='refresh_like()'><i class='fa fa-thumbs-o-up' aria-hidden='true'></i></button>
                    <input type='hidden' name='likedby' value='$mainuser_mail'>
                    <input type='hidden' name='liked_ans' value='$ans_id'>
                    </form>&nbsp;";
                    $count_likes="SELECT * from answer where ans_id='$ans_id' ";
                    $count=$con->query($count_likes);
                    $votes=$count->fetch_assoc();
                     echo "<span>&nbsp;".$votes['votes']."&nbsp;</span>";
                    /* <form style='display:inline;' id='votes_active_form' action='vote_active.php' method='POST'>
                    <input type='hidden' name='ans_id' value='$ans_id'>
                    <button type='submit' class='votes_link' onclick='toggle_options(document.getElementById(\"view_votes$ans_id\"))'><i class='fa fa-ellipsis-v' aria-hidden='true'></i></button>
                    </form>"; */
                    /* $voted_by="SELECT * from answer where vote_active=1";
                    $voted_by1=$con->query($voted_by);
                    $voted_by2=$voted_by1->fetch_assoc(); */
                    echo "<div id='lightt$ans_id' class='white_content1'>
                    <span class='close_button_transform 'onclick='toggle22(document.getElementById(\"lightt$ans_id\"),document.getElementById(\"fadet$ans_id\"))' id='close_but'><i class='fa fa-times' aria-hidden='true'></i></span>
                    <h2 style='display:inline;'>Liked by</h2><span class='view_votes_no'>&nbsp;&nbsp;&nbsp;(&nbsp;".$votes['votes']."&nbsp;)</span>
                    <hr>
                    ";
                    $voted_mails=$votes['votes_mails'];

                    $voted_mails1=str_replace(',',"</span><br><span id='user_tab1' class='user_div'><i class='fa fa-user' aria-hidden='true'></i>&nbsp;",$voted_mails);
                        echo "<h3 style='color:rgb(13, 118, 217);'>$voted_mails1</h3><br>";
                    
                echo "</div>
                <div id='fadet$ans_id' class='black_overlay'></div>
                    <div class='vote_options'>
                    <a class='votes_link' id='view_votes$ans_id' onclick='toggle12(document.getElementById(\"lightt$ans_id\"),document.getElementById(\"fadet$ans_id\"))'>view votes</a>&nbsp;&nbsp;&nbsp;
                    <span class='more_dropdown'>
                    <a class='more_button'><i class='fa fa-ellipsis-h' aria-hidden='true'></i></a>
                    <span class='drop_report'>
                    <form action='report.php' method='POST'>
                    <button><a ><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>&nbsp;&nbsp;Report</a></button>
                    <input type='hidden' name='ans_id' value='$ans_id'>
                    </form>
                    </span>
                    </span>
                    </div>
                    ";
                } 
                echo "</div><br>";
            }
            $que_tag=str_replace(",","&nbsp;&nbsp;&nbsp;#",$row["tags"]);
            echo "<div><search>#".$que_tag."GPREC</search></div>";
            echo "</div>";
}
                //<div id="test">Not changed</div>
        ?>
            <div id="about">Hi Since 2012</div>
            </div>
        
        <div id='nav-content5'>
        <iframe width="100%" height="100%" frameborder="0" style='width:100%;height:90vh;' class='user_details_iframe' src=user_profile.php name='user_iframe'></iframe>
        </div>
        
    
        <div id="nav-content2">
<?php
function users_logic(){
   // echo '<meta http-equiv="refresh">';
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
    //$ema=
    $select = "select * from register";
    $stm=$con->query($select);
    $user_email="SELECT email from register order by login_time desc";
    $res1=$con->query($user_email);
    $row=$res1->fetch_assoc();
    $mainuser_mail=$row['email'];
    if($stm->num_rows<1)
    {
        echo "No users found";
    }
    else
    {
        while($row=$stm->fetch_assoc())
    {
    $user_mail = $row["email"];
    echo "<div style='display:inline;' id='user_tab' class='user_div'>
    <form style='display:inline;' id='user_form' action='user_profile.php' method='POST' target='user_iframe'>
    <input type='hidden' name='var_name' value='$user_mail'>
    <input type='hidden' name='var_name_main' value='$mainuser_mail'>
    <h3 style='display:inline;' id='users_nav'><button id='user_button' onclick='user_profile_nav()'><i id='user_image' class='fa fa-user' aria-hidden='true'>&nbsp;<span class='nav_font'>".$row["first"]."&nbsp;".$row["last"]."</span></i></button>
    <button id='user_pbutton' class='button-post' onclick='user_profile_nav()'>view profile</button></h3>
    <br>
    ".$row["email"]."<!--<hr>-->
    </form></div>
    ";
    /* echo "<div id='light3' class='white_content'>
    <span onclick='toggle23()' id='close_but' class='close_button_transform'><i class='fa fa-times' aria-hidden='true'></i></span>
    <h2><iframe class='user_details_iframe' src=user_profile.php name='user_iframe'></iframe></h2>
    </div>
    <div id='fade3' class='black_overlay'></div>"; */
    }
    }
}
//$con->close();
}
users_logic();
/*while(true){
    logic();
    sleep(5);
} */
?>
        </div>
        <div id="nav-right"><h1></h1>
        <details>
        <summary>
        <a class="nav1">&nbsp;&nbsp;<i class="fa fa-tags" aria-hidden="true">&nbsp;&nbsp;<span class='nav_font'>Tags</span></i></a><br><br>
        </summary>
        <?php
        $tag_array=array("CSE","ECE","EEE","ME","CIV","CSE-RELATED","EVENTS","SPORTS","ACADEMICS","FEE","PLACEMENTS","COLLEGE");
        $temp=0;
        echo "<div class=''>";
        while($temp<count($tag_array))
        {
        $var_tag="SELECT count(*) as count from question where tags like '%$tag_array[$temp]%'";
        $var_tag1=$con->query($var_tag);
        $var_tag2=$var_tag1->fetch_assoc();
        echo "<span style='cursor:pointer;color:white;'class='nav_font' onclick='search_by_tag(\"$tag_array[$temp]\")'>$tag_array[$temp]&nbsp;(".$var_tag2["count"].")</span><br><br>";
        $temp++;
        }
        ?>
        </div>
        </details>
        </div>
    </div>
    <script id='refreshrate'>
      //  home();
    </script>
    <script> 
        var x = document.getElementById("nav");
        var y = document.getElementById("nav-content1");
        var z = document.getElementById("nav-content2");
        var i = document.getElementById("nav-content3");
        var nav5=document.getElementById("nav-content5");
        var mybutton = document.getElementById("top_button");
        var unknown = document.getElementById("anonomous");
        unknown.style.display="none";
        z.style.display = "none";
        nav5.style.display="none";
        function navfunction() {
            //window.loaction=window.location.href;
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function home(){
           // window.location.reload();
            z.style.display = "none";
            nav5.style.display="none";
            i.style.display = "block";
        }

        function userslist() {
            i.style.display = "none";
            nav5.style.display="none";
            z.style.display = "block";
        }

        function user_profile_nav(){
            i.style.display="none";
            z.style.display="none";
            nav5.style.display="block";
        }

        function toggle1(){
            document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
            //console.log(que);
            //document.getElementById("qno_hidden").value=que;
        }

        function toggle2(){
            document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none';
        }

        function toggle11(){
            document.getElementById('light1').style.display='block';document.getElementById('fade1').style.display='block';
        }

        function toggle21(){
            document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none';
        }

        function toggle12(light2,fade2){
            console.log(light2);
            light2.style.display='block';fade2.style.display='block';
        }

        function toggle22(light2,fade2){
            light2.style.display='none';fade2.style.display='none';
        }

        function form_submit(){
            document.getElementById('user_form').submit();
        }

        function toggle_options(opt){
            if(opt.style.display=="none"){
                opt.style.display="inline";
            }
            else{
                opt.style.display="none";
            }
        }

        function refresh(){
            window.location.reload();
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
           // window.scrollTo(0,0);
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        function search_function() {
        var input, filter, ul, li, a, i, j, k=0, l, txtValue;
        input = document.getElementById("search_bar");
        filter = input.value.toUpperCase();
        const txt_array=filter.split(" ");
        // console.log(txt_array);
        ul = document.getElementById("nav-content3");
        li = ul.getElementsByClassName("ans_div");
        // console.log(li);
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("search");
            k=0;
            for(j=0;j<a.length;j++)
            {
            txtValue = a[j].textContent || a[j].innerText;
            // console.log(txtValue);
            for(l=0;l<txt_array.length;l++)
            {
            if (txtValue.toUpperCase().indexOf(txt_array[l]) > -1) {
                k++;
            }
            }
            }
            if(k>0)
            {
                li[i].style.display="";
            }
            else
            {
                li[i].style.display="none";
            }
        }
        document.getElementById("home-button").click();
        }

        function search_by_tag(tag_name)
        {
            var search_tab=document.getElementById("search_bar");
            // console.log(search_tab);
            tag_name="#"+tag_name;
            search_tab.value=tag_name;
            document.getElementById("search_submit").click();
            document.getElementById("home-button").click();
        }

        if((window.location.href)==="http://localhost/major_project/page.php?user=anonomous")
        {
            var hide=document.getElementsByClassName("details");
            for(let i=0;i<hide.length;i++)
            hide[i].style.display="none";
            unknown.style.display="block";
        }
        console.log(new URLSearchParams(window.location.search));
       /* if (new URLSearchParams(window.location.search).get('call') != null)
        {
            
           // document.getElementById("search_submit").click();
           // document.getElementById("home-button").click();
        } */

    </script>
    <script type="text/javascript" src=page2.js></script>
</body>

</html>