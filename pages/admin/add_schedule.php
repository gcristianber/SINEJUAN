<?php 
session_start();
$title = "Add Schedule"; 
include '../../includes/header.inc.php'; ?>


<div class="cinema_monitoring">
<?php include '../../includes/sidebar.inc.php';?>
    <div class="cinema_monitoring_content">
        <div class="cinema_monitoring-header">
            <h1>Add Schedule</h1>
        </div>
        <div class="scheduling_body">
            <div class="form-field">
                <label for="movie_selection">Select Movie</label>
                <select name="movie_selection" id="movie_selection">
                    <option value=""></option>
                    <option value="">Deadpool</option>
                    <option value="">Deadpool</option>
                </select>
            </div>

                                  
        </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.inc.php'; ?>