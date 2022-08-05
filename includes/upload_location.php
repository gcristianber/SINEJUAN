<?php

include '../includes/functions.inc.php';

if(isset($_POST['upload_location']) && isset($_POST['building_name']) && isset($_POST['municipality'])){
   
    $building_name = $_POST['building_name'];
    $municipality = $_POST['municipality'];

    $sql = "INSERT INTO locations ( building_name, location_municipality)
                VALUES (' $building_name ','$municipality');";
    $conn->exec($sql);
    header("location: ../pages/admin/view_locations.php?upload=success");
}else{
    header("location: ../pages/admin/view_locations.php?upload=failed");
}