<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="images/Delhivery_Logo_Dark.c267e3f.png" alt="" width="20%" class="dark-logo">
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn-box"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="images/fb.png" alt="" class="social-icon1">
                <img src="images/tw.png" alt="" class="social-icon1">
                <img src="images/gp.png" alt="" class="social-icon1">
            </div>


            <form id="Login" action="login.php" method="post" class="input-group">
                <label for="email"></label>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
                <label for="password"></label>
                <input type="password" name="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span class="rember">Remember Password</span>
                <button type="submit" class="submit-btn" name="login_btn">Log In</button>
            </form>


            <form id="Register" class="input-group" action="Register.php" method="post">
                <label for="username"></label>
                <input type="text" name="username" class="input-field" placeholder="Username" required>
                <label for="email"></label>
                <input type="email" name="email" class="input-field" placeholder="Email ID" required>
                <label for="password"></label>
                <input type="password" name="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box" required><span class="rember">I agree to the terms and
                    conditions</span>
                <button type="submit" class="submit-btn" value="Register"> Create Account</button>
            </form>


        </div>
    </div>

    <script>
        var x = document.getElementById("Login");
        var y = document.getElementById("Register");
        var z = document.getElementById("btn-box");
        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }

    </script>
</body>

</html>