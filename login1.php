<!DOCTYPE html>
<html lang="en">

<head>
    <metadata charset="UTF-8">
        <title> Quora </title>
        <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <div class="heading">Quora</div>
    <div id="square">
        <form action="login.php" method="POST">

            <div class="epass">
            <span id="admintext" style="margin-left:40%;">Admin<br><br></span>
                <label>Email:  
<input class="log_mail" name="email" type="email" id="mail" onKeyUp="admin()" placeholder="bharat@gmail.com"required>
</label><br>
                <label>Password:
<input name="password" type="password" id="pass" pattern=".{8,12}" required title="Password must be 8-12 characters">
</div>
<br>
<input type="submit" class="sub" name="login">
</form>
<br>
<div id="ff">
<a href="password_recovery.php" style="text-decoration:none">Forgot password ?</a><br><br>
Didn't register. <a href="register.php"> <button class="login">Resgister here</button></a>
</div>
</div>
<script type="text/javascript" src=page1.js></script>
<script>
    var admintext=document.getElementById("admintext");
    admintext.style.display="none";
    function admin(){
    var admin=document.getElementById("mail").value;
    console.log(admin,typeof(admin));
    if(admin==="bharat.dhaipule@gmail.com")
    {
        console.log("Yes");
        admintext.style.display="block";
    }
    }
</script>
</body>
</html>