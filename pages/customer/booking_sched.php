<?php 
session_start();
$title = "Booking Configuration"; 
include '../../includes/header.inc.php'; ?>

<section id="book-configuration">

    <div class="container">
       
        <div class="booking-body">

                <?php
                    include '../../includes/functions.inc.php';
                    $movieSelected = $_GET['book'];
                            $sql = "SELECT * FROM movie_list WHERE movie_name = '$movieSelected'";

                            $stmt = $conn->query($sql);
                            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($movies) {
                                foreach ($movies as $movie) {   
                                    $i=0;         
            ?>
            <div class="movie_user_selected">
                <img src="../../assets/posters/<?php echo $movie['movie_img_path']?>" alt="">
                <div class="movie_title">
                    <p>
                        <?php echo $movie['movie_name'] ?>
                    </p>
                </div>
            </div>
            

            <div class="cinema_type_availables">
            <?php
                    include '../../includes/functions.inc.php';
                            $sql = "SELECT * FROM theaters";

                            $stmt = $conn->query($sql);
                            $theaters = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($theaters) {
                                foreach ($theaters as $theater) {   
                                    $i=0;         
            ?>
                <div class="cinema_type-item" onclick="window.location.href='seat_booking.php?movieselected=<?php echo $movie['movie_name']?>&theater=<?php echo $theater['theater_name']?>'">
                    <p><?php echo $theater['theater_name']?></p>
                </div>
            <?php   
            }      
            }else{
            echo "No Data found!";
            }
            ?>
            </div>




            <?php   
            }      
            }else{
            echo "No Data found!";
            }
            ?>
        </div>
    </div>
</section>


<?php include '../../includes/footer.inc.php'; ?>