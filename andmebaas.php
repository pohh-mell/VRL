<?php

function database(){
    $host = "eu-cdbr-azure-north-c.cloudapp.net";
    $user = "bb8f29df6ad035";
    $pwd = "461b6fa7";
    $db = "ehaaletusdata";


mysql_set_charset('utf8', $db);
    // Create connection


$conn = new mysqli($host, $user, $pwd, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
return $conn;
}
?>
