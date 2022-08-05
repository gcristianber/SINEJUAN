<?php 
session_start();
$title = "Cinema Monitoring"; 
include '../../includes/header.inc.php'; ?>


<div class="cinema_monitoring">
<?php include '../../includes/sidebar.inc.php';?>
    <div class="cinema_monitoring_content">
        <div class="cinema_monitoring-header">
            <h1>Tracking Cinema</h1>
        </div>
        <div class="cinema_monitoring-body">
            <div class="cinema_monitoring-searchbar"> 
                <input type="text" placeholder="Search Location...">
                <span class="material-symbols-outlined icon">search</span>
            </div>
            <div class="cinema_monitoring-search-result">
                <p>SM Fairview</p>
            </div>

            <div class="cinema_monitoring-search-result-cards">
                <div class="search_result-card">
                    <span class="material-symbols-outlined">chair</span>
                    <p>Cinema One</p>
                </div>
                <div class="search_result-card">
                    <span class="material-symbols-outlined">chair</span>
                    <p>Cinema Two</p>
                </div>
            </div>                      
           </div>
        </div>
    </div>
</div>

<?php include '../../includes/footer.inc.php'; ?>