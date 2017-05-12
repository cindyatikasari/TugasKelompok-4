<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "5_in_1_delivery";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
?>
