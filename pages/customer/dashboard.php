<?php 
session_start();
    $title = "Dashboard"; 
    include '../../includes/header.inc.php'; 
?>

<div class="movie-showcase">
    <div class="container">
        <div class="header">
            <div class="movie_dashboard-searchbar"> 
                <input type="text" placeholder="Search Movie...">
                <span class="material-symbols-outlined icon">search</span>
            </div> 
            <div class="dashboard-actions">
                <div class="dashboard-tabs">
                    <ul>
                    <?php
                    include '../../includes/functions.inc.php';
                            $sql = "SELECT * FROM genres";

                            $stmt = $conn->query($sql);
                            $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($genres) {
                                foreach ($genres as $genre) {   
                                    $i=0;         
                            ?>
                        <li>
                           
                            <a href="" class="">
                                <?php echo $genre['genre_name']; ?>
                            </a>
                        </li>
                        <?php   
                                }      
                            }else{
                                echo "No Data found!";
                            }
                        ?>
                    </ul>
                </div>
                <div class="filter">
                    <span class="material-symbols-outlined">filter_list</span>
                </div>
            </div>
        </div>
        <div class="dashboard-body">
            <?php
                    include '../../includes/functions.inc.php';
                $sql = "SELECT * FROM movie_list";

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
        </div>
    </div>
</div>

<?php include '../../includes/footer.inc.php'; ?>
            