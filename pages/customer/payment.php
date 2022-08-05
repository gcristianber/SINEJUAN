<?php 
session_start();
$title = "Seat Configuration"; 
include '../../includes/functions.inc.php';
include '../../includes/header.inc.php'; ?>




<section id="payment-config">

<div class="container">

<?php
$seats = $_POST['seat'];
$theaterSelected = $_GET['theater'];
$movieSelected = $_GET['movieselected'];
?>

<div class="user_ticket">
    <div class="user_ticket_content">
        <div class="ticket_header">
            <img src="../../assets/logos/logo.svg" alt="">
            <div class="ticket_header_title">
                Ticket Summary
            </div>
            <div class="booking_header_information">
                <div class="movie_title">
                    <p>Movie Title</p>
                    <div>
                    <?php echo $movieSelected ?>
                    </div>
                </div>
                <div class="theater_type">
                    <p>Theater Type</p>
                    <div>
                    <?php echo $theaterSelected ?>
                    </div>
                </div>

                <div class="seat_qty">
                    <p>Qty</p>
                    <div>
                    <?php echo sizeof($seats) ?>
                    x
                    <span class="material-symbols-outlined">weekend</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ticket_body">
            <div class="ticket_body_header">
                <p>Seat No.</p>
                <p>Price</p>
            </div>
            <div class="user_seats">
            <?php 
            $price = 250;
            foreach($seats as $seat){
                ?>
            <div class="seat_item">
                <p>
                    Seat — <?php echo $seat?>
                </p>
             
                <p class="price">
                P
                <?php echo $price?>
                </p>      
            </div>
            <?php }?>
            </div>
            
            <div class="ticket_total">
                P
                <?php echo (sizeof($seats) * $price) ?> 
            </div>
        </div>
    </div>
</div>

<form action="../../includes/set_book.inc.php" method="POST">

    <div class="payment-choices">
        <div>
            <input type="checkbox" id="paypal" class="payment-choice-item">
            <label for="paypal">
                <img src="../../assets/Payment Method/PayMaya_Logo.png" alt="">
            </label>
        </div>
        <div>
            <input type="checkbox" id="paypal" class="payment-choice-item">
            <label for="paypal">
                <img src="../../assets/Payment Method/paypal-logo.png" alt="">
            </label>
        </div>
        <div>
            <input type="checkbox" id="paypal" class="payment-choice-item">
            <label for="paypal">
                <img src="../../assets/Payment Method/visa-logo.png" alt="">
            </label>
        </div>
        
    </div>

        <?php
        foreach($seats as $seat){
        
            ?>

        <input type="hidden" value="<?php echo $seat?>" name="seat[]">
        <input type="hidden" value="<?php echo $movieSelected?>" name="movieselected">
        <input type="hidden" value="<?php echo $theaterSelected?>" name="theater">
            <?php
        }
        ?>  

    <div class="payment-method">
        <div class="form-field">
            <label for="">Account Number</label>
            <input type="text">
        </div>
        <div class="form-field">
            <label for="">Card Holder Name</label>
            <input type="text">
        </div>
        <div class="card-expiry">
            <div>Card Expiry</div>
            <div class="card-expiry-content">
            <div class="form-field">
            <input type="date">
            </div>
            <div class="form-field">
            <input type="date">
            </div>
            </div> 
        </div>
        <div class="form-field">
            <label for="">CVN</label>
            <input type="text">
        </div>
    </div>

    <div class="payment-form-actions">
    <button type="submit" name="submit" class="confirm-payment">Confirm Payment</button>
    <a href="../../pages/customer/dashboard.php">Cancel</a>
    </div>
    
</form>

</div>
</section>



<?php include '../../includes/footer.inc.php'; ?>