<?php 
session_start();
$title = "Seat Configuration"; 
include '../../includes/functions.inc.php';
include '../../includes/header.inc.php'; ?>

<section id="seat-configuration">

    <div class="container">
       
        <div class="seat-body">
        <?php
        // echo $_GET['theater'];
        $movieSelected = $_GET['movieselected'];
        $theaterSelected = $_GET['theater'];
                    include '../../includes/functions.inc.php';
                            $sql = "SELECT * FROM movies WHERE movie_id = (SELECT movie_id FROM movies WHERE movie_name = '$movieSelected')";

                            $stmt = $conn->query($sql);
                            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($movies) {
                                foreach ($movies as $movie) {   
                                    $i=0;         
                            ?>
            <img src="../../assets/posters/<?php echo $movie['movie_img_path']?>">
            <?php   
                                }      
                            }else{
                                echo "No Data found!";
                            }
                        ?>
                <div class="setup-seat">
                    <div class="setup-seat-header">
                        <p>Select your Seat</p>
                        <span class="material-symbols-outlined">help</span>
                    </div>
                    <div class="setup-seat-content">
                        <div class="screen"></div>
                        <p>Screen</p>
               
                        <form action="payment.php?movieselected=<?php echo $movieSelected?>&theater=<?php echo $theaterSelected?>" method="POST">
                        <div class="seat-group">
                       
                        <?php
                            
                            $sql = "SELECT * FROM seats_reservation WHERE movie_id = (SELECT movie_id FROM movies WHERE movie_name = '$movieSelected ') AND theater_id = (SELECT theater_id FROM theaters WHERE theater_name = '$theaterSelected')";

                            $stmt = $conn->query($sql);
                            $seats = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($seats) {
                                foreach ($seats as $seat) {   
                                    $i=0;         
                            ?>
                                <div class="seat-item <?php if($seat['status']==1){echo "taken"; }?>">
                                    <input type="checkbox" value='<?php echo $seat['seat_id']; ?>' id='<?php echo $seat['seat_id']; ?>' name="seat[]" id='<?php echo $seat['seat_id']; ?>'>
                                    <label for='<?php echo $seat['seat_id'];?>'>
                                    <span class="material-symbols-outlined">weekend</span>
                                    </label>
                                </div>
                                
                            <?php   
                                }      
                            }else{
                                echo $movieSelected." has no schedule yet";
                            }
                        ?>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
        </div>
        <div class="ticket_cost">
            <p>Total:</p>
            <div>
            <span>P</span>
            <p id="total">0</p>
            </div>
        </div>
        <p class="seat_notice">Maximum of 5 seats only!</p>
        <div class="seat-footer">
            <button type="submit" class="proceed" name="submit">Confirm</button>   
        </div>
        </form>
    </div>
</section>




<?php include '../../includes/footer.inc.php'; ?>