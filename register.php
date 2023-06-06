<!DOCTYPE html>
<html lang="en">

<head>
    <metadata charset="UTF-8">
        <title> Quora </title>
        <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <div class="heading">Quora</div>
    <div class="square">
        <form action="insert.php" method="POST">
            <label for="first">First Name:</label>
            <input name="first" id="first" type="text" placeholder="Bharat" required><br>
            <label for="last">Last Name:</label>
            <input name="last" id="last" type="text" placeholder="Dhaipule" required>

            <br>
            <label>Gender:</label>
            <input name="gender" id="male" type="radio" value="male">
            <label for="male">Male</label>
            <input name="gender" id="female" type="radio" value="female">
            <label for="female">Female</label>
            <input name="gender" id="other" type="radio" value="other">
            <label for="other">Other</label>

            <br>
            <label>Email:   
<input name="email" type="email" id="mail" placeholder="bharat@gmail.com"required>
</label><br>
            <div id="er">

            </div>
            <label>Password:
<input name="password" type="password" id="pass" pattern=".{8,12}" required title="Password must be 8-12 characters">
</label>
            <div id="tnc">
                <label>I agree to the terms and conditions
<input name="declaration" type="checkbox" required>
</label>
            </div>
            <input type="submit" class="sub">
        </form>
        <br>

        <div id="ff">
            Already registered.
            <a href="login1.php"> <button class="login">Login</button></a>
        </div>
    </div>
    <script type="text/javascript" src=page1.js></script>
</body>

</html>