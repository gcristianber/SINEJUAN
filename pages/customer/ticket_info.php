<?php 
session_start();
$title = "Movies"; 
include '../../includes/functions.inc.php';
include '../../includes/header.inc.php'; 
$movieselected = $_GET['movieselected'];
$theaterselected = $_GET['theater'];
$user_uid = $_SESSION['uid'];
?>



<section id="ticket_info">
<div class="container">

<div class="user_ticket">   
<div class="user_ticket_header">
    <img src="../../assets/logos/logo.svg" alt="">
</div>

<div class="movie_poster">
<?php
                $sql = "SELECT * FROM movie_list WHERE movie_name = '$movieselected'";

               $stmt = $conn->query($sql);
                $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
               if ($movies) {
               foreach ($movies as $movie) {   
                $i=0;         
            ?>
            <div class="card" onclick="location.href='booking_sched.php?book=<?php echo $movie['movie_name']?>'">
                <img src="../../assets/posters/<?php echo $movie['movie_img_path']; ?>" alt="" title="<?php echo $movie['movie_name']; ?>" onclick="window.location.href='booking_sched.php'">
            </div>
            <?php   
            }      
            }else{
            echo "No Data found!";
            }
            ?>
            <?php echo $movieselected; ?>
        
</div>

<div class="user_ticket_details">
<div>
        Customer Name
    <p>
        <?php echo $user_uid ?>
    </p>
</div>

<div>
        Date Issued
    <p>
        <?php echo date('Y-m-d'); ?>
    </p>
</div>
</div>

<div class="movie_ticket_details">
<div>
        Theater Type
    <p>
        <?php echo $theaterselected ?>
    </p>
</div>

<div>
        Ticket Qty
    <p>


    <?php
        $nRows = $conn->query("select count(seat_id) from seat_bookings WHERE movie_name = '$movieselected' AND user_uid = '$user_uid' AND theater_name = '$theaterselected'")->fetchColumn(); 
        echo $nRows;   
   ?>
    x
    <span class="material-symbols-outlined">weekend</span>
    </p>
</div>
</div>
<div class="seat_selections_title">
    Your Seats
</div>
<div class="seat_selections">

<?php 
    $sql = "SELECT * FROM seat_bookings WHERE movie_name = '$movieselected' AND theater_name = '$theaterselected' AND user_uid = '$user_uid' ";

    $stmt = $conn->query($sql);
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($movies) {
    foreach ($movies as $movie) {   
    $i=0;
    ?>
        <div>
        <?php   echo $movie['seat_id'];?>
        </div>
<?php
}      
}else{
    echo "No Data found!";
}


?>

</div>
<div class="ticket_download_btn">
    <button onclick="location.href='dashboard.php'">
        Download Ticket
        <span class="material-symbols-outlined">download</span>
    </button>
</div>
</div>
</section>

<?php include '../../includes/footer.inc.php'; ?>