<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myD";

//create connection 

$conn =new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection falid" .$conn->connect_error);
}
else{
   echo "connected successfully";
}

//create Database 
/*
$bit = "CREATE DATABASE myD";
if ($conn->query($bit)===TRUE){
    echo "DataBase Created Successfully";

}
else{
    echo"Error creating DataBase!";
}
*/
/*
$mega ="CREATE TABLE userss (
id INT (11) AUTO_INCREMENT PRIMARY KEY ,
username VARCHAR (50),
email VARCHAR (50),
password VARCHAR(50)
)";

if ($conn->query($mega)===TRUE){
    echo "Table users Created Successfully";

}
else{
    echo"Error creating Table!";
}
*/

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$hashed_password=password_hash($password,PASSWORD_BCRYPT);

    $bit = "INSERT INTO userss (username,email,password)
                    VALUES  ('$username','$email','$hashed_password')";
if ($conn->query($bit)===TRUE){
    echo "New Record Created Successfully";

}
else{
    echo"Error !";
}
?>