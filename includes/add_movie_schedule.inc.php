<?php
include '../includes/functions.inc.php';
if(isset($_POST['add-schedule']) && isset($_POST['theater']) && isset($_POST['movie_name']) ){


    $seat = $_POST['seat'];
    $theater = $_POST['theater'];
    $movie_name = $_POST['movie_name'];



    

    foreach ($seat as $key => $value) {

        foreach($theater as $key1 => $value){
        $sql1 = "INSERT INTO seats_reservation (movie_id, theater_id, seat_id)
        VALUES ((SELECT movie_id FROM movies WHERE movie_name = '$movie_name'), '$theater[$key1]', (SELECT seat_id FROM seats WHERE seat_id = '$seat[$key]'))";
        $conn->exec($sql1);

        }
    }
    echo "----------";

   

  
        // $sql1 = "UPDATE seats_reservation SET theater_id = $theater[$key]";
        // $conn->exec($sql1);
        


    header("location: ../pages/admin/view_movies.php?schedule=success");


}else{
    echo "Error";
}