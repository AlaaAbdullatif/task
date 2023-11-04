<?php

    $servername="localhost";
    $username = "root";
    $password="";
    $dbName = "csci390_project";
    
    
    try{
    $conn = mysqli_connect($servername, $username, $password, $dbName );

    // echo "connected to the database $dbName";
    echo "Your message has successfully received";

    }catch(Exception $e){
        die("connection failed".$e->getMessage());
    }


?>
