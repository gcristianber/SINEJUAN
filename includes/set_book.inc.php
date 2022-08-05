<?php
session_start();
include '../includes/functions.inc.php';
if(isset($_POST['submit'])){
    $seats = $_POST['seat'];
    $movieselected = $_POST['movieselected'];
    $theater = $_POST['theater'];
    $uid = $_SESSION['uid'];

    // foreach($seats as $seat){
    //     echo $seat;
    // }


        foreach ($seats as $seat){
            $sql = "UPDATE seats_reservation SET user_id = (SELECT user_id FROM users WHERE user_uid = '$uid'), status = 1 WHERE seat_id = $seat AND movie_id = (SELECT movie_id FROM movies WHERE movie_name = '$movieselected') AND theater_id = (SELECT theater_id FROM theaters WHERE theater_name = '$theater')";
            $conn->exec($sql);
        }

        header("location: ../pages/customer/ticket_info.php?theater=$theater&movieselected=$movieselected");

}else{
    echo "error";
}


   


?>