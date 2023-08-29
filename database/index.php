<?php 

    $database_name = "imovie";
    $database_host = "localhost";
    $database_user = "root";
    $database_password = ""; 
    
    $connection = new PDO("mysql:dbname=". $database_name . ";host=". $database_host, $database_user, $database_password );

    //enabling errors
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>