<?php
    $host = "localhost";
    $user= "root";
    $password = "";
    $db = "";

    // Create connection
    $conn = new mysqli($host, $user, $password, $db);
    
    // check connection
    if ($conn->connect_error){
        die("Connection Unsuccessful" .$conn->connect_error);
    }
    else{
        echo "Connection successful";
    }
?>