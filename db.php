<?php
    $hostname = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "feiap_registrants";
    try {
        $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }
?>