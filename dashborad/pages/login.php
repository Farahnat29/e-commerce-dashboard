<?php

$servername="localhost";
$username="root";
$password="";
$dbname="flutterdb";


$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection filed:".$conn->connect_error);
}
else{
    echo"connected successfully";
}



?>
