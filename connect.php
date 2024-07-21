<?php

$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db, 4306);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>