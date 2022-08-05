<?php 
session_start();
$title = "Movies"; 
include '../../includes/functions.inc.php';
include '../../includes/header.inc.php'; ?>


<div class="view_movies">
<?php include '../../includes/sidebar.inc.php';?>

    <div class="view_movies_content">
        <div class="view_movies_content-header">
            <h1>Movies</h1>
            <div class="view_movies_content-header-actions">
                <div class="actions-btn">
                    <button class="add">
                        <span class="material-symbols-outlined">add</span>
                        <p>Add New</p>
                    </button>                  
                </div>
            </div>
        </div>
        <div class="view_movies_content-body">
            <div class="view_movies_content-list">
                
                <table>
                    <thead>
                        <tr>
                            <th>Poster</th>
                            <th>Movie Titles</th>
                            <th>Summary</th>
                            <th>Genres</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $sql = 'SELECT * FROM movie_list';

                            $stmt = $conn->query($sql);
                            $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if ($movies) {
                                foreach ($movies as $movie) {   
                                    $i=0;         
                            ?>
                            <tr>
                                <td>
                                    <img src="../../assets/posters/<?php echo $movie['movie_img_path'];?>" alt=""> 
                                </td>
                                <td>
                                    <?php echo $movie['movie_name'];?>
                                </td>
                                <td>
                                    <?php echo $movie['movie_summary'];?>
                                </td>
                                <td>
                                    <?php echo $movie['genres'];?>
                                </td>
                                <td>
                                    <button class="btn btn-config">
                                    <a href="../admin/movie_configuration.php?edit=<?php echo $movie['movie_name']?>">
                                        <span class="material-symbols-outlined">settings</span>
                                    </a>
                                    </button>                                
                                </td>
                            </tr>
                        <?php   
                                }      
                            }else{
                                echo "No Data found!";
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal-add">
    <span class="material-symbols-outlined close-btn">close</span>
    <div class="modal_body">
        <div class="modal_content_title">
            <p>Add new Movie</p>
        </div>
        <div class="modal_content_notice">
            <p>Please indicate proper movie title, description and their designated genres.</p>
        </div>
        <form action="../../includes/upload_poster.inc.php" method="POST" enctype="multipart/form-data">
            <div id="selectedPoster"></div>
            <div class="image_upload">
                <label for="img">
                    <span class="material-symbols-outlined">add_photo_alternate</span>
                    <p>Add Image</p>
                </label>
                <input type="file" id="img" name="poster_upload">
            </div>
            <div class="form_field">
                <input type="text" name="movie_title" placeholder="Title">
            </div>
            <div class="form_field">
                <textarea name="movie_summary" id="" cols="30" rows="10" placeholder="Give your movie a great summary..."></textarea>
            </div>
            <div class="genre_title header">Choose Genre Type</div>
            <div class="genre_category">
                <?php
                $sql = 'SELECT * FROM genres';

                 $stmt = $conn->query($sql);
                $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($genres) {
                foreach ($genres as $genre) {   
                    $i=1;         
                    ?>    
                    <div class="genre_item">      
                        <input type="checkbox" value='<?php echo $genre['genre_id']; ?>' id='<?php echo $genre['genre_name'];?>' name="genre-type[]" class="genre_item-type">
                        <label for='<?php echo $genre['genre_name'];?>'>
                        <?php echo $genre['genre_name'];?>
                        </label>
                    </div>
                <?php   
                                }      
                            }else{
                                echo "No Data found!";
                            }
                        ?>
            </div>         
            <div class="form_actions">
                <button type="submit" name="upload_movie">Upload</button>
            </div>
        </form>
    </div>
</div>

<?php include '../../includes/footer.inc.php'; ?>