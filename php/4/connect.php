<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db4";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
} else {
    echo "Connection suscessfully";
}
