<?php
    $databaseHost = 'localhost';
    $databaseName = 'pepdb';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    $conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>