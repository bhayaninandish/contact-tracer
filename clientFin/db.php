<?php

$conn = new mysqli("project.ctx5wywze0yi.us-east-1.rds.amazonaws.com","admin","admin123","project");

if($conn->connect_error){
    die('Database error'. $conn->connect_error);
}
?>