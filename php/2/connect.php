<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db2";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
} else {
    echo "Connection successfully"; 
}



?>