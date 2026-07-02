<?php
    $host = "localhost";
    $db = "ZielonaPracownia";
    $pass = "";
    $user = "root";
    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error)
        die("Database connection failed");
?>