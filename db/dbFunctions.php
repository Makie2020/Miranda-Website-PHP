<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'miranda_db');

// Create connection
function getConnection() {
    $connnection = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if (!$connnection) {
        trigger_error ('Could not connect to MySQL: ' . mysqli_connect_error() );
    } else {
        return $connnection;
    }
}    
?>