<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db3";


    //Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    } else {
        echo "Connect suscessfully";
    }
?>