<?php 
include '../includes/functions.inc.php';
if(isset($_POST['upload_movie']) && isset($_FILES['poster_upload']) && isset($_POST['movie_title']) && isset($_POST['movie_summary'])){
    
    echo "<pre>";
    print_r($_FILES['poster_upload']);
    echo "</pre>";

    $movie_title = $_POST['movie_title'];
    $movie_summary = $_POST['movie_summary'];
    $genres = $_POST['genre-type'];
    $img_name = $_FILES['poster_upload']['name'];
    $img_size = $_FILES['poster_upload']['size'];
    $tmp_name = $_FILES['poster_upload']['tmp_name'];
    $error = $_FILES['poster_upload']['error'];

    if($error ===0){
        if($img_size > 10000000){
            $em = "File is too large";
            echo $em;   
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");

            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("POSTER-",true).'.'.$img_ex_lc;
                $img_upload_path = '../assets/posters/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);
                // Upload to the database
    
                $sql1 = "INSERT INTO movies ( movie_name, movie_summary, movie_img_path)
                VALUES ('$movie_title','$movie_summary','$new_img_name');";
                $conn->exec($sql1);

                foreach ($genres as $key => $value) {
                    $sql2 = "INSERT INTO movie_genres (movie_id, genre_id) VALUES ((SELECT movie_id FROM movies WHERE movie_name = '$movie_title'), '$genres[$key]');";
                    $conn->exec($sql2);
                }
                
                
                // $sql = "INSERT INTO movie_genres ( movie_name, movie_summary)
                // VALUES ('$movie_title','$movie_summary');";

                header("location: ../pages/admin/view_movies.php?upload=success");
            }else{
                header("location: ../pages/admin/view_movies.php?upload=failed");
            }
        }

    }else{
        header("location: ../pages/admin/view_movies.php?upload=failed");
    }

}
else{
    echo "Error!";
}