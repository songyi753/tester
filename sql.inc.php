<?php
    $conn = new mysqli('127.0.0.1', 'root','','hello');// Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>