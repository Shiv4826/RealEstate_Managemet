<?php
    $servername = "localhost";
    $username = "root";
    $password = "Shivam@2000";
    $dbname = "realstate";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>