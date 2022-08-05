<?php 
session_start();
$title = "Dashboard"; 
include '../../includes/header.inc.php'; ?>

<div class="main">
<?php 
include '../../includes/functions.inc.php';
include '../../includes/sidebar.inc.php';?>
    <div class="main_content">
        <div class="main_content-header">
            <h1>Dashboard</h1>
        </div>
        <div class="main_content-body">
            <div class="main_content-cards">
                <div class="card">
                    <div class="card_content">
                        <div class="card_content-header">
                            <p>Movies</p>
                            <a href="../admin/view_movies.php">View</a>
                        </div>
                        <div class="card_content-body">
                            <span class="material-symbols-outlined">movie_filter</span>
                            <p>
                                <?php
                                     $nRows = $conn->query('select count(*) from movie_list')->fetchColumn(); 
                                     echo $nRows;   
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card_content">
                        <div class="card_content-header">
                            <p>Accounts</p>
                            <a href="../admin/view_accounts.php">View</a>
                        </div>
                        <div class="card_content-body">
                            <span class="material-symbols-outlined">person</span>
                            <p>
                            <?php
                                     $nRows = $conn->query('select count(*) from users WHERE role_id=1')->fetchColumn(); 
                                     echo $nRows;   
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card_content">
                        <div class="card_content-header">
                            <p>Reports</p>
                            <a href="../admin/requests.php">View</a>
                        </div>
                        <div class="card_content-body">
                            <span class="material-symbols-outlined">pest_control</span>
                            <p>3</p>
                        </div>
                    </div>
                </div>       
            </div>
            <div class="main_content-logs">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Movie Booked</th>
                            <th>Ticket Qty</th>
                            <th>Date Booked</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3</td>
                            <td>Nick</td>
                            <td>Bruce</td>
                            <td>GOYO: Ang Batang Heneral</td>
                            <td>3</td>
                            <td>05/22/2022 - 9:46AM</td>
                            <td>
                            <button class="btn btn-edit">
                                <span class="material-symbols-outlined">edit</span>
                                </button>

                                <button class="btn btn-mark">
                                <span class="material-symbols-outlined">grade</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
<?php include '../../includes/footer.inc.php'; ?>