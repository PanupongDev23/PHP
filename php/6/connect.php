<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db6";


//Create Connect
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connect Failed" . mysqli_connect_error());
}
