<?php
$servername="localhost";
$username="root";
$passwrod="";
$dbname="mydata";


//create connection 
$conn = new mysqli($servername,$username,$passwrod,$dbname);

if($conn->connect_error){
    die ("connection falid" . $conn->connect_error);
}
else{
    echo "Connected successfully";
}
/*
$bit ="CREATE DATABASE mydata";
if ($conn->query($bit)===TRUE){
    echo "DataBase created Successfully";
}
else {
    "Error Creating DataBase";
}
    */

/*
$bit ="CREATE TABLE userd (
id INT (11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR (50),
email VARCHAR (50),
password VARCHAR (50)
)";
if ($conn->query($bit)===TRUE){
    echo "TABLE users  created Successfully";
}
else {
    "Error Creating table";
}
   */

/*
$bit ="CREATE TABLE  userss (
id INT (11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR (50),
email VARCHAR (50),
password VARCHAR (50)
)";
if ($conn->query($bit)===TRUE){
    echo "TABLE users  created Successfully";
}
else {
    "Error Creating table";
}
   
*/
$username=$_POST['username'];
$email=$_POST['email'];
$passwrod=$_POST['password'];
$hashed_password=password_hash($passwrod,PASSWORD_BCRYPT);


$mega="INSERT INTO users (username,email,password)
 VALUE ('$username','$email','$hashed_password') ";
if ($conn->query($mega)===TRUE){
    echo "New Record   created Successfully";
}
else {
    "Error";
}
?>