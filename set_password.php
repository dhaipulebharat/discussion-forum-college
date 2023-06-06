<!DOCTYPE html>
<html lang="en">

<head>
    <metadata charset="UTF-8">
        <title> Quora </title>
        <link rel="stylesheet" type="text/css" href="login.css">
</head>
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
<body>
    <div class="heading">Quora</div>
    <div id="square">
        <form action="update_password.php" method="POST">

            <div class="epass">
            <label>Enter OTP:
<input name="otp" type="text" id="otp" required><br>
<button style="cursor:pointer;" onclick="sub()">Resend OTP</button>
<br><br>
<label>Password:
<input name="password" type="password" id="pass" pattern=".{8,12}" required title="Password must be 8-12 characters">
<br><br>
<label>Confirm<br>Password:
<input name="confirm" type="password" id="confirm" pattern=".{8,12}" required title="Password must be 8-12 characters">
</div>
<br>
<input type="submit" value="Set Password" class="sub">
</form>
<br>
</div>
<form id="resend_form" action="otp.php" method="POST">
<input name="email" type="hidden" value='<?php echo $mainuser_mail?>'>
</form>
<script type="text/javascript" src=page1.js></script>
<script>
    var resend = document.getElementById("resend_form");
    function sub(){
        resend.submit();
    }
</script>
</body>
</html>