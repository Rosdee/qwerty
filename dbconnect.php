<?php
    $servername ="localhost";
    $username ="zero__cool";
    $password ="";
    $dbname ="c9";
    
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
        die("connection Failed".$conn->connect_error);
        }
        
?>