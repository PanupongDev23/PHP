<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    // Creare Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn)  {
        die("Connection dailed" . mysqli_connect_errno());
    } else {
        echo "Connected successfully";
    }
?>