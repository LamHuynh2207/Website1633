<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login And Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
    <!--------------------------login and register---------->
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" method="post" action="login&register.php" class="input-group">
                <input type="text" class="input-field" name="email" placeholder="Email" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span class="span">Remember Password</span>
                <input type="submit" name="login" class="submit-btn" value="Log In">
                <?php require 'config.php';?> 
            </form>
            <form id="register" method="post" action="login&register.php" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="UserName" required>
                <input type="email" class="input-field" name="email" placeholder="Email" required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
               
                <input type="submit" name="register" class="submit-btn" value="Register">
                <?php require 'config.php';?> 
            </form>
        </div>
    </div>  
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html>