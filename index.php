<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/login.css">
    <link rel="shortcut icon" href="assets/Logos/sinejuan_logo.svg" type="image/x-icon">
</head>
<body>

<section id="login">
    <!-- Alerts -->
    <div class="container">
        <div class="login-form">

            <div class="form-header">
                <img src="assets/logos/logo.svg" alt="">
                <p>Sign In your Account</p>
            </div>
            <!-- <form action="includes/login.inc.php" method="POST"> -->
            <form action="includes/login.inc.php" method="POST">
                <div class="text-field">
                    <input type="text" class="uid" placeholder="Enter your Username" name="uid">
                </div>
                <div class="text-field">
                    <input type="password" class="pwd" placeholder="Enter your Password" name="pwd">
                    <span class="material-symbols-outlined visibility">visibility</span>
                    <span class="material-symbols-outlined visibility_off">visibility_off</span>
                </div>
                <div class="form-actions">
                    <div class="remember-user">
                        <input type="checkbox" name="remember-user">
                        <p>Remember me</p>
                    </div>
                    <div class="remember-user">
                        <a href="">Forgot password</a>
                    </div>       
                </div>
                <button type="submit" name="login" class="submit-btn">Sign In</button>
            </form>
            <div class="account-create">
                <p>Don't have an account?</p><a href="signup.php">Sign Up</a>
            </div>
        </div>
    </div>
</section>

<script src="dist/js/login.js"></script>
</body>
</html>
