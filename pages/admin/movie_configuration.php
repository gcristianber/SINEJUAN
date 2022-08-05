<?php 
session_start();
$title = "Movie Configuration"; 
include '../../includes/functions.inc.php';
include '../../includes/header.inc.php'; ?>


<div class="update_movies">
<?php include '../../includes/sidebar.inc.php';?>

    <div class="update_movies_content">
        <form action="../../includes/add_movie_schedule.inc.php" method="POST">
        <div class="view_movies_content-header">
            <h1>
                <a href="../admin/view_movies.php">Movies</a>
                <span class="material-symbols-outlined">chevron_right</span>
                Movie Scheduling</h1>
            <div class="update_movies_content-header-actions">
                <div class="actions-btn">
                    <button type="submit" class="add" name="add-schedule">
                        <span class="material-symbols-outlined">save</span>
                        <p>Save</p>
                    </button>                  
                </div>
            </div>
        </div>
        <?php
            $selectedMovie = $_GET['edit'];
            $sql = "SELECT * FROM movies WHERE movie_name = '$selectedMovie'";

            $stmt = $conn->query($sql);
            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($movies) {
            foreach ($movies as $movie) {   
            $i=0;         
        ?>
        <div class="update_movies_content-body">
            <div class="poster">
                <img src="../../assets/posters/<?php echo $movie['movie_img_path']?>" alt="">
            </div>
            <div class="movie_details">
                <div class="details_field title">
                    <label for="movie_title">Movie Title</label>
                    <input type="text" id="movie_title" value="<?php echo $movie['movie_name']?>" disabled>
                    <input type="hidden" value="<?php echo $movie['movie_name']?>" name="movie_name">
                </div>

            <div class="seat_config_title header">Configure Seats</div>
            <div class="seat_config">
            <?php
                $sql = 'SELECT * FROM seats';

                 $stmt = $conn->query($sql);
                $seats = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($seats) {
                foreach ($seats as $seat) {   
                    $i=1;         
            ?>
                <div class="seat_item">
                    <input type="checkbox" value="<?php echo $seat['seat_id']?>" name="seat[]" id="<?php  echo $seat['seat_id']?>" class="seat_config_item">
                    <label for="<?php  echo $seat['seat_id']?>"><?php echo $seat['seat_title']?></label>
                </div>
                <?php   
                 }      
                 }else{
                 echo "No Data found!";
                 }
                ?>
            </div>

            <div class="movie_time_title header">Set Theater Availability</div>
            <div class="movie_time">
            <?php
                $sql = 'SELECT * FROM theaters';

                 $stmt = $conn->query($sql);
                $theaters = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($theaters) {
                    
                foreach ($theaters as $theater) {   
                    $i=1;         
            ?>
                <div class="time_item">
                    <input type="checkbox" value="<?php echo $theater['theater_id']?>" name="theater[]" id="<?php echo $theater['theater_name']?>" class="movie_time_item">
                    <label for="<?php echo $theater['theater_name']?>">
                    <?php echo $theater['theater_name']?>
                    <?php echo $theater['theater_time']?>
                </label>
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
 </form>   
</div>
</div>


<?php include '../../includes/footer.inc.php'; ?>