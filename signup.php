<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/signup.css">
    <link rel="shortcut icon" href="assets/Logos/sinejuan_logo.svg" type="image/x-icon">
</head><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>
<body>

<section id="registration">
    <div class="container">
        <div class="login-form">
            <div class="form-header">
                <img src="assets/logos/logo.svg" alt="">
                <p>Create your Account</p>
            </div>
            <form action="includes/signup.inc.php" method="POST" enctype="multipart/form-data">
                <div class="profile-image">
                    <img src="assets/avatars/dummy_profile.jpg" alt="">
                    <div class="add-profile-img">
                        <label for="add-avatar">
                            <span class="material-symbols-outlined">add_photo_alternate</span>
                        </label>
                        <input type="file" name="add-avatar" id="add-avatar">
                    </div>
                </div>
                <div class="text-field">
                    <input type="text" class="fname" placeholder="Enter your First Name" name="fname">
                </div>
                <div class="text-field">
                    <input type="text" class="lname" placeholder="Enter your Last Name" name="lname">
                </div>
                <div class="text-field">
                    <input type="text" class="uid" placeholder="Enter your Username" name="uid">
                </div>
                <div class="text-field">
                    <input type="text" class="email" placeholder="Enter your Email" name="email">
                </div>
                <div class="text-field">
                    <input type="password" class="pwd" placeholder="Enter your Password" name="pwd">
                    <span class="material-symbols-outlined visibility">visibility</span>
                    <span class="material-symbols-outlined visibility_off">visibility_off</span>
                </div>
                <div class="form-actions">
                    <div class="agree-conditions">
                        <input type="checkbox" name="agree">
                        <p>I Agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>.</p>
                    </div>    
                </div>
                <button type="submit" name="signup" class="submit-btn">Sign Up</button>
            </form>
            <div class="account-login">
                <p>Already have an account? <a href="index.php">Sign In</a></p>
            </div>
        </div>
    </div>
</section>

<script src="dist/js/login.js"></script>
</body>
</html>