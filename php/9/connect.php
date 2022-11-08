<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db9";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check Connection
if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
