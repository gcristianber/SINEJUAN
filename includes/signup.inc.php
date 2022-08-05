<?php
include '../includes/functions.inc.php';
if(isset($_POST['signup']) && isset($_POST['agree']) && isset($_FILES['add-avatar'])){

    $avatar = $_FILES['add-avatar'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    echo "<pre>";
    print_r($_FILES['add-avatar']);
    echo "</pre>";

    $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);

    $img_name = $_FILES['add-avatar']['name'];
    $img_size = $_FILES['add-avatar']['size'];
    $tmp_name = $_FILES['add-avatar']['tmp_name'];
    $error = $_FILES['add-avatar']['error'];


    if($error ===0){
        if($img_size > 100000000){
            $em = "File is too large";
            echo $em;   
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");

            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("AVATAR-",true).'.'.$img_ex_lc;
                $img_upload_path = '../assets/avatars/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);

                // Upload to the database
    
                $sql = "INSERT INTO users ( user_fname, user_lname, user_email, user_uid, user_pwd, avatar_img_path)
                VALUES ('$fname','$lname','$email','$uid','$pwdHashed','$new_img_name' );";
                $conn->exec($sql);
                echo "Registered Successful!";
                header("location: ../index.php");
            }else{
                echo "Registered Not Successful!";
            }
        }
    }
}else{
    echo "not set!";
}