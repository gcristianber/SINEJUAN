<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../dist/css/main.css">
    <link rel="stylesheet" href="../../dist/css/navbar.css">
    
    <link rel="stylesheet" href="../../dist/css/sidebar.admin.css">
    <link rel="stylesheet" href="../../dist/css/dashboard.admin.css">
    <link rel="stylesheet" href="../../dist/css/dashboard.customer.css">
    <link rel="stylesheet" href="../../dist/css/booking.customer.css">
    <link rel="stylesheet" href="../../dist/css/cinema_monitoring.admin.css">
    <link rel="stylesheet" href="../../dist/css/table.css">
    <link rel="stylesheet" href="../../dist/css/views.admin.css">
    <link rel="stylesheet" href="../../dist/css/seat_booking.css">
    <link rel="stylesheet" href="../../dist/css/booking_sched.css">
    <link rel="stylesheet" href="../../dist/css/booking_payment.css">
    <link rel="stylesheet" href="../../dist/css/add_schedule.css">
    <link rel="stylesheet" href="../../dist/css/payment.css">
    <link rel="stylesheet" href="../../dist/css/ticket_info.css">


    <link rel="shortcut icon" href="../../assets/logos/logo.svg" type="image/x-icon">
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="nav_content">
        <div class="nav_item nav_logo">
            <a href="">
                <img src="../../assets/logos/logo.svg" alt="">
            </a>   
        </div>
        <div class="nav_item">
            <ul>
                <li class="nav_item-actions">
                    <span class="material-symbols-outlined">notifications</span>
                </li>
                <li class="nav_item-avatar">
                    <img src="../../assets/avatars/<?php echo $_SESSION['avatar']?>" class="avatar">
                    <div class="nav_item-avatar-option">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="../../assets/avatars/<?php echo $_SESSION['avatar']?>" alt="">
                                </a>
                                <p>
                                    <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']?>
                        
                                </p>    
                            </li>
                            <li>
                                <a href="">
                                <span class="material-symbols-outlined">mail</span>
                                <p>Messages</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                <span class="material-symbols-outlined">dark_mode</span>
                                <p>Switch to Dark Mode</p>
                                <span class="material-symbols-outlined">chevron_right</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                <span class="material-symbols-outlined">settings</span>
                                <p>Settings</p>
                                </a>
                            </li>
                            <?php if($_SESSION['role'] == 2){?>
                            <li>
                                <a href="">
                                <span class="material-symbols-outlined">supervisor_account</span>
                                <p>Switch to Customer</p>
                                </a>
                            </li>
                                <?php }?>
                            <li>
                                <a href="../../includes/logout.inc.php">
                                <span class="material-symbols-outlined">logout</span>
                                <p>Sign Out Account</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>   
    </div>
</nav>