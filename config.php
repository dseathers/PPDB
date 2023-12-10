<?php
    $databaseHost = 'localhost';
    $databaseName = 'pepdb';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if(!$mysqli){
        die("koneksi ke database gagal". mysqli_connect_error());
    }
?>