<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "system_db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set PDO Error mode to exception
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Conection success";
    } catch(PDOException $e ){
        echo "Conection failed " . $e->getMessage();
    }
