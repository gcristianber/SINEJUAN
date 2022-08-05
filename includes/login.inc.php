<?php
session_start();
if(isset($_POST['login'])){
    include '../includes/functions.inc.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $stmt = $conn->query($sql);
    $users = $stmt->fetchAll();
    if (isset($users[0])) {
        if (password_verify($pwd, $users[0]['user_pwd'])) {

            $_SESSION['avatar'] = $users[0]['avatar_img_path'];
            $_SESSION['uid'] = $users[0]['user_uid'];
            $_SESSION['firstname'] = $users[0]['user_fname'];
            $_SESSION['lastname'] = $users[0]['user_lname'];
            $_SESSION['role'] = $users[0]['role_id'];

            
            if($_SESSION['role'] == 1){
                header("location: ../pages/customer/dashboard.php");
            }else if($_SESSION['role'] == 2){
                header("location: ../pages/admin/dashboard.php");
            }
            
            
        } else {
            header("location: ../index.php?error=login");
        }
    } else {
        header("location: ../index.php?error=login");
    }
}


