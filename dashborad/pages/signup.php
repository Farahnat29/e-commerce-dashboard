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

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$hashed_password=password_hash($password,PASSWORD_BCRYPT);
$users="INSERT INTO users(username,email,password)VALUES ('$username','$email','$hashed_password')";

if($conn->query($users)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}


?>
