<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db5";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("Connection Failed" . mysqli_connect_error());
    } else {
        echo "Connection suscessfully";
    }

?>